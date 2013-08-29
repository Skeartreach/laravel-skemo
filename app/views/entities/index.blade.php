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
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Branche</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                  </tr>
                </thead>
                <tbody>
				@foreach($entities as $entity)
                  <tr>
                    <td>{{ $entity->id }}</td>
                    <td>{{ $entity->name }}</td>
                    <td>{{ $branches[($entity->branch-1)]->name}}</td>
                    <td>{{ $entity->email }}</td>
                    <td>{{ $entity->phone }}</td>
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