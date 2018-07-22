<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\FaqList;
use App\Http\Requests\CreateFaqListRequest;
use App\Http\Requests\UpdateFaqListRequest;
use Illuminate\Http\Request;



class FaqListController extends Controller {

	/**
	 * Display a listing of faqlist
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $faqlist = FaqList::all();

		return view('admin.faqlist.index', compact('faqlist'));
	}

	/**
	 * Show the form for creating a new faqlist
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.faqlist.create');
	}

	/**
	 * Store a newly created faqlist in storage.
	 *
     * @param CreateFaqListRequest|Request $request
	 */
	public function store(CreateFaqListRequest $request)
	{
	    
		FaqList::create($request->all());

		return redirect()->route(config('quickadmin.route').'.faqlist.index');
	}

	/**
	 * Show the form for editing the specified faqlist.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$faqlist = FaqList::find($id);
	    
	    
		return view('admin.faqlist.edit', compact('faqlist'));
	}

	/**
	 * Update the specified faqlist in storage.
     * @param UpdateFaqListRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateFaqListRequest $request)
	{
		$faqlist = FaqList::findOrFail($id);

        

		$faqlist->update($request->all());

		return redirect()->route(config('quickadmin.route').'.faqlist.index');
	}

	/**
	 * Remove the specified faqlist from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		FaqList::destroy($id);

		return redirect()->route(config('quickadmin.route').'.faqlist.index');
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
            FaqList::destroy($toDelete);
        } else {
            FaqList::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.faqlist.index');
    }

}
