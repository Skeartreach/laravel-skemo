@extends('layouts.header_new')
@section('title')
      Skemo - Personal Memo
@stop
@section('content')
  @parent
@foreach($branches as $branch)
  <?php $arrayBranches[0] = 'N/A';
  $arrayBranches[$branch->id] = $branch->name ;
  ?>
@endforeach
  
  <!--  Formulaire d'ajout de post-->
  <div class="col-lg-6">
            <div class="well">
                {{ Form::open(array('url' => 'entities/add', 'method' => 'put' ,'class' => 'bs-example form-horizontal')) }}
                <fieldset>
                  <legend>Ajout d'une nouvelle entité</legend>  

                  <!--  name -->           
                  <div class="form-group">
                    <label for="frm_content" class="col-lg-2 control-label">Nom</label>
                    <div class="col-lg-10">
                    {{ Form::text('frm_name','', array('class' => 'form-control','required' , 'placeholder'=>"Nom et Prénom ou Nom si entreprise")) }}
                    </div>
                  </div>
                   <!--  Branch -->  
                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Branche</label>
                    <div class="col-lg-10">
                        {{ Form::select('frm_branch', $arrayBranches,'', array('class' => 'form-control','required')) }}
                      <br>
                    </div>
                  </div>

                   <!--  email -->  
                   <div class="form-group">
                    <label for="frm_email" class="col-lg-2 control-label" >Email</label>
                    <div class="col-lg-10">
                      {{ Form::email('frm_email','', array('class' => 'form-control', 'placeholder'=>"contact@example.com" )) }}
                    </div>
                  </div>

                    <!--  phone -->  
                   <div class="form-group">
                    <label for="frm_phone" class="col-lg-2 control-label" >Téléphone</label>
                    <div class="col-lg-10">
                      {{ Form::text('frm_phone','', array('class' => 'form-control', 'placeholder'=>"Ex:  021 123 45 67")) }}
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