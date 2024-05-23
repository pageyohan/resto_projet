<?php
include_once "bd.pdo.php";

    function getTypeCusineByIdR($idR){

        try{
            $connex = connexionPDO();
            $prep = $connex->prepare("SELECT * FROM typecuisine INNER JOIN proposer ON proposer.idTC = typecuisine.idTC WHERE proposer.idR= ? ");            
            $prep-> bindValue(1,$idR);
            $prep->execute();
            $resultat = $prep->fetchAll(PDO::FETCH_OBJ);
            return $resultat;
        }
    
        catch(PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }

}
?>
   
