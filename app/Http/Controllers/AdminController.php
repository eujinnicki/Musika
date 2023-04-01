<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function view_product()
    {
        return view('admin.product');
    }

    public function add_product(Request $request)
    {
       $product = new product; 
       $product->name = $request-> name;
        $product->description = $request->description;
      
        $product->Price= $request->price;

       $product->quantity = $request->quantity;

        /*getting image to table-->*/
       $image = $request->image;

       $imagename = time().'.'.$image->getClientOriginalExtension();
       
       $request->image->move('product', $imagename);

       $product->image=$imagename;

       $product->save();

       return redirect()->back();
    }
}
