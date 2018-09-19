@extends('layout')

@section('content')
    <div class="container">
        @foreach($products as $product)
            <div class="mb-3 mt-5">
                <h1><a style="color: #1b497b" href="">{{ $product['title'] }}</a></h1>
                    <ul class="list-inline">Категории:
                        @foreach($product['categories'] as $category)
                            <a href="{{ url("category") . '/' . $category['alias'] }}"><li class="list-inline-item pr-2">{{ $category['title'] }}</li></a>
                        @endforeach
                    </ul>
                <img class="mr-3" style="width: 20%;" src="{{ $product['image'] }}">
                <div>
                    {!! $product['description'] !!}
                </div>
            </div>
        @endforeach
        <div>{{$products->render()}}</div>
    </div>
@endsection
