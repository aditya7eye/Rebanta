<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function master_dashboard()
    {
        return view('master.master_dashboard');
    }
    public function create_client()
    {

        return view('master.create_client');
    }
    public function view_client()
    {
        $client = Client::whereis_del(0)->get();
        return view('master.view_client')->with(['client' => $client]);
    }
    public function insert_client()
    {
        // return $_REQUEST;
        $client = new Client();
        $client->name = request('name');
        $client->c_name = request('c_name');
        $client->email = request('email');
        $client->mobile = request('mobile');
        $client->gstin = request('gstin');
        $client->address = request('address');
        $client->username = request('username') . '@' . request('prefix');
        $client->password = request('password');
        $client->prefix = request('prefix');
        $client->save();
        return redirect('view_client')->with('message', 'Client has been added');

    }

    public function del_client()
    {
        $did = request('did');
        $client_delete = Client::find($did);
        $client_delete->is_del = 1;
        $client_delete->save();
        return 'done';
    }

    public function edit_client($id)
    {
        $id = base64_decode($id);
        $clientupdate = Client::find($id);
        return view('master.editclient')->with(['clientupdate' => $clientupdate]);
    }
    function update_client($id)
    {
// return $id;
        $client = Client::find($id);
        $client->name = request('name');
        $client->c_name = request('c_name');
        $client->email = request('email');
        $client->mobile = request('mobile');
        $client->gstin = request('gstin');
        $client->address = request('address');
        $client->username = request('username') . '@' . request('prefix');
        $client->password = request('password');
        $client->prefix = request('prefix');
        $client->save();
        return redirect('view_client')->with('message', 'Client has been Updated');

    }
}
