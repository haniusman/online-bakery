
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    *{
      margin:0;
      padding:0;
      font-family: verdana;

      }

      #main{
        width: 100%;
        height: 120px;
        background-size: cover;
        background-color: #ffdab9;
      }
      #top_bar{
        width: 100%;
        height: 80px;
      }
      nav{
        width: 100%;
        height: 40px;
        background-color:coral;
        line-height: 40px;  /*to make ext automatically vertically center of nav bar*/
        border-top: 1px ;
      }
      nav ul{
        margin-right: 0px;
        text-align: center;

      }
      nav ul li{
        list-style-type: none;
        display: inline-block;
        transition: 0.8s all;
        border: 1px;

      }
      nav ul li:hover{
        background-color: #0002;
      }
      nav ul li a{
        text-decoration: none;
        text-align: center;
        color: #fff;
        padding: 30px;
      }
      nav ul li a:hover{
          text-decoration: none;
          font-weight: bold;
          color:sandybrown;
        }
      .cart_button
      {
        position:absolute;
        left:80%;
        top:20px;
        background-color:coral;
        color:white;
        line-height: inherit;
        border-radius:25px;
        padding:10px;
      }
@yield('othercss')
@yield('grid')
/*Footer css*/
.footer-wrapper{
  width:100%;
  height:auto;
  min-height:250px;
  margin:auto;
  background-color:sandybrown;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  overflow:hidden;
}
.footer-social-icons{
  width: 100%;
  height: auto;
  margin: auto;
  padding-top: 20px;
  margin-bottom: 20px;
}
.footer-social-icons ul{
  margin: 0px;
  padding: 0px;
  text-align: center;}
.footer-social-icons ul li{
  display: inline-block;
  margin-left: 2px;
  width: 36px;
  height: 36px;
  text-align: center;
}
.footer-social-icons ul li a{
  text-decoration: none;
  color: #fff;
    display: block;
    font-size: 22px;
    text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.75);
}
.footer-social-icons ul li a i{
  line-height: 36px;
}
.footer-social-icons ul li:nth-child(1){
  background: #3b5998;
}
.footer-social-icons ul li:nth-child(2){
  background: #1da1f2;
}
.footer-social-icons ul li:nth-child(3){
  background: #25d366;
}
.footer-social-icons ul li:nth-child(4){
  background: #c32aa3;
}
.footer-social-icons ul li:nth-child(5){
  background: #007bb5;
}
.footer-social-icons ul li:nth-child(6){
  background: #ff0000;
}
.footer-mid-part{
      width: 100%;
      height: auto;
      margin: auto;
}
.footer-section-one{
  width: 100%;
  height: auto;
  margin: auto;
  padding: 20px 20px;
  background: rgba(255,255,255,.1);
}
.footer-heading{
  color:white;
  text-transform: uppercase;
}
.lower-footer{
  width:100%;
  height:auto;
  min-height:30px;
  line-height: 30px;
  margin:0px;
  background: rgba(255,255,255,.1);
}
.lower-footer-text{
  color:white;
  text-align: center;
  font-family: Lucida;
}

@yield('cupcake-css')
@yield('cake-css')
    </style>
    </head>
    <body>

      <div class="nav">

         <div id="main">
           <div id = "top_bar">
             {{Html::image('/Images/animated.png','alt',array('width'=>'90','height'=>90))}}
               {{Html::image('/Images/bakeplace.png','alt',array('width'=>'350','height'=>90))}}

             <div class="cart_button">
               <i class="fa fa-shopping-cart"></i>
             </div>
           </div>
            <nav>

              <ul>
                <li class="nav-home"><a href="{{url('/items/show')}}" style=" color:#8B4513;">Home</a></li>
                <li class="nav-cakes"><a href="{{url('/cakes')}}">Cakes</a></li>
                <li class="nav-cupcakes"><a href="{{url('/cupcakes')}}">Cupcakes</a></li>
                <li class="nav-brownies"><a href="{{url('/brownies')}}">Brownies</a></li>
                <li class="nav-bread"><a href="{{url('/bread')}}">Bread</a></li>
                <li class="nav-bread"><a href="{{url('/cookies')}}">Cookies</a></li>
                <li class="nav-cookies"><a href="#"><i class="fa fa-user"></i></a></li>
              </ul>
            </nav>
         </div>


      </div>


      @yield('content')
      @yield('cake')
      @yield('cupcake')
      @yield('brownies')
      @yield('bread')
      @yield('cookies')
      <!-- Footer -->
      <div class="footer-wrapper">

        <div class="container-fluid">
          <div class="footer-social-icons">
            <ul>
              <li><a href="#" target="_blank"><i class = "fa fa-facebook"></i></a></li>
              <li><a href="#" target="_blank"><i class = "fa fa-twitter"></i></a></li>
              <li><a href="#" target="_blank"><i class = "fa fa-whatsapp"></i></a></li>
              <li><a href="#" target="_blank"><i class = "fa fa-instagram"></i></a></li>
              <li><a href="#" target="_blank"><i class = "fa fa-linkedin"></i></a></li>
              <li><a href="#" target="_blank"><i class = "fa fa-youtube"></i></a></li>

            </ul>
          </div>
          <div class="footer-mid-part">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12" style="margin-bottom:10px;">
                <div class="footer-section-one">
                  <div class="footer-heading">
                    <h2>Contact Us</h2>
                    <p>27-E, Shahbaz Commercial, Khayaban-e-Seher, Karachi.</p>
                    <p>0321-2888305</p>
                    <p>0321-2888305</p>
                  </div>
              </div>
            </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-section-two">
                  <div class="footer-heading"><h2></h2></div>
              </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-section-three">
                  <div class="footer-heading"><h2></h2></div>
              </div>
              </div>
            </div>

          </div>
          <div class="lower-footer">
            <div class="lower-footer-text">
              <p>&copy; |Copyright 2019 All rights reserved.</p>
            </div>
          </div>

        </div>
      </div>
    </body>
</html>
