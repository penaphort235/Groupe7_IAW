<?php
 $db = new PDO('mysql:host=localhost;dbname=donnees','root',"");
if(isset($_POST['envoyert'])){
$nom = $_POST['nom'];
$telephone = $_POST['telephone'];
 $destination = $_POST['destination'];
 $place = $_POST['place'];
 $occasion = $_POST['occasion'];
$type = $_POST['type'];
$transaction = $_POST['transaction'];
$montant = $_POST['montant'];
$paiement = " ";
$total1 = $place*20000;
$total2 = $place*15000;
$total3 = $place*22000;
$total4 = $place*18000;
$total5 = $place*12000;
$total6 = $place*10000;

if(!empty($nom) && !empty($telephone) && !empty($destination) && !empty($place) && !empty($occasion) && !empty($type) && !empty($transaction) && !empty($montant) && !empty($paiement) ){

    if($destination == "Yaoundé" && $type == "Confort" && $montant == $total1 ){
        $requet=$db->prepare('INSERT INTO rtouristique(Nom,Téléphone,Destination,Place, Occasion,Type,Transaction,Montant,Paiement) VALUES (:nom,:telephone,:destination,:place,:occasion,:type,:transaction,:montant,:paiement)');
        $requet->bindvalue(':nom',$nom);
        $requet->bindvalue(':telephone',$telephone);
        $requet->bindvalue(':destination',$destination);
        $requet->bindvalue(':place',$place);
        $requet->bindvalue(':occasion',$occasion);
        $requet->bindvalue(':type',$type);
        $requet->bindvalue(':transaction',$transaction);
        $requet->bindvalue(':montant',$montant);
        $requet->bindvalue(':paiement',$paiement);
        $result = $requet->execute();
        echo("Reservation effectuée avec succes");
    
    }

    elseif($destination == "Yaoundé" && $type == "Classic" && $montant == $total2 ){
        $requet=$db->prepare('INSERT INTO rtouristique(Nom,Téléphone,Destination,Place, Occasion,Type,Transaction,Montant,Paiement) VALUES (:nom,:telephone,:destination,:place,:occasion,:type,:transaction,:montant,:paiement)');
        $requet->bindvalue(':nom',$nom);
        $requet->bindvalue(':telephone',$telephone);
        $requet->bindvalue(':destination',$destination);
        $requet->bindvalue(':place',$place);
        $requet->bindvalue(':occasion',$occasion);
        $requet->bindvalue(':type',$type);
        $requet->bindvalue(':transaction',$transaction);
        $requet->bindvalue(':montant',$montant);
        $requet->bindvalue(':paiement',$paiement);
        $result = $requet->execute();
        echo("Reservation effectuée avec succes");
    }
    
    else if($destination == "Douala" && $type == "Confort" && $montant == $total3 ){
        $requet=$db->prepare('INSERT INTO rtouristique(Nom,Téléphone,Destination,Place, Occasion,Type,Transaction,Montant,Paiement) VALUES (:nom,:telephone,:destination,:place,:occasion,:type,:transaction,:montant,:paiement)');
        $requet->bindvalue(':nom',$nom);
        $requet->bindvalue(':telephone',$telephone);
        $requet->bindvalue(':destination',$destination);
        $requet->bindvalue(':place',$place);
        $requet->bindvalue(':occasion',$occasion);
        $requet->bindvalue(':type',$type);
        $requet->bindvalue(':transaction',$transaction);
        $requet->bindvalue(':montant',$montant);
        $requet->bindvalue(':paiement',$paiement);
        $result = $requet->execute();
        echo("Reservation effectuée avec succes");
    }
    elseif($destination == "Douala" && $type == "Classic" && $montant == $total4 ){
        $requet=$db->prepare('INSERT INTO rtouristique(Nom,Téléphone,Destination,Place, Occasion,Type,Transaction,Montant,Paiement) VALUES (:nom,:telephone,:destination,:place,:occasion,:type,:transaction,:montant,:paiement)');
        $requet->bindvalue(':nom',$nom);
        $requet->bindvalue(':telephone',$telephone);
        $requet->bindvalue(':destination',$destination);
        $requet->bindvalue(':place',$place);
        $requet->bindvalue(':occasion',$occasion);
        $requet->bindvalue(':type',$type);
        $requet->bindvalue(':transaction',$transaction);
        $requet->bindvalue(':montant',$montant);
        $requet->bindvalue(':paiement',$paiement);
        $result = $requet->execute();
        echo("Reservation effectuée avec succes");
    }
    elseif($destination == "Maroua" && $type == "Confort" && $montant == $total5 ){
        $requet=$db->prepare('INSERT INTO rtouristique(Nom,Téléphone,Destination,Place, Occasion,Type,Transaction,Montant,Paiement) VALUES (:nom,:telephone,:destination,:place,:occasion,:type,:transaction,:montant,:paiement)');
        $requet->bindvalue(':nom',$nom);
        $requet->bindvalue(':telephone',$telephone);
        $requet->bindvalue(':destination',$destination);
        $requet->bindvalue(':place',$place);
        $requet->bindvalue(':occasion',$occasion);
        $requet->bindvalue(':type',$type);
        $requet->bindvalue(':transaction',$transaction);
        $requet->bindvalue(':montant',$montant);
        $requet->bindvalue(':paiement',$paiement);
        $result = $requet->execute();
        echo("Reservation effectuée avec succes");
    }
    elseif($destination == "Maroua" && $type == "Classic" && $montant == $total6 ){
        $requet=$db->prepare('INSERT INTO rtouristique(Nom,Téléphone,Destination,Place, Occasion,Type,Transaction,Montant,Paiement) VALUES (:nom,:telephone,:destination,:place,:occasion,:type,:transaction,:montant,:paiement)');
        $requet->bindvalue(':nom',$nom);
        $requet->bindvalue(':telephone',$telephone);
        $requet->bindvalue(':destination',$destination);
        $requet->bindvalue(':place',$place);
        $requet->bindvalue(':occasion',$occasion);
        $requet->bindvalue(':type',$type);
        $requet->bindvalue(':transaction',$transaction);
        $requet->bindvalue(':montant',$montant);
        $requet->bindvalue(':paiement',$paiement);
        $result = $requet->execute();
        echo("Reservation effectuée avec succes");
    }
    else{
        echo("Montant invalide::: La Reservation a échoué!");
        echo("Veiller recommencer avec les données valides!!!");
    }
}

    }

 if(isset($_POST['annulert'])){
    $telephone = $_POST['telephone'];
    if(!empty($telephone)){
        $requet=$db->prepare('DELETE FROM rtouristique WHERE Téléphone = :telephone');
    $requet->bindvalue(':telephone',$telephone);
    $result = $requet->execute();
    echo("Booking Remove");
}}


