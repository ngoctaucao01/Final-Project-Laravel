<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\cr;
use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *@param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view("admin.foods.index", ["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *@param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *@param  \App\cr  $cr
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Products;

        $products->name = $request->name; 
        $products->image = $request->image;
        $products->description = $request->description;
        $products->quantity = $request->quantity;
        $products->oldprice = $request->oldprice;
        $products->newprice = $request->newprice;
        $products->save();
        return redirect('/admin/foods/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \App\cr  $cr
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::find($id);
        return view("admin.foods.edit",["product"=>$product]);
    }


    /**
     * Update the specified resource in storage.
     *@param  \App\cr  $cr
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
            $name = $request->name;
            $image = $request->image;
            $description=$request->description;
            $quantity=$request->quantity;
            $oldprice=$request->oldprice;
            $newprice=$request->newprice;
            $product= Products::find($id);
    
            $product->name=$name;
            $product->image=$image;
            $product->description=$description;
            $product->quantity=$quantity;
            $product->oldprice=$oldprice;
            $product->newprice=$newprice;

            $product->save();
        return redirect('/admin/foods/index');
    }

    /**
     * Remove the specified resource from storage.
     *@param  \App\cr  $cr
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Products $products)
	{   
        $products = Products::find($id);
        $products->delete();
		return redirect('/admin/foods/index');

    }
    
}

