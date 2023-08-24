<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Products::get()->toArray();
        return view("products.products")->with(compact("products"));
    }
    public function add(){
        return view("products.add");
    }
    public function saveProduct(Request $req){
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'mrp' => 'required|numeric',
            'desc' => 'required|string',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }    
        $postData = $req->all();
        $product = new Products();
        $product->productName = $postData['name'];
        $product->title = $postData['title'];
        $product->mrp = $postData['mrp'];
        $product->status = 0;
        $product->description = $postData['desc'];
        $product->save();

        return redirect(url('/'));
    }
    public function updateStaus(Request $res,$ids,$type){
        if(!empty($ids) && !empty($type)){
            $status = 0;
            if($type=='active'){
                $status = 1;
            }
            // $product = Products::where("id",$id)->update(['status'=>$status]);
            $product = Products::find($ids,"id");
            if($type=='delete'){
                $product->delete();
                return redirect()->back();
            }
            $product->status = $status;
            $product->save();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
}
