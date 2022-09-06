<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Mail;
use App\Mail\ReplyMail;

class MessageController extends Controller
{
    public function index() {
        return view('dashboard.message.index_message',[
            "page" => "Message",
            "message" => Message::all()
        ]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "name" => 'required',
            "email" => 'required|email',
            "message" => 'required',
        ]);

        Message::create($validated);
        return redirect()->back();
    }

    public function show(Message $message) {
        return view('dashboard.message.show_message',[
            "page" => "Message",
            "message" => $message
        ]);
    }

    public function destroy($id)
    {
        Message::destroy($id);
        return redirect('/admin/message');
    }

    public function sendMail(Message $message)
    {

      Mail::to($message->email)->send(new ReplyMail());

      if (Mail::failures()) {
           return response()->Fail('Sorry! Please try again latter');
      }else{
           return response()->success('Great! Successfully send in your mail');
         }
    }
}
