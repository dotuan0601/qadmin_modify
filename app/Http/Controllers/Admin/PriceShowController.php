<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\PriceShow;
use App\Http\Requests\CreatePriceShowRequest;
use App\Http\Requests\UpdatePriceShowRequest;
use Illuminate\Http\Request;



class PriceShowController extends Controller {

	/**
	 * Display a listing of priceshow
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $priceshow = PriceShow::all();

		return view('admin.priceshow.index', compact('priceshow'));
	}

	/**
	 * Show the form for creating a new priceshow
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.priceshow.create');
	}

	/**
	 * Store a newly created priceshow in storage.
	 *
     * @param CreatePriceShowRequest|Request $request
	 */
	public function store(CreatePriceShowRequest $request)
	{
	    
		PriceShow::create($request->all());

		return redirect()->route(config('quickadmin.route').'.priceshow.index');
	}

	/**
	 * Show the form for editing the specified priceshow.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$priceshow = PriceShow::find($id);
	    
	    
		return view('admin.priceshow.edit', compact('priceshow'));
	}

	/**
	 * Update the specified priceshow in storage.
     * @param UpdatePriceShowRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdatePriceShowRequest $request)
	{
		$priceshow = PriceShow::findOrFail($id);

        

		$priceshow->update($request->all());

		return redirect()->route(config('quickadmin.route').'.priceshow.index');
	}

	/**
	 * Remove the specified priceshow from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		PriceShow::destroy($id);

		return redirect()->route(config('quickadmin.route').'.priceshow.index');
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
            PriceShow::destroy($toDelete);
        } else {
            PriceShow::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.priceshow.index');
    }

}
