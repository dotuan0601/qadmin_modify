<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\AboutContent;
use App\Http\Requests\CreateAboutContentRequest;
use App\Http\Requests\UpdateAboutContentRequest;
use Illuminate\Http\Request;



class AboutContentController extends Controller {

	/**
	 * Display a listing of aboutcontent
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $aboutcontent = AboutContent::all();

		return view('admin.aboutcontent.index', compact('aboutcontent'));
	}

	/**
	 * Show the form for creating a new aboutcontent
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.aboutcontent.create');
	}

	/**
	 * Store a newly created aboutcontent in storage.
	 *
     * @param CreateAboutContentRequest|Request $request
	 */
	public function store(CreateAboutContentRequest $request)
	{
	    
		AboutContent::create($request->all());

		return redirect()->route(config('quickadmin.route').'.aboutcontent.index');
	}

	/**
	 * Show the form for editing the specified aboutcontent.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$aboutcontent = AboutContent::find($id);
	    
	    
		return view('admin.aboutcontent.edit', compact('aboutcontent'));
	}

	/**
	 * Update the specified aboutcontent in storage.
     * @param UpdateAboutContentRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateAboutContentRequest $request)
	{
		$aboutcontent = AboutContent::findOrFail($id);

        

		$aboutcontent->update($request->all());

		return redirect()->route(config('quickadmin.route').'.aboutcontent.index');
	}

	/**
	 * Remove the specified aboutcontent from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		AboutContent::destroy($id);

		return redirect()->route(config('quickadmin.route').'.aboutcontent.index');
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
            AboutContent::destroy($toDelete);
        } else {
            AboutContent::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.aboutcontent.index');
    }

}
