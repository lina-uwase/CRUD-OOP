<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student info</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
        background-color: white;
    }
    .fomr{
margin-top: 10px;
    }
</style>
<body>

    <div class="container">
        <?php
        include 'usersConn.php';
        $model = new Model();
       $insert =  $model->insert();
        
        ?>
        <div class="form" >
            <div class="heading">
                <h1 style="color:#130f40; border-bottom:1px solid #130f40">Add data</h1>
            </div>
            <form style="display: flex; flex-direction:column;  " action="" method="post" enctype="multipart/form-data">
                <div style="display: flex; flex-direction: column;">
                    <label>First Name</label>
                    <input type="text" name="fname">
                </div>
                <div style="display: flex; flex-direction: column;">
                    <label>Last Name</label>
                    <input type="text" name="lname">
                </div>
                <div style="display: flex; flex-direction: column;">
                    <label>Mobile number</label>
                    <input type="number" name="phone">
                </div>
                <div style="display: flex; flex-direction: column;">
                    <label>Gender</label>
                    <input type="text" name="gender">
                </div>
                <div style="display: flex; flex-direction: column;">
                    <label>Nationality</label>
                    <input type="text" name="nationality">
                </div>
                <div style="display: flex; flex-direction: column;">
                    <label>Username</label>
                    <input type="text" name="uname">
                </div>
                <div style="display: flex; flex-direction: column;">
                    <label>Email</label>
                    <input type="text" name="email">
                </div>
                <div style="display: flex; flex-direction: column;">
                    <label>Password</label>
                    <input type="password" name="password">
                </div>
                <div style="display: flex; flex-direction: column;">
                    <label>Added Time</label>
                    <input type="time" name="added_time">
                </div>
                <div style="display: flex; flex-direction: column; margin-top: 30px; ">
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