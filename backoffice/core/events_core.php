<?php
include_once "../Connexion.php";
class events_core
{
    function ajouterEvenement($e)
    {
        $sql = "INSERT INTO evenements VALUES (:id,:nom,:date_deb,:date_fin,:description,:nbre_limit)";
        $db = Connect::getConnection();
        try {
            $pre = $db->prepare($sql);
            $id = $e->getId();
            $nom = $e->getEventName();
            $date_deb = $e->getDateDeb();
            $date_fin = $e->getDateFin();
            $description = $e->getDescription();
            $nbre_limit = $e->getNbreLimit();
            $pre->bindValue(':id', $id);
            $pre->bindValue(':nom', $nom);
            $pre->bindValue(':date_deb', $date_deb);
            $pre->bindValue(':date_fin', $date_fin);
            $pre->bindValue(':description', $description);
            $pre->bindValue(':nbre_limit', $nbre_limit);
            $pre->execute();
        } catch (Exception $e) {
            die ("erreur :" . $e->getMessage());
        }


    }

    function afficherEvenement()
    {
        $sql="SELECT * From evenements";
        $db = Connect::getConnection();
        try
        {
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function calculPeriode($evenementt)
    {



        $nbjours = round  ( (strtotime($evenement->getDateDeb()) - strtotime($evenement->getDateFin()))/(60*60*24)-1);
        echo $nbjours;
    }


    /****************************************************************************************************/

    function recupererEvenement($id)

    {
        $sql="SELECT * from evenements where id=$id";
        $db = Connect::getConnection();
        try
        {

            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerEvenement($id)
    {
        $sql="DELETE FROM evenements where id= :id";
        $db = Connect::getConnection();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try
        {
            $req->execute();
            // header('Location: index.php');
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    /*******************************************************************************************/

    function modifierEvenement($event,$id)
    {
        $sql="UPDATE evenements SET  id=:id,nom=:nom,date_deb=:date_deb,date_fin=:date_fin,description=:description,nbre_limit=:nbre_limit WHERE id=:id";

        $db = Connect::getConnection();
        // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try
        {
            $req=$db->prepare($sql);
            $id=$event->getId();
            $nom=$event->getEventName();
            $date_deb=$event->getDateDeb();
            $date_fin=$event->getDateFin();
            $des=$event->getDescription();
            $nbre_limit = $event->getNbreLimit();

            $datas = array(':id'=>$id,':nom'=>$nom,':date_deb'=>$date_deb,':date_fin'=>$date_fin,':description'=>$des,':nbre_limit'=>$nbre_limit);

            $req->bindValue(':id', $id);
            $req->bindValue(':nom', $nom);
            $req->bindValue(':date_deb', $date_deb);
            $req->bindValue(':date_fin', $date_fin);
            $req->bindValue(':description', $des);
            $req->bindValue(':nbre_limit', $nbre_limit);


            $s=$req->execute();



            // header('Location: index.php');
        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }

    }
    /*********************************************************************************/


}
?>