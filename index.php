<!DOCTYPE html>
<html>
<head>
    <title>Password Manager</title>
    <link rel="stylesheet" href="index_style.css">
</head>
<body>
    <form action="insert_password.php" method="post">
        <div class="pwdmanager">

            <h1>Password Manager</h1>
            <input type="text" name="website" placeholder="Enter Website" required>
            <input type="text" name="username" placeholder="Enter Username/Email" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit">Save Password</button>
            
            <h1 style="color:orangered;margin:20px 0px;">Website List</h1>
            <div class="pwdlist">

                <?php include 'fetch_password.php'; ?>
            </div>
        </div>
    </form>
    </body>
</html>
