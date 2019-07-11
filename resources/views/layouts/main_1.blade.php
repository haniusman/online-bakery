
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    <style>
    *{
      margin:0;
      padding:0;
      font-family: verdana;
      }

      #main{
        width: 100%;
        height: 100vh;
        background-image: url('../pic1.jpg');
        background-size: cover;
      }
      #top_bar{
        width: 100%;
        height: 80px;
      }
      nav{
        width: 100%;
        height: 40px;
        background-color: #0002;
        line-height: 40px;  /*to make ext automatically vertically center of nav bar*/
        border-top: 1px solid white;
      }
      nav ul{
        margin-right: 0px;
        text-align: center;

      }
      nav ul li{
        list-style-type: none;
        display: inline-block;
        transition: 0.8s all;
        border: 1px solid white;

      }
      nav ul li:hover{
        background-color: #f39d1a;
      }
      nav ul li a{
        text-decoration: none;
        text-align: center;
        color: #fff;
        padding: 15px;

      }
      .footer {
       left: 0;
       bottom: 0;
       width: 100%;
       height: auto;
       background-color: #0008;
       color: #fff;
       text-align: center;
       }
      .footer ul li{
      list-style-type:none;
      display: inline-block;
      margin:auto;
      }
      .lower_footer{
        width:100%
        float:left;
        font-size:15px;
        font-family: serif;
        background-color: #000;
      }


    </style>
    </head>
    <body>
<div id="main">
      <div class="nav">
           <div id = "top_bar">
           </div>
            <nav>
              <ul>
                <li><a href="">Home</li>
                <li><a href="">Menu</li>
                <li><a href="">Categories</li>
                <li><a href="">Deals</li>
                <li><a href="">About Us</li>
              </ul>
            </nav>
         </div>
      </div>
      @yield('content')
      <div class="footer">

        <ul>
            <li>
              <div id = "1" style="width:30%;">
                <h3>ABOUT US</h3>
                <p>Delizia is a European concept bakery founded in 2014 to bring the authentic taste of European home baking to Karachi. </p>
               </div>
             </li>
            <li>
              <div id = "2" style="width:40%;">
                <h3>SUBSCRIBE</h3>
                <p>Find us at facebook</p>
              </div>
            </li>
            <li>
              <div id = "3" style="width:30%;">
                <h3>CONTACT</h3>
                <p>27-E, Shahbaz Commercial, Khayaban-e-Seher, Karachi.</p>
                <p> 0321-2888305</p>
                <p> 0345-4775500</p>
              </div>
            </li>
        </ul>

        <div class="lower_footer">
           <p id="footer_tag">&copy;2019|All rights reserved.</p>
          <!--<div id="social">
            <ul>
               <li><a href="">fb</li>
               <li><a href="">ins</li>
               <li><a href="">li</li>
            </ul>
         </div>-->
        </div>
      </div>



    </body>
</html>
