@extends('layouts.master')
@section('content')
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        
        <div  class="card-header" style="display: flex ">
            <div class="section-block" id="basicform">
                <h3 class="section-title" style="font-family: algerian">Enregistrement d'un stagiaire</h3>
                <p>Veuillez entrez vos information pour qu'on puisse vous enrégistrer.</p>
            </div>
            <a href="{{route('list_stagiaire')}}"><button type="submit" class="btn btn-space   btn-secondary  " >Retour à la list des stagiaires</button></a>
        </div>
        
        <div class="card">
            
            <div class="card-body">
               
                <form method="post">
                    @csrf
                <div style="display: flex">
                    <div   class="form-group col-lg-6  " >
                        <label for="inputText3" class="col-form-label">Nom</label>
                        <input id="inputText3" type="nom" class="form-control" name="nomStag" value="{{$stagiaires->nomStag}}" readonly >
                        
                    </div>
                    <div   class="form-group col-lg-6  " >
                        <label for="inputText3" class="col-form-label">Prénom</label>
                        <input id="inputText3" type="prenom" class="form-control" name="prenStag" value="{{$stagiaires->prenStag}}" readonly>
                        
                    </div>
                </div>
                <div style="display: flex">
                    <div class="form-group col-lg-6">
                        <label for="inputText3" class="col-form-label">Date de naissance</label>
                        <input id="inputText3" type="text" class="form-control" name="datNais" value="{{$stagiaires->datNais}}" readonly>
                    </div>

                    
                    <div class="form-group col-lg-6">
                        <label for="inputText3" class="col-form-label">Genre</label>
                        <input id="inputText3" type="text" class="form-control" name="genre" value="{{$stagiaires->genre}}" readonly>
                    </div>
                </div>
                <div style="display: flex">

                    <div class="form-group col-lg-6">
                        <label for="inputEmail"  class="col-form-label" >Email </label>
                        <input id="inputEmail" type="email" class="form-control" name="email" value="{{$stagiaires->email}}" readonly>
                        
                    </div>
                    
                       
                    <div class="form-group col-lg-6">
                        <label for="inputText4" class="col-form-label">Télephone</label>
                        <input id="inputText4" type="number" class="form-control"  name="tel" value="{{$stagiaires->tel}}" readonly>
                        
                    </div>
                </div>
            <div style="display: flex">
                <div class="form-group col-lg-6">
                    <label for="inputText4" class="col-form-label">Date de début de stage</label>
                    <input id="inputText4" type="text" class="form-control" name="datDebut" value="{{$stagiaires->datDebut}}" readonly>
                    
                </div>
                
                <div class="form-group col-lg-6">
                    <label for="inputText4" class="col-form-label">Date de fin de stage</label>
                    <input id="inputText4" type="text" class="form-control"  name="datFin" value="{{$stagiaires->datFin}}" readonly>
                    
                </div>
            </div>
                  
            <div style="display: flex">
                <div class="form-group col-lg-4">
                    <label for="input-select">Eole</label>
                    <select class="form-control" id="input-select" name="idEcole" readonly >
                        @foreach ($ecoles as $ecole)
                   
                        <option value="{{$ecole->id}}" {{$stagiaires->ecole_id == $ecole->id ? 'selected':''}}>{{$ecole->nomEcole}} </option>
                    @endforeach
                    </select readonly>
                
                </div>
            
                <div class="form-group col-lg-4">
                    <label for="input-select">Filière</label>
                    <select class="form-control" id="input-select" name="idFil" readonly >
                    @foreach ($filieres as $filiere)
                   
                        <option value="{{$filiere->id}}" {{$stagiaires->filiere_id == $filiere->id ? 'selected':''}}>{{$filiere->libelle}}</option>
                    
                    @endforeach
                </select> 
                </div>
                    <div class="form-group col-lg-4">
                        <label for="input-select">Type de filière</label>
                        <select class="form-control" id="input-select" name="idTypStag" readonly >
                            @foreach ($type_stages as $type)                   
                                <option value="{{$type->id}}" {{$stagiaires->type_stage_id == $type->id ? 'selected':''}}>{{$type->libelle}} </option> 
                            @endforeach

                        </select>
                    </div>
            </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Theme</label>
                    <textarea required="" class="form-control" name="theme" readonly>{{$stagiaires->theme}}</textarea>
                    
                </div>  
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Address</label>
                    <textarea required="" class="form-control" name="adrStag" readonly>{{$stagiaires->adrStag}}</textarea>
                    
                </div>
                </form>
            </div>
          
        </div>
    </div>
</div>

@endsection
