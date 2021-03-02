<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'Order';

    public function user2()
    {
        return $this->hasOne('App\Models\User2', 'id' , 'User2_id');
    }
}
