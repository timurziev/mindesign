@extends('layout')

@section('content')
    <div class="container">
        @foreach($products as $product)
            <div class="mb-3 mt-5">
                <h1><a style="color: #1b497b" href="">{{ $product['title'] }}</a></h1>
                <img class="mr-3" style="width: 50%;" src="{{ $product['image'] }}">
                <div>
                    {!! $product['description'] !!}
                </div>
            </div>
        @endforeach
        {{--<div>{{$product->render()}}</div>--}}
    </div>
@endsection
