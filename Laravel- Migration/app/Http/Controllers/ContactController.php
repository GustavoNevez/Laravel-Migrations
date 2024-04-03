<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();

        return view('contact', compact('contacts'));
    }

    public function store(){
        $contact = new Contact();

        $contact->name = Crypt::encryptString('Gustavo Neves');
        $contact->email = Crypt::encryptString('gustavoneves@gmail.com');
        $contact->telefone = Crypt::encryptString('(42) 99999-99999');
        $contact->data_nascimento = Crypt::encryptString('2004-10-05');
        $contact->save();
    }

    public function update(){
        $contact = Contact::find(3);
        $contact->name="Arnaldo";
        $contact->save();
    }

    public function destroy($id){
        $contact = Contact::find($id);
        $contact->delete();
    }

    public function decripty(){
        $contact = Contact::find(4);
        $contact->name = Crypt::decryptString($contact->name);
        $contact->email = Crypt::decryptString($contact->email);
        $contact->telefone = Crypt::decryptString($contact->telefone);
        $contact->data_nascimento = Crypt::decryptString($contact->data_nascimento);
        dd($contact);
    }
}
