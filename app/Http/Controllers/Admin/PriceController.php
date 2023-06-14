<?php
  
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\price;

class PriceController extends Controller
{
    public function adminpayment()
    {
        $price = price::get();

        return view('admin.PackagePrice.Price',compact('price'));
    }

    public function editpricepage($id)
    {
        $price = price::where('id',$id)->first();

        if ($id == '7') {
            return view('admin.PackagePrice.EditTakedownPrice',compact('price'));
        }
        else{
    	   return view('admin.PackagePrice.EditPrice',compact('price'));
        }
    }

    public function priceedited(Request $request, $id)
    {
        $price = price::where('id',$id)->update([
            'regular_price' => $request->regular_price,
            'discount' => $request->discount,
            'price' => $request->price,
            'registered_works' => $request->registered_works,
            'file_per_work' => $request->file_per_work,
            'protected_websites' => $request->protected_websites,
            'protected_pages' => $request->protected_pages,
            'backup_storage' => $request->backup_storage,
            'takedown_discount' => $request->takedown_discount,
            'https_delievery' => $request->https_delievery,
            'website_spy' => $request->website_spy,
            'verified_status' => $request->verified_status,
        ]);

    	return redirect('admin/price/edit/'.$id)->with('successful_message','Price Changed Successfully');
    }

     public function takedownpriceedited(Request $request, $id)
    {
        $price = price::where('id',$id)->update([
            'regular_price' => $request->regular_price,
            'discount' => $request->discount,
            'price' => $request->price
        ]);

        return redirect('admin/price/edit/'.$id)->with('successful_message','Price Changed Successfully');
    }

}