@extends('layouts.default')
@section('title','首页')
@section('content')
<div class="jumbotron">
  <h1>Hello ASong</h1>
  <p class="lead">
    你现在看到的是 <a href="https://laravel-china.org/courses/laravel-essential-training-5.1">Laravel 学习代码</a>
  </p>
  <p>
    now，everything is ready to begin!
  </p>
  <p>
    <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
  </p>
</div>

@stop
