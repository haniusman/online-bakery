<!DOCTYPE html>
<html>
<head>
  <style>
  .cake-grid-container {
    width:70%;
    height: 270px;
    margin:auto;
    display: grid;
    grid-template-columns: auto auto auto auto;
    background-color: coral;
    padding: 10px;
  }

  .grid-item {
    width:65%;
    height: 60%;
    margin: auto;
    margin-top: 5px;
    margin-bottom: 0px;
    background-color: #ffdab9;
    border: 1px solid coral;
    padding: 20px;
    text-align: center;
  }
  .item-info{
    width:75%;
    height: 55%;
    margin: auto;
    margin-top: 0px;
    margin-bottom: 5px;
    color:sandybrown;
    font-size:14px;
    font-family:Helvetica;
    padding:5px;
    background-color: #ffdab9;
    border: 1px solid coral;
    line-height:inherit;
    text-align: center;
  }

  .inner-item{
    width:100%;
    height: 100%;
    text-align: center;
  }
  .grid-item:hover .inner-item{
    opacity:0.2;
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
  </style>
</head>
<body>


  @foreach($items as $x)
<li>{{$x->size}}</li>
<li>{{$x->stock}}</li>
<li>{{$x->iname}}</li>
<li>{{$x->price}}</li>
{{Html::image('images/'.$x->path,'alt',array('width'=>70, 'height'=>70))}}
  @endforeach


<div class = "cake-container">
<div class="cake-heading"><h1>Cakes</h1></div>
<div class="cake-grid-container">
  @foreach($items as $x)
  <div class="grid-item">
  <!--  {{Html::image('/Images/Cakes/sp1.jpg','alt',array('width'=>'100%','height'=>'100%'))}}-->
  <img src="http://localhost/bakery/public/Images/{{$x->path}}" class="inner-item" width="100%" height="100%" alt="alt">
<!--  {{Html::image('images/'.$x->path,'alt',array('width'=>'100%', 'height'=>'100%'))}}-->
<!--<div class="cart_opt">
  <i class="fa fa-shopping-cart"></i>
</div>-->
  </div>
  @endforeach
@foreach($items as $x)
  <div class="item-info">
    <h4>{{$x->iname}}</h4>
    <h4>{{$x->size}}</h4>
  </div>
  @endforeach
</div>

</div>
</body>
</html>
