<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends BaseController
{
    public function index(){
        $data=Item::get();
        return $this->sendResponse($data,"Item data");
    }

    public function store(Request $request){
        $data=Item::create($request->all());
        return $this->sendResponse($data,"Item created successfully");
    }
    public function show(Item $item){
        return $this->sendResponse($item,"Item created successfully");
    }

    public function update(Request $request,$id){

        $data=Item::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Item updated successfully");
    }

    public function destroy(Item $item)
    {
        $item=$item->delete();
        return $this->sendResponse($item,"Item deleted successfully");
    }
}
