<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        //

        $data = $request->all();
//        dd($data);
        $validate = Validator::make($data,[
            'f1-first-name'=>'required',
            'description'=>'required'
        ]);

        if ($validate->fails())
        {
            return back();
        }
        else
        {
            $website = Website::where('admin_id',auth()->id())->first();
            if ($website)
            {
                $website->update([
                    'name'=>$data['f1-first-name'],
                    'description'=>$data['description'],
                    'theme_id'=>$data['radio1'],
                    'menu_id'=>0,
                ]);
            }
            else
            {
               $website =  Website::create([
                    'name'=>$data['f1-first-name'],
                    'description'=>$data['description'],
                    'theme_id'=>$data['radio1'],
                    'menu_id'=>0,
                    'admin_id'=>auth()->id()
                ]);
            }

            if ($website)
            {
                if (isset($data['radio1']))
                {
                    $themes = Theme::all();
                    foreach ($themes as $th)
                    {
                        if ($th->id == $data['radio1'])
                        {
                            $th->update([
                                'status_active'=>1
                            ]);
                        }
                        else
                        {
                            $th->update([
                                'status_active'=>0
                            ]);
                        }

                    }
                }
                else
                {
                    $themes = Theme::findorfail(1)->update([
                        'status_active'=>1
                    ]);
                }

                return redirect('/home');

            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function show(Website $website)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function edit(Website $website)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Website $website)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website)
    {
        //
    }
}
