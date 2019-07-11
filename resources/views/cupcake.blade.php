@extends('layouts.main')

@section('cupcake-css')
.cake-grid-container {
  width:70%;
  height: auto;
  margin:auto;
  margin-bottom: 40px;
  display: grid;
  grid-template-columns: auto auto auto auto;
  background-color: coral;
  padding: 10px;
}

.grid-item {
  width:97%;
  height: 90%;
  margin:auto;
  margin-top:5px;
  margin-bottom:0px;
  background-color: #ffdab9;
  border: 1px solid coral;
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
.cc-grid-item {
  width:95%;
  height: 195px;
  margin:auto;
  margin-top:5px;
  margin-bottom:12px;
  background-color: #ffdab9;
  border: 1px solid coral;
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
.item-info{
  width:97%;
  height:;
  margin:auto;
  border-radius:5%;
  margin-top:5px;
  color: #8B4513;
  font-size:14px;
  font-family:Helvetica;
  padding:10px;
  /*background-color: #ffdab9;*/
  border: 1px solid coral;
  line-height:inherit;
  text-align: center;
}
.inner-item{
  width:100%;
  height: 100%;
  font-size: 30px;
  text-align: center;
}
.grid-item:hover .inner-item{
  opacity:0.2;
}
.cc-grid-item:hover .inner-item-cc{
  opacity:0.4;
}
.grid-item:hover .cart_opt{
  opacity:1;
}
.cake-heading{
  text-align:center;
  background-color: #fff;
  color: coral;
  font-family:Lucida;
}
.cake-cover{
  margin:auto;
  width:80%;
  }

      .details{
       width: 60%;
       height: 100px;
       margin:auto;
       padding:30px;
       background-color: #78460E;
      }
      .pop-up-item-image {
        display: inline-block;
        width:100px;
        height: 450px;
        background-color: #ffdab9;
        border: 1px solid coral;
        padding: 5px;
        font-size: 30px;
        text-align: center;
      }
      .pop-up-item-info{
        width:200px;
        height: 70%;
        display:inline;
        color: #8B4513;
        font-size:14px;
        font-family:Helvetica;
        padding:0px;
        background-color: blue;
        border: 1px solid coral;
        line-height:inherit;
        text-align: center;
      }
      .item-details{
        font-size: 15px;
        text-align: left;
        padding-left: 20px;
      }

  .popup-grid-container {
    display: grid;
    grid-template-columns: auto auto;
    grid-gap: 5px;
    background-color: #fff;
    padding: 10px;
  }

@endsection
@section('cupcake')
<br><br><br>
<div id="back">
<div class="cake-cover">
{{Html::image('/Images/cupcakecover.jpg','alt',array('width'=>'100%','height'=>350))}}
</div>
<!-- Cupcakes Grid -->
<div class = "cake-container">
  <div class="cake-heading"><h1>Cupcakes</h1></div>
  <hr>
  <hr>

     <div class="cake-grid-container">

        @foreach($items as $x)
            @if($x->CatId == 2)
          <div class="cc-grid-item">
             <!--  {{Html::image('/Images/Cakes/sp1.jpg','alt',array('width'=>'100%','height'=>'100%'))}}-->
             <img src="http://localhost/bakery/public/Images/{{$x->path}}" class="inner-item-cc" width="100%" height="100%" alt="alt">
              <!--<div class="cart_opt">
              <i class="fa fa-shopping-cart"></i>
            </div>-->

          </div>
          <div class="item-info">
            <p style="font-weight:bold;">{{$x->iname}}</p>
            <p>{{$x->price}}</p>

            <div id = "cart_button">
              <button style="background:transparent; "class="btn" onclick="ItemDetails();"><i style="font-size: 40px;"class="fa fa-shopping-cart"></i></button>
            </div>
          </div>

          @endif

        @endforeach
        @foreach($items as $x)
          @if($x->CatId == 2)

            @endif
        @endforeach
      </div>
</div>



</div>
<!-- pop-up-->


<div class="details" id="details" style="display:none; z-index:9999;">
  <div class="close-button" onclick="CloseDetails();">
    {{Html::image('/Images/close1.jpg','alt',array('width'=>'3%','height'=>'3%'))}}

  </div>
<div class="pop-up-grid-container">
<div class="pop-up-item-image">
<!--{{Html::image('/Images/br2.jpg','alt',array('width'=>'95%','height'=>'95%'))}}-->
<img src="http://localhost/bakery/public/Images/{{$x->path}}" class="inner-item-cc" width="85%" height="85%" alt="alt">
</div>
<div class="pop-up-item-info" style="">
<div class="item-details">
{!!Form::open(['method'=>'POST','action'=>'ItemsController@store','files'=>true])!!}
<p style="font-weight:bold;">{{$x->iname}}</p>
<p>{{$x->price}}</p>
<p>{{$x->size}}</p>
<label> Choose Size
<select name="size">
<option value="7 inches">7 inches</option>
<option value="9 inches">9 inches</option>
<option value="12 inches">12 inches</option>
<option value="15 inches">15 inches</option>
<option value="5"></option>
</select>
</label>
<div class="form-group">
<label>Add to cart
{!!Form::number('iname',null,['class'=>'form-control'])!!}
</label>
</div>
<a href="#" style="color:black;font-size:14px;">Add to whishlist </a>
<br>
<input type="submit" name="submit">
{!!Form::close()!!}
</div>

</div>
</div>

</div>
</body>
<script>
function ItemDetails()
{alert("here");
    document.getElementById("back").style.opacity = "0.2";
 document.getElementById("details").style.display ="block";
}
function CloseDetails()
{
 document.getElementById("details").style.display = "none";

}
</script>
@endsection
