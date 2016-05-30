<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['name','email','message'];



    public function store($data)
    {
    	$contact = new Contact;
    	$contact->name = $data['name'];
    	$contact->email = $data['email'];
    	$contact->message = $data['message'];
    	$contact->save();

    	return $contact;
    }
}
