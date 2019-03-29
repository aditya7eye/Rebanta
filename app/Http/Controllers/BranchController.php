<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
   function branch_dashboard()
   {
       return view('branch.branch_dashboard');
   }

   function enquiry()
   {
    return view('branch.enquiry');  
   }
}
