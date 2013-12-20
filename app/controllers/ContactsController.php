<?php

class ContactsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return Contact::all();
		$contacts = Contact::all();
		return View::make('contacts.index')
			->with('contacts',$contacts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 public function create( $defaultSnippet = "" )
	{
		return View::make('snippets.create')
			->with( 'snippet',$defaultSnippet);
	}

	 */
	public function create( $contacts = "" )
	{
		//return View::make('contacts.create');
		return View::make('form')
			->with( 'contact',$contacts);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		$input = Input::all();
		//validate !!
		$validation = Contact::validate( $input );

		if ( $validation->passes() ) {
			$newRec = Contact::create([
				'first_name' => $input['first_name'],
				'last_name' => $input['last_name'],
				'email_address' => $input['email_address'],
				'description' => $input['description']
			]);

			if ($newRec) return Redirect::to('/');
		} else {
			return Redirect::to('/')->withErrors($validation)->withInput();
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	

		//return Contact::find($id);
		$contact = Contact::find($id);
		$contacts = Contact::all();
		return View::make('contacts.index')
			->with('contacts',$contacts)->with('contact', $contact->toArray());

		//if ( !$contact ) return Redirect::to('contacts/create');
		//return View::make('contacts.index')->with('contact', $contact->toArray() );
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$contact = Contact::find($id);
		$input = Input::all();

		$contact->first_name = $input['first_name'];
		$contact->last_name = $input['last_name'];
		$contact->email_address = $input['email_address'];
		$contact->description = $input['description'];

		if ($contact->save() ) return Redirect::to('/');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		$contact = Contact::find($id);
		$contact->delete();
		// redirect
		Session::flash('message', 'Successfully deleted the nerd!');
		return Redirect::to('/');

	}
}