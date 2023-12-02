<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login">
    <h1>Masuk</h1>
       <form method="post" action="login.php" onsubmit="return validasi()">
        <div>
            <label>Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Masuk">
        <div class="register">
            Belum punya akun? <a href="registrasi.php">Daftar</a>
        </div>
    </form> 
    </div>

    <script type="text/javascript">
        function validasi(){
            var username=document.getElementById("username").value;
            var password=document.getElementById("password").value;
            
            if(username!=""){
                return true;
            }else{
                alert('Mohon isi username dan password')
                return false;
            }
        }
    </script>
</body>
</html>