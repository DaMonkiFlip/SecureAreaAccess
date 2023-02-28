
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
        <script type="text/javascript" src="tooltip.js"></script>
    </head>


    <body style="background-image: url(img.jpg);">
    <div class="container">
    <a href="index.php"><button type="button" class="btn btn-primary btn-lg" >Add Data</button></a>
    </div>
    <div class="container"> 
        <!-- in here we add the id to download -->
    <table class="table table-dark" id="download">
                <thead>
            <tr>
                <th scope="col">Nombre(s)</th>
                <th scope="col">Numero Empleado</th>
                <th scope="col">Puesto</th>
                <th scope="col">Acceso a</th>
                <th scope="col">Borrar</th>
                <th scope="col">Descargar</th>
                </tr>
            <?php 
                include_once"config.php";
                $sql=mysqli_query($conn,"SELECT * FROM details");

                while($row=mysqli_fetch_assoc($sql)){
                    $unserializeaccess=unserialize($row['access']);

           ?>

        </thead>
        <tbody>
            <tr>

                <td><?=$row["firstname"] ?></td>
                <td><?=$row["numemp"] ?></td>
                <td><?=$row["puesto"] ?></td>
                <!-- unserialize the access field and converts it again in a normal string -->
                <td><?php 
                        foreach ($unserializeaccess as $key => $value){
                            echo $value.", ";
                        }
                    ?>
                </td>
                <td><a href="#" onclick="download_table_as_csv('my_id_table_to_export');">Download as CSV</a></td>
                <td>
                    
                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
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
        var row = [], cols = rows[i].querySelectorAll('td, th');
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

</html>

