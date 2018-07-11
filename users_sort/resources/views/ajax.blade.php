@extends('layouts.app')

@section('css')
  <style>
      
      
  </style>
@endsection

@section('content')
  <div id="content">
    @include('home')
  </div>
@endsection

@section('js')
  <script src="{{ asset('js/ajaxsort.js') }}"></script>
@endsection