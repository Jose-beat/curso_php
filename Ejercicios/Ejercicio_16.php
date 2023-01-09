<?php
    $tabla = array(
        "Frutas" => array("Manzana", "Naranja", "Sandia", "Fresa"),
        "Deportes" => array("Futbol", "Tenis", "Baloncesto", "Beisbol"),
        "Idiomas" => array("Spanish", "English", "French")
    );


    var_dump($tabla);


?>

<<table class="table table-light" border=1>
    <tbody>
        <tr>
            <th>Fruta</th>
            <th>Deporte</th>
            <th>Idioma</th>
            
        </tr>
        <tr>
            <td><?=$tabla["Frutas"][0]?></td>
            <td><?=$tabla["Deportes"][0]?></td>
            <td><?=$tabla["Idiomas"][0]?></td>
           
        </tr>
        <tr>
            <td><?=$tabla["Frutas"][1]?></td>
            <td><?=$tabla["Deportes"][1]?></td>
            <td><?=$tabla["Idiomas"][1]?></td>
           
        </tr>
        <tr>
            <td><?=$tabla["Frutas"][2]?></td>
            <td><?=$tabla["Deportes"][2]?></td>
            <td><?=$tabla["Idiomas"][2]?></td>
           
        </tr>
    </tbody>
</table>>