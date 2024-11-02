<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use App\Models\form;

class FormController extends BaseController
{
    public function index(){
        $data=form::get();
        return $this->sendResponse($data,"form data");
    }

    public function store(Request $request){
        $data=form::create($request->all());
        return $this->sendResponse($data,"form created successfully");
    }
    public function show(form $form){
        return $this->sendResponse($form,"form created successfully");
    }

    public function update(Request $request,$id){

        $data=form::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"form updated successfully");
    }

    public function destroy(form $form)
    {
        $form=$form->delete();
        return $this->sendResponse($form,"form deleted successfully");
    }
}
