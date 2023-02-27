
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
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">FirstName</th>
                <th scope="col">Numero Empleado</th>
                <th scope="col">Puesto</th>
                <th scope="col">Acceso a</th>
                <th scope="col">Borrar</th>
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

</html>

