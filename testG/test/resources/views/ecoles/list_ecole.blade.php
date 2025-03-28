@extends('layouts.master')
@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
       
            <div class=" mx-auto pt-5">
                <h5  ><strong >LISTES DES ETABLISSEMENT</strong></h5>
                
            </div>
            <div  class="card-header" style="display: flex ">
                <h5 class=" col-lg-11"> Table</h5>
                <a href="{{route('add_ecole')}}"><button type="submit" class="btn btn-space   btn-secondary  " >Ajouter</button></a>
            </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered first" class="mx-4">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Code</th>
                            <th colspan="3" class="col-sm-2 col-md-2 col-lg-2 f-icon">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ecoles as $ecole)
                          
                        <tr>
                            <td>{{$ecole->nomEcole}}</td>
                            <td>{{$ecole->codEcole}}</td>
                            <td>
                                <a href="{{route('edit_ecole', $ecole->id)}}"><button type="submit" class="btn btn-space   btn-secondary  " ><i class="fas fa-edit"></i></button></a>
                                </td>
                            <td><a href="{{route('delete_ecole', $ecole->id)}}"><button type="submit" class="btn btn-space   btn-secondary  " ><i class="fas fa-prescription-bottle"></i></button></a></td>
                            
                        </tr>

                        @endforeach
                        
                       
                </table>
            </div>
        </div>
    </div>
</div>
@endsection