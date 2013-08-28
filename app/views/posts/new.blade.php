@extends('layouts.header_new')
@section('title')
      Skemo - Personal Memo
@stop
@section('content')
  @parent
<<<<<<< HEAD
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
=======


  <!--  Formulaire d'ajout de post-->
  <div class="col-lg-6">
            <div class="well">
              <form class="bs-example form-horizontal" action="../posts/insert" method="GET">
                <fieldset>
                  <legend>Insérer un nouveau post</legend>  
  
                  <!--  Contenu -->           
                  <div class="form-group">
                    <label for="frm_contenu" class="col-lg-2 control-label">Contenu</label>
                    <div class="col-lg-10">
                      <textarea class="form-control" rows="3" id="frm_contenu" required></textarea>
                    </div>
                  </div>

>>>>>>> f2ffdea5ef53ad83958677dd15b0b0538ab86a74
                   <!--  People de 1 à 5 -->  
                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">People</label>
                    <div class="col-lg-10">
<<<<<<< HEAD
                        {{ Form::select('frm_people1', $arrayEntities,'swag', array('class' => 'form-control')) }}
                        {{ Form::select('frm_people2', $arrayEntities,'swag', array('class' => 'form-control')) }}
                        {{ Form::select('frm_people3', $arrayEntities,'swag', array('class' => 'form-control')) }}
=======
                      <select class="form-control" id="frm_people2">
                      	<option value="0"> N/A </option>
                      @foreach($users as $user)
                        <?php print('<option value="'.$user->id.'" placeholder="Nom">'.$user->name.'</option>');?>
                      @endforeach
                      </select>
                      <select class="form-control" id="frm_people3">
                      	<option value="0"> N/A </option>
                      @foreach($users as $user)
                        <?php print('<option value="'.$user->id.'" placeholder="Nom">'.$user->name.'</option>');?>
                      @endforeach
                      </select>
                      <select class="form-control" id="frm_people4">
                      	<option value="0"> N/A </option>
                      @foreach($users as $user)
                        <?php print('<option value="'.$user->id.'" placeholder="Nom">'.$user->name.'</option>');?>
                      @endforeach
                      </select>
                      <select class="form-control" id="frm_people5">
                      	<option value="0"> N/A </option>
                      @foreach($users as $user)
                        <?php print('<option value="'.$user->id.'" placeholder="Nom">'.$user->name.'</option>');?>
                      @endforeach
                      </select>
>>>>>>> f2ffdea5ef53ad83958677dd15b0b0538ab86a74
                      <br>
                    </div>
                  </div>


                   <!--  isdone -->
<<<<<<< HEAD
                   {{ Form::hidden('frm_isdone', '0') }}
=======
                   <input type="hidden" value="0" id="frm_isdone"> 
>>>>>>> f2ffdea5ef53ad83958677dd15b0b0538ab86a74

                   <!--  enddate -->  
                   <div class="form-group">
                    <label for="frm_enddate" class="col-lg-2 control-label" >Date d'échéance</label>
                    <div class="col-lg-10">
<<<<<<< HEAD
                      {{ Form::date('frm_enddate', null, array('class' => 'form-control', '')) }}
                    </div>
                  </div>

                  	<!--  frm_entity_id -->  
                   {{ Form::hidden('frm_entity_id', '1') }}
=======
                      <input type="date" class="form-control" id="frm_enddate" required>
                    </div>
                  </div>

                  	<!--  user_id -->  
                   <input type="hidden" value="1" id="frm_user_id"> 
>>>>>>> f2ffdea5ef53ad83958677dd15b0b0538ab86a74

                   <!--  Importance -->  
                   <div class="form-group">
                    <label for="frm_importance" class="col-lg-2 control-label">Importance</label>
                    <div class="col-lg-10">
<<<<<<< HEAD
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
=======
                      <select class="form-control" id="frm_importance">
                      	<option value="1">1</option>
                      	<option value="2">2</option>
                      	<option value="3">3</option>
                      	<option value="4">4</option>
                      	<option value="5">5</option>
                      	<option value="6">6</option>
                      	<option value="7">7</option>
                      	<option value="8">8</option>
                      	<option value="9">9</option>
                      	<option value="10">10</option>
                      </select>
>>>>>>> f2ffdea5ef53ad83958677dd15b0b0538ab86a74
                      <br>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
<<<<<<< HEAD
                      {{ Form::reset('Annuler',array('class' => 'btn btn-default')) }}
                      {{ Form::submit('Créer',array('class' => 'btn btn-primary')) }}
                    </div>
                  </div>
                </fieldset>
              {{ Form::close() }}
=======
                      <button type="reset" class="btn btn-default">Annuler</button> 
                      <button type="submit" class="btn btn-primary">Créer</button> 
                    </div>
                  </div>
                </fieldset>
              </form>
>>>>>>> f2ffdea5ef53ad83958677dd15b0b0538ab86a74
            </div>
          </div>
    <div class="container">
      </div>
     @section('navigation')
        @parent
        @endsection

@stop