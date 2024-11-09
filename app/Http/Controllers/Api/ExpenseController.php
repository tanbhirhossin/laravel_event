<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use App\Models\Expense;
class ExpenseController extends BaseController
{
    public function index(){
        $data=Expense::get();
        return $this->sendResponse($data,"Expense data");
    }

    public function store(Request $request){
        $data=Expense::create($request->all());
        return $this->sendResponse($data,"Expense created successfully");
    }
    public function show(Expense $expense){
        return $this->sendResponse($expense,"Expense created successfully");
    }

    public function update(Request $request,$id){

        $data=Expense::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Expense updated successfully");
    }

    public function destroy(Expense $expense)
    {
        $expense=$expense->delete();
        return $this->sendResponse($expense,"Expense deleted successfully");
    }
}
