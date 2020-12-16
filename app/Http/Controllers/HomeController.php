<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\PageWidgets;
use App\Models\RoleUser;
use App\Models\Theme;
use App\Models\User;
use App\Models\Website;
use App\Models\WebsiteUser;
use App\Models\Widget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getWebsite()
    {
        $user = auth()->id();
        $website = WebsiteUser::where('user_id',$user)->first();
        return $website->website_id;
    }

    public function configTest(Request $request)
    {

    }

    private function website_details()
    {
        $user = auth()->id();
        $web_id  = WebsiteUser::where('user_id',$user)->first();
        return Website::findorfail($web_id->website_id);
    }

    public function createUser(Request $request)
    {
        $data = $request->all();
//        dd($data);
        $validate = Validator::make($data,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role'=>'required'
        ]);

        if ($validate->fails())
        {
            return back()->with('error','Error occurred, some required fields are missing');
        }
        else
        {

            if (isset($data['profile_image'])) {
                $attach1 = time() . '-profile_image.' . request()->profile_image->getClientOriginalExtension();
                request()->profile_image->move(public_path('images'), $attach1);
                $logo_url = env('APP_URL') . "/images/" . $attach1;
                $data['profile_image'] = $attach1;
            }

            $user = User::create([
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=>Hash::make($data['password']),
                'role_id'=>$data['role'],
                'profile_image'=>@$data['profile_image']
            ]);

            if ($user)
            {
                $role_user = RoleUser::updateorcreate(
                    [
                        'user_id'=>$user->id
                    ],
                    [
                        'role_id'=>$user->role_id
                    ]);

                $website_user = WebsiteUser::updateorcreate([
                    'user_id'=>$user->id
                ],
                    [
                        'website_id'=>$this->getWebsite()
                    ]);

                return back()->with('success', 'successfully added new user');
            }
            else
            {
                return back()->with('error', 'Something unexpected occurred');
            }
        }
    }


    public function pages()
    {
        $theme = Theme::where('status_active',1)->first();
        if ($theme)
        {
            $themeid = $theme->id;
        }
        else
        {
            $themeid  = 1;
        }
        $pages = Page::where('theme_id',$themeid)->get();
        return view('dashboard/pages/index',compact('pages'));
    }

    public function editWidgets($id)
    {
        $page_wid = PageWidgets::where('page_id',$id)->get();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$this->getWebsite())->get();
//        $pages = Page::where('theme_id',$this->theme_id)->get();
        return view('dashboard/widgets_edit', compact('widgets','page_wid','id'));
    }
    public function steps()
    {
        $themes = Theme::all();

        $theme = Theme::where('status_active',1)->first();
        if ($theme)
        {
            $theme_id = $theme->id;
        }
        else
        {
            $theme_id = 1;
        }

        $pages = Page::where('theme_id',$theme_id)->whereIn('page_level',[1,2])->get();
        $menu = Menu::where('name','Main menu')->where('theme_id',$theme_id)->get();
        $widgets = Widget::where('website_id',0)->get();
        return view('dashboard/website/steps',compact('pages','themes','widgets'));
    }
}
