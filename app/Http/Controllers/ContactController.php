<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    //

	public function displayform()
	{
		return view('contact');
	}
	public function save(Request $request)
	{
		$name = $request->input('name');
		$email = $request->input('email');
		$contact = $request->input('contact');
		$address = $request->input('address');

		DB::insert('INSERT INTO users(name,email,contact,address) values (?,?,?,?)'
		,[$name,$email,$contact,$address]);
		
		return redirect('/')->with('success','Save');
	}

	public function viewform()
	{
		return view('contact_view');
	}
	public function index()
	{
		$contact = DB::select('SELECT * FROM users');
		return view('contact_view',['contact'=>$contact]);
	}
	public function edit_contact($id)
	{
		$contact = DB::select('SELECT * FROM users where id = ?', [$id]);
		return view('contact_edit',['contact'=> $contact]);
	}
	public function update_contact(Request $request,$id)
	{
		$name = $request->input('name');
		$email = $request->input('email');
		$contacts = $request->input('contact');
		$address = $request->input('address');

		if($request->hasfile('image'))
		{
			$file = $request->file('image');
			$extension=$file->getClientOriginalExtension();
			$filename = time().'.'.$extension;
			$file->move('uploads/contact/',$filename);
			//$contact->image=$filename;
			$image = $filename;
		}
		else{
			return $request;
			$image= '';
		}

		DB::update('UPDATE users set name=?, email=?, contact=?, address=? , image=? where id=?' ,
			[$name, $email,$contacts,$address,$image,$id]);

		return redirect('/')->with('success','Contact updated');	
	}

	public function delete_contact($id)
	{
		
		DB::delete('DELETE from users where id=?', [$id]);
		return redirect('/')->with('success','Contact Deleted');
	}
}
