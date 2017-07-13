<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

use App\Http\Requests\ContactRequest;
use Auth;

use App\Filters\ContactsFilters;

class ContactController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    }

    /**
     * Refactoring
     */
    /**
     * 
     
    public function indexOld() {
        $cContacts = Contact::name(request()->get('name'))->email(request()->get('email'))
        ->simplePaginate(5);
        return view('contacts.index', compact('cContacts'));
    }
    */

    public function index(ContactsFilters $filters) {
    	$cContacts = Contact::filter($filters)->simplePaginate(5);
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

    public function destroy(Contact $contact) {
        if ($contact->delete()) {
            return redirect('/contacts')->with('status', "Contato <strong>{$contact->name}</strong> apagado!");
        }
        return redirect('/contacts')->with('error', 'Contato não foi apagado!');
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
