<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student info</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <?php
        include 'productsConn.php';
        $model = new Model();
       $insert =  $model->insert();
        
        ?>
        <div class="form">
            <div class="heading">
                <h1 style="color:#130f40;">Add data</h1>
            </div>
            <form style="display: flex; flex-direction:column " action="" method="post" enctype="multipart/form-data">
                <div style="display: flex; flex-direction: column;">
                    <label>Product Name</label>
                    <input type="text" name="product_Name">
                </div>
               
                <div style="display: flex; flex-direction: column;">
                    <label>Brand</label>
                    <input type="text" name="brand">
                </div>
                <div style="display: flex; flex-direction: column;">
                    <label>supplier phone</label>
                    <input type="number" name="supplier_phone">
                </div>
                <div style="display: flex; flex-direction: column;">
                    <label>supplier</label>
                    <input type="text" name="supplier">
                </div>
                <div style="display: flex; flex-direction: column; margin-top: 50px; ">
                    <input type="submit" id="signupButton" value="Add data" name="submit">
                </div>
            </form>
        </div>
        <div class="image-div" >
        <img  src="people.jpg">
       </div>
    </div>
</body>

</html>