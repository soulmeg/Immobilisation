<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="assets/css/style.css">        -->
        <title>Sortie</title>
    </head>
    <body>
        <div class="container" id="cont">
            <h4>SORTIE</h4>
            <br>
            <form action="<?= site_url('index.php/STOCK/StockController/sortir'); ?>" method="get">
                <div class="mb-3">
                    <label for="dateSortie" class="form-label">Date:</label>
                    <input type="date" name="dateSortie" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="id_produit" class="form-label">Produit:</label>
                    <select name="id_produit" class="form-control form-control-sm">
                        <?php for ($i = 0; $i < count($produits); $i++) { ?>
                            <option value="<?php echo $produits[$i]->id; ?>"><?php echo $produits[$i]->nom; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="quantite" class="form-label">Quantite:</label>
                    <input type="number" name="quantite" class="form-control" required>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Valider" class="btn btn-primary">
                </div>
                <!-- <p><a href="index.jsp"><< retour</a></p> -->
            </form>
        </div>        
    </body>
</html>
