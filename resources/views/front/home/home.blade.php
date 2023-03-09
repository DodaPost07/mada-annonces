@extends('front.layouts.app')
@section('content')
@include('front.home._hero')

<!-- Hero Section -->
<div class="flex flex-wrap justify-center gap-4 p-4">
  <a href="#" class="btn-indigo">
    Button 1
  </a>
  <a href="#" class=" btn-error">
    Button 2
  </a>
  <a href="#" class="btn-success">
    Button 3
  </a>
  <a href="#" class="btn-info">
    Button 4
  </a>
  <a href="#" class="btn-warning">
    Button 4
    <i class="las la-user-circle text-slate-900 text-3xl²&"></i>
  </a>
  <i class="fa-solid fa-cart-arrow-down text-cyan-400"></i>
  <i class="fa-light fa-user"></i>
  @endsection