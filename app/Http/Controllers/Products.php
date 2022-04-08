<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use phpDocumentor\Reflection\Utils;

class Products extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->category=='Foods') {
            $pubs = Product::where('category', '=', 'Food')->where('quantity', '>', 0)->orderby('id', 'desc')->simplePaginate(8);
            return view('product.showCategory', compact('pubs'));
        }
        else if ($request->category=='Games'){
            $pubs=Product::where('category','=','Games')->where('quantity','>',0)->orderby('id','desc')->simplePaginate(8);
            return view('product.showCategory',compact('pubs'));
        }
        else if ($request->category=='Clothes'){
            $pubs=Product::where('category','=','Clothes')->where('quantity','>',0)->orderby('id','desc')->simplePaginate(8);
            return view('product.showCategory',compact('pubs'));
        }
        else if ($request->category=='Shoes'){
            $pubs=Product::where('category','=','Shoes')->where('quantity','>',0)->orderby('id','desc')->simplePaginate(8);
            return view('product.showCategory',compact('pubs'));
        }
        else if ($request->category=='Accessories'){
            $pubs=Product::where('category','=','Accessories')->where('quantity','>',0)->orderby('id','desc')->simplePaginate(8);
            return view('product.showCategory',compact('pubs'));
        }
        else if ($request->category=='Electrical Tools'){
            $pubs=Product::where('category','=','Electrical Tools')->where('quantity','>',0)->orderby('id','desc')->simplePaginate(8);
            return view('product.showCategory',compact('pubs'));
        }
        else if ($request->category=='Technology'){
            $pubs=Product::where('category','=','Technology')->where('quantity','>',0)->orderby('id','desc')->simplePaginate(8);
            return view('product.showCategory',compact('pubs'));
        }
        else if ($request->category=='Cars'){
            $pubs=Product::where('category','=','Cars')->where('quantity','>',0)->orderby('id','desc')->simplePaginate(8);
            return view('product.showCategory',compact('pubs'));
        }
        else if ($request->category=='Real Estate'){
            $pubs=Product::where('category','=','Real Estate')->where('quantity','>',0)->orderby('id','desc')->simplePaginate(8);
            return view('product.showCategory',compact('pubs'));
        }
        else if ($request->category=='Other...'){
            $pubs=Product::where('category','=','Other...')->where('quantity','>',0)->orderby('id','desc')->simplePaginate(8);
            return view('product.showCategory',compact('pubs'));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexGames()
    {

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'company' => 'required',
            'image' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'currency' => 'required',
            'quantity' => 'required|numeric',
        ]);
        if ($request->hasFile('image')) {
            $file = $request->image;
            $new_file = time().$file->getClientOriginalName();
            $file->move('storage', $new_file);
        }
$product=new Product();
            $product->user_id = Auth::id();
        $product->name = $request->input('name');
            $product->company = $request->input('company');
            $product->image = "/storage/" . $new_file;
            $product->description = $request->input('description');
           $product->category = $request->input('category');
           $product->price = $request->input('price');
           $product->currency = $request->input('currency');
           $product->quantity = $request->input('quantity');
        $product->save();
        return redirect('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
    $product=Product::find($request->id);
    return view('product.detalisProduct',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
public function add(Product $product){
        if(session()->has('cart')){
            $cart=new Cart(session()->get('cart'));
        }
        else{
            $cart=new Cart();
        }
        $cart->addcart($product);
        session()->put('cart',$cart);
        return redirect()->route('showProducts')->with('success','The product has been added to the cart');
}

public function showCart(){
        if(session()->has('cart')){
            $cart=new Cart(session()->get('cart'));
        }
        else{
            $cart = new Cart();
        }

        return view('showCart',compact('cart'));
}






}














