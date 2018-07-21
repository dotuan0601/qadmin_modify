<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\FaqQuestion;
use App\Http\Requests\CreateFaqQuestionRequest;
use App\Http\Requests\UpdateFaqQuestionRequest;
use Illuminate\Http\Request;

use App\FaqCategory;


class FaqQuestionController extends Controller {

	/**
	 * Display a listing of faqquestion
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $faqquestion = FaqQuestion::with("faqcategory")->get();

		return view('admin.faqquestion.index', compact('faqquestion'));
	}

	/**
	 * Show the form for creating a new faqquestion
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $faqcategory = FaqCategory::pluck("name", "id")->prepend('Please select', 0);

	    
	    return view('admin.faqquestion.create', compact("faqcategory"));
	}

	/**
	 * Store a newly created faqquestion in storage.
	 *
     * @param CreateFaqQuestionRequest|Request $request
	 */
	public function store(CreateFaqQuestionRequest $request)
	{
	    
		FaqQuestion::create($request->all());

		return redirect()->route(config('quickadmin.route').'.faqquestion.index');
	}

	/**
	 * Show the form for editing the specified faqquestion.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$faqquestion = FaqQuestion::find($id);
	    $faqcategory = FaqCategory::pluck("name", "id")->prepend('Please select', 0);

	    
		return view('admin.faqquestion.edit', compact('faqquestion', "faqcategory"));
	}

	/**
	 * Update the specified faqquestion in storage.
     * @param UpdateFaqQuestionRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateFaqQuestionRequest $request)
	{
		$faqquestion = FaqQuestion::findOrFail($id);

        

		$faqquestion->update($request->all());

		return redirect()->route(config('quickadmin.route').'.faqquestion.index');
	}

	/**
	 * Remove the specified faqquestion from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		FaqQuestion::destroy($id);

		return redirect()->route(config('quickadmin.route').'.faqquestion.index');
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
            FaqQuestion::destroy($toDelete);
        } else {
            FaqQuestion::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.faqquestion.index');
    }

}
