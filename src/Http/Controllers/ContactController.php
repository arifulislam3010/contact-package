<?php

namespace Tutorialghor\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tutorialghor\Contact\Models\Contact;
class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }
    
    public function send(Request $request){
        Contact::create($request->all());
        return Redirect()->back();
    }
}
