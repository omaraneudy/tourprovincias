
<?php
    if(!isset($_SESSION["validarIngreso"])){

        echo '<script>window.location = "index.php?pagina=ingreso";</script>';

        return;

    }else{

        if($_SESSION["validarIngreso"] != "ok"){

            echo '<script>window.location = "index.php?pagina=ingreso";</script>';

            return;
        }

    }
?>

<?php
    if($_SESSION["validarIngreso"] == "ok"){

        if($_SESSION["privilegio"] == "3" || $_SESSION["privilegio"] == "2") {
            echo '<script>window.location = "index.php?pagina=admin";</script>';

            return;
        }
        else{
            echo '<script>window.location = "index.php?pagina=cliente";</script>';

            return;

        }

    }else{

            echo '<script>window.location = "index.php?pagina=ingreso";</script>';

            return;
        

    }
?>