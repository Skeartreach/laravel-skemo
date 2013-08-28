@extends('layouts.default')
@section('title')
      Skemo - Personal Memo
@stop
@section('content')
  @parent
    <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Identifiant</th>
                    <th>Password</th>
                  </tr>
                </thead>
                <tbody>
				@foreach($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->idlog }}</td>
                    <td>{{ $user->passlog }}</td>
                  </tr>
				  @endforeach
                </tbody>
              </table>

    <div class="container">
      </div>
       @section('navigation')
        @parent
        @endsection
@stop