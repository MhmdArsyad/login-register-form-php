<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Daftar</title>
    <link rel="stylesheet" href="registrasi.css">
</head>
<body>
<div class="register">
    <h1>Daftar</h1>
       <form method="post" action="register.php" onsubmit="return validasi()">
        <div>
            <label>Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label>Konfirmasi Password</label>
            <input type="password" name="password2" id="password2" required>
        </div>
        <input type="submit" name="register" value="Daftar">
        <div class="login">
          Sudah punya akun? <a href="index.php">Masuk</a>
    </form> 
    </div>

    <script type="text/javascript">
        function validasi(){
            var username=document.getElementById("username").value;
            var password=document.getElementById("password").value;
            var password2=document.getElementById("password2").value;
            
            if(password!=password2){
                alert('Password tidak sesuai')
                return false;
            }else{
                return true;
            }
        }
    </script>
</body>
</html>