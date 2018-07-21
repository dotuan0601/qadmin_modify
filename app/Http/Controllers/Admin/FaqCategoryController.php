<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\FaqCategory;
use App\Http\Requests\CreateFaqCategoryRequest;
use App\Http\Requests\UpdateFaqCategoryRequest;
use Illuminate\Http\Request;



class FaqCategoryController extends Controller {

	/**
	 * Display a listing of faqcategory
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $faqcategory = FaqCategory::all();

		return view('admin.faqcategory.index', compact('faqcategory'));
	}

	/**
	 * Show the form for creating a new faqcategory
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.faqcategory.create');
	}

	/**
	 * Store a newly created faqcategory in storage.
	 *
     * @param CreateFaqCategoryRequest|Request $request
	 */
	public function store(CreateFaqCategoryRequest $request)
	{
	    
		FaqCategory::create($request->all());

		return redirect()->route(config('quickadmin.route').'.faqcategory.index');
	}

	/**
	 * Show the form for editing the specified faqcategory.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$faqcategory = FaqCategory::find($id);
	    
	    
		return view('admin.faqcategory.edit', compact('faqcategory'));
	}

	/**
	 * Update the specified faqcategory in storage.
     * @param UpdateFaqCategoryRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateFaqCategoryRequest $request)
	{
		$faqcategory = FaqCategory::findOrFail($id);

        

		$faqcategory->update($request->all());

		return redirect()->route(config('quickadmin.route').'.faqcategory.index');
	}

	/**
	 * Remove the specified faqcategory from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		FaqCategory::destroy($id);

		return redirect()->route(config('quickadmin.route').'.faqcategory.index');
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
            FaqCategory::destroy($toDelete);
        } else {
            FaqCategory::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.faqcategory.index');
    }

}
