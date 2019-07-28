<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense extends Model {
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'category', 'amount', 'entry_date',
    ];
}
