<?php

namespace App\Models;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'plan_id',
        'note',
        'amount',
        'cost',
        'result',
        'bonus',
        'status',
    ];

    public function product(){
        return $this->hasOne(Plan::class, 'id', 'plan_id');
    }

}
