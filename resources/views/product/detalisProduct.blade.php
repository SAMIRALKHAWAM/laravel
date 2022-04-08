@extends('layout.main')
@section('content')

<style>

    #log,#reg,#add,#show,#show2{
        color: white;
        background-color: #010d3f;
    }
.img{
    width: 400px;
    height: 350px;
    border: 2px solid #010d3f;
    margin-left: auto;
    margin-right: auto;
    background-color:white;

}

.table-dark{
background-color: rgba(255, 207, 28, 0.9);
position: relative;
margin-left: auto;
margin-right: auto;
margin-bottom: 80px;
}
td,th{
border: solid 2px;
text-align: center;
}
th{
width: 100px;
height: 100px;
}
.element{
    font-weight: bolder;
  font-size: 22px;
width: 700px;
height: 100px;
}
.elementone{
    font-weight: bolder;
  font-size: 22px;
    width: 300px;
height: 100px;

}
textarea{
    font-size: 14px;
    color: black;
    overflow: auto;
}
.hdetalis{
font-weight:bolder;
text-align: center;
border: 2px solid #010d3f;
background-color: rgba(255, 207, 28, 0.9);
border-radius: 50px;
}
</style>
<br><br><br><br>

<p class="hdetalis" style="font-size: 40px;width:400px;margin-left:auto;margin-right:auto;">Product Detalis</p>
<br><br><br>
<div class="img">
<img src=" {{$product->image}} " width="400px" height="350px">
</div>
<br>
<p class="hdetalis" style="font-size: 30px;width:800px;margin-left:auto;margin-right:auto;">{{$product->name}}</p>
<br>
<?php
use App\Models\User;
$user=User::find($product->user_id);
?>
 <br> <br>

<table class="table table-sm table-dark">

    <tbody>
      <tr>
            <tr>
        <th scope="row">#</th>
        <td colspan="2" class="element">product information</td>

      </tr>

        <th scope="row">1</th>
        <td class="elementone">Product Description</td>
        <td class="element"><textarea cols="80" rows="5" disabled style="resize: none;over-flow:auto;">
            {{$product->description}}
            </textarea></td>

      </tr>
      <tr>
        <th scope="row">2</th></form>
        <td class="elementone">Product Quantity</td>
        <td class="element">{{$product->quantity}}</td>

      </tr>
        <tr>
        <th scope="row">3</th></form>
        <td class="elementone">Product Category</td>
        <td class="element">{{ $product->category }}</td>

      </tr>
          <tr>
        <th scope="row">4</th></form>
        <td class="elementone">Price</td>
        <td class="element">{{ $product->price }} <br> {{$product->currency}}</td>

      </tr>
          <tr>
        <th scope="row">#</th></form>
        <td colspan="2" class="element">Content Information</td>
      </tr>
        <tr>
        <th scope="row">5</th></form>
        <td class="elementone">Company</td>

        <td class="element">{{ $product->company }}</td>
      </tr>
       <tr>
        <th scope="row">6</th></form>
        <td class="elementone">Publisher</td>
        <td class="element">{{ $user->name }}</td>
      </tr>
      <tr>
        <th scope="row">7</th></form>
        <td class="elementone">Phone</td>
        <td class="element">+{{ $user->phone }}</td>
      </tr>
      <tr>
        <th scope="row">8</th></form>
        <td class="elementone">Views</td>
        <td class="element">15</td>
      </tr>
    </tbody>
  </table>


@endsection
