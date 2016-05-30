<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Contact;

use Validator;

class ContactController extends Controller
{

    private $contact;

    public function __construct(
        Contact $contact
    ){
        $this->contact = $contact;
    }


    public function index()
    {
        $contacts = $this->contact->orderBy('created_at','desc')->get();

        return view('admin.contact.list',compact('contacts'));
    }

    public function create(Request $request)
    {    
        $validate = Validator::make(
            $request->all(),
            [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'message' => 'required|min:3|max:300'
            ]
        );

        if($validate->fails())
        {
            return redirect()
                    ->back()
                    ->withErrors($validate)
                    ->withInput();
        }
        else
        {
            $contact = $this->contact->store($request->all());

            return redirect()
                    ->back()
                    ->with('messageSent',true);
        }
    }
}
