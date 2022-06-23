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
        include 'stk_inventoryConn.php';
        $model = new Model();
       $insert =  $model->insert();
        
        ?>
        <div class="form" >
            <div class="heading">
                <h1 style="color:#130f40; border-bottom:1px solid #130f40">Add data</h1>
            </div>
            <form style="display: flex; flex-direction:column; margin-top:5rem; " action="" method="post" enctype="multipart/form-data">
                <div style="display: flex; flex-direction: column;">
                    <label>Product id</label>
                    <input type="text" name="productId">
                </div>
                <div style="display: flex; flex-direction: column;">
                    <label>quantity</label>
                    <input type="text" name="quantity">
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