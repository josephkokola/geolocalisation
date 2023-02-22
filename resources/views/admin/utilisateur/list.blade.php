@extends('layouts.admin')

@section('title')

	Liste utilisateurt
@endsection

@section('content')

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des utilisateurs</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Prenoms</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Accreditation</th>
                    <th>Statut</th>	
                    <th class="text-center">Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach($dataUser as $dataUsers)

                  	<tr>
                  		<td>{{$dataUsers->nom}}</td>
                  		<td>{{$dataUsers->prenoms}}</td>
                  		<td>{{$dataUsers->email}}</td>
                  		<td>{{$dataUsers->contact}}</td>
                  		<td>{{$dataUsers->accreditation}}</td>
                  		@if(Auth::User())
                  		<td style="color:green;">connecté</td>
                  		@else
                  		<td style="color:grey;">non connecté</td>
                  		@endif
                  		<td class="text-center">
                  			<a class="bt btn-sm btn-success" href="">Modifier</a>
                  			<a class="bt btn-sm btn-danger" href="">Supprimer</a>
                  		</td>
                  	</tr>


                  	@endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>





@endsection