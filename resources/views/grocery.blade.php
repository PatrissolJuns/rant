<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('titre')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{csrf_token()}}">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <!-- <link rel="stylesheet" href="http://localhost/MyRestaurant/resources/views/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>

<?php /*
    <div class="container">
      <div class="alert alert-success" style="display:none"></div>
      <form id="idform">
        <div class="form-group">
          <label for="name">name</label>
          <input type="text" name="" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="type">type</label>
          <input type="text" name="" id="type" class="form-control">
        </div>
        <div class="form-group">
          <label for="price">price</label>
          <input type="text" name="" id="price" class="form-control">
        </div>
        <button class="btn btn-primary" id="ajaxSubmit" >Submit</button>
      </form>
    </div>

    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          @if (isset($datas))
          @foreach($datas as $data)
          <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->type }}</td>
            <td>{{ $data->price }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $datas->links() }}
      @endif
    </div>
*/
?>
<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <section class="articles">
        test: <div class="spinner-border"></div>
        <div id="load" style="position: relative">
          @foreach($datas as $data)
            <div>
              <h3>
                nom:  {{ $data->name }}
              </h3>
            </div>
          @endforeach
        </div>
      {{ $datas->links() }}
      </section>
    </div>
  </div>
</div>
    




<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  <script src="js/main.js"></script>


  <script>
    $(document).ready(function(){
      /* $('#ajaxSubmit').click(function(e){
        e.preventDefault();
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
        });
        $.ajax({
          url: "{{url('grocery/post')}}",
          method: 'post',
          data: {
            name: $("#name").val(),
            type: $('#type').val(),
            price: $('#price').val()
          },
          success: function(result){
            $('.alert').show();
            $('.alert').html(result.success);
          }
        });
      }); */
      $(function(){
        $('body').on('click', '.pagination a', function(e){
          e.preventDefault();
          
          $('#load a').css('color', '#dfecf6');
          $('#load').hide(1000);
          // $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="../images/loading.gif" />');

          var url = $(this).attr('href');
          getArticle(url);
          window.history.pushState("", "", url);
        });
        
        function getArticle(url){
          $.ajax({
            url: url
          }).done(function (data){
            //alert('ca marche');
            $('#load').show(1000);
            $('.articles').html(data);
            //console.log(data);
          }).fail(function (){
            alert('Articles could not be loaded');
          });
        }
      });
    });
  </script>
    
 </body>
</html>
















<?php
/*

@extends('template')
@section('contenu')

{ ! ! Form::open ( [ ' url ' => ' users ' ] ) ! ! }
{ ! ! Form::label (' nom' , 'Entrez votre nom : ') ! ! }
{ ! ! Form::text (' nom' ) ! ! }
{ ! ! Form::submit ('Envoyer !') ! ! }
{ ! ! Form::close ( ) ! ! }

@endsection
<!doctype html>
<head>
<meta charset="UTF-8">
<title>Users</title>
<body>
<form method="POST" action="http://monsite.fr/users" accept-charset="UTF-8">
<input name="_token" type="hidden" value="pVlvWWdUqFDf YsB j Kag43C3NvzbIC01HtMnv9BpI">
<label f or="nom">Entrez votre nom : </label>
<input name="nom" type="text" id="nom">
<input type="submit" value="Envoyer !">
</form>
</body>
</html>
*/
?>