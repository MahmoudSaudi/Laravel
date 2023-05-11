@extends('product.layout')

@section('content')

<div style="padding-top: 12%">

    <div class="card container" >

        <div class="card-body">
        <font color=blue size=6px class="card-text" >Add a new product </font>
        </div>
    </div>
</div>



 <div class="container" style="padding-top: 2%">

    <form action="{{route('product.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" name="name_product" class="form-control" placeholder="product name" >
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Price</label>
            <input type="text" name="price" class="form-control" placeholder="product price" >
        </div>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Detials</label><br>
            <textarea class="form-control" name="details" rows="3"></textarea>
        </div>
        <br>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form>
</div>



@endsection




