<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\KnowledgeVideo;
use App\Http\Requests\CreateKnowledgeVideoRequest;
use App\Http\Requests\UpdateKnowledgeVideoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\KnowledgeCategory;


class KnowledgeVideoController extends Controller {

	/**
	 * Display a listing of knowledgevideo
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $knowledgevideo = KnowledgeVideo::with("knowledgecategory")->get();

		return view('admin.knowledgevideo.index', compact('knowledgevideo'));
	}

	/**
	 * Show the form for creating a new knowledgevideo
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $knowledgecategory = KnowledgeCategory::pluck("name", "id")->prepend('Please select', 0);

	    
	    return view('admin.knowledgevideo.create', compact("knowledgecategory"));
	}

	/**
	 * Store a newly created knowledgevideo in storage.
	 *
     * @param CreateKnowledgeVideoRequest|Request $request
	 */
	public function store(CreateKnowledgeVideoRequest $request)
	{
	    $request = $this->saveFiles($request);
		KnowledgeVideo::create($request->all());

		return redirect()->route(config('quickadmin.route').'.knowledgevideo.index');
	}

	/**
	 * Show the form for editing the specified knowledgevideo.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$knowledgevideo = KnowledgeVideo::find($id);
	    $knowledgecategory = KnowledgeCategory::pluck("name", "id")->prepend('Please select', 0);

	    
		return view('admin.knowledgevideo.edit', compact('knowledgevideo', "knowledgecategory"));
	}

	/**
	 * Update the specified knowledgevideo in storage.
     * @param UpdateKnowledgeVideoRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateKnowledgeVideoRequest $request)
	{
		$knowledgevideo = KnowledgeVideo::findOrFail($id);

        $request = $this->saveFiles($request);

		$knowledgevideo->update($request->all());

		return redirect()->route(config('quickadmin.route').'.knowledgevideo.index');
	}

	/**
	 * Remove the specified knowledgevideo from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		KnowledgeVideo::destroy($id);

		return redirect()->route(config('quickadmin.route').'.knowledgevideo.index');
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
            KnowledgeVideo::destroy($toDelete);
        } else {
            KnowledgeVideo::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.knowledgevideo.index');
    }

}
