<?php

namespace App\Models\contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
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
    
    public $timestamps = false;
    
}
