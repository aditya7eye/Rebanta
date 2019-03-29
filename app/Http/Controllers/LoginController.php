<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Master_Admin;
use App\Client;
use App\Branch;

class LoginController extends Controller
{
   function login()
   {
       return view('login.master_login');
   }
   function check_user(Request $request)
   {
      $username = request('username');
      $password = request('pass');
      $output = Master_Admin::where(['username' => $username , 'password' => $password , 'is_del' => 0])->first();
      if (isset($output)) {
        $request->session()->put('adminmaster', $output);
        return redirect('master_dashboard');
      }

      $output = Client::where(['username' => $username , 'password' => $password , 'is_del' => 0])->first(); 
      if (isset($output)) {
        $request->session()->put('clientmaster', $output);
        return redirect('client_dashboard');
      }

      $output = Branch::where(['username' => $username , 'password' => $password , 'is_del' => 0])->first(); 
      if (isset($output)) {
        $request->session()->put('branchmaster', $output);
        return redirect('branch_dashboard');
      }
    
    else {
        return redirect('/')->with('message', 'Username / Password Invalid');
    }
   }

   function logout(Request $request)
    {
        $request->session()->forget('adminmaster');
        $request->session()->forget('clientmaster');
        $request->session()->forget('branchmaster');
        return redirect('/');
    }

    function enterclient(Request $request , $id)
    {
       $request->session()->forget('adminmaster');
        $request->session()->forget('clientmaster');
        $request->session()->forget('branchmaster');
      $id = base64_decode($id);
      $output = Client::find($id);
      if (isset($output)) {
        $request->session()->put('clientmaster', $output);
        return redirect('client_dashboard');
      }
    }
    function enterbranch(Request $request , $id)
    {
       $request->session()->forget('adminmaster');
        $request->session()->forget('clientmaster');
        $request->session()->forget('branchmaster');
      $id = base64_decode($id);
      $output = Branch::find( $id); 
      if (isset($output)) {
        $request->session()->put('branchmaster', $output);
        return redirect('branch_dashboard');
      }
    }
}
