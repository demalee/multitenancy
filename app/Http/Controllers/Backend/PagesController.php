<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use UxWeb\SweetAlert\SweetAlert;

class PagesController extends Controller
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

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
//        if($request->hasFile('upload')) {
//            //get filename with extension
//            $filenamewithextension = $request->file('upload')->getClientOriginalName();
//
//            //get filename without extension
//            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
//
//            //get file extension
//            $extension = $request->file('upload')->getClientOriginalExtension();
//
//            //filename to store
//            $filenametostore = $filename.'_'.time().'.'.$extension;
//
//            //Upload File
//            $request->file('upload')->storeAs('public/uploads', $filenametostore);
//
//            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
//            $url = asset('storage/uploads/'.$filenametostore);
//            $msg = 'Image successfully uploaded';
//            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
//
//            // Render HTML output
//            @header('Content-type: text/html; charset=utf-8');
//            echo $re;
//        }
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
        $validate = Validator::make($data,[
            'name'=>'required',

        ]);

        $theme = Theme::where('status_active',1)->first();
        if ($theme)
        {
            $themeid = $theme->id;
        }
        else
        {
            $themeid  = 1;
        }
        $data['content'] = htmlspecialchars_decode($data['editor1']);
        $page = Page::updateorcreate([
            'title'=>$data['name'],
             'theme_id'=>$themeid
            ],[
            'slug'=>Str::slug($data['name']),
            'page_description'=>@$data['description'],
            'content'=>$data['content'],
            'theme_id'=>$themeid,
            'parent_page'=>1,
            'page_level'=>3
        ]);



        return redirect('/dashboard/pages');
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
        $page = Page::findorfail($id);
        return view('dashboard.pages.edit',compact('page'));
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
        $data = $request->all();
//        dd($data);
        $page = Page::findorfail($id);
        $page->update([
            'title'=>$data['name'],
            'slug'=>Str::slug($data['name']),
            'page_description'=>@$data['description'],
            'content'=>htmlspecialchars_decode($data['editor1'])
        ]);
        return redirect('/dashboard/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::findorfail($id);
        if ($page)
        {
            if ($page->parent_page == 0)
            {
                return back()->with('info','You cant delete a parent page');
            }
            else
            {

                $page->delete();
                return back();
            }
        }

    }
}
