<?php session_start(); /* Starts the session */

if (!isset($_SESSION['UserData']['Username'])) {
  header("location:../login.php");
  exit;
}
?>
<html>

<head>
  <title>Form Registro</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
  
  <link rel="stylesheet" href="style.css">


  <!-- <script>
           function validateForm() {
          
           var fname = document.forms["myForm"]["fname"].value;
           var lname = document.forms["myForm"]["lname"].value;
           var email = document.forms["myForm"]["email"].value;
           var num = document.forms["myForm"]["phone"].value;
           var date = document.forms["myForm"]["date"].value;
           var gender = document.forms["myForm"]["gender"].value;
           var address = document.forms["myForm"]["address"].value;
           var hobby = document.forms["myForm"]["hobby[]"];
          console.log(hobby);
          for(i=0;i<hobby.length;i++){
            if(hobby[i].checked==true){
              alert("success");
              break;
            }else{
              count=1;
            }
          }
          if(count==1){
            alert ("unsuccess");
          }
          

           if (fname == "" && lname=="" && email=="" && num==""&& date=="" && gender=="" && address=="" && hobby=="" ) {
             alert("All fields must be filled out");
             return false;
           }

           if (fname == "") {
             alert("Firstname must be filled out");
             return false;
           }
           if (lname == "") {
             alert("Lastname must be filled out");
             return false;
           }
           if (email == "") {
             alert("Email must be filled out");
             return false;
           }
           if (num == "") {
             alert("Phone number must be filled out");
             return false;
           }
           if (date == "") {
             alert("Date must be selected");
             return false;
           }
          
           if (gender == "") {
             alert("Gender must be selected");
             return false;
           }
           if (address == "") {
             alert("Address must be filled out");
             return false;
           }

           if (hobby="") {
             alert("At least one hobby must be selected");
             return false;
           }

          }
          </script> -->
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="">Añadir información <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./biodata.php">Ver Información</a>
      </li>
      
      
      <li class="nav-item ">
        <a class="nav-link" href="./logout.php">Cerrar Sesión</a>
      </li>
    </ul>
  </div>
</nav>


<br>
   
  
</div>

  <div class="col-sm-3">
    
  </div>
  
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <form name="myForm" onsubmit="return validateForm()" action="./entryBiodata.Controller.php" method="POST" style="background-color:rgb(190, 215, 229); ">
        <div class="col-sm-12">
          <img src="https://www.amats.com.mx/images/nidec-corporation-logo-vector.svg" alt="logo" class="img-fluid">
          <h1 class="border-bottom center pb-3 mb-4" style="text-align: center;">Formulario Registro Acceso </h1>
        </div>
        <div class="form-group row">
          <div class="col-sm-1"></div>
          <label class="col-sm-3" for="first_name">Nombre(s):</label>
          <div class="col-sm-7">
            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Nombre(s)" required>
          </div>
        </div>

        <!-- <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 " for="inputEmail">Email de Contacto:</label>
                    <div class="col-sm-7">
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address" required>
                    </div>
                </div> -->
        <div class="form-group row">
          <div class="col-sm-1"></div>
          <label class="col-sm-3 " for="numemp">Número de Empleado:</label>
          <div class="col-sm-7">
            <input type="number" name="numemp" class="form-control" id="numemp" placeholder="Ingrese su numero de empleado" required>
          </div>
        </div>


        <!-- <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3">Fecha de Nacimiento:</label>
                    <div class="col-sm-3">
                      <input type="date"  name="date" required>
                      </div>
                        
                </div> -->


        <!-- <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 ">Gender:</label>
                    <div class="col-sm-7 ">
                        <label class="mb-0 mr-3">
                            <input type="radio" class="mr-1" name="gender" value="male"> Male
                        </label>
                        <label class="mb-0 mr-3">
                            <input type="radio" class="mr-1" name="gender" value="female"> Female
                        </label>
                    </div>
                </div> -->

        <div class="form-group row">
          <div class="col-sm-1"></div>
          <label class="col-sm-3 " for="puesto">Puesto:</label>
          <div class="col-sm-7">
            <input type="text" name="puesto" class="form-control" id="puesto" placeholder="Puesto del empleado" required>
          </div>
        </div>


        <!-- access to doors checkboxes section  added this -->
        <div class="form-group row">
          <div class="col-sm-1"></div>
          <label class="col-sm-3 ">Accesos:</label>
          <div class="col-sm-6">
            <div class="custom-control custom-checkbox custom-control-inline">
              <input class="custom-control-input" type="checkbox" id="access1" name="access[]" value="Puerta 1">
              <label class="custom-control-label" for="access1">Puerta 1</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input class="custom-control-input" type="checkbox" id="access2" name="access[]" value="Puerta 2">
              <label class="custom-control-label" for="access2">Puerta 2</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input class="custom-control-input" type="checkbox" id="access3" name="access[]" value="Puerta 3">
              <label class="custom-control-label" for="access3">Puerta 3</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input class="custom-control-input" type="checkbox" id="access4" name="access[]" value="Puerta 4">
              <label class="custom-control-label" for="access4">Puerta 4</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input class="custom-control-input" type="checkbox" id="access5" name="access[]" value="Puerta 5">
              <label class="custom-control-label" for="access5">Puerta 5</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input class="custom-control-input" type="checkbox" id="access6" name="access[]" value="Puerta 6">
              <label class="custom-control-label" for="access6">Puerta 6</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input class="custom-control-input" type="checkbox" id="access7" name="access[]" value="Puerta 7">
              <label class="custom-control-label" for="access7">Puerta 7</label>
            </div>
          </div>
        </div>
        <br>
        <!-- end of access to doors checkboxes section   -->

        <!-- send buttons -->
        <div class="container">
        <div class="row align-items-start">

        <div class="col-1">
        </div>

          <div class="col-1">
            <input type="submit" class="btn btn-dark" value="Enviar">
          </div>

          <div class="col-7">
          </div>

          <div class="col-1 ">
            <input type="reset" class="btn btn-dark" value="Borrar">
          </div>
          
        </div>
        <br>

    

          </div>
        </div>
  </div>
      </form>

    </div>
  </div>
<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<!-- Always remember to call the above files first before calling the bootstrap.min.js file -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>