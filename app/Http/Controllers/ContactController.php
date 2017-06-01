<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;
use App\Models\Message;

class ContactController extends Controller
{
    public function create(){
        return view('contact.create');
    }

    public function store(ContactRequest $request){

        /*$this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);*/
      //  new ContactMessageCreated($request->name, $request->email, $request->message);


        // Possibilité 1 :
        /*$message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();*/

        // Possibilité 2 :
        /*$message = Message::create([
            'name' => $name,
            'email'=> $email,
            'message'=>$message,
        ]);*/

        
        // Posssibilité 3 :
        $message = Message::create($request->only('name','email','message'));

        $mailable = new ContactMessageCreated($message);
        Mail::to(config('laracarte.admin_support_email'))->send($mailable);

        /*flash('Your request has been send to administrator');*/

        Flashy::message('Your request has been send to administrator');

        return redirect()->route('root_path');

    }
}