//reservation mistral***************************************************************


if(isset($_POST['envoyerm'])){
    $nom = $_POST['nom'];
    $telephone = $_POST['telephone'];
     $destination = $_POST['destination'];
     $place = $_POST['place'];
     $occasion = $_POST['occasion'];
    $type = $_POST['type'];
    $transaction = $_POST['transaction'];
    $montant = $_POST['montant'];
    $paiement = " ";
    $total1 = $place*20000;
    $total2 = $place*15000;
    $total3 = $place*22000;
    $total4 = $place*18000;
    $total5 = $place*12000;
    $total6 = $place*10000;
    
    if(!empty($nom) && !empty($telephone) && !empty($destination) && !empty($place) && !empty($occasion) && !empty($type) && !empty($transaction) && !empty($montant) && !empty($paiement) ){
    
        if($destination == "Yaoundé" && $type == "Confort" && $montant == $total1 ){
            $requet=$db->prepare('INSERT INTO rmistral(Nom,Téléphone,Destination,Place, Occasion,Type,Transaction,Montant,Paiement) VALUES (:nom,:telephone,:destination,:place,:occasion,:type,:transaction,:montant,:paiement)');
            $requet->bindvalue(':nom',$nom);
            $requet->bindvalue(':telephone',$telephone);
            $requet->bindvalue(':destination',$destination);
            $requet->bindvalue(':place',$place);
            $requet->bindvalue(':occasion',$occasion);
            $requet->bindvalue(':type',$type);
            $requet->bindvalue(':transaction',$transaction);
            $requet->bindvalue(':montant',$montant);
            $requet->bindvalue(':paiement',$paiement);
            $result = $requet->execute();
            echo("Reservation effectuée avec succes");
        
        }
    
        elseif($destination == "Yaoundé" && $type == "Classic" && $montant == $total2 ){
            $requet=$db->prepare('INSERT INTO rmistral(Nom,Téléphone,Destination,Place, Occasion,Type,Transaction,Montant,Paiement) VALUES (:nom,:telephone,:destination,:place,:occasion,:type,:transaction,:montant,:paiement)');
            $requet->bindvalue(':nom',$nom);
            $requet->bindvalue(':telephone',$telephone);
            $requet->bindvalue(':destination',$destination);
            $requet->bindvalue(':place',$place);
            $requet->bindvalue(':occasion',$occasion);
            $requet->bindvalue(':type',$type);
            $requet->bindvalue(':transaction',$transaction);
            $requet->bindvalue(':montant',$montant);
            $requet->bindvalue(':paiement',$paiement);
            $result = $requet->execute();
            echo("Reservation effectuée avec succes");
        }
        
        else if($destination == "Douala" && $type == "Confort" && $montant == $total3 ){
            $requet=$db->prepare('INSERT INTO rmistral(Nom,Téléphone,Destination,Place, Occasion,Type,Transaction,Montant,Paiement) VALUES (:nom,:telephone,:destination,:place,:occasion,:type,:transaction,:montant,:paiement)');
            $requet->bindvalue(':nom',$nom);
            $requet->bindvalue(':telephone',$telephone);
            $requet->bindvalue(':destination',$destination);
            $requet->bindvalue(':place',$place);
            $requet->bindvalue(':occasion',$occasion);
            $requet->bindvalue(':type',$type);
            $requet->bindvalue(':transaction',$transaction);
            $requet->bindvalue(':montant',$montant);
            $requet->bindvalue(':paiement',$paiement);
            $result = $requet->execute();
            echo("Reservation effectuée avec succes");
        }
        elseif($destination == "Douala" && $type == "Classic" && $montant == $total4 ){
            $requet=$db->prepare('INSERT INTO rmistral(Nom,Téléphone,Destination,Place, Occasion,Type,Transaction,Montant,Paiement) VALUES (:nom,:telephone,:destination,:place,:occasion,:type,:transaction,:montant,:paiement)');
            $requet->bindvalue(':nom',$nom);
            $requet->bindvalue(':telephone',$telephone);
            $requet->bindvalue(':destination',$destination);
            $requet->bindvalue(':place',$place);
            $requet->bindvalue(':occasion',$occasion);
            $requet->bindvalue(':type',$type);
            $requet->bindvalue(':transaction',$transaction);
            $requet->bindvalue(':montant',$montant);
            $requet->bindvalue(':paiement',$paiement);
            $result = $requet->execute();
            echo("Reservation effectuée avec succes");
        }
        elseif($destination == "Maroua" && $type == "Confort" && $montant == $total5 ){
            $requet=$db->prepare('INSERT INTO rmistral(Nom,Téléphone,Destination,Place, Occasion,Type,Transaction,Montant,Paiement) VALUES (:nom,:telephone,:destination,:place,:occasion,:type,:transaction,:montant,:paiement)');
            $requet->bindvalue(':nom',$nom);
            $requet->bindvalue(':telephone',$telephone);
            $requet->bindvalue(':destination',$destination);
            $requet->bindvalue(':place',$place);
            $requet->bindvalue(':occasion',$occasion);
            $requet->bindvalue(':type',$type);
            $requet->bindvalue(':transaction',$transaction);
            $requet->bindvalue(':montant',$montant);
            $requet->bindvalue(':paiement',$paiement);
            $result = $requet->execute();
            echo("Reservation effectuée avec succes");
        }
        elseif($destination == "Maroua" && $type == "Classic" && $montant == $total6 ){
            $requet=$db->prepare('INSERT INTO rmistral(Nom,Téléphone,Destination,Place, Occasion,Type,Transaction,Montant,Paiement) VALUES (:nom,:telephone,:destination,:place,:occasion,:type,:transaction,:montant,:paiement)');
            $requet->bindvalue(':nom',$nom);
            $requet->bindvalue(':telephone',$telephone);
            $requet->bindvalue(':destination',$destination);
            $requet->bindvalue(':place',$place);
            $requet->bindvalue(':occasion',$occasion);
            $requet->bindvalue(':type',$type);
            $requet->bindvalue(':transaction',$transaction);
            $requet->bindvalue(':montant',$montant);
            $requet->bindvalue(':paiement',$paiement);
            $result = $requet->execute();
            echo("Reservation effectuée avec succes");
        }
        else{
            echo("Montant invalide::: La Reservation a échoué!");
            echo("Veiller recommencer avec les données valides!!!");
        }
    }
    
        }
    
     if(isset($_POST['annulerm'])){
        $telephone = $_POST['telephone'];
        if(!empty($telephone)){
            $requet=$db->prepare('DELETE FROM rmistral WHERE Téléphone = :telephone');
        $requet->bindvalue(':telephone',$telephone);
        $result = $requet->execute();
        echo("Booking Remove");
    }}
