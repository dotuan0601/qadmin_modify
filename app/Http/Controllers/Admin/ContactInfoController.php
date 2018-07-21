<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\ContactInfo;
use App\Http\Requests\CreateContactInfoRequest;
use App\Http\Requests\UpdateContactInfoRequest;
use Illuminate\Http\Request;



class ContactInfoController extends Controller {

	/**
	 * Display a listing of contactinfo
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $contactinfo = ContactInfo::all();

		return view('admin.contactinfo.index', compact('contactinfo'));
	}

	/**
	 * Show the form for creating a new contactinfo
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.contactinfo.create');
	}

	/**
	 * Store a newly created contactinfo in storage.
	 *
     * @param CreateContactInfoRequest|Request $request
	 */
	public function store(CreateContactInfoRequest $request)
	{
	    
		ContactInfo::create($request->all());

		return redirect()->route(config('quickadmin.route').'.contactinfo.index');
	}

	/**
	 * Show the form for editing the specified contactinfo.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$contactinfo = ContactInfo::find($id);
	    
	    
		return view('admin.contactinfo.edit', compact('contactinfo'));
	}

	/**
	 * Update the specified contactinfo in storage.
     * @param UpdateContactInfoRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateContactInfoRequest $request)
	{
		$contactinfo = ContactInfo::findOrFail($id);

        

		$contactinfo->update($request->all());

		return redirect()->route(config('quickadmin.route').'.contactinfo.index');
	}

	/**
	 * Remove the specified contactinfo from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		ContactInfo::destroy($id);

		return redirect()->route(config('quickadmin.route').'.contactinfo.index');
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
            ContactInfo::destroy($toDelete);
        } else {
            ContactInfo::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.contactinfo.index');
    }

}
