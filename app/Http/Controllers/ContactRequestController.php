<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ContactRequestController extends Controller
{
    public function store(Request $request){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $data['by'] = 'website';
        ContactRequest::create($data);
        Session::flash('success', 'Your message has been sent successfully');
        Log::debug(Session::get('success'));
        return redirect()->back();
    }
}
