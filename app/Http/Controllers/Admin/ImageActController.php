<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\ImageAct;
use App\Http\Requests\CreateImageActRequest;
use App\Http\Requests\UpdateImageActRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class ImageActController extends Controller {

	/**
	 * Display a listing of imageact
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $imageact = ImageAct::all();

		return view('admin.imageact.index', compact('imageact'));
	}

	/**
	 * Show the form for creating a new imageact
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.imageact.create');
	}

	/**
	 * Store a newly created imageact in storage.
	 *
     * @param CreateImageActRequest|Request $request
	 */
	public function store(CreateImageActRequest $request)
	{
	    $request = $this->saveFiles($request);
		ImageAct::create($request->all());

		return redirect()->route(config('quickadmin.route').'.imageact.index');
	}

	/**
	 * Show the form for editing the specified imageact.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$imageact = ImageAct::find($id);
	    
	    
		return view('admin.imageact.edit', compact('imageact'));
	}

	/**
	 * Update the specified imageact in storage.
     * @param UpdateImageActRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateImageActRequest $request)
	{
		$imageact = ImageAct::findOrFail($id);

        $request = $this->saveFiles($request);

		$imageact->update($request->all());

		return redirect()->route(config('quickadmin.route').'.imageact.index');
	}

	/**
	 * Remove the specified imageact from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		ImageAct::destroy($id);

		return redirect()->route(config('quickadmin.route').'.imageact.index');
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
            ImageAct::destroy($toDelete);
        } else {
            ImageAct::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.imageact.index');
    }

}
