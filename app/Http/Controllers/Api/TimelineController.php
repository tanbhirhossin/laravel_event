<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use App\Models\Timeline;
class TimelineController extends BaseController
{
    public function index(){
        $data=Timeline::get();
        return $this->sendResponse($data,"Timeline data");
    }

    public function store(Request $request){
        $data=Timeline::create($request->all());
        return $this->sendResponse($data,"Timeline created successfully");
    }
    public function show(Timeline $timeline){
        return $this->sendResponse($timeline,"Timeline created successfully");
    }

    public function update(Request $request,$id){

        $data=Timeline::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Timeline updated successfully");
    }

    public function destroy(Timeline $timeline)
    {
        $timeline=$timeline->delete();
        return $this->sendResponse($timeline,"Timeline deleted successfully");
    }
}
