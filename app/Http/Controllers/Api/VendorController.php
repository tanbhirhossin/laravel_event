<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use App\Models\Vendors;

class VendorController extends BaseController
{
    public function index(){
        $data=Vendors::withSum('expense','total_amount')->withSum('payment','pay_amount')->get();
        return $this->sendResponse($data,"Vendors data");
    }

    public function store(Request $request){
        $data=Vendors::create($request->all());
        return $this->sendResponse($data,"Vendors created successfully");
    }
    public function show(Vendors $vendors){
        return $this->sendResponse($vendors,"Vendors created successfully");
    }

    public function update(Request $request,$id){

        $data=Vendors::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Vendors updated successfully");
    }

    public function destroy(Vendors $vendors)
    {
        $vendors=$vendors->delete();
        return $this->sendResponse($vendors,"Vendors deleted successfully");
    }
}
