@extends('layout.main')

@section('content')
<style>
    #log,#reg{
        color: white;
background-color: #010d3f;
    }
#add{
    color: black;
    background-color: #ffcf1c;
}

</style>
<div class="add_product">
<form action="{{ route('storeProduct') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <br>
    <h1 class="h1">Add Product</h1>
    <br><br>
<label class="text-md-end">Product Name</label><br>

    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required autocomplete="name">
    @error('name')
    <br>
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror
    <br><br>
<label class="text-md-end">The Manufacture Company</label><br>
    <input type="text" name="company" id="company" class="form-control @error('company') is-invalid @enderror" required autocomplete="company">
    @error('company')
    <br>
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror
    <br>
    <br>

<label class="text-md-end">Product Image</label><br>
<input type="file" id="image" name="image" class="image @error('image') is-invalid @enderror" required autocomplete="image">
    @error('image')
    <br>
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror
    <br>
    <br>


<label class="text-md-end">Product Description</label><br>
<textarea id="description" name="description" rows="4" cols="50" class="form-control @error('description') is-invalid @enderror" required autocomplete="description">
</textarea>
    @error('description')
    <br>
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror
    <br>
    <br>
<label class="text-md-end">Product Category</label><br>
    <select name="category" id="category" class="form-control @error('category')  is-invalid @enderror" required autocomplete="category">
        <option class="option" disabled selected value></option>
        <option class="option">Food</option>
        <option class="option">Games</option>
        <option class="option">Clothes</option>
        <option class="option">Shoes</option>
        <option class="option">Accessories</option>
        <option class="option">Electrical Tools</option>
        <option class="option">Technology</option>
        <option class="option">Cars</option>
        <option class="option">Real Estate</option>
        <option class="option">Other...</option>
    </select>
    @error('category')
    <br>

    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror
    <br>
    <br>



<label class="text-md-end">Product price - Currency</label><br>
    <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" required autocomplete="price">
    @error('price')
    <br>
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror


<select id="currency" name="currency" class="private @error('currency')  is-invalid @enderror" required autocomplete="currency">
    <option class="option" disabled selected value></option>
    <option class="option">American Dollar</option>
    <option class="option">Euro</option>
    <option class="option">Saudi Riyal</option>
    <option class="option">UAE Dirhams</option>
    <option class="option">Omani Riyal</option>
    <option class="option">Yemeni Riyal</option>
    <option class="option">Kuwaiti Dinar</option>
    <option class="option">Bahraini Dinar</option>
    <option class="option">Qatari Riyal</option>
</select>
    @error('currency')
    <br>
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror
    <br><br>


    <label class="text-md-end">Product quantity</label><br>
    <input type="text" name="quantity" id="quantity" class="form-control @error('quantity') is-invalid @enderror" required autocomplete="description">
    @error('quantity')
    <br>
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror
    <br>
    <br>
    <br>

    <button type="submit" class="btn btn-primary">
        {{ __('Submit') }}
    </button>
</form>
</div>
@endsection
