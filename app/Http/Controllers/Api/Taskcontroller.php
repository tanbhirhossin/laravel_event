<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use App\Models\TaskManagement;


class Taskcontroller extends BaseController
{
    public function index(){
        $data=TaskManagement::get();
        return $this->sendResponse($data,"TaskManagement data");
    }

    public function store(Request $request){
        $data=TaskManagement::create($request->all());
        return $this->sendResponse($data,"TaskManagement created successfully");
    }
    public function show(TaskManagement $taskmanagement){
        return $this->sendResponse($taskmanagement,"TaskManagement created successfully");
    }

    public function update(Request $request,$id){

        $data=TaskManagement::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"TaskManagement updated successfully");
    }

    public function destroy(TaskManagement $taskmanagement)
    {
        $taskmanagement=$taskmanagement->delete();
        return $this->sendResponse($taskmanagement,"TaskManagement deleted successfully");
    }
}
