<?php
//esta es otra forma que se puede hacer y genera lo mismo
namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
  public function index()
  {
    return view('contact');
  }
  public function store()
//   public function store(Request $request)
  {
    $message = request()->validate([
        'name' => 'required',
        //'email' => 'requiered|email', esta es otra forma de hacer la validacion desde el lado del servidor 
        'email' => ['required', 'email'],
        'subject' => 'required',
        'content' => 'required|min:3'
    ]);

    Mail::to('urielflorez29@gmail.com')->queue(new MessageReceived ($message));

    return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas.');
  }
}

// use Illuminate\Http\Request;

// class MessagesController extends Controller
// {
//   public function index()
//   {
//     return view('contact');
//   }
//   public function store(Request $request)
//   {
//     return $request;
//   }
// }