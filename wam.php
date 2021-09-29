<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <title>Prueba wam</title>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>


    <div class="col-lg-8 mx-auto p-3 py-md-5">
        <header class="d-flex align-items-center pb-3 mb-2 border-bottom">
          <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">Prueba wam</span>
          </a>
        </header>
      
        <main>
        <div class="mb-2">
      <a href="/wamList.php" class="btn btn-primary btn-lg px-4">Download JSON</a>
    </div>
          <div class="mb-2">
          <table id="wamTable" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Localizador</th>
                    <th>Huesped</th>
                    <th>Fecha de entrada</th>
                    <th>Fecha de salida</th>
                    <th>Hotel</th>
                    <th>Precio</th>
                    <th>Posibles Acciones</th>
                </tr>
            </thead>
        </table>
          </div>         
        </main>
        <footer class="pt-5 my-5 text-muted border-top">
          Koala Developer &middot; &copy; 2021
        </footer>
      </div>


        <script>
            $(document).ready(function() {
                $('#wamTable').DataTable({
                    "ajax": "./wamList.php?dt",
                    "columns": [{
                            "data": "Localizador"
                        },
                        {
                            "data": "Huesped"
                        },
                        {
                            "data": "Fecha de entrada"
                        },
                        {
                            "data": "Fecha de salida"
                        },
                        {
                            "data": "Hotel"
                        },
                        {
                            "data": "Precio"
                        },
                        {
                            "data": "Posibles Acciones"
                        }
                    ]
                });
            });
        </script>


</body>

</html>