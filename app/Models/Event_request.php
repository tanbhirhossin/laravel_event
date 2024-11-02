<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_request extends Model
{
    use HasFactory;
    protected $fillable=['event_details', 'event_start_date', 'event_start_time', 'event_end_date','event_end_time', 'location', 'contact_no', 'client_name'];

}
