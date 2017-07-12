<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

use App\Http\Requests\ContactRequest;
use Auth;

class ContactController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    }

    public function index() {
    	$cContacts = Contact::all();
    	return view('contacts.index', compact('cContacts'));
    }

    public function create() {
    	return view('contacts.create');
    }

    public function show(Contact $contact) {
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact) {
        return view('contacts.edit', compact('contact'));
    }

    public function update(ContactRequest $oRequest, Contact $contact) {
        $contact->user_id = Auth::user()->id;
        $contact->fill($oRequest->all());
        if ($contact->save()) {
            return back()->with('status', 'Contato Atualizado!');
        }
        return back()->with('error', 'Contato não Atualizado!');
    }

    public function store(ContactRequest $oRequest) {
    	$oContact = new Contact($oRequest->all());
    	$oContact->user_id = Auth::user()->id;
		if ($oContact->save()) {
			return back()->with('status', 'Contato criado com sucesso.');
		}
    }
}
