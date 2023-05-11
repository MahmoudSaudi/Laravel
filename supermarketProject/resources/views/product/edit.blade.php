@extends('product.layout')

@section('content')

<div style="padding-top: 12%">

    <div class="card container" >

        <div class="card-body">

            <p class="card-text"> <span> <a href="{{route('product.index')}}">Back</a> </span> Product name : {{$info_db_product->name_product}} </p>
        </div>
    </div>
</div>



 <div class="container" style="padding-top: 2%">

    <form action="{{route('product.update',$info_db_product->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" name="name_product" value="{{$info_db_product->name_product}}" class="form-control" placeholder="product name" >
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Price</label>
            <input type="text" name="price"value="{{$info_db_product->price}}"   class="form-control" placeholder="product price" >
        </div>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Detials</label><br>
            <textarea class="form-control" name="details" rows="3">
                {!! $info_db_product->details  !!}
            </textarea>
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

    </form>
</div>



@endsection




