<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    //

       public function project()
    {
    	return view('pages.projects');
    }

      public function calendar()
    {
    	return view('pages.calendar');
    }

        #Create a compnay
	public function createproduct()
	{
		 $token = time();
      $t = date("Y",strtotime("now"));
      $token = strtoupper('PROD-'.$token.'-'.$t);
		$data = Product::all();
		return view('settings.product',compact('data','token'));
	}

	     #Create a compnay
	public function viewproduct()
	{
		 
		$data = Product::all();
		//return $data;
		return view('settings.productindex',compact('data'));
	}

#get a compnay
	public function getproduct($id)
	{
		$data = Product::all()->where('id',$id)->first();
		return $data;
	}

#get a compnay
	public function deleteproduct($id)
	{
		$data = Product::findorfail($id);
		$data->delete();
		return back()->with('danger','deleted successfully');
	
	}
#product product
	public function storeproduct(Request $request)
	{
	   $data = new Product();
		$data->token = $request->input('token');
		$data->name = $request->input('name');
		$data->price = $request->input('price');
		$data->desc = $request->input('desc');
		$data->status = $request->input('status');
		$data->unit = $request->input('unit');
		  $media = $request->file('file');
		   // return $media;
        if($request->hasfile('file'))
             {  
                    $destinationPath = public_path('images/');
                    $filename1 = time().'-'.$media->getClientOriginalName();
                    $media->move($destinationPath, $filename1);
                    $files1 = $filename1;
                    $data->image = $files1;
                
            }
		$data->current_stock_level = $request->input('current_stock_level');
		$data->min_level_overall = $request->input('min_level_overall');
		// $data->min_level_store = $request->input('min_level_store');
       $data->save();



       return redirect('product-view')->with('status','Registered');
	}

#update product
	public function updateproduct(Request $request)
	{
	   $id = $request->input('product_id');
	   $data = Product::findorfail($id);
    		$data->name = $request->input('name');
		$data->price = $request->input('price');
		$data->desc = $request->input('desc');
		$data->status = $request->input('status');
		$data->unit = $request->input('unit');
		$data->current_stock_level = $request->input('current_stock_level');
		$data->min_level_overall = $request->input('min_level_overall');

       $data->save();

       return back()->with('status','Registered');
	}
}
