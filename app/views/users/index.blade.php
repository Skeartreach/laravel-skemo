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
    <script src="../bower_components/jquery/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootswatch.js"></script>
  </body>
</html>
@stop