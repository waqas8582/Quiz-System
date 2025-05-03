<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    //

    public function login(Request $request)
    {
        $validation = $request->validate([
            "name"=>"required",
            "password"=>"required",
        ]);

        $admin = Admin::where([
            ['name',"=", $request->name],
            ['password',"=", $request->password]
        ])->first();
        if(!$admin){
            $validation = $request->validate([
                "user"=>"required",
            ],[
                "user.required"=>"User does not exit"
            ]);
        }
        Session::put('admin',$admin);

        return redirect('dashboard');

    }
    function dashboard()
    {
        $admin = Session::get('admin');
        if($admin){
            return view('admin', ['admin' => $admin]);
        }else{
            return redirect('admin-login');
        }

        
    }
}
