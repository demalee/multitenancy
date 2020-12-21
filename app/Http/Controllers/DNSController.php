<?php

namespace App\Http\Controllers;

use App\Models\Website;
use App\Models\WebsiteUser;
use Illuminate\Http\Request;

class DNSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $web = WebsiteUser::where('user_id',auth()->id())->first();
        $website = \App\Models\Website::where('id',$web->website_id)->first();
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
//        dd($output);
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

            return back()->with('success', "successfully pinged");
        }
    }

    private function website_details()
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
