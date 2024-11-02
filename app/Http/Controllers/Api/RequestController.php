<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use App\Models\Event_request;

class RequestController extends BaseController
{
    public function index(){
        $data=Event_request::get();
        return $this->sendResponse($data,"Event_request data");
    }

    public function store(Request $request){
        $data=Event_request::create($request->all());
        return $this->sendResponse($data,"Event_request created successfully");
    }
    public function show(Event_request $event_request){
        return $this->sendResponse($event_request,"Event_request created successfully");
    }

    public function update(Request $request,$id){

        $data=Event_request::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Event_request updated successfully");
    }

    public function destroy(Event_request $event_request)
    {
        $event_request=$event_request->delete();
        return $this->sendResponse($event_request,"Event_request deleted successfully");
    }
}
