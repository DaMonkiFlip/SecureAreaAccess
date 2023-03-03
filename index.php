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

    <body class="container">
      
    <div class="container" >
    <a href="biodata.php"><button type="button" class="btn btn-primary btn-lg" >View Data</button></a>
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
                        <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Nombre(s)" required >
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
                  <label class="col-sm-3 " >Accesos:</label>
                  <div class="col-sm-6">
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input class="custom-control-input" type="checkbox" id="access1" name="access[]" value="Puerta 1">
                      <label class="custom-control-label" for="access1">Puerta 1</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input class="custom-control-input" type="checkbox" id="access2" name="access[]" value="Puerta 2" >
                      <label class="custom-control-label" for="access2">Puerta 2</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input class="custom-control-input" type="checkbox" id="access3" name="access[]" value="Puerta 3" >
                      <label class="custom-control-label" for="access3">Puerta 3</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input class="custom-control-input" type="checkbox" id="access4" name="access[]" value="Puerta 4" >
                      <label class="custom-control-label" for="access4">Puerta 4</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input class="custom-control-input" type="checkbox" id="access5" name="access[]" value="Puerta 5" >
                      <label class="custom-control-label" for="access5">Puerta 5</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input class="custom-control-input" type="checkbox" id="access6" name="access[]" value="Puerta 6" >
                      <label class="custom-control-label" for="access6">Puerta 6</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input class="custom-control-input" type="checkbox" id="access7" name="access[]" value="Puerta 7" >
                      <label class="custom-control-label" for="access7">Puerta 7</label>
                    </div>
                  </div>
              </div>
              <!-- end of access to doors checkboxes section   -->

              <!-- send buttons -->
                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <div class="col-sm-8 ">
                        <input type="submit" class="btn btn-dark" value="Enviar">
                      </div>
                      <div class="col-sm-3">
                        <input type="reset" class="btn btn-dark" value="Borrar">
                    </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-9 offset-sm-3">
                     
                  </div>
              </div>
    
          </form>
        
          </div>
          </div>
    </body>

</html>

