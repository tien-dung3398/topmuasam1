<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     *Login--Admin--
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * --Post_Login--
     *
     * @return \Illuminate\Http\Response
     */
    public function loginPost(Request $request)
    {
        $email  =  $request->email;
        $pass   =  $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $pass])) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()->with('mess', 'Sai tài khoản hoặc mật khẩu');
        }
    }

    /**
     * Display Index Admin
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Logout --Admin
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    /**
     * ---REGISTER
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('admin.register');
    }

    /**
     *--- CREATE ACCOUNT.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user =  new Admin;
        $user->fill([
            'name'     =>  $request->name,
            'email'    =>  $request->email,
            'password' =>  bcrypt($request->password)
        ]);
        $user->save();
        $user->roles()->attach(3);
        session()->flash('mess', 'Đăng kí tài khoản thành công');
        return redirect()->route('admin.login')->withInput($request->only('email'));
    }
    //

}
