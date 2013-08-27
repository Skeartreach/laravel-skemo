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
                    <th>N°</th>
                    <th width="20%">Message</th>
                    <th>Personne N°1</th>
                    <th>Personne N°2</th>
                    <th>Personne N°3</th>
                    <th>Personne N°4</th>
                    <th>Personne N°5</th>
                    <th>Terminé</th>
                    <th>Date d'achivement</th>
                    <th>Créé par</th>
                    <th>Importance</th>
                    <th>Date de création</th>
                  </tr>
                </thead>
                <tbody>
				@foreach($posts as $post)
                  <tr>
                    <td>{{ $post->id }}</td>
                    <td width="30%">{{ $post->content }}</td>
                    @if($post->people1!=0)
                    <td>{{ $users[($post->people1-1)]->name }}</td>
                    @else
                    <td>N/A</td>
                    @endif
                    @if($post->people2!=0)
                    <td>{{ $users[($post->people2-1)]->name }}</td>
                    @else
                    <td>N/A</td>
                    @endif
                    @if($post->people3!=0)
                    <td>{{ $users[($post->people3-1)]->name }}</td>
                    @else
                    <td>N/A</td>
                    @endif
                    @if($post->people4!=0)
                    <td>{{ $users[($post->people4-1)]->name }}</td>
                    @else
                    <td>N/A</td>
                    @endif
                    @if($post->people5!=0)
                    <td>{{ $users[($post->people5-1)]->name }}</td>
                    @else
                    <td>N/A</td>
                    @endif
                    @if($post->enddate<date('Y-m-d H:m:s'))
                      <td><center><button type="button" class="btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-warning-sign"></span>
                        </button></td></center>
                    @else
                      @if($post->isdone == '1')
                        <td><center><button type="button" class="btn btn-success btn-xs">
                        <span class="glyphicon glyphicon-ok-sign"></span>
                        </button></td></center>
                      @else
                        <td><center><button type="button" class="btn btn-warning btn-xs">
                        <span class="glyphicon glyphicon-minus-sign"></span>
                        </button></td></center>
                      @endif
                    @endif
                    <td>{{ $post->enddate }}</td>
                    <td>{{ $users[($post->user_id-1)]->name }}</td>
                    <td>{{ $post->importance }}</td>
                    <?php
                    $date = date("d-m-Y", strtotime($post->created_at));
                    print('<td>'.$date.'</td>');
                    ?>
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