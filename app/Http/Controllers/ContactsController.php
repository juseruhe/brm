<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactsController extends Controller
{
    
    public function index(){
        $contacts = Contact::all();
        return response()->json($contacts);
    }

    public function store(Request $request){
      $contacts = Contact::create($request->all());
      return response()->json($contacts);
    }

    public function update(Request $request, $id){
        $contacts = Contact::find($id)->update($request->all());
        return response()->json($contacts);
    }

    public function destroy($id){
      $contacts = Contact::find($id)->delete();
      return response()->json($contacts);
    }
}
