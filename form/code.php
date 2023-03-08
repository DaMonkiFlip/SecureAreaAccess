<script>
    // Quick and simple export target #table_id into a csv
    function download_table_as_csv(table_id, separator = ',') {
        // Select rows from table_id
        var rows = document.querySelectorAll('table#' + "download" + ' tr');
// the "download" text is the id that should be linked to your table

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




<!-- download button -->
<a class="nav-link" href="#" onclick="download_table_as_csv('my_id_table_to_export');">Descargar como Excel <span class="sr-only">(current)</span></a>

<!-- where it says "my id table to export" change to the name you want. That gives the name to the csv file. -->


<!-- E X A M P L E -->

<table class="table table-dark" id="download"> 
    <!-- where it says id, link it to the id on the line 5-->
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


<!-- it should be ready to-go by copy-pasting it -->

