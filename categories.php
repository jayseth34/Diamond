<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        * {
            font-family: 'Montserrat';
        }

        h1, table {
            text-align: center;
        }
    </style>
</head>


<body>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'diamonds');
    if ($conn) {
        $query = "SELECT * FROM category_table";
        $res = mysqli_query($conn, $query);
    }
    ?>
    <div class="container my-5">
        <h1>Category Table</h1>
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($res) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $cat_id = $row['cat_id'];
                        $cat_name = $row['cat_name'];
                ?>
                        <tr>
                            <th><?php echo $cat_id; ?></th>
                            <td><?php echo $cat_name; ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>