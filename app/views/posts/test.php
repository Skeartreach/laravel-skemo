@extends('layouts.header_new')
@section('title')
      Skemo - Personal Memo
@stop
@section('content')
  @parent

{{ $_POST }}
    <div class="container">
      </div>
     @section('navigation')
        @parent
        @endsection

@stop