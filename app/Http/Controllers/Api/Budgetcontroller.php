<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use App\Models\Budget;

class Budgetcontroller extends BaseController
{
    public function index(){
        $data=Budget::get();
        return $this->sendResponse($data,"Budget data");
    }

    public function store(Request $request){
        $data=Budget::create($request->all());
        return $this->sendResponse($data,"Budget created successfully");
    }
    public function show(Budget $budget){
        return $this->sendResponse($budget,"Budget created successfully");
    }

    public function update(Request $request,$id){

        $data=Budget::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Budget updated successfully");
    }

    public function destroy(Budget $budget)
    {
        $budget=$budget->delete();
        return $this->sendResponse($budget,"Budget deleted successfully");
    }
}
