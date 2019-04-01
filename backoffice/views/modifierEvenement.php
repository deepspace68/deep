
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Winkle I Fast build Admin dashboard for any platform</title>
    <meta name="description" content="Winkle is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Winkle Admin, Winkleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap table CSS -->
    <link href="../vendors/bower_components/bootstrap-table/dist/bootstrap-table.css" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">

</head>
<body>




<?PHP
include_once "../entities/evenement.php";
include_once "../core/events_core.php";
if (isset($_GET['id'])){
    $produitsC1=new events_core();
    $result=$produitsC1->recupererEvenement($_GET['id']);
    foreach($result as $row){
        $id=$row['id'];
        $nom=$row['nom'];
        $date_deb=$row['date_deb'];
        $date_fin=$row['date_fin'];
        $description=$row['description'];
        $nbre_limit=$row['nbre_limit'];
        ?>
        <form method="POST">
            <table>

                <tr>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label mb-10 text-left">id events</label>

                    <input type="number" name="id" value="<?PHP echo $id ?>">
                        </div>
                </tr>
                <tr>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label mb-10 text-left">event name</label>
                    <input type="text" name="nom" value="<?PHP echo $nom ?>">
                        </div>
                </tr>
                <tr>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label mb-10 text-left">start date</label>
                    <input type="date" name="date_deb" value="<?PHP echo $date_deb ?>">
                        </div>
                </tr>
                <tr>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label mb-10 text-left">end date</label>
                    <input type="date" name="date_fin" value="<?PHP echo $date_fin ?>">
                        </div>
                </tr>
                <tr>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label mb-10 text-left">description</label>
                    <input type="text" name="description" value="<?PHP echo $description?>">
                        </div>
                </tr>
                <tr>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label mb-10 text-left">limit of participant</label>
                    <input type="number" name="nbre_limit" value="<?PHP echo $nbre_limit ?>">
                        </div>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="modifier" value="modifier"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
                </tr>
            </table>
        </form>
        <?PHP
    }
}
if (isset($_POST['modifier'])){
    $produits=new evenement($_POST['id'],$_POST['nom'],$_POST['date_deb'],$_POST['date_fin'],$_POST['description'],$_POST['nbre_limit']);
    $produitsC1->modifierEvenement($produits,$_POST['id_ini']);
    echo $_POST['id_ini'];
    header('Location: afficherEvenement.php');
}
?>
<!-- Footer -->
<footer class="footer container-fluid pl-30 pr-30">
    <div class="row">
        <div class="col-sm-12">
            <p>2018 &copy; Winkle. Pampered by Hencework</p>
        </div>
    </div>
</footer>
<!-- /Footer -->

</div>
<!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Data table JavaScript -->
<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="dist/js/jquery.slimscroll.js"></script>

<!-- Progressbar Animation JavaScript -->
<script src="../vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="../vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>

<!-- Fancy Dropdown JS -->
<script src="dist/js/dropdown-bootstrap-extended.js"></script>

<!-- Sparkline JavaScript -->
<script src="../vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

<!-- Owl JavaScript -->
<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Switchery JavaScript -->
<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>

<!-- EChartJS JavaScript -->
<script src="../vendors/bower_components/echarts/dist/echarts-en.min.js"></script>
<script src="../vendors/echarts-liquidfill.min.js"></script>

<!-- Vector Maps JavaScript -->
<script src="../vendors/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="dist/js/vectormap-data.js"></script>

<!-- Toast JavaScript -->
<script src="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

<!-- Piety JavaScript -->
<script src="../vendors/bower_components/peity/jquery.peity.min.js"></script>
<script src="dist/js/peity-data.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../vendors/bower_components/raphael/raphael.min.js"></script>
<script src="../vendors/bower_components/morris.js/morris.min.js"></script>
<script src="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

<!-- Init JavaScript -->
<script src="dist/js/init.js"></script>
<script src="dist/js/dashboard-data.js"></script>
</body>

</html>
