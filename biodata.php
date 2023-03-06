
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>


<body>
    <div class="container">
    </div>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <br>
                    <a href="mainindex.php"><button type="button" class="btn btn-primary btn-lg">Add Data</button></a>
                </div>
                <div class="col-sm">
                    <br>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Nidec_company_logo.svg/2560px-Nidec_company_logo.svg.png" class="img-fluid image-custom1">
                </div>
                <div class="col-sm text-center">
                    <br>
                    <a href="#" onclick="download_table_as_csv('my_id_table_to_export');"><button type="button" class="btn btn-primary btn-lg"> Download as Excel</button></a>
                </div>
            </div>
        </div>
        <br>
        <!-- start table -->
        <!-- search bar -->
        <input class="form-control" id="myInput" type="text" placeholder="Buscar..."><br>
           <!-- end search bar -->
        <!-- in here we add the id to download -->
        <table class="table table-dark" id="download">
            <thead>
                <tr>
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

                    <td><?= $row["firstname"] ?></td>
                    <td><?= $row["numemp"] ?></td>
                    <td><?= $row["puesto"] ?></td>
                    <!-- unserialize the access field and converts it again in a normal string -->
                    <td><?php
                        foreach ($unserializeaccess as $key => $value) {
                            echo $value . ", ";
                        }
                        ?>
                    </td>

                    <td>
                        <!-- espacio para poner boton eliminar, sweetalert2 -->
                    </td>
                </tr>

            <?php
                }
            ?>


            </tbody>
            
        </table>

    </div>
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
                // Escape double-quote with double-double-quote (see https://stackoverflow.com/questions/17808511/properly-escape-a-double-quote-in-csv)
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