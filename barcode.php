<html>
<head>
<style>
	p.inline {display: inline-block;}
	span { font-size: 13px;}
</style>
<style type="text/css" media="print">
        @page {
            size: auto;
            margin: 0mm;
        }
</style>
</head>
<body onload="window.print();">
    <div style="margin-left: 5%">
        <?php
            include 'barcode128.php';
            $product = $_POST['product'];
            $product_id = $_POST['product_id'];
            $rate = $_POST['rate'];

            for ($i = 1; $i <= $_POST['print_qty']; $i++) {
                echo "<p class='inline'><span><b>R$: " . $rate . "</b></span>" . bar128(stripcslashes($_POST['product_id'])) . "</p>&nbsp;&nbsp;&nbsp;&nbsp;";
            }
        ?>
    </div>
</body>
</html>