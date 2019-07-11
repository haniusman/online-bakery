@extends('layouts.main')

@section('othercss')

.mySlides {display: none;}
      img {vertical-align: middle;}

      /* Slideshow container */
      .slideshow-container {
        width:100%;
        position: relative;
        margin: auto;
        border-top: 0px;
      }

      /* Caption text */
      .text1 {
       position: absolute;
        bottom: 45%;
        width: 100%;
        left:200px;
        text-align: left;
           }
      .text2 {
            position: absolute;
             bottom: 45%;
             width: 100%;
             left:800px;
             text-align: left;
                }
      .text3 {
      position: absolute;
     bottom: 45%;
   width: 100%;
     left:200px;
         text-align: left;
          }
          .text4 {
          position: absolute;
         bottom: 30px;
        width: 100%;
         left:700px;
             float: left;
             bacground:opaque;
              }
              .text5 {
              position: absolute;
             bottom: 30%;
            width: 100%;
             left:600px;
                 text-align: left;
                 bacground:opaque;
                  }

      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }

      /* The dots/bullets/indicators */
      .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }

      .active {
        background-color: #717171;
      }

      /* Fading animation */
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 3s;
        animation-name: fade;
        animation-duration: 1.5s;
      }

      @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity:1}
      }

      @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
      }

      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .text {font-size: 11px}
      }
      .but
      {
        position:absolute;
        color:yellow;
        border-radius:25px;
        padding:10px;
        background-color:coral;
      }
      /*About us div */
      .about-us{
        width:100%;
        height:auto;
        margin:auto;
        text-decoration:none;
      }
      .about-us-text{
        margin:20px;
        padding:20px;
        color:sandybrown;
        text-align:center;
        text-decoration:none;
      }
      /*Grid css*/
      .cake-grid-container {
        width:70%;
        height: 370px;
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
        height: 75%;
        margin:auto;
        border-radius:5%;
        margin-top:5px;
        color: #8B4513;
        font-size:14px;
        font-family:Helvetica;
        padding:10px;
        background-color: #ffdab9;
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
        opacity:0.4;
      }
      .cc-grid-item:hover .inner-item-cc{
        opacity:0.4;
      }
      .grid-item:hover .cart_opt{
        opacity:1;
      }
      .basic-info{
        height:70%;
      }
      #cart_button{
        height:30%;
      }
      .cake-heading{
        text-align:center;
        background-color: #fff;
        color: coral;
        font-family:Lucida;
      }
      .cart_opt{
      /*  z-index:99;
        position:relative;
        transition:0.5s;
        opacity:0;
        width:25%; */
        background-color:#ffdab9;
        border-radius:50%;
z-index:99;
        transition: .5s ease;
 opacity: 0;
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%, -50%);
 -ms-transform: translate(-50%, -50%);
 text-align: center;
      }

@endsection


@section('content')

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  {{Html::image('/Images/cupcake.jpg','alt',array('width'=>'100%','height'=>300))}}
  <div class="text1">
  <span style="color:SaddleBrown;font: bold 35px sans-serif;">Can you afford to miss the</span>
  <br><span style="color:Teal;font: bold 30px sans-serif"> &nbsp;&nbsp; &nbsp;&nbsp;CUPCAKE treat?</span>
 </div>
 <div class="but" style="left:300px; bottom:30%"> See more</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  {{Html::image('/Images/cake.jpg','alt',array('width'=>'100%','height'=>300))}}
  <div class="text2">
    <span style="color:SaddleBrown;font: bold 32px Verdana;">Celebrate Chocolate with <br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Us </span><br>
    <span style="color:black;font:18px sans-serif;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Get hold of the widest range of chocolate cakes! </span>
  </div>
  <div class="but" style="left:920px; bottom:28%"> More Details</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  {{Html::image('/Images/sl1.jpg','alt',array('width'=>'100%','height'=>300))}}
  <div class="text3">
  <span style="color:White; font:bold 32px Verdana;" >&nbsp;&nbsp;&nbsp; Hop to it!</span>
 <br>
  <span style="color:#fff;font:18px sans-serif;" >Celebrate your special days with us </span>
  </div>
  <div class="but" style="left:280px; bottom:30%"> Location </div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  {{Html::image('/Images/cake2.jpg','alt',array('width'=>'100%','height'=>300))}}
  <div class="text4"><span style="color:White;font: bold 32px Verdana;">Grap the discount now!</span></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  {{Html::image('/Images/deal2.jpg','alt',array('width'=>'100%','height'=>300))}}
  <div class="text5" style="color:Yellow;font: bold 32px Verdana;">We have the best deals in town!</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
    <span class="dot"></span>
      <span class="dot"></span>
