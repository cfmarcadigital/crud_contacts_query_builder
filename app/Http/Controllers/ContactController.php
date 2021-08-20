<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//use App\Contact;

class ContactController extends Controller
{
  public function index()
  {

    $contact = DB::table('contacts')->get();

    return view('Pages.allContact')->with('contactpass', $contact);
  }

  public function create()
  {

    return view('Pages.insertData');
  }

  public function store(Request $request)
  {

    $data = array();
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['phone'] = $request->phone;
    $data['description'] = $request->description;

    $insData = DB::table('contacts')->insert($data);

    return redirect()->route('all.contacts');
  }

  public function delete($id)
  {

    $del = DB::table('contacts')->where('id', $id)->delete();

    return redirect()->route('all.contacts');
  }

  public function edit($id)
  {

    $edt = DB::table('contacts')->where('id', $id)->first();

    return view('Pages.editContact', compact('edt'));
  }

  public function update(Request $request, $id)
  {

    $data = array();
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['phone'] = $request->phone;
    $data['description'] = $request->description;

    $updateCont = DB::table('contacts')->where('id', $id)->update($data);

    return redirect()->route('all.contacts');
  }


  public function show($id)
  {

    $view = DB::table('contacts')->where('id', $id)->first();

    return view('Pages.viewDetails', compact('view'));
  }
}
