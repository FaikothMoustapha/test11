@extends('layouts.master')
@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
       
            <div class=" mx-4 pt-5">
                <h5  ><strong >LISTES DES TYPES DE STAGE</strong></h5>
                
            </div>
            <div  class="card-header" style="display: flex ">
                <h5 class=" col-lg-11">Basic Table</h5>
            </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered first" class="mx-4">
                    <thead>
                        <tr>
                            <th>CODE</th>
                            <th>Libellé</th>
                            <th colspan="3" class="col-sm-6 col-md-4 col-lg-2 f-icon">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($type_stage as $type)
                          
                        <tr>
                            <td>{{$type->code}}</td>
                            <td>{{$type->libelle}}</td>
                            
                            <td ><div class="col-sm-2 col-md-2 col-lg-2 f-icon"><i class="fas fa-edit"></i> </div></td>
                            <td ><div class="col-sm-2 col-md-2 col-lg-2 f-icon"><i class="fas fa-prescription-bottle"></i> </div></td>
                           

                        </tr>

                        @endforeach
                        
                       
                </table>
            </div>
        </div>
    </div>
</div>
@endsection