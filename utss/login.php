<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/x-icon" href="dos.png">
    </head>
    <body>
        <div class="container">
          <h1>Login</h1>
            <form method="POST" action="home.php">
                <input name="tujuan" type="hidden" value="LOGIN" >
                <label>Username</label>
                <br>
                <input name="username" type="text">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>
                <button>Log In</button>
                
                <p> Belum menjadi anggota?
                  <a href="formmhs.php">Daftar di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>