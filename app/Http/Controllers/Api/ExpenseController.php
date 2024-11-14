<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\EventExpenseDetails;
class ExpenseController extends BaseController
{
    public function index(){
        $data=Expense::get();
        return $this->sendResponse($data,"Expense data");
    }


    public function store(Request $request){
        //return $request->all();
//`id`, `event_id`, `employee_id`, `total_amount`, `discount`, `vendor_id`
        $purchase_data['employee_id']=$request->input['employee_id'];
        $purchase_data['event_id']=$request->input['event_id'];
        $purchase_data['vendor_id']=$request->input['vendor_id'];
        $purchase_data['purchase_date']=$request->input['purchase_date'];
        $purchase_data['total_amount']=$request->totalData['total'];
        $purchase_data['discount']=$request->totalData['discount'];

        $purchase_data['tax']=$request->totalData['tax'];
        $purchase_data['gtotal']=$request->totalData['finalTotal'];
        $purchase_data['discountamt']=$request->totalData['discountAmt']?? 0;
        $purchase_data['taxamt']=$request->totalData['taxAmt']?? 0;

        $data=Expense::create($purchase_data);

        foreach($request->cartitems as $itms){
            $item['event_expense_id']=$data->id;
            $item['item_id']=$itms['id'];

            $item['qty']=$itms['quantity'];

            $item['amount']=$itms['price'];
            EventExpenseDetails::create($item);
        }

        $payment['event_expense_id']=$data->id;
        $payment['vendor_id']=$request->input['vendor_id'];
        $payment['pay_amount']=$request->input['amount'];
        $payment['pay_date']=$request->input['purchase_date'];

        $payment['pay_type']=$request->input['pay_type'];//add
        $payment['bank_name']=$request->input['bank_name'];//add
        $payment['check_number']=$request->input['check_number'];//add
        $payment['check_date']=$request->input['check_date'];//add

        Payment::create($payment);

        return $this->sendResponse($data,"Purchase created successfully");
    }
    // public function show(Purchase $purchase){
    //     $purchase=Purchase::with('supplier','details')->withSum('payment','amount')->find($purchase->id);
    //     return $this->sendResponse($purchase,"Purchase created successfully");
    // }

    public function payment(Request $request,$id){
        //return $request->all();
        $data=Purchase::find($id);

        $payment['purchase_id']=$data->id;
        $payment['supplier_id']=$data->supplier_id;
        $payment['pay_type']=$request->input['pay_type'];
        $payment['amount']=$request->input['amount'];
        $payment['bank_name']=$request->input['bank_name'];
        $payment['check_number']=$request->input['check_number'];
        $payment['check_date']=$request->input['check_date'];
        Payment::create($payment);
        return $this->sendResponse($data,"Purchase pay successfully");
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
