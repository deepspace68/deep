<?PHP
include_once "../entities/client.php";
include_once "../core/clients_core.php";
if (isset($_POST['username']) and isset($_POST['password'])  and  $_POST['username']!=null and  $_POST['password']!=null   )
{
    $nom=$_POST['username'];
    $password=$_POST['password'];


    if(rechercherClient($nom) )

    {
        header('Location: afficherEvenement.php');
        //echo $event1C->calculPeriode($event1);
    }

    else

    {
        ?>
        <script>
            alert("verifier le mot de passe");
        </script>
        <?php
    }

}


else{ echo "vérifier les champs"; }


?>