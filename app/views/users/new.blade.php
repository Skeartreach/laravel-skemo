@extends('layouts.default')
@section('title')
      Skemo - Personal Memo
@stop
@section('content')
  @parent

  {{ Form::open(array('url' => 'posts/create')) }}

  <p>
    {{Form::lavel('name', 'Name:')}}
    {{Form::lavel('name', 'Name:')}}

  </p>
     @section('navigation')
        @parent
        @endsection
@stop