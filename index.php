<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gerar Etiquetas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="public/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="public/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="public/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="public/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/util.css">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="public/images/logo.gif" alt="IMG">
                </div>
                <form class="login100-form validate-form" method="post" action="barcode.php" target="_blank">
                    <br><br><br>
                    <span class="login100-form-title">
                        <h4>Gerador de Etiquetas</h4>
                        <h6>Preencha todos os campos</h6>
                    </span>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="product">Produto:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="product" name="product" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="product_id">Produto ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="product_id" name="product_id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="rate">Valor</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="rate" name="rate" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="print_qty">Quantidade</label>
                        <div class="col-sm-10">          
                            <input type="print_qty" class="form-control" id="print_qty" name="print_qty" required>
                        </div>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Gerar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer d-flex">
        <p class="text-center justify-content-center">© <?php echo date("Y"); ?> Jsn Developer Todos os direitos reservados.</p>
    </footer>

    <script src="public/jquery/jquery-3.2.1.min.js"></script>
    <script src="public/bootstrap/js/popper.js"></script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/select2/select2.min.js"></script>
    <script src="public/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        });
    </script>
    <script src="public/js/main.js"></script>
</body>
</html>
