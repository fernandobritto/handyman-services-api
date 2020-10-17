<?php

namespace App\Http\Controllers;

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
        Message::create($data);
        return redirect('message');
    }

}
