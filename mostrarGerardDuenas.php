<?php
require_once('database_connection.php');
require_once('class.datos.php');

$objDatos = new Datos($connect, 2);
$url = $objDatos -> getURL();
$author_name = $objDatos -> getAuthorName();
$author_url = $objDatos -> getAuthorUrl();
$type =  $objDatos -> getPhoto();
?>

<style>
    .blue-table {
        background-color: #e6f7ff; /* Azul claro */
        color: #00008b; /* Azul oscuro */
        border-collapse: collapse;
        width: 100%;
    }

    .blue-table th, .blue-table td {
        border: 1px solid #00008b; /* Azul oscuro */
        padding: 8px;
        text-align: left;
    }

    .blue-table th {
        background-color: #87ceeb; /* Azul claro */
    }
</style>

<table class="blue-table">
    <tr>
        <th>URL</th>
        <td><?php echo $url; ?></td>
    </tr>
    <tr>
        <th>Author Name</th>
        <td><?php echo $author_name; ?></td>
    </tr>
    <tr>
        <th>Author URL</th>
        <td><?php echo $author_url; ?></td>
    </tr>
    <tr>
        <th>Tipo</th>
        <td><?php echo $type; ?></td>
    </tr>
</table>