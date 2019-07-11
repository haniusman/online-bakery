<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    .details{
     width: 70%;
     height: 600px;
     margin:auto;
     padding-left:50px;
     padding-right:50px;
     background-color: #78460E;
     grid-template-columns: auto auto;
    }
    .item-image {
      display: inline-block;
      width:400px;
      height: 450px;
      background-color: #ffdab9;
      border: 1px solid coral;
      padding: 5px;
      font-size: 30px;
      text-align: center;
    }
    .item-info{
      width:400px;
      height: 70%;
      display:inline;

      color: #8B4513;
      font-size:14px;
      font-family:Helvetica;
      padding:0px;
      background-color: #ffdab9;
      border: 1px solid coral;
      line-height:inherit;
      text-align: center;
    }
    .item-details{
      font-size: 20px;
      text-align: left;
      padding-left: 20px;
    }

.grid-container {
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 5px;
  background-color: #fff;
  padding: 10px;
}
    </style>
    <body>
      <div id="main">
      <button onclick="ItemDetails();">Click to popup</button>
</div>
      <div class="details" id="details" style="display:none;">
        <div class="close-button" onclick="CloseDetails();">
          {{Html::image('/Images/close1.jpg','alt',array('width'=>'3%','height'=>'3%'))}}

        </div>
    <div class="grid-container">
      <div class="item-image">
        {{Html::image('/Images/br2.jpg','alt',array('width'=>'95%','height'=>'95%'))}}

      </div>
<div class="item-info" style="">
 <div class="item-details">
   {!!Form::open(['method'=>'POST','action'=>'ItemsController@store','files'=>true])!!}
   <p style="font-weight:bold;">Name of cake</p>
   <p>Cake Price range</p>
   <p>Item Size</p>
   <label> Choose Size
   <select name="size-select">
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
    {
      document.getElementById("main").style.opacity = "0.1";
     document.getElementById("details").style.display = "block";

   }
   function CloseDetails()
   {
    document.getElementById("details").style.display = "none";

  }
    </script>
