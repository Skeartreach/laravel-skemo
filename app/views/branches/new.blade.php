@extends('layouts.header_new')
@section('title')
      Skemo - Personal Memo
@stop
@section('content')
  @parent
  <!--  Formulaire d'ajout de post-->
  <div class="col-lg-6">
            <div class="well">
                {{ Form::open(array('url' => 'branches/add', 'method' => 'put' ,'class' => 'bs-example form-horizontal')) }}
                <fieldset>
                  <legend>Insérer un nouveau post</legend>  

                  <!--  Contenu -->           
                  <div class="form-group">
                    <label for="frm_content" class="col-lg-2 control-label">Nom</label>
                    <div class="col-lg-10">
                      {{ Form::text("frm_name", '',array('rows' => '3', 'class'=>'form-control', 'required', 'placeholder'=>"Nom")) }}
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