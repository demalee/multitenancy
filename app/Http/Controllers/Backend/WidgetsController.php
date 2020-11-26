<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use App\Models\Widget;
use Illuminate\Http\Request;

class WidgetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $theme_id;
    public function __construct()
    {
        $theme = new Theme;
        $this->theme_id = $theme->getActiveTheme();
    }

    public function index()
    {
        //
        $widgets = Widget::where('theme_id',$this->theme_id)->where()->get();
        return view('dashboard.widgets.index',compact('widgets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.widgets.create');
    }

    public function widgetContent(Request $request, Widget $widget)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        if ($data['submit'] == 'store_widget')
        {
            $widget = Widget::create([
                'name'=>$data['name'],
                'theme_id'=>$this->theme_id,
                'widget_parent'=>1,
                'status_active'=>0,
                'position'=>0,
                'widget_level'=>2,
            ]);

            if ($widget)
            {
                return back()->with('success','successfully created widget');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Widget $widget)
    {
        //
        return view('dashboard.widgets.show',compact('widget'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Widget $widget)
    {
        //
        return view('dashboard.widgets.edit',compact('widget'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Widget $widget)
    {
        //
        $data = $request->all();
        $widget->update([
            'name'=>$data['name'],
            'theme_id'=>$this->theme_id,
            'widget_parent'=>1,
            'status_active'=>0,
            'position'=>0,
            'widget_level'=>2,
        ]);
        return back()->with('success','successfully updated widget');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Widget $widget)
    {
        //
        $widget->delete();
        return back()->with('success', 'successfully deleted widget');
    }


}