if(isset($_POST['recherche'])){
    $rechrch = $_POST['rchch'];
    if(!empty($rechrch)){
        if($rechrch == "Touristique"){
            $requet=$db->prepare('SELECT * FROM ttouristique');
            $result = $requet->execute();
        }
    }
        
    echo $result;
}

    

if(isset($_POST['enregistrert'])){
    $destination = $_POST['destination'];
    $premiere = $_POST['premiere'];
     $deuxieme = $_POST['deuxieme'];
     $troisieme = $_POST['troisieme'];
    $classic = $_POST['classic'];
    $confort = $_POST['confort'];
    if(!empty($destination) && !empty($premiere) && !empty($deuxieme) && !empty($troisieme) && !empty($classic) && !empty($confort) ){
    $requet=$db->prepare('INSERT INTO ttouristique(Destination,Première,Deuxième,Troisième, Classique,Confort) VALUES (:destination,:premiere,:deuxieme,:troisieme,:classic,:confort)');
    $requet->bindvalue(':destination',$destination);
    $requet->bindvalue(':premiere',$premiere);
    $requet->bindvalue(':deuxieme',$deuxieme);
    $requet->bindvalue(':troisieme',$troisieme);
    $requet->bindvalue(':classic',$classic);
    $requet->bindvalue(':confort',$confort);
    $result = $requet->execute();
    echo("Vous avez enregistré avec succè");
     }}
     if(isset($_POST['enregistrerm'])){
        $destination = $_POST['destination'];
        $premiere = $_POST['premiere'];
         $deuxieme = $_POST['deuxieme'];
         $troisieme = $_POST['troisieme'];
        $classic = $_POST['classic'];
        $confort = $_POST['confort'];
        if(!empty($destination) && !empty($premiere) && !empty($deuxieme) && !empty($troisieme) && !empty($classic) && !empty($confort) ){
        $requet=$db->prepare('INSERT INTO tmistal(Destination,Première,Deuxième,Troisième, Classique,Confort) VALUES (:destination,:premiere,:deuxieme,:troisieme,:classic,:confort)');
        $requet->bindvalue(':destination',$destination);
        $requet->bindvalue(':premiere',$premiere);
        $requet->bindvalue(':deuxieme',$deuxieme);
        $requet->bindvalue(':troisieme',$troisieme);
        $requet->bindvalue(':classic',$classic);
        $requet->bindvalue(':confort',$confort);
        $result = $requet->execute();
        echo("Vous avez enregistré avec succè");
         }}
    
     if(isset($_POST['valider'])){
        $telephone = $_POST['telephone'];
        if(!empty($telephone)){
            $requet=$db->prepare('UPDATE rtouristique SET Paiement ="Oui" WHERE Téléphone = :telephone');
        $requet->bindvalue(':telephone',$telephone);
        $result = $requet->execute();
 }}
 
 if(isset($_POST['afficher'])){
    $requet=$db->prepare('SELECT * FROM rtouristique');
    $result = $requet->execute();
    
}


?>