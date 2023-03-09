<?php session_start(); /* Starts the session */

if (!isset($_SESSION['UserData']['Username'])) {
  header("location:../login.php");
  exit;
}
?>

<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM employee");
?>
<html>

<head>
<title>Tabla Información</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<nav class="navbar navbar-expand-lg nidec-green navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="./mainform.php">Añadir información</a>
      </li>
      <li class="nav-item active" >
        <a class="nav-link" href="#">Ver Información <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="#" onclick="download_table_as_csv('my_id_table_to_export');">Descargar como Excel <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./logout.php">Cerrar Sesión</a>
      </li>
    </ul>
  </div>
</nav>

<body>
    <div class="container">
    </div>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <br>
                    
                </div>
                <div class="col-sm">
                    <br>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Nidec_company_logo.svg/2560px-Nidec_company_logo.svg.png" class="img-fluid image-custom1">
                </div>
                <div class="col-sm text-center">
                    <br>
                  
                </div>
            </div>
        </div>
        <br>
        <!-- start table -->
        <!-- search bar -->
        <input class="form-control" id="myInput" type="text" placeholder="Buscar..."><br>
           <!-- end search bar -->
        <!-- in here we add the id to download -->
        <table class="table table-dark biodata-table" id="download">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre(s)</th>
                    <th scope="col">Numero Empleado</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">Acceso a</th>
                    <th scope="col">Eliminar</th>
                </tr>
                <?php
                include_once "config.php";
                $sql = mysqli_query($conn, "SELECT * FROM details");

                while ($row = mysqli_fetch_assoc($sql)) {
                    $unserializeaccess = unserialize($row['access']);

                ?>

            </thead>
            <tbody id="myTable">
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["firstname"] ?></td>
                    <td><?= $row["numemp"] ?></td>
                    <td><?= $row["puesto"] ?></td>
                    <td><?php
                        foreach ($unserializeaccess as $key => $value) {
                            echo $value . ", ";
                        }
                        ?>
                    </td>

                    <td>
                    <a href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a>
                    </td>
                </tr>

            <?php
                }
            ?>


            </tbody>
            
        </table>

    </div>
    <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<!-- Always remember to call the above files first before calling the bootstrap.min.js file -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
<script>
    // Quick and simple export target #table_id into a csv
    function download_table_as_csv(table_id, separator = ',') {
        // Select rows from table_id
        var rows = document.querySelectorAll('table#' + "download" + ' tr');
        // Construct csv
        var csv = [];
        for (var i = 0; i < rows.length; i++) {
            var row = [],
                cols = rows[i].querySelectorAll('td, th');
            for (var j = 0; j < cols.length; j++) {
                // Clean innertext to remove multiple spaces and jumpline (break csv)
                var data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, '').replace(/(\s\s)/gm, ' ')
             
                data = data.replace(/"/g, '""');
                // Push escaped string
                row.push('"' + data + '"');
            }
            csv.push(row.join(separator));
        }
        var csv_string = csv.join('\n');
        // Download it
        var filename = 'export_' + table_id + '_' + new Date().toLocaleDateString() + '.csv';
        var link = document.createElement('a');
        link.style.display = 'none';
        link.setAttribute('target', '_blank');
        link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv_string));
        link.setAttribute('download', filename);
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
</script>

<script>
 $(document).ready(function(){
   $("#myInput").on("keyup", function() {
     var value = $(this).val().toLowerCase();
     $("#myTable tr").filter(function() {
       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
     });
   });
 });
 </script>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>