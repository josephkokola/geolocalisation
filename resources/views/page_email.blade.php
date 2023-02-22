<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page email | Geolocalisation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">

</head>

@livewireStyles
<body style="background-color:grey">
<div class="card col-6" style="text-align: center;margin-top: 100px;margin-left: 300px;">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Entrez votre adresse mail</p>

      <form action="{{route('forget_password')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="str_forget_email" value="{{ old('email') }}"  autocomplete="email" autofocus required>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        
        <div class="row">
          <!-- /.col -->
          <div class="col-12" style="position:center">
            <button id="btnforget" type="submit" class="btn btn-primary btn-block">Envoyer</button>
          </div>
          <!-- /.col -->
        </div>
        
        
      </form>
      @if(Session::has('message'))

            <p class="alert alert-info mt-2" style="background-color:#F33A6A">{{ Session::get('message') }}</p>
      @elseif(Session::has('msg'))
           <p class="alert alert-info mt-2" style="background-color:#F33A6A">{{ Session::get('msg') }}</p> 
      @endif

    </div>
    <!-- /.login-card-body -->
  </div>

<script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('template/dist/js/adminlte.min.js')}}"></script>
@livewireScripts
</body>
</html>
