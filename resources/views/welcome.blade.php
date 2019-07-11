
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
            .footer-wrapper{
              width:100%;
              height:auto;
              min-height:250px;
              margin:auto;
            /*  background-image:url('../.jpg');*/
              background-color:coral;
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
              font-weight: bold;
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
        </style>

{{Html::image('/Images/cup.png','alter',array('width'=>70, 'height'=>70)) }}
    {!!Form::open()!!}



  {!!Form::close()!!}
  @section('footer')
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
                      <h1>Contact Us</h1>
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
        @endsection
