<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\ProductDetail;
use App\Http\Requests\CreateProductDetailRequest;
use App\Http\Requests\UpdateProductDetailRequest;
use Illuminate\Http\Request;

use App\Products;


class ProductDetailController extends Controller {

	/**
	 * Display a listing of productdetail
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $productdetail = ProductDetail::with("products")->get();

		return view('admin.productdetail.index', compact('productdetail'));
	}

	/**
	 * Show the form for creating a new productdetail
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $products = Products::pluck("name", "id")->prepend('Please select', 0);

	    
	    return view('admin.productdetail.create', compact("products"));
	}

	/**
	 * Store a newly created productdetail in storage.
	 *
     * @param CreateProductDetailRequest|Request $request
	 */
	public function store(CreateProductDetailRequest $request)
	{
	    
		ProductDetail::create($request->all());

		return redirect()->route(config('quickadmin.route').'.productdetail.index');
	}

	/**
	 * Show the form for editing the specified productdetail.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$productdetail = ProductDetail::find($id);
	    $products = Products::pluck("name", "id")->prepend('Please select', 0);

	    
		return view('admin.productdetail.edit', compact('productdetail', "products"));
	}

	/**
	 * Update the specified productdetail in storage.
     * @param UpdateProductDetailRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateProductDetailRequest $request)
	{
		$productdetail = ProductDetail::findOrFail($id);

        

		$productdetail->update($request->all());

		return redirect()->route(config('quickadmin.route').'.productdetail.index');
	}

	/**
	 * Remove the specified productdetail from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		ProductDetail::destroy($id);

		return redirect()->route(config('quickadmin.route').'.productdetail.index');
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
            ProductDetail::destroy($toDelete);
        } else {
            ProductDetail::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.productdetail.index');
    }

}
