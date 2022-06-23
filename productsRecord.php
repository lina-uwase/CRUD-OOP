<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background:#130f40 ;
        }
        .container{
            display: flex;
            align-items: center;
            justify-content: center;
        
        }
        h1{
            display: flex;
            justify-content: center;
            align-items: center;
            color: #f2aa4cff;
            
        }
            table,th,td{
            padding:5px 8px;
            color: white;
            padding: 20px;
            font-size: 20px;
            
            }
        
         th{
            border-bottom: 2px solid #f2aa4cff;
        }
        table{
            border-collapse:collapse;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
        }
        a{
            text-decoration: none;
        }
        #delete{
            border: 1px solid red;
            background-color: red;
            color: white;
           
        }
        #update{
            border: 1px solid green;
            background-color: green;
            color: white;
            
        }
    </style>
</head>
<body>
    
    <h1>Records in products table</h1>
    <div class="container">
        <table cellspacing="0" >
            <thead>
            <tr>
                <th>product Id</th>
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
                <td><?php echo $i++;?></td>
                <td><?php echo $row['product_Name']; ?></td>
                <td><?php echo $row['brand']; ?></td>
                <td><?php echo $row['supplier_phone']; ?></td>
                <td><?php echo $row['supplier']; ?></td>
                <td><?php echo $row['added_date']; ?></td>
               <td> 
                <?php echo "<a id=delete href=productsDelete.php?productId=".$row['productId'].">Delete</a>" ?>
                <?php echo "<a id=update href=productsUpdate.php?productId=".$row['productId'].">Update</a>" ?>
                </td>
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