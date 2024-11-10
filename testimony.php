<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>

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
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Our Customer Testimonials</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Testimony ID</th>
                    <th>Customer ID</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'conn.php';
                    $mahasiswa = mysqli_query($conn, "SELECT * from testimony");
                    $no = 1;
                    foreach ($mahasiswa as $value) {
                        echo"
                        <tr>
                            <td>".$value['testimony_id']."</td>
                            <td>".$value['customer_id']."</td>
                            <td>".$value['comment']."</td>
                        </tr>
                        ";
                        $no++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>