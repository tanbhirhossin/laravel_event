<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;
    protected $fillable=['item_description', 'estimated_cost', 'actual_cost', 'variance','status','payment_due_date','paid'];
}
