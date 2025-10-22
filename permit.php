<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Individual Permits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
        
    <h1 style="text-align: center;">Toronto Noise Exemption Permits</h1>

    <div>
        <?php include('nav.php'); ?>
    </div>
    <br></br>

    <div class="d-flex justify-content-center">

    <?php

        require('connect.php');

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['_id'])) {
            $id = $_GET['_id'];
            $query = "SELECT * FROM permits p JOIN wards w ON p.ward = w.ward_id WHERE p._id = $id";
            $result = mysqli_query($connect, $query);
            $permit = $result->fetch_assoc();

            echo '<br></br><div class="card text-bg-secondary mb-3 " style="max-width: 25rem;">
            <div class="card-header" style="text-align: center;">' . $permit['client_name'] . '</div>
            <div class="card-body">
            <p>Licence Number: ' . $permit['licence_number'] . '</p>
            <p>Operating Name: ' . $permit['operating_name'] . '</p>
            <p>Address: ' . $permit['address'] . '</p>
            <p>Location name: ' . $permit['location_name'] . '</p>
            <p>Issue Date: ' . $permit['issue_date'] . '</p>
            <p>End Date(expected): ' . $permit['expected_end_date'] . '</p>
            <p>End Date(actual): ' . $permit['actual_end_date'] . '</p>
            <p>Ward: ' . $permit['ward'] . ', ' . $permit['ward_name'] . '</p>
            </div>
            </div>'; 
        }

    ?>

    </div>

</body>

</html>




