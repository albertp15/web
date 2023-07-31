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
            <h1 class="text-center mb-3 fw-bold">Ligas</h1>
            <table id="tablasUsuarios" class="table-striped table-bordered my-5" style="width:100%">
                <thead>
                 <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Deporte</th>

                </tr>
                </thead>
                <tbody>
                </tbody>
            </table><br>
            <a class="btn btn-success" href="admin.php" role="button">Volver</a>

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
          $('#tablasUsuarios').DataTable( {
            "ajax":{
                "url": "bd/consulta_ligas.php",
                "dataSrc":""
            },
            "columns":[
                {"data": "id_ligas"},
                {"data": "ligas"},
                {"data": "imagen_liga",
                  "render":function(data,type,row){
                    return '<img src = "' + row.imagen_liga + '" width = "60px" height = "auto" />';
                  }
                },
                {"data": "id_deporte"},

            ]  
          });
      });
    </script>
      
  </body>
</html>