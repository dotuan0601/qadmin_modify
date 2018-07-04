<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\FooterInfo;
use App\Http\Requests\CreateFooterInfoRequest;
use App\Http\Requests\UpdateFooterInfoRequest;
use Illuminate\Http\Request;



class FooterInfoController extends Controller {

	/**
	 * Display a listing of footerinfo
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $footerinfo = FooterInfo::all();

		return view('admin.footerinfo.index', compact('footerinfo'));
	}

	/**
	 * Show the form for creating a new footerinfo
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.footerinfo.create');
	}

	/**
	 * Store a newly created footerinfo in storage.
	 *
     * @param CreateFooterInfoRequest|Request $request
	 */
	public function store(CreateFooterInfoRequest $request)
	{
	    
		FooterInfo::create($request->all());

		return redirect()->route(config('quickadmin.route').'.footerinfo.index');
	}

	/**
	 * Show the form for editing the specified footerinfo.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$footerinfo = FooterInfo::find($id);
	    
	    
		return view('admin.footerinfo.edit', compact('footerinfo'));
	}

	/**
	 * Update the specified footerinfo in storage.
     * @param UpdateFooterInfoRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateFooterInfoRequest $request)
	{
		$footerinfo = FooterInfo::findOrFail($id);

        

		$footerinfo->update($request->all());

		return redirect()->route(config('quickadmin.route').'.footerinfo.index');
	}

	/**
	 * Remove the specified footerinfo from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		FooterInfo::destroy($id);

		return redirect()->route(config('quickadmin.route').'.footerinfo.index');
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
            FooterInfo::destroy($toDelete);
        } else {
            FooterInfo::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.footerinfo.index');
    }

}
