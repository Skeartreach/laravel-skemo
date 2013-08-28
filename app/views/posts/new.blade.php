@extends('layouts.header_new')
@section('title')
      Skemo - Personal Memo
@stop
@section('content')
  @parent
@foreach($entities as $entity)
  <?php $arrayEntities[0] = 'N/A';
  $arrayEntities[$entity->id] = $entity->name ;
  ?>
@endforeach
  
  <!--  Formulaire d'ajout de post-->
  <div class="col-lg-6">
            <div class="well">
                {{ Form::open(array('url' => 'posts/add', 'method' => 'put' ,'class' => 'bs-example form-horizontal')) }}
                <fieldset>
                  <legend>Insérer un nouveau post</legend>  

                  <!--  Contenu -->           
                  <div class="form-group">
                    <label for="frm_content" class="col-lg-2 control-label">Contenu</label>

                    <div class="col-lg-10">
                      {{ Form::textarea("frm_content", null, array('rows' => '3', 'class'=>'form-control', 'required')) }}
                    </div>
                  </div>
                   <!--  People de 1 à 5 -->  
                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">People</label>
                    <div class="col-lg-10">
                        {{ Form::select('frm_people1', $arrayEntities,'swag', array('class' => 'form-control')) }}
                        {{ Form::select('frm_people2', $arrayEntities,'swag', array('class' => 'form-control')) }}
                        {{ Form::select('frm_people3', $arrayEntities,'swag', array('class' => 'form-control')) }}
                      <br>
                    </div>
                  </div>


                   <!--  isdone -->
                   {{ Form::hidden('frm_isdone', '0') }}

                   <!--  enddate -->  
                   <div class="form-group">
                    <label for="frm_enddate" class="col-lg-2 control-label" >Date d'échéance</label>
                    <div class="col-lg-10">
                      {{ Form::date('frm_enddate', null, array('class' => 'form-control', '')) }}
                    </div>
                  </div>

                  	<!--  frm_entity_id -->  
                   {{ Form::hidden('frm_entity_id', '1') }}

                   <!--  Importance -->  
                   <div class="form-group">
                    <label for="frm_importance" class="col-lg-2 control-label">Importance</label>
                    <div class="col-lg-10">
                    {{ Form::select('frm_importance', array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    '10' => '10',
                    ),'',array('class' => 'form-control'))
                    }}
                      <br>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      {{ Form::reset('Annuler',array('class' => 'btn btn-default')) }}
                      {{ Form::submit('Créer',array('class' => 'btn btn-primary')) }}
                    </div>
                  </div>
                </fieldset>
              {{ Form::close() }}
            </div>
          </div>
    <div class="container">
      </div>
     @section('navigation')
        @parent
        @endsection

@stop