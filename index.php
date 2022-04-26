<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewellery Info</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        * {
            font-family: 'Montserrat';
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h1>Items and their info</h1>
        <hr>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'diamonds');
        if ($conn) {
            $query = "SELECT * FROM jewellery_info";
            $res = mysqli_query($conn, $query);
            if ($res) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $price = $row['price'];
                    $descr = $row['descr'];
                    $img = $row['img'];
                    $parent_cat = $row['parent_cat'];
                    $query2 = "SELECT * FROM category_table WHERE cat_id = '$parent_cat'";
                    $res2 = mysqli_query($conn, $query2);

        ?>
                    <h2><?php echo $descr; ?></h2>
                    <p><?php echo $price; ?></p>
                    <p>Parent category is: <?php echo $parent_cat; ?></p>
                    <?php
                    if ($res2) {
                        while ($row2 = mysqli_fetch_assoc($res2)) {
                            $par_cat = $row2['cat_name'];
                    ?>
                            <p>Category name is: <?php echo $par_cat; ?></p>
                    <?php
                        }
                    }
                    ?>
                    <hr>
                    <!-- <img src="" alt=""> -->

        <?php
                }
            }
        }
        ?>
    </div>
</body>

</html>