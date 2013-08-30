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
                    <th>Terminé</th>
                    <th>Date d'achivement</th>
                    <th>Créé par</th>
                    <th>Importance</th>
                    <th>Date de création</th>
                     <?php if (Session::get('isadmin'))
                        {   ?>
                    <th colspan="3">Options</th>
                    <?php } ?>
                  </tr>
                </thead>
                <tbody>
				@foreach($posts as $post)
                  <tr>
                    <td>{{ $post->id }}</td>
                    <td width="20%">{{ substr($post->content,0,40) }}</td>
                    @if($post->people1!=0)
                    <td>{{ $entities[($post->people1-1)]->name }}</td>
                    @else
                    <td>N/A</td>
                    @endif
                    @if($post->people2!=0)
                    <td>{{ $entities[($post->people2-1)]->name }}</td>
                    @else
                    <td>N/A</td>
                    @endif
                    @if($post->people3!=0)
                    <td>{{ $entities[($post->people3-1)]->name }}</td>
                    @else
                    <td>N/A</td>
                    @endif
                    
                      @if($post->isdone == '1')
                        <td><center><button type="button" class="btn btn-success btn-xs "title="Terminé" >
                        <span class="glyphicon glyphicon-ok-sign"></span>
                        </button></td></center>
                      @else
                          @if($post->enddate<date('Y-m-d H:m:s'))
                          <td><center><button type="button" class="btn btn-danger btn-xs" title="A terminer aujourd'hui">
                            <span class="glyphicon glyphicon-warning-sign"></span>
                            </button></td></center>
                             @else
                            <td><center><button type="button" class="btn btn-warning btn-xs"title="A terminer sous peu" >
                            <span class="glyphicon glyphicon-minus-sign"></span>
                            </button></td></center>
                      @endif
                    @endif
                    <?php
                    $enddate = date("d-m-Y", strtotime($post->enddate));
                    print('<td>'.$enddate.'</td>');
                    ?>
                    <td>{{ $users[$post->user_id-1]->firstname." ".$users[$post->user_id-1]->lastname }}</td>
                    <td><center>{{ $post->importance }}</td></center>
                    <?php
                    $date = date("d-m-Y", strtotime($post->created_at));
                    print('<td>'.$date.'</td>');
                    if (Session::get('isadmin'))
                        {       
                    ?>
                    <td>
                      <center>
                        <?php print('<a href="./posts/close/'.$post->id.'">');?> 
                        <div class="btn btn-success btn-xs" title="Terminer">
                          <span class="glyphicon glyphicon-ok"</span>          
                        </div>
                        <?php print('</a>');?> 
                      </center>
                    </td>                                 
                    <td>
                      <center>
                        <?php print('<a href="./posts/show/'.$post->id.'">');?> 
                        <div class="btn btn-warning btn-xs" title="Détails">                         
                          <span class="glyphicon glyphicon-leaf"</span>   
                        </div>
                        <?php print('</a>');?> 
                      </center>
                    </td>    
                    <td>
                      <center>
                        <?php print('<a href="./posts/delete/'.$post->id.'">');?> 
                        <div class="btn btn-danger btn-xs" title="Supprimer">                    
                          <span class="glyphicon glyphicon-remove icon-white"</span>                    
                        </div>
                        <?php print('</a>');?> 
                      </center>
                    </td>    
                  </tr>
                  <?php }?>
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