<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use App\Models\EventTask;
class EventtaskController extends BaseController
{
    public function index(){
        $data=EventTask::get();
        return $this->sendResponse($data,"EventTask data");
    }

    public function store(Request $request){
        $data=EventTask::create($request->all());
        return $this->sendResponse($data,"EventTask created successfully");
    }
    public function show(EventTask $eventtask){
        return $this->sendResponse($eventtask,"EventTask created successfully");
    }

    public function update(Request $request,$id){

        $data=EventTask::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"EventTask updated successfully");
    }

    public function destroy(EventTask $eventtask)
    {
        $eventtask=$eventtask->delete();
        return $this->sendResponse($eventtask,"EventTask deleted successfully");
    }
}
