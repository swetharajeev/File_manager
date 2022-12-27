<!DOCTYPE html>
<html>
    <head>
        <title>CSS Sectional Project</title>
        <link rel="stylesheet" href="stylenew.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="navbar">
            <h1 id="firsthead">fileUp</h1>
        </div>
        <div class="login">
            <h2 id="secondhead">Login<h2>
            <img src="https://img.freepik.com/premium-vector/avatar-transgender-man-office-worker-wearing-glasses-programmer-designer-young-student_277909-169.jpg?size=338&ext=jpg&uid=R72177447&ga=GA1.2.1195763904.1664643123" alt="image of a person">
            <!-- <img src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg&uid=R72177447&ga=GA1.2.1195763904.1664643123&semt=sph" alt="profile pic"> -->
            <form class="ip" action="login.php" method="post">
                <!-- <label id="user label">Username: </label> -->
                <input type="text" id="user" name="uname" placeholder="Enter Username">
                
                </br>
                <input type="text" id="pass" name="password"placeholder="Enter Password">
                </br>
                <input type="submit"  value="Login" id="log">
                </br>
                <input type="checkbox" id="rem">
                <label id="rem">Remember Me<label> 
                    <!-- </br> -->
                <a href="#" id="link">Forgot Password?</a>
                </br>
                <input type="reset" id="cancel" value="Cancel">
            </form>
        </div>
    </body>
</html>