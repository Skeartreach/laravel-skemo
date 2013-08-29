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
                    <th width='5%'>N°</th>
                    <th>Nom</th>
                    <th colspan="2" width='10%'>Options</th>
                  </tr>
                </thead>
                <tbody>
				@foreach($branches as $branch)
                  <tr>
                    <td>{{ $branch->id }}</td>
                    <td >{{ $branch->name }}</td>   
                    <td><center><button type="button" class="btn btn-success btn-xs"title="Détails" >
                    <span class="glyphicon glyphicon-leaf"></span>
                    </button></td></center>
                    <td><center><button type="button" class="btn btn-danger btn-xs"title="Supprimer" >
                    <span class="glyphicon glyphicon-remove"></span>
                    </button></td></center>
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