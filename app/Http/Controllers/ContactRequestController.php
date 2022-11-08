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
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|min:3|max:255',
            'number' => 'required|min:3|max:255',
            'subject' => 'required|min:3|max:255',
            'message' => 'required|min:3|max:255',
            'city' => 'required|min:2|max:255',
            'state' => 'required|min:2|max:255',
            'zip_code' => 'required|min:5|max:5',
        ]);
        Log::debug(json_encode($data));
        $data['by'] = 'website';
        ContactRequest::create($data);
        Session::flash('success', 'Your message has been sent successfully');
        Log::debug(Session::get('success'));
        return redirect()->back();
    }
}
