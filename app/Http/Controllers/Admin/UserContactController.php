<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\UserContact;
use App\Http\Requests\CreateUserContactRequest;
use App\Http\Requests\UpdateUserContactRequest;
use Illuminate\Http\Request;



class UserContactController extends Controller {

	/**
	 * Display a listing of usercontact
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $usercontact = UserContact::all();

		return view('admin.usercontact.index', compact('usercontact'));
	}

	/**
	 * Show the form for creating a new usercontact
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.usercontact.create');
	}

	/**
	 * Store a newly created usercontact in storage.
	 *
     * @param CreateUserContactRequest|Request $request
	 */
	public function store(CreateUserContactRequest $request)
	{
	    
		UserContact::create($request->all());

		return redirect()->route(config('quickadmin.route').'.usercontact.index');
	}

	/**
	 * Show the form for editing the specified usercontact.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$usercontact = UserContact::find($id);
	    
	    
		return view('admin.usercontact.edit', compact('usercontact'));
	}

	/**
	 * Update the specified usercontact in storage.
     * @param UpdateUserContactRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateUserContactRequest $request)
	{
		$usercontact = UserContact::findOrFail($id);

        

		$usercontact->update($request->all());

		return redirect()->route(config('quickadmin.route').'.usercontact.index');
	}

	/**
	 * Remove the specified usercontact from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		UserContact::destroy($id);

		return redirect()->route(config('quickadmin.route').'.usercontact.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            UserContact::destroy($toDelete);
        } else {
            UserContact::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.usercontact.index');
    }

}
