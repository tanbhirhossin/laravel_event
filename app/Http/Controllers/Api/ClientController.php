<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends BaseController
{
    public function index(){
        $data=Client::withSum('payment','pay_amount')->withSum('event','event_cost')->get();
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

    public function _login(Request $r)
    {
        $data=Client::where('contact_no',$r->contact_number)
                ->where('password',$r->password)
                ->first()?->toArray();
        if($data){
            $d['token']=$data['id'];
            $d['data']=$data;
            return $this->sendResponse($d,"User login successfully");
        }else{
            return $this->sendError(['error'=>'contact number or password is not correct'],"Unauthorized",400);
        }
    }
}
