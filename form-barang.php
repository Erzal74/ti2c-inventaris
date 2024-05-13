<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PRODUCT INVENTORY | ITECHNOLOGY</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
      }
      header {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
        text-align: center;
        margin-bottom: 20px;
      }
      .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      h3 {
        margin-top: 0;
      }
      label {
        display: block;
        margin-bottom: 5px;
      }
      input[type="text"],
      textarea {
        width: calc(100% - 22px);
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
      }
      textarea {
        resize: vertical;
      }
      input[type="radio"] {
        margin-right: 5px;
        margin-top: 5px;
      }
      input[type="submit"] {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
      }
      input[type="submit"]:hover {
        background-color: #555;
      }
    </style>
  </head>
  <body>
    <header>
      <h3>PRODUCT INVENTORY</h3>
    </header>
    <div class="container">
    <form action="proses-barang.php" method="POST">
    <label for="Id">Id:</label>
    <input
      type="text"
      name="Id"
      placeholder="Id barang"
      value=""
      required
    />
    <label for="Merk">Merk:</label>
    <input
      type="text"
      name="Merk"
      placeholder="Merk barang"
      value=""
      required
    />
    <label for="Stok">Stok:</label>
    <input
      type="text"
      name="Stok"
      placeholder="Stok barang"
      value=""
      required
    />
    <label for="Harga">Harga:</label>
    <input
      type="text"
      name="Harga"
      placeholder="Harga barang"
      value=""
      required
    />
    <input type="submit" value="Submit" name="Submit" />
</form>
    </div>
  </body>
</html>
