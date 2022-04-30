<?php

namespace App\Models\contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'contact';
    
    /**
     * The attributes that are mass assingnable.
     *
     * @var array
     */
    protected $fillable = [
        'ID',
        'Name',
        'Contact',
        'email',
    ];        
    
    protected $primaryKey = 'ID';
    protected $dates = ['deleted_at'];
    
    public $timestamps = false;
    
}
