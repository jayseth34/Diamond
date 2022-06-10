<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "diamonds");

if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item removed")</script>';
                echo '<script>window.location = "shop.php"</script>';
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="../static/home.css">
    <link rel="stylesheet" href="../static/cards.css">
    <script src="../static/store.js"></script>
    <script src="../static/store.js" async></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        #rm-itm {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <section class="container content-section" id="my-cart">
        <h2 class="section-header">CART</h2>
        <div class="container">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($_SESSION["shopping_cart"])) {
                        $total = 0;
                        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                    ?>
                            <tr>
                                <td><?php echo $values['item_id']; ?></td>
                                <td><?php echo $values['item_name']; ?></td>
                                <td>Rs <?php echo $values['item_price']; ?></td>
                                <td><?php echo $values['item_quan']; ?></td>
                                <td><?php echo number_format($values["item_quan"] * $values["item_price"], 2) ?></td>
                                <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"] ?>" id="rm-itm"><span class="btn-sm btn-danger">Remove</span></a></td>
                            </tr>
                        <?php
                            $total = $total + ($values["item_quan"] * $values["item_price"]);
                        } ?>
                        <tr>
                            <td colspan="4">Total</td>
                            <td>Rs <?php echo number_format($total, 2); ?></td>
                            <td></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

</body>

</html>