@extends('layouts.master')
@section('content')
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div  class="card-header" style="display: flex ">
            <div class="section-block" id="basicform">
                <h3 class="section-title " style="font-family: algerian">Enregistrement d'une Filière</h3>
                <p>Veuillez entrez les informations pour qu'on puisse une filière.</p>
            </div>
            <div class="col-lg-6">
            <a href="{{route('list_filiere')}}"><button type="submit" class="btn btn-space   btn-secondary  " >Retour à la list des filiere</button></a>
            </div>
        </div>
       
        <div class="card">
            
            <div class="card-body">
               
                <form method="post" action="{{route('update_filiere',$filiere->id)}}">
                    @csrf
                
                    <div   class="form-group " >
                        <label for="inputText3" class="col-form-label">Code</label>
                        <input id="inputText3" type="nom" class="form-control" name="code" value="{{$filiere->code}}">
                        <div style="color: red">{{$errors->first('code')}}</div>
                    </div>
                    <div   class="form-group  " >
                        <label for="inputText3" class="col-form-label">Libellé</label>
                        <input id="inputText3" type="prenom" class="form-control" name="libelle" value="{{$filiere->libelle}}">
                        <div style="color: red">{{$errors->first('libelle')}}</div>
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
