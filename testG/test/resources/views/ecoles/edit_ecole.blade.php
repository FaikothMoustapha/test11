@extends('layouts.master')
@section('content')
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div  class="card-header" style="display: flex ">
            <div class="section-block" id="basicform">
                <h3 class="section-title" style="font-family: algerian">Enregistrement d'un etablissement</h3>
                <p>Veuillez ajouter une nouvelle etablissement.</p>
            </div>
            <a href="{{route('list_ecole')}}"><button type="submit" class="btn btn-space   btn-secondary  " >Retour à la list des ecoles</button></a>
        </div>
        
        <div class="card">
            
            <div class="card-body">
               
                <form method="post" action="{{route('update_ecole', $ecoles->id)}}">
                    @csrf
                
                    <div   class="form-group col-lg-3  " >
                        <label for="inputText3" class="col-form-label">Code de l'Etablissement</label>
                        <input id="inputText3" type="text" class="form-control" name="codEcole" value="{{$ecoles->codEcole}}" >
                        <div style="color: red">{{$errors->first('codEcole')}}</div>
                    </div>
                    <div   class="form-group col-lg-12  " >
                        <label for="inputText3" class="col-form-label">Nom de l'Etablissement</label>
                        <input id="inputText3" type="text" class="form-control" name="nomEcole" value="{{$ecoles->nomEcole}}">
                        <div style="color: red">{{$errors->first('nomEcole')}}</div>
                    </div>
                
                    <div class="col-sm-6 pl-0">
                        
                            <button type="submit" class="btn btn-space btn-primary">Modifier</button>
                            
                        </p>
                    </div>
                
                </form>
            </div>
          
        </div>
    </div>
</div>
@endsection