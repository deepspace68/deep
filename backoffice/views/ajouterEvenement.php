<?PHP
include "../entities/evenement.php";
include "../core/events_core.php";
if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['dated']) and isset($_POST['datef'] ) and isset($_POST['des'])  and isset($_POST['nbr_part']) and  $_POST['id']!=null
    and  $_POST['nom']!=null   and  $_POST['dated']!=null  and  $_POST['datef']!=null and  $_POST['des']!=null and  $_POST['nbr_part']!=null )
{
    $id=$_POST['id'];
    $nom=$_POST['nom'];
    $dated=$_POST['dated'];
    $datef=$_POST['datef'];
    $des=$_POST['des'];
    $nbr_part=$_POST['nbr_part'];
    $today=date("Y-m-d");

    if($dated<$datef and $dated>=$today )

    {

        $evenement1=new evenement($id,$nom,$dated,$datef,$des,$nbr_part);

        $evenement1C=new events_core();
        $evenement1C->ajouterEvenement($evenement1);
        //$nb=$event1C->calculPeriode($evenement1);

        header('Location: afficherEvenement.php');
        //echo $event1C->calculPeriode($event1);




    }

    else

    {
        ?>

        <script>


            alert("verifier dates");


        </script>
        <?php
    }

}


else{ echo "vérifier les champs"; }

//*/
?>