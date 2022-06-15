<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table border="1" cellspacing="0" >
            <thead>
            <tr>
                <th>Product Name</th>
                <th>Brand</th>
                <th>supplier Phone</th>
                <th>Supplier</th>
                <th>Added date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php
                include 'productsConn.php';
                $model=new model();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                        foreach($rows as $row){
                ?>
                <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['pname']; ?></td>
                <td><?php echo $row['brand']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td><?php echo $row['supplier']; ?></td>
                <td><?php echo $row['added_date']; ?></td>
                <a hre="read.php?productId=?php echo $row['productId'];?>">Read</a>
                <a hre="delete.php?productId=?php echo $row['productId'];?>">Delete</a>
                <a hre="update.php?productId=?php echo $row['productId'];?>">Update</a>
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