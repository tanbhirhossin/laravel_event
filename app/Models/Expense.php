<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $fillable=['event_id', 'employee_id', 'total_amount', 'discount','tax','gtotal','discountamt','taxamt','vendor_id','purchase_date'];
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }
    public function vendor()
    {
        return $this->belongsTo(Vendors::class, 'vendor_id');
    }
}
