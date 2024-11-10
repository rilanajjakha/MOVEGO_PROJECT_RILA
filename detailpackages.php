<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bali Tour Packages</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
        h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            margin-bottom: 20px;
        }
        th, td {
            text-align: left;
        }
        .table-responsive {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bali Tour Packages</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Package ID</th>
                        <th>Package Name</th>
                        <th>Location</th>
                        <th>Description</th>
                        <th>Available Date</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'conn.php';

                        $sql = "SELECT 
                                    p.package_id,
                                    p.package_name,
                                    pd.location,
                                    pd.long_desc,
                                    at.available_date,
                                    at.quantity,
                                    at.price
                                FROM
                                    packages p
                                    JOIN package_detail pd ON p.package_id = pd.package_id
                                    JOIN available_ticket at ON p.package_id = at.package_id
                                WHERE
                                    p.package_name = 'Bali Tour Packages'";

                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                    echo "<td>" . $row['package_id'] . "</td>";
                                    echo "<td>" . $row['package_name'] . "</td>";
                                    echo "<td>" . $row['location'] . "</td>";
                                    echo "<td>" . $row['long_desc'] . "</td>";
                                    echo "<td>" . $row['available_date'] . "</td>";
                                    echo "<td>" . $row['quantity'] . "</td>";
                                    echo "<td>" . $row['price'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7'>No results found</td></tr>";
                        }

                        mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
