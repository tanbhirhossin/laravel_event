<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends BaseController
{
    public function index(){
        $data=Client::get();
        return $this->sendResponse($data,"Client data");
    }

    public function store(Request $request){
        $data=Client::create($request->all());
        return $this->sendResponse($data,"Client created successfully");
    }
    public function show(Client $client){
        return $this->sendResponse($client,"Client created successfully");
    }

    public function update(Request $request,$id){

        $data=Client::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Client updated successfully");
    }

    public function destroy(Client $client)
    {
        $client=$client->delete();
        return $this->sendResponse($client,"Client deleted successfully");
    }
}
