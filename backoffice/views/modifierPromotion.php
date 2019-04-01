<HTML>
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
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
    <!-- Data table CSS -->
    <link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>


<?PHP
include "../entities/promotion.php";
include "../core/promotion_core.php";
if (isset($_GET['id_promo'])){
    $produitsC1=new promotion_core();
    $result=$produitsC1->recupererPromotion($_GET['id_promo']);
    foreach($result as $row){
        $id_promo=$row['id_promo'];
        $id_produit=$row['id_produit'];
        $valeur=$row['valeur'];
        $date_deb=$row['date_deb'];
        $date_fin=$row['date_fin'];
        ?>
        <form method="POST">
            <table>
                <caption>Modifier Promotion</caption>
                <tr>
                    <td>id promotion</td>
                    <td><input type="number" name="id_promo" value="<?PHP echo $id_promo ?>"></td>
                </tr>
                <tr>
                    <td>id product</td>
                    <td><input type="number" name="id_produit" value="<?PHP echo $id_produit ?>"></td>
                </tr>
                <tr>
                    <td>value</td>
                    <td><input type="number" name="valeur" value="<?PHP echo $valeur ?>"></td>
                </tr>
                <tr>
                    <td>stard date</td>
                    <td><input type="date" name="date_deb" value="<?PHP echo $date_deb ?>"></td>
                </tr>
                <tr>
                    <td>date of end</td>
                    <td><input type="date" name="date_fin" value="<?PHP echo $date_fin ?>"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="modifier" value="modifier"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id_promo'];?>"></td>
                </tr>
            </table>
        </form>
        <?PHP
    }
}
if (isset($_POST['modifier'])){
    $produits=new promotion($_POST['id_promo'],$_POST['id_produit'],$_POST['valeur'],$_POST['date_deb'],$_POST['date_fin']);
    $produitsC1->modifierPromotion($produits,$_POST['id_ini']);
    echo $_POST['id_ini'];
    header('Location: afficherPromotion.php');
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

<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Data table JavaScript -->
<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="../vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/bower_components/jszip/dist/jszip.min.js"></script>
<script src="../vendors/bower_components/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/bower_components/pdfmake/build/vfs_fonts.js"></script>

<script src="../vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="dist/js/export-table-data.js"></script>

<!-- Slimscroll JavaScript -->
<script src="dist/js/jquery.slimscroll.js"></script>

<!-- Owl JavaScript -->
<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Switchery JavaScript -->
<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>


<!-- Fancy Dropdown JS -->
<script src="dist/js/dropdown-bootstrap-extended.js"></script>

<!-- Init JavaScript -->
<script src="dist/js/init.js"></script>

</body>

</html>

</body>
</HTMl>