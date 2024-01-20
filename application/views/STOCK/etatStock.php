<!-- <?php var_dump($etatStock); ?> -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>JSP Page</title>
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h4 class="mb-4">Etat de stock</h4>
        <form action="<?= site_url('index.php/STOCK/StockController/etatStock'); ?>" method="get" class="mb-4">
            <div class="row">
                <div class="col-md-5">
                    <input type="date" name="date1" class="form-control" required>
                </div>
                <div class="col-md-5">
                    <input type="date" name="date2" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <input type="submit" value="Valider" class="btn btn-primary">
                </div>
            </div>
        </form>

        <b><?php echo $etatStock[0]["date1"];?> - <?php echo $etatStock[0]["date2"];?>  </b>
        <br>
        <br>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Nom produit</th>
                    <th>Quantite initiale</th>
                    <th>Quantite restante</th>
                    <th>Prix Unitaire moyen</th>
                    <th>Somme montant</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i < count($etatStock); $i++) { ?>
                    <tr>
                        <td><?php echo $etatStock[$i]["produit"]->nom ;?></td>
                        <td><?php echo $etatStock[$i]["qttI"];?></td>
                        <td><?php echo $etatStock[$i]["qttR"];?></td>
                        <td><?php echo $etatStock[$i]["prix_unitaire"];?></td>
                        <td><?php echo $etatStock[$i]["sommeMontant"];?></td>
                    </tr>
                <?php } ?>
            </tbody>
            </table>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script> -->
</body>
</html>