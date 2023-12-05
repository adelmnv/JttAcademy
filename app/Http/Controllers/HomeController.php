<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\{User,Coach,Category};

class HomeController extends Controller
{
    public function sayHello($name='Default'){
        //return 'Hello Laravel from HomeController';
        //echo "<h1>Hello,".$name."!</h1>";
        $post = Post::find(1);
        print_r($post->title);
        //print_r($post);
        //return view('hello_template');
    }

    public function index(){
        return view('main_page');
    }

    public function coaches(){
        return 'our coaches';
    }

    public function gallery(){
        return 'gallery';
    }

    public function practice_info(){
        return 'practice info';
    }

    public function tournaments(){
        return 'tournaments';
    }

    public function about(){
        return view('about_page');
    }

    public function contact(){
        return 'contact page';
    }

    public function user_login(){
        return view('user.login');
    }

    public function user_auth(Request $request){
        $validated = $request->validate([
            'email' => 'required|email|min:4|max:255',
            'password' => 'required|min:4|max:255'
        ]);

        // return Hash:make($validated['password']);

        if (Auth::attempt($validated,true)){
            $request->session()->regenerate();
            return redirect()->intended();
        }
        return back();
    }

    public function user_logout(Request $request){
        //  Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect('/');

    }

    public function admin_dash(){
        $posts = Post::all();
        return view('admin.dash',compact('posts'));
    }

    

}
