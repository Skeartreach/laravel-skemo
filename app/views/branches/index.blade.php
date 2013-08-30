@extends('layouts.default')
@section('title')
      Skemo - Personal Memo
@stop
@section('content')
  @parent
  <div class="col-lg-12">

    <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th width='2%'>N°</th>
                    <th>Nom</th> 
                  </tr>
                </thead>
                <tbody>
				@foreach($branches as $branch)
                  <tr>
                    <td>{{ $branch->id }}</td>
                    <td >{{ $branch->name }}</td>   
                  </tr>
				  @endforeach
                </tbody>
              </table>
  </div>
    <div class="container">
      </div>
     @section('navigation')
        @parent
        @endsection

@stop