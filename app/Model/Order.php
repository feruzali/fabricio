<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'company_name', 'bank', 'address', 'tin', 'ctea', 'mfi', 'user_id', 'name', 'email', 'comment', 'phone_number'
    ];
}
