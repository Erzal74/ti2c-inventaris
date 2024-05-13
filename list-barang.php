<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT INVENTORY | ITECHNOLOGY</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 20px;
            border-radius: 10px 10px 0 0;
        }
        nav {
            background-color: #f8f9fa;
            padding: 10px 20px;
            text-align: center;
        }
        nav a {
            text-decoration: none;
            color: #333;
            padding: 8px 16px;
            border-radius: 5px;
            background-color: #fff;
            transition: background-color 0.3s ease;
            margin: 0 10px;
        }
        nav a:hover {
            background-color: #343a40;
            color: #fff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #dee2e6;
            text-align: left;
        }
        th {
            background-color: #343a40;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f1f2f4;
        }
        tr:hover {
            background-color: #e9ecef;
        }
        p {
            text-align: center;
            margin-top: 10px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>PRODUCT INVENTORY</h1>
            <h3>ITECHNOLOGY</h3>
        </header>
        <nav>
            <a href="form-barang.php">Tambah Baru</a>
        </nav>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Merk</th>
                    <th>Stok</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM barang";
                $query = mysqli_query($db, $sql);
                while($barang = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$barang['Id']."</td>";
                    echo "<td>".$barang['Merk']."</td>";
                    echo "<td>".$barang['Stok']."</td>";
                    echo "<td>".$barang['Harga']."</td>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
</body>
</html>
