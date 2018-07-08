<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\AboutArchive;
use App\Http\Requests\CreateAboutArchiveRequest;
use App\Http\Requests\UpdateAboutArchiveRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class AboutArchiveController extends Controller {

	/**
	 * Display a listing of aboutarchive
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $aboutarchive = AboutArchive::all();

		return view('admin.aboutarchive.index', compact('aboutarchive'));
	}

	/**
	 * Show the form for creating a new aboutarchive
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.aboutarchive.create');
	}

	/**
	 * Store a newly created aboutarchive in storage.
	 *
     * @param CreateAboutArchiveRequest|Request $request
	 */
	public function store(CreateAboutArchiveRequest $request)
	{
	    $request = $this->saveFiles($request);
		AboutArchive::create($request->all());

		return redirect()->route(config('quickadmin.route').'.aboutarchive.index');
	}

	/**
	 * Show the form for editing the specified aboutarchive.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$aboutarchive = AboutArchive::find($id);
	    
	    
		return view('admin.aboutarchive.edit', compact('aboutarchive'));
	}

	/**
	 * Update the specified aboutarchive in storage.
     * @param UpdateAboutArchiveRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateAboutArchiveRequest $request)
	{
		$aboutarchive = AboutArchive::findOrFail($id);

        $request = $this->saveFiles($request);

		$aboutarchive->update($request->all());

		return redirect()->route(config('quickadmin.route').'.aboutarchive.index');
	}

	/**
	 * Remove the specified aboutarchive from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		AboutArchive::destroy($id);

		return redirect()->route(config('quickadmin.route').'.aboutarchive.index');
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
            AboutArchive::destroy($toDelete);
        } else {
            AboutArchive::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.aboutarchive.index');
    }

}
