@extends('layout')

@section('title', 'About us')

@section('front-title')
About
@endsection

@section('content')

<p>
my {{$foo}} {{$foo}} bear


<ul>
@foreach($tasks as $task)
<li><?= $task ?></li>
@endforeach
</ul>
</p>

@endsection