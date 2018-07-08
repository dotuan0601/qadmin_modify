<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\KnowledgeCategory;
use App\Http\Requests\CreateKnowledgeCategoryRequest;
use App\Http\Requests\UpdateKnowledgeCategoryRequest;
use Illuminate\Http\Request;



class KnowledgeCategoryController extends Controller {

	/**
	 * Display a listing of knowledgecategory
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $knowledgecategory = KnowledgeCategory::all();

		return view('admin.knowledgecategory.index', compact('knowledgecategory'));
	}

	/**
	 * Show the form for creating a new knowledgecategory
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.knowledgecategory.create');
	}

	/**
	 * Store a newly created knowledgecategory in storage.
	 *
     * @param CreateKnowledgeCategoryRequest|Request $request
	 */
	public function store(CreateKnowledgeCategoryRequest $request)
	{
	    
		KnowledgeCategory::create($request->all());

		return redirect()->route(config('quickadmin.route').'.knowledgecategory.index');
	}

	/**
	 * Show the form for editing the specified knowledgecategory.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$knowledgecategory = KnowledgeCategory::find($id);
	    
	    
		return view('admin.knowledgecategory.edit', compact('knowledgecategory'));
	}

	/**
	 * Update the specified knowledgecategory in storage.
     * @param UpdateKnowledgeCategoryRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateKnowledgeCategoryRequest $request)
	{
		$knowledgecategory = KnowledgeCategory::findOrFail($id);

        

		$knowledgecategory->update($request->all());

		return redirect()->route(config('quickadmin.route').'.knowledgecategory.index');
	}

	/**
	 * Remove the specified knowledgecategory from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		KnowledgeCategory::destroy($id);

		return redirect()->route(config('quickadmin.route').'.knowledgecategory.index');
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
            KnowledgeCategory::destroy($toDelete);
        } else {
            KnowledgeCategory::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.knowledgecategory.index');
    }

}
