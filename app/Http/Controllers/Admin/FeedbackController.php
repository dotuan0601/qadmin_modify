<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Feedback;
use App\Http\Requests\CreateFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use Illuminate\Http\Request;



class FeedbackController extends Controller {

	/**
	 * Display a listing of feedback
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $feedback = Feedback::all();

		return view('admin.feedback.index', compact('feedback'));
	}

	/**
	 * Show the form for creating a new feedback
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.feedback.create');
	}

	/**
	 * Store a newly created feedback in storage.
	 *
     * @param CreateFeedbackRequest|Request $request
	 */
	public function store(CreateFeedbackRequest $request)
	{
	    
		Feedback::create($request->all());

		return redirect()->route(config('quickadmin.route').'.feedback.index');
	}

	/**
	 * Show the form for editing the specified feedback.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$feedback = Feedback::find($id);
	    
	    
		return view('admin.feedback.edit', compact('feedback'));
	}

	/**
	 * Update the specified feedback in storage.
     * @param UpdateFeedbackRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateFeedbackRequest $request)
	{
		$feedback = Feedback::findOrFail($id);

        

		$feedback->update($request->all());

		return redirect()->route(config('quickadmin.route').'.feedback.index');
	}

	/**
	 * Remove the specified feedback from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Feedback::destroy($id);

		return redirect()->route(config('quickadmin.route').'.feedback.index');
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
            Feedback::destroy($toDelete);
        } else {
            Feedback::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.feedback.index');
    }

}
