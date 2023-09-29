<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?=base_url('insertproduct')?>">
        <label for="nama_product">Nama Product</label>
        <input id="nama_product" name="nama_product" type="text"></input>
        <label for="description">Deskripsi Product</label>
        <input name="description" type="text"></input>
        <button type="submit">Insert</button>
    </form>
</body>
</html>