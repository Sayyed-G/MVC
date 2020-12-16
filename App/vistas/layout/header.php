<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <style>
            body{
                background-color: #c0dae8;
                font-family: "Book Antiqua";
            }
            h1{
                font-size: 25px;
            }
            h1{
                font-size: 20px;
            }
        </style>
</head>
<body>

<table border="1" width="100%" >
    <tr>
        <td width="20%">
            <?php
                switch ($_SESSION["tipo"]){
                    case"profesor":
                        echo "Profesor
                            <li><a href='#'>Ver Cursos a Cargo</a></li>";
                    break;
                    case"estudiante":
                        echo "Estudiante
                            <li><a href='#'>Ver Notas</a></li>
                            <li><a href='#'>Matriculas</a></li>";
                        break;
                    case"administrador":
                        echo "Administrador
                            <li><a href='App/vistas/uCrear.php'>Crear Usuario</a></li>
                            <li><a href='#'>Crear Plan de Estudio</a></li>
                            <li><a href='#'>Asignar Curso</a></li>";
                        break;
                }
                echo "<li><a href='logout.php'>Salir</a></li>"
            ?>
        </td>
        <td>
