<?php
//echo "GET:";var_dump($_GET);
//echo "POST:";var_dump($_POST['contrasena']);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <form class="form-control" action="guardar.php" method="post">
                <div class="mb-3">
                    <label for="nombre_id" class="form-label" id="label_nombre_id">Nombre</label>
                    <input type="text" class="form-control" id="nombre_id" placeholder="Ingresa tu nombre" name="nombre">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control"  name="contrasena">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                           placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Describe tu hoobie</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="hoobie"></textarea>
                </div>
                <div class="mb-3">
                   <input type="submit" value="Guardar" id="btn_guardar">
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script>
    $( document ).ready(function() {
        // $.ajax({
        //     method: "POST",
        //     url: "guardar.php",
        //   //  data: { name: "John", location: "Boston" }
        // })
        //     .done(function( msg ) {
        //         alert("Informacion guardada");
        //     });
    });


    $( "#btn_guardar" ).click(function(e) {
        e.preventDefault();
        let nombre =$("#nombre_id").val();
        console.log(nombre);
        $.ajax({
            method: "POST",
            url: "guardar.php",
            data: { nombre, contrasena:"",email:"",hoobie:""  }
        })
            .done(function( msg ) {
                //alert("Informacion guardada");
            });
    });

</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
