<?php
    require "../session/session.php";
    require "../models/Album.php";
    require "../models/User.php";
    require "../models/Stamp.php";


    $session = new Session();

    if($session->stateLogin() == false){
        header("location:pages/login.php");
    }




    $albums = new Album();
    $stamps = new Stamp();
    $users = new User();
    $album = $albums->readAlbum();

    $userId = $users->getIdUser($session->getUser());
    
    $albumExist = $album != null;
    print "id Usuario".$userId;
    print "idAlbum".$album[0];

    $userStamps = $albumExist ?? $stamps->getUserStamps($userId, $album[0]);

    $userStampsArray = $stamps->getUserAlbum($userId, $album[0]);

    // var_dump($userStampsArray);

    function stringState($index, $numStamps){
        global $userStampsArray;
        print "Numero de estampas: ".$numStamps;
        $edos = array("No la tengo", "Ya la tengo", "Repetida");
        if($index<$numStamps){
            print "<td>".$userStampsArray[$index]["Number"]."</td>";
            if( $userStampsArray[$index]["State"] >= 0 &&
                $userStampsArray[$index]["State"] < count($edos)){
                
                print "<td>".$edos[$userStampsArray[$index]["State"]]."</td>";    
            }else{
                print "<td>".$userStampsArray[$index]["State"]."</td>";
            }
            print "<td>".$userStampsArray[$index]["State"]."</td>";
        }else{
            print "<td>&nbsp;</td>";
            print "<td>&nbsp;</td>";
        }
        
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice</title>
</head>
<body>
    <h1>Bienvenid@ <?php print $session->getUser(); ?></h1>
    
    <h2>El album abierto es <?php $albumExist ? print $album[1] : print "0" ; ?> con <?php  $albumExist ? print $album[2] : print "0"; ?> estampas</h2>
    <p>Tu numero de usuario es: <?php print $userId; ?></p>
    <?php
    if($albumExist){
       
        if( $userStamps == 0){
            $albums->createAlbum($userId, $album[0], $album[2]);
        }else{
            print "<p>Tienes ".count($userStampsArray)." estampa en tu album.</p>";
        }
    }

    print "<table border='1'>";
    print "<tr>";
    print "<th>Estampa</th>";
    print "<th>Estado</th>";
    print "<th>Estampa</th>";
    print "<th>Estado</th>";
    print "<th>Estampa</th>";
    print "<th>Estado</th>";
    print "<th>Estampa</th>";
    print "<th>Estado</th>";
    print "<th>Estampa</th>";
    print "<th>Estado</th>";

    for ($i=0; $i < count($userStampsArray) ; $i+=5) {
     
        print "<tr>";
        stringState($i, $userStamps);
        stringState($i + 1, $userStamps);
        stringState($i + 2, $userStamps);
        stringState($i + 3, $userStamps);
        stringState($i + 4, $userStamps);
        
    }
    print "</tr>";
    print "</table>";
        
    print "Numero de estampas: ".$userStamps;
    
    ?>
    <!-- <h1>Tenemos <?php //print $albums->numAlbums(); ?> albumes en el sistema</h1>
    <h1>Tenemos <?php //print $users->numUsers(); ?> usuarios en el sistema</h1>
    <h1>Tenemos <?php //print $stamps->numStamps(); ?> estampas en el sistema</h1>
    <?php
        // print "<p>El usuario '".$email."' ";
        // print (User::searchUser($email))? " SI " : " NO ";
        // print "existe en la base de datos"."<br>";
    ?> -->
</body>
</html>