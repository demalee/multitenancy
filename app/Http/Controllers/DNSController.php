<?php

namespace App\Http\Controllers;

use App\Models\Website;
use App\Models\WebsiteUser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DNSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //
        $app_url = env('APP_URL');
//        $app_url = request()->root();
        if (Str::startsWith($app_url, 'http://'))
        {
            $domain = substr ($app_url, 7); // $domain is now 'www.example.com'
        }
        elseif (Str::startsWith($app_url,'https://'))
        {
            $domain = substr ($app_url, 8); // $domain is now 'www.example.com'
        }

        $web = WebsiteUser::where('user_id',auth()->id())->first();
        $website = \App\Models\Website::where('name',$domain)->first();
//        dd($website);
        return view('/dashboard/dns',compact('website'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $website = $this->website_details();
        $web_arr = explode('.',$website->name);
        $folder_name = $web_arr[0];
        $ip_address = "51.158.77.95";

        //generate website folders if they dont exist
        $out = shell_exec('./website_script.sh '.$folder_name);

        $output = exec('./ping_net.sh '.$website->name. ' '. $folder_name);

        if ($output != $ip_address)
        {
            return back()->with('error', 'Error occurred, pinging the website failed');
        }
        else
        {
            $output1 = shell_exec('./generate.sh '.$website->name. ' '. $folder_name);
            $this->website_details()->update([
                'status_active'=>1
            ]);

            $env_update = $this->changeEnv('/public/websites/'.$folder_name,[
                'APP_URL'   => 'http://'.$website->name,
            ]);

            return back()->with('success', "successfully pinged");
        }
    }

    protected function changeEnv($path, $data = array()){
        if(count($data) > 0){

            // Read .env-file
            $env = file_get_contents(base_path() . $path);

            // Split string on every " " and write into array
            $env = preg_split('/\s+/', $env);;

            // Loop through given data
            foreach((array)$data as $key => $value){

                // Loop through .env-data
                foreach($env as $env_key => $env_value){

                    // Turn the value into an array and stop after the first split
                    // So it's not possible to split e.g. the App-Key by accident
                    $entry = explode("=", $env_value, 2);

                    // Check, if new key fits the actual .env-key
                    if($entry[0] == $key){
                        // If yes, overwrite it with the new one
                        $env[$env_key] = $key . "=" . $value;
                    } else {
                        // If not, keep the old one
                        $env[$env_key] = $env_value;
                    }
                }
            }

            // Turn the array back to an String
            $env = implode("\n", $env);

            // And overwrite the .env with the new data
            file_put_contents(base_path() . '/.env', $env);

            return true;
        } else {
            return false;
        }
    }

    public function set_env(string $key, string $value, $env_path = null)
    {
        $value = preg_replace('/\s+/', '', $value); //replace special ch
        $key = strtoupper($key); //force upper for security
        $env = file_get_contents(isset($env_path) ? $env_path : base_path('.env')); //fet .env file
        $env = str_replace("$key=" . env($key), "$key=" . $value, $env); //replace value
        /** Save file eith new content */
        $env = file_put_contents(isset($env_path) ? $env_path : base_path('.env'), $env);
    }


    protected function website_details()
    {
        $user = auth()->id();
        $web_id  = WebsiteUser::where('user_id',$user)->first();
        return Website::findorfail($web_id->website_id);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
