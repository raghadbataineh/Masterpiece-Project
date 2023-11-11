<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactFormSubmitted;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'message',
    ];


    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "raghad.bataineh24@gmail.com";
            Mail::to($adminEmail)->send(new ContactFormSubmitted($item));
        });
    }
}
