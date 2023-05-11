@extends('product.layout')

@section('content')

<div>

    <div style="margin: 5% ;"   class="jumbotron container">
        <h1 class="display-4" >Hello,my store</h1>
        <a class="btn btn-primary btn-lg" href="{{route('product.create')}}" >Create</a>
    </div>

</div>

<div class="container">
    @if ($message = Session::get('success'))

    <div class="alert alert-primary" role="alert">
        {{$message}}
    </div>

    @endif


</div>


<div class="container">

    <table class="table">
        <thead>
          <tr style="background-color: rgb(154, 154, 184)">
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Price</th>
            <th scope="col">  Action</th>
          </tr>
        </thead>

        @php $i=0; @endphp

        <tbody>
                                {{-- هنا عايزين نكرر ت ار tr          foreach عشان نكررها هنستخدم  --}}
            @foreach ($info_db_product as $item)

            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$item->name_product}}</td>
                <td>{{$item->price}}</td>
                <td>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-success " href="{{route('product.edit',$item->id)}}">Edit</a>
                    </div>
                    <div class="col">
                          <a class="btn btn-primary " href="{{route('product.show',$item->id)}}">Show</a><br>
                    </div>

                        <div class="col">
                            <form action="{{route('product.destroy',$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ">Delete</button>
                            </form>
                        </div>
                    </div>





                </td>
            </tr>

            @endforeach

        </tbody>
    </table>


       {!!  $info_db_product->links()  !!}

</div>


@endsection


