<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends BaseController
{
    public function index(Request $request){
        $data=Event::withSum('expense','total_amount');
        if($request->client){
            $data=$data->where('client_id',$request->client);
        }else{
            $data=$data->with('client');
        }
        $data=$data->get();
        return $this->sendResponse($data,"Event data");
    }

    public function store(Request $request){
        $data=Event::create($request->all());
        return $this->sendResponse($data,"Event created successfully");
    }
    public function show(Event $event){
        return $this->sendResponse($event,"Event created successfully");
    }

    public function update(Request $request,$id){

        $data=Event::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Event updated successfully");
    }

    public function destroy(Event $event)
    {
        $event=$event->delete();
        return $this->sendResponse($event,"Event deleted successfully");
    }
}
