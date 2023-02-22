@extends('layouts.admin')


@section('content')

<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm">
                <div class="card-body">
                	<div class="row">
	                	<div class="form-group col-md-6">
		                    <label for="exampleInputEmail1">Nom</label>
		                    <input  name="email" class="form-control" id="exampleInputEmail1" placeholder="Entrez le nom">
	                  	</div>
	                    <div class="form-group col-md-6">
		                    <label for="exampleInputPassword1">Prenom</label>
		                    <input name="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez le prenom">
	                    </div>
                	</div>
                	<div class="row">
	                	<div class="form-group col-md-6">
		                    <label for="exampleInputEmail1">Email</label>
		                    <input  name="email" class="form-control" id="exampleInputEmail1" placeholder="Entrez le nom">
	                  	</div>
	                    <div class="form-group col-md-6">
		                    <label for="exampleInputPassword1">Contact</label>
		                    <input name="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez le prenom">
	                    </div>
                	</div>
                	<div class="row">
	                    <div class="form-group col-md-6">
		                    <label for="exampleInputPassword1">Accreditation</label>
		                    <select class="form-control select2" style="width: 100%;">
			                    <option selected="selected">Admin</option>
			                    <option>User</option>
			                    
			                </select>
	                    </div>
	                    <div class="form-group col-md-6">
		                    <label for="exampleInputEmail1">Nom</label>
		                    <input  name="email" class="form-control" id="exampleInputEmail1" placeholder="Entrez le nom">
	                  	</div>
                	</div>
                	<div class="row">
	                	<div class="form-group col-md-6">
		                    <label for="exampleInputEmail1">Mot de passe</label>
		                    <input  type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Entrez le nom">
	                  	</div>
	                    <div class="form-group col-md-6">
		                    <label for="exampleInputPassword1">Accreditation</label>
		                    <select class="form-control select2" style="width: 100%;">
			                    <option selected="selected">Admin</option>
			                    <option>User</option>
			                    
			                </select>
	                    </div>
                	</div>
                  
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>


@endsection