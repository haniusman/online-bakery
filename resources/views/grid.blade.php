@extends('layouts.main')
@section('gridcss')
.cake-grid-container {
  width:70%;
  height: 200px;
  margin:auto;
  margin-bottom: 30px;
  display: grid;
  grid-template-columns: auto auto auto auto;
  background-color: coral;
  padding: 10px;
}

.grid-item {
  width:75%;
  height: auto;
  margin:auto;
  background-color: sandybrown;
  border: 1px solid coral;
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
.grid-item:hover{

}
.cake-heading{
  text-align:center;
  background-color: sandybrown;
  color: coral;
  font-family:Lucida;
}
.cake-heading:hover{
  opacity:0.2;
}
@endsection

</head>
<body>
@section('grid')
<div class = "cake-container">
<div class="cake-heading"><h1>Cakes</h1></div>

<div class="cake-grid-container">
  <div class="grid-item" >
    {{Html::image('/Images/Cakes/sp1.jpg','alt',array('width'=>'100%','height'=>150))}}
    <div class="ex" style="display:none;">{{Html::image('/Images/Cakes/sp2.jpg','alt',array('width'=>'100%','height'=>150))}}</div>
  </div>
  </div>
  <div class="grid-item">
    {{Html::image('/Images/Cakes/sp1.jpg','alt',array('width'=>'100%','height'=>150))}}

  <div class="grid-item">
    {{Html::image('/Images/Cakes/sp1.jpg','alt',array('width'=>'100%','height'=>150))}}
  </div>
  <div class="grid-item">
    {{Html::image('/Images/Cakes/sp1.jpg','alt',array('width'=>'100%','height'=>150))}}
  </div>
</div>

</div>
<script>
alert('here');</script>
@endsection
</body>
</html>
