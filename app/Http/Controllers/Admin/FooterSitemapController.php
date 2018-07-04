<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\FooterSitemap;
use App\Http\Requests\CreateFooterSitemapRequest;
use App\Http\Requests\UpdateFooterSitemapRequest;
use Illuminate\Http\Request;



class FooterSitemapController extends Controller {

	/**
	 * Display a listing of footersitemap
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $footersitemap = FooterSitemap::all();

		return view('admin.footersitemap.index', compact('footersitemap'));
	}

	/**
	 * Show the form for creating a new footersitemap
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.footersitemap.create');
	}

	/**
	 * Store a newly created footersitemap in storage.
	 *
     * @param CreateFooterSitemapRequest|Request $request
	 */
	public function store(CreateFooterSitemapRequest $request)
	{
	    
		FooterSitemap::create($request->all());

		return redirect()->route(config('quickadmin.route').'.footersitemap.index');
	}

	/**
	 * Show the form for editing the specified footersitemap.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$footersitemap = FooterSitemap::find($id);
	    
	    
		return view('admin.footersitemap.edit', compact('footersitemap'));
	}

	/**
	 * Update the specified footersitemap in storage.
     * @param UpdateFooterSitemapRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateFooterSitemapRequest $request)
	{
		$footersitemap = FooterSitemap::findOrFail($id);

        

		$footersitemap->update($request->all());

		return redirect()->route(config('quickadmin.route').'.footersitemap.index');
	}

	/**
	 * Remove the specified footersitemap from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		FooterSitemap::destroy($id);

		return redirect()->route(config('quickadmin.route').'.footersitemap.index');
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
            FooterSitemap::destroy($toDelete);
        } else {
            FooterSitemap::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.footersitemap.index');
    }

}
