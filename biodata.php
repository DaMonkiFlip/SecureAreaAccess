
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
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
                
                
            </tr>
            <?php 
                include_once"config.php";
                $sql=mysqli_query($conn,"SELECT * FROM details");

                while($row=mysqli_fetch_assoc($sql)){
                    $unserializeaccess=unserialize($row['accessto']);

           ?>

        </thead>
        <tbody>
            <tr>
                <td><?=$row["firstname"] ?></td>
                <td><?=$row["numemp"] ?></td>
                <td><?=$row["puesto"] ?></td>
             
                <td><?=$row["accessto"] ?></td>
                <td><?php 
                        foreach ($unserializeaccess as $key => $value){
                            echo $value.", ";
                        }
                    ?>
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

