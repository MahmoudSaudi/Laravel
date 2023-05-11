@extends('product.layout')

@section('content')

<div style="padding-top: 12%">

    <div class="card container" >

        <div class="card-body">
        <p class="card-text"><span> <a href="{{route('product.index')}}">Back </a> </span> Product name : {{$info_db_product->name_product}} </p>
        </div>
    </div>
</div>



 <div class="container" style="padding-top: 2%">


    <div class="form-group">
            <label for="exampleFormControlInput1">{{$info_db_product->name_product}}</label>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">{{$info_db_product->price}}</label>
        </div>


        <div class="form-group">

                {!! $info_db_product->details  !!}

    </div>





</div>



@endsection




