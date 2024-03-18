<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS CSS HTML Kanban Board</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="image/logo.PNG">
</head>
<body>
<div class="loginForm">
    <form method="post" action="loginfunc.php">
        <h1 class="loginFormText">⟁ Kanban Board</h1>

        
        <!-- <div class="mb-4 input-group-lg col-auto" >
            <label for="name" class="form-label">Name</label> <br>
            <input type="text" name="name" id="name" class="input-field" required >
        </div> -->

        <div class="mb-4 input-group-lg col-auto" >
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="input-field" >
            <?php
        if(isset($_GET)) {
            if(($_GET['EmailEmpty']??'')==true || ($_GET['FieldEmpty']??'')==true) {
                echo '<p class="text-info">email is required</p>';
            
            }
        }
    ?>
            
        </div>

        <div class="mb-4 input-group-lg col-auto" >
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="input-field" >
            <?php
        if(isset($_GET)) {
            if(($_GET['PasswordEmpty']??'')==true || ($_GET['FieldEmpty']??'')==true) {
                echo '<p class="text-info">Password is required</p>';
            
            }
        }
    ?>
        </div>

        <button type="submit" class="button">LOGIN</button>
    
    </form>


</div>
</body>
</html>