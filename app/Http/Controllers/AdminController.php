<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{

public function showAll() {
    return view('admin', ['data' => Contact::all()]);
    }
}
