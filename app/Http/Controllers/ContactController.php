<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;


class ContactController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    }

    public function index() {
    	$cContacts = Contact::all();
    	return view('contacts.index', compact('cContacts'));
    }
}
