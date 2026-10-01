@extends('layouts.main')

@section('header-title')
Главная страница
@endsection

@section('content')
<div class="hero">
    <div class="hero-overlay">
        <h1>Добро пожаловать в itProger App</h1>
        <p>Учитесь программированию легко и удобно вместе с нами</p>
        <a href="#" class="hero-btn">Начать</a>
    </div>
</div>
 
<div class="main-container">
    <div class="main-block">
        <h1>Home Page</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel natus id sint dignissimos asperiores alias modi repellendus facere quasi fugit nostrum, labore deleniti dolorum ipsa eum, quae expedita, architecto sapiente?</p>
    </div>

@include('includes.aside')
</div>
@endsection


