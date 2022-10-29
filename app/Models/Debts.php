<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Debts extends Model
{
    use HasFactory,HasApiTokens;
    protected $fillable = ['finance_type','finance_name','finance_main_amount','benifits_amount','total_amount','notes','user_id'];
}