</div>
<div class="about-us">
  <div class="about-us-text">
    <h3>About Us</h3>
    <p>My BakePlace is a European concept bakery founded in 2014 to bring the authentic taste of European home baking to Karachi. In a span of two years, My BakePlace has opened several outlets across the city.Our cakes, cupcakes and brownies owe their unique look and exceptional flavor to top quality raw ingredients, our baking expertise, and a passionate team of people who love to live their lives by the oven. At Delizia we serve you with premium quality baked goods made with love using carefully sourced ingredients, blended in our special recipes that keep us just that step ahead of the rest. </p>
  </div>
</div>
<hr>
<!-- Items grid -->
<div class = "cake-container">
  <div class="cake-heading"><h1>Cakes</h1></div>
     <div class="cake-grid-container">
    <?php $count=1 ?>
        @foreach($items as $x)

            @if($x->CatId == 1 and $count <= '4')
          <div class="grid-item">
             <!--  {{Html::image('/Images/Cakes/sp1.jpg','alt',array('width'=>'100%','height'=>'100%'))}}-->
             <img src="http://localhost/bakery/public/Images/{{$x->path}}" class="inner-item" width="100%" height="100%" alt="alt">
              <div class="cart_opt">
              <i class="fa fa-shopping-cart"></i>
            </div>
          </div>
           <?php $count++ ?>
          @endif

        @endforeach
        <?php $count_i=1 ?>
        @foreach($items as $x)
          @if($x->CatId == 1 and $count_i <= '4')
          <div class="item-info">
            <div class="basic-info">
            <p>{{$x->iname}}</p>
            <p>{{$x->price}}</p>
          </div>
            <div id = "cart_button">
              <button style="background:transparent;"class="btn" onclick="ItemDetails();"><i style="font-size: 20px;"class="fa fa-shopping-cart"></i></button>
            </div>
          </div>
            <?php $count_i++ ?>
            @endif
        @endforeach
      </div>
</div>
<hr>
<div class = "cake-container">
  <div class="cake-heading"><h1>Cupcakes</h1></div>
     <div class="cake-grid-container">
       <?php $count1=1 ?>
        @foreach($items as $x)
            @if($x->CatId == 2 and $count1 <= '4')
              <div class="cc-grid-item" >
             <!--  {{Html::image('/Images/Cakes/sp1.jpg','alt',array('width'=>'100%','height'=>'100%'))}}-->
                <img src="http://localhost/bakery/public/Images/{{$x->path}}" class="inner-item-cc" width="100%" height="100%" alt="alt">
              <div class="cart_opt">
              <i class="fa fa-shopping-cart"></i>
            </div>
              </div>
              <?php $count1++ ?>
            @endif
        @endforeach
        <?php $count1_i=1 ?>
        @foreach($items as $x)
          @if($x->CatId == 2 and $count1_i <= '4')
          <div class="item-info">
            <div class="basic-info">
            <p>{{$x->iname}}</p>
            <p>{{$x->price}}</p>
          </div>
            <div id = "cart_button">
              <button style="background:transparent;"class="btn" onclick="ItemDetails();"><i style="font-size: 20px;"class="fa fa-shopping-cart"></i></button>
            </div>
          </div>
              <?php $count1_i++ ?>
          @endif
        @endforeach
      </div>
