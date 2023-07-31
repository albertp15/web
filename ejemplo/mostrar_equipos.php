<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
   
  <!--    FontAwesome  -->
    <script src="https://kit.fontawesome.com/bf905fd10a.js" crossorigin="anonymous"></script>
    <title></title>


    <style>
        table.dataTable thead {
            background: linear-gradient(to right, #47B400, #327E00);
            color:white;
        }
    </style>

  </head>
  <body>

    <div class="container">
       <div class="row">
           <div class="col-lg-12 my-5">
           <img src="imagenes/logo2.png" alt=""><br><br>
            <h1 class="text-center mb-3 fw-bold">Equipos</h1>
            <table id="tablasUsuarios" class="table-striped table-bordered my-5" style="width:100%">
                <thead>
                 <tr>
                    <th>ID</th>
                    <th>Nombre</th>			<!-- Columnas de Frontend -->
                    <th>Logo</th>
                    <th>Fundación</th>
                    <th>Mejor Jugador</th>
                    <th>Campeonatos</th>
                    <th>Estadio</th>
                    <th>Deporte</th>
                    <th>Liga</th>
                    <th>Editar</th>
                    <th>Eliminar</th>

                  </tr>
                </thead>
                <tbody>
                </tbody>
            </table><br>
            <a class="btn btn-success" href="admin.php" role="button">Volver</a>
           </div>
       </div> 
    </div>

        <!-- Modal Update -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fs-5" id="exampleModalLabel">Editar</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmedit">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre2">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Logotipo</label>
            <input type="file" class="form-control" id="logotipo2">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Fundación</label>
            <input type="text" class="form-control" id="fundacion2">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Mejor Jugador</label>
            <input type="text" class="form-control" id="mejor_jugador2">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Campeonatos</label>
            <input type="text" class="form-control" id="Campeonatos2">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Estadio</label>
            <input type="text" class="form-control" id="estadio2">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Deporte</label>
            <input type="text" class="form-control" id="id_deporte2">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Liga</label>
            <input type="text" class="form-control" id="id_ligas2">
          </div>

        </form>
      </div>
      <div id="respuesta"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
    
        <!-- Modal Delete -->

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eliminar">
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
      
      
<!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
    <script>

        $(document).ready(function() {
          var table = $('#tablasUsuarios').DataTable({
         /* $('#tablasUsuarios').DataTable(*/ 
            "ajax":{
                "url": "bd/consulta_equipos.php",
                "dataSrc":""

            },
            "columns":[
                {"data": "id_equipo"},
                {"data": "nombre"},
                {"data": "logotipo",
                  "render":function(data,type,row){
                    return '<img src = "' + row.logotipo + '" width = "60px" height = "auto" />';
                  }
                },
                {"data": "fundacion"},
                {"data": "mejor_jugador"},
                {"data": "logro"},
                {"data": "estadio"},
                {"data": "id_deporte"},
                {"data": "id_ligas"},
                {"render": function () {
                  return '<button type="button" id="ButtonEditar" name="editar" class="editar edit-modal btn btn-warning botonEditar" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fa fa-edit"></span><span class="hidden-xs"></span></button>';
                }},
                {"render": function () {
                  return '<button type="button" id="ButtonEliminar" name="eliminar" class="eliminar edit-modal btn btn-danger botonEliminar" data-bs-toggle="modal" data-bs-target="#eliminar"><span class="fa-solid fa-x"></span><span class="hidden-xs"></span></button>';
                }},
            ]  
          });
         /* editar ('#tablasUsuarios tbody', table);*/
      }); 

   /*   var editar = function(tbody, table){
        $(table).on("click", "button.editar", function(){
          var data = table.row($(this).parents("tr")).data();
          var id_equipo = $("#id_equipo").val(data.id_equipo),
            nombre = $("#nombre2").val(data.nombre),
            logotipo = $("#logotipo2").val(data.logotipo),
            fundacion = $("#fundacion2").val(data.fundacion),
            mejor_jugador = $("#mejor_jugador2").val(data.mejor_jugador),
            Campeonatos = $("#logro").val(data.logro),
            estadio = $("#estadio2").val(data.estadio),
            id_deporte = $("#id_deporte2").val(data.id_deporte),
            id_ligas = $("#id_ligas2").val(data.id_ligas),

          });
      }

      $("frmedit").submit(function(e){
        e.preventDefault();
        var fun = "funedit";
        var id_equipo = $("#id_equipo").val();
        var nombre = $("#nombre").val();
        var logotipo = $("#logotipo2").val();
        var fundacion = $("#fundacion2").val();
        var mejor_jugador = $("#mejor_jugador2").val();
        var logro = $("#Campeonatos2").val();
        var estadio = $("#estadio2").val();
        var id_deporte = $("#id_deporte2").val();
        var id_ligas = $("#id_ligas2").val();

        $.ajax({
          url:"agregar_equipos.php",
          method:"POST",
          data:{"funcion":fun, "id_equipo":id_equipo, "nombre":nombre, "logotipo":logotipo, "fundacion":fundacion,
            "mejor_jugador":mejor_jugador, "logro":logro, "estadio":estadio, "id_deporte":id_deporte, "id_ligas":id_ligas}magic_quotes_runtime
          
          success: function(data){
            $("#exampleModal").modal('hide');

            setTimeout(function() {
              $("#resultadoedit").html(data).fadeOut(5000);
            }, 1000);
          }
        })

      })
*/



    </script>

 

      
  </body>
</html>