<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactRequest extends Model
{
    use CrudTrait, HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'number',
        'subject',
        'message',
        'by',
        'city',
        'state',
        'zip_code',
    ];
}
