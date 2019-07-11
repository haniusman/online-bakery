@extends('layouts.main')

@section('cake-css')
.cake-cover{
  width:80%;
  max-height: 400px;
  margin: auto;
  background-color; coral;
}

/*Grid css*/
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
  height: 45%;
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
@endsection

    @section('cake')
    <br><br><br>
    <div class="cake-cover">
    {{Html::image('/Images/sl1.jpg','alt',array('width'=>'100%','height'=>300))}}
    </div>
    <!-- Cakes Grid -->
    <div class = "cake-container">
      <div class="cake-heading"><h1>Cakes</h1></div>
      <hr>
      <hr>

         <div class="cake-grid-container">

            @foreach($items as $x)
                @if($x->CatId == 1)
              <div class="cc-grid-item">
                 <img src="http://localhost/bakery/public/Images/{{$x->path}}" class="inner-item-cc" width="100%" height="100%" alt="alt">


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
              @if($x->CatId == 1)

                @endif
            @endforeach
          </div>
    </div>
@endsection
