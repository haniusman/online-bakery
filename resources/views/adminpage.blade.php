<!DOCTYPE html>
<html>
<head>
</head>
<body>



<!-- {!!Form::open()!!} -->
{!!Form::open(['method'=>'POST','action'=>'ItemsController@store','files'=>true])!!}
<div class="form-group">
  {!!Form::label('iname','Item Name:')!!}
  {!!Form::text('iname',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('stock','Available stock:')!!}
  {!!Form::text('stock',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('size','Size:')!!}
  {!!Form::text('size',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('price','price:')!!}
  {!!Form::text('price',null,['class'=>'form-control'])!!}
</div>
  <select name="CatId">
    <option value="1">Cake</option>
    <option value="2">Cupcakes</option>
    <option value="3">Brownies</option>
    <option value="4">Bread</option>
    <option value="5">Cookies</option>
  </select>
  <div class="form-group">
    {!! Form::file('file',['class'=>'form-control'])!!}
  </div>
<input type="submit" name="submit">
{!!Form::close()!!}

</body>
</html>
