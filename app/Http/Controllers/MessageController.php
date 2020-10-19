<?php

namespace App\Http\Controllers;

use App\Events\SendMessage;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('message');
    }

    public function send(Request $request)
    {
        $data = $request->all();
        $message = Message::create($data);
        broadcast(new SendMessage($message));
        return redirect('message');
    }

}
