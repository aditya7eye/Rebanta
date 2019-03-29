<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function client_dashboard()
    {
        return view('client.client_dashboard');
    }

    public function create_branch()
    {
        return view('client.create_branch');
    }

    public function view_branch()
    {
        $cid = session('clientmaster')->id;
        $branch = Branch::whereis_del(0)->wherec_id($cid)->get();
        return view('client.view_branch')->with(['branch' => $branch]);
    }

    public function insert_branch()
    {
        //    return $_REQUEST;
        $branch = new Branch();
        $branch->b_name = request('b_name');
        $branch->b_contact = request('b_contact');
        $branch->address = request('b_address');
        $branch->name = request('name');
        $branch->mobile = request('mobile');
        $branch->email = request('email');
        $branch->username = request('username') . '@' . request('prefix');
        $branch->password = request('password');
        $branch->prefix = request('prefix');
        $branch->c_id = session('clientmaster')->id;
        $branch->save();
        return redirect('view_branch')->with('message', 'Branch has been added');
    }

    public function delete_branch()
    {
        $branch = Branch::find(request('did'));
        $branch->is_del = 1;
        $branch->save();
        return 'done';
    }

    public function edit_branch($id)
    {
        $id = base64_decode($id);
        $branch = Branch::find($id);
        return view('client.edit_branch')->with(['branch' => $branch]);
    }

    public function update_branch($id)
    {
// return $id;
        $branch = Branch::find($id);
        $branch->b_name = request('b_name');
        $branch->b_contact = request('b_contact');
        $branch->address = request('b_address');
        $branch->name = request('name');
        $branch->mobile = request('mobile');
        $branch->email = request('email');
        // $branch->username = request('username') . '@' . request('prefix');
        $branch->password = request('password');
        // $branch->prefix = request('prefix');
        $branch->save();
        return redirect('view_branch')->with('message', 'Branch has been Updated');
    }

}
