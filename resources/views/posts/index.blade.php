@extends('layouts.main')

@section('header-title')
Все посты сайта
@endsection

@section('content')
 
<div class="main-container">
    <div class="main-block">
        <h1>Все посты сайта</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel natus id sint dignissimos asperiores alias modi repellendus facere quasi fugit nostrum, labore deleniti dolorum ipsa eum, quae expedita, architecto sapiente?</p>
    </div>
    @include('includes.aside')
</div>

<div class="posts">
    @foreach($posts as $el)
        <div class="post">
            <h2>{{title}}</h2>
             <p>{{$el->anons}}</p>
        </div>
    @endforeach
</div>



@endsection