</div>
<hr>
<div class = "cake-container">
  <div class="cake-heading"><h1>Brownies</h1></div>
     <div class="cake-grid-container">
       <?php $count2=1 ?>
        @foreach($items as $x)
            @if($x->CatId == 3 and $count2 <= '4')
          <div class="cc-grid-item">
             <!--  {{Html::image('/Images/Cakes/sp1.jpg','alt',array('width'=>'100%','height'=>'100%'))}}-->
             <img src="http://localhost/bakery/public/Images/{{$x->path}}" class="inner-item-cc" width="100%" height="100%" alt="alt">
              <!--<div class="cart_opt">
              <i class="fa fa-shopping-cart"></i>
            </div>-->
          </div>
          <?php $count2++ ?>
          @endif
        @endforeach
        <?php $count2_i=1 ?>
        @foreach($items as $x)
          @if($x->CatId == 3 and $count2_i <= '4')
          <div class="item-info">
            <div class="basic-info">
            <p>{{$x->iname}}</p>
            <p>{{$x->price}}</p>
          </div>
            <div id = "cart_button">
              <button style="background:transparent;"class="btn" onclick="ItemDetails();"><i style="font-size: 20px;"class="fa fa-shopping-cart"></i></button>
            </div>
          </div>
            <?php $count2_i++ ?>
            @endif
        @endforeach
      </div>
</div>
<hr>
<div class = "cake-container">
  <div class="cake-heading"><h1>Bread</h1></div>
     <div class="cake-grid-container">
       <?php $count3=1 ?>
        @foreach($items as $x)
            @if($x->CatId == 4 and $count3 <= '4')
          <div class="cc-grid-item">
             <!--  {{Html::image('/Images/Cakes/sp1.jpg','alt',array('width'=>'100%','height'=>'100%'))}}-->
             <img src="http://localhost/bakery/public/Images/{{$x->path}}" class="inner-item-cc" width="100%" height="100%" alt="alt">
              <!--<div class="cart_opt">
              <i class="fa fa-shopping-cart"></i>
            </div>-->
          </div>
          <?php $count3++ ?>
          @endif
        @endforeach
        <?php $count3_i=1 ?>
        @foreach($items as $x)
          @if($x->CatId == 4 and $count3_i <= '4')
          <div class="item-info">
            <div class="basic-info">
            <p>{{$x->iname}}</p>
            <p>{{$x->price}}</p>
          </div>
            <div id = "cart_button">
              <button style="background:transparent;"class="btn" onclick="ItemDetails();"><i style="font-size: 20px;"class="fa fa-shopping-cart"></i></button>
            </div>
          </div>
            <?php $count3_i++ ?>
            @endif
        @endforeach
      </div>
</div>
<hr>
<div class = "cake-container">
  <div class="cake-heading"><h1>Cookies</h1></div>
     <div class="cake-grid-container">
       <?php $count4=1 ?>
        @foreach($items as $x)
            @if($x->CatId == 5 and $count4 <= '4')
          <div class="cc-grid-item">
             <!--  {{Html::image('/Images/Cakes/sp1.jpg','alt',array('width'=>'100%','height'=>'100%'))}}-->
             <img src="http://localhost/bakery/public/Images/{{$x->path}}" class="inner-item-cc" width="100%" height="100%" alt="alt">
              <!--<div class="cart_opt">
              <i class="fa fa-shopping-cart"></i>
            </div>-->
          </div>
          <?php $count4++ ?>
          @endif
        @endforeach
        <?php $count4_i=1 ?>
        @foreach($items as $x)
          @if($x->CatId == 5 and $count4_i <= '4')
            <div class="item-info">
              <div class="basic-info">
              <p>{{$x->iname}}</p>
              <p>{{$x->price}}</p>
            </div>
              <div id = "cart_button">
                <button style="background:transparent;"class="btn" onclick="ItemDetails();"><i style="font-size: 20px;"class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
            <?php $count4_i++ ?>
            @endif
        @endforeach
      </div>
</div>
<hr>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
function ItemDetails()
{
  alert("here");
  //document.getElementById("main").style.opacity = "0.2";
  //$(".main").css('background-color', 'transparent');
  //  $(".details").css('opacity', '1');
  //document.getElementsByClassName("details").style.opacity = "1";
 document.getElementById("details").style.display = "block";

}
</script>

@endsection
