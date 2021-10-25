<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title> @yield('titulo') Datatables con Modals </title>
   <!--         Bootstrap            -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

   <!-- Datatables  -->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.css">
</head>
<body>


    <div class="container">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <!-- Titulo  -->
     <h5 class="h1 text-center text-danger mt-4">@yield('titulohtml')</h5>
   </div>
   <div class="col-sm-2"></div>
   </div>


   
   <!-- Contenido -->
<div class="row">
    <div class="col-sm-2"> </div>
    <div class="col-sm-8">
  @yield('contenido')
    </div>
    <div class="col-sm-2"></div>
    </div>
    
    </div>









 <!-- Jquery -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <!--  Bundle.js -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

 <!-- Datatables    -->
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.js"></script>

 

 <!--  Documentos Javascript  para abrirlo public/js/archivo.js -->
 <script src="{{url('js/datatable.js')}}"></script>
 <script src="{{url('js/modals.js')}}"></script>

 <!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</body>
</html>