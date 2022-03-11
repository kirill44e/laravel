<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function showByUser() {
        $contact = new Contact;
        $data = [];
        $user_id = Auth::user()->id;
        $data = $contact->where('user_id', '=', $user_id)->get();
        
        return view('user', ['data' => $data ]);
    }

    public function create(ContactRequest $req)
    {
        $contact = new contact();
        $contact->user_id = Auth::id();
        $contact->adres = $req->input('adres');
        $contact->info = $req->input('info');
        $contact->category = $req->input('category');
        $contact->cost = $req->input('cost');
        $contact->img = $req->img->store('img/'.$req->file('img')->getClientOriginalName(), 'public');



        $contact->save();
        return redirect()->route('kabinet')->with('success', 'Сообщение было добавлено');;
    }
    public function deleteMessage($id) {
        Contact::findOrFail($id)->delete();
        return redirect()->route('kabinet')->with('success', 'Сообщение удалено');
    }
    
        
 }