<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Industry;
class CompanyController extends Controller
{
    //
    #Create a compnay
	public function createcompany()
	{
		$data = Industry::all();
		return view('industry.create',compact('data'));
	}

#get a compnay
	public function getcompany($id)
	{
		$data = Industry::all()->where('id',$id)->first();
		return $data;
	}

#get a compnay
	public function deletecompany($id)
	{
		$data = Industry::findorfail($id);
		$data->delete();
		return back()->with('danger','deleted successfully');
	
	}
#Store Company
	public function storecompany(Request $request)
	{
	   $data = new Industry();
       $data->name = $request->input('name');
       $data->reg_no = $request->input('reg_no');
       $data->phy_address = $request->input('phy_address');
       $data->email = $request->input('email');
       $data->phone = $request->input('phone');
       $data->desc = $request->input('desc');
       $data->attachments = $request->input('attachments');
       $data->save();

       return back()->with('status','Registered');
	}

#update Company
	public function updatecompany(Request $request)
	{
	   $id = $request->input('company_id');
	   $data = Industry::findorfail($id);
       $data->name = $request->input('name');
       $data->reg_no = $request->input('reg_no');
       $data->phy_address = $request->input('phy_address');
       $data->email = $request->input('email');
       $data->phone = $request->input('phone');
       $data->desc = $request->input('desc');
       $data->attachments = $request->input('attachments');
       $data->save();

       return back()->with('status','Registered');
	}
}
