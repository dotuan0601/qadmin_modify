<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\AboutCategory;
use App\Http\Requests\CreateAboutCategoryRequest;
use App\Http\Requests\UpdateAboutCategoryRequest;
use Illuminate\Http\Request;



class AboutCategoryController extends Controller {

	/**
	 * Display a listing of aboutcategory
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $aboutcategory = AboutCategory::all();

		return view('admin.aboutcategory.index', compact('aboutcategory'));
	}

	/**
	 * Show the form for creating a new aboutcategory
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.aboutcategory.create');
	}

	/**
	 * Store a newly created aboutcategory in storage.
	 *
     * @param CreateAboutCategoryRequest|Request $request
	 */
	public function store(CreateAboutCategoryRequest $request)
	{
	    
		AboutCategory::create($request->all());

		return redirect()->route(config('quickadmin.route').'.aboutcategory.index');
	}

	/**
	 * Show the form for editing the specified aboutcategory.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$aboutcategory = AboutCategory::find($id);
	    
	    
		return view('admin.aboutcategory.edit', compact('aboutcategory'));
	}

	/**
	 * Update the specified aboutcategory in storage.
     * @param UpdateAboutCategoryRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateAboutCategoryRequest $request)
	{
		$aboutcategory = AboutCategory::findOrFail($id);

        

		$aboutcategory->update($request->all());

		return redirect()->route(config('quickadmin.route').'.aboutcategory.index');
	}

	/**
	 * Remove the specified aboutcategory from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		AboutCategory::destroy($id);

		return redirect()->route(config('quickadmin.route').'.aboutcategory.index');
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
            AboutCategory::destroy($toDelete);
        } else {
            AboutCategory::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.aboutcategory.index');
    }

}
