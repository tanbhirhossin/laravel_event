<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends BaseController
{
    public function index(){
        $data=Role::get();
        return $this->sendResponse($data,"Role data");
    }

    public function store(Request $request){
        $data=Role::create($request->all());
        return $this->sendResponse($data,"Role created successfully");
    }
    public function show(Role $budget){
        return $this->sendResponse($role,"Role created successfully");
    }

    public function update(Request $request,$id){

        $data=Role::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Role updated successfully");
    }

    public function destroy(Role $budget)
    {
        $budget=$budget->delete();
        return $this->sendResponse($budget,"Role deleted successfully");
    }
}
