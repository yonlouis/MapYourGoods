<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
    	return view('contact.create');
    	// On retourne une vue, qui se trouve dans le dossier 'contact', et elle aura pour nom 'create.php'
    }
}
