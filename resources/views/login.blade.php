<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>

    <style>
        .form{
            width: 400px;
            padding: 10px;
            border: solid thin #ddd;
            margin: auto;
            margin-top: 100px;
            text-align: center;
            border-radius: 20px;
        }
        .form input{
            padding:10px;
            width: 300px;
            margin-top: 10px;
            border:none;
            border-bottom: solid thin #ddd;
        }
        .btn{
            background-color: #333;
            color: #fff;
            font-weight: bold;
        }
        .link{
            margin=100px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>





<form action="" method="post">

    <input id="email" type="email" name ="email"  placeholder="E-mailinizi Giriniz"><br>
    <input id="sifre" type="password" name ="sifre" placeholder="Sifrenizi Giriniz..."><br>
    <input type="submit" class="btn" value="Giriş" onclick="control();"><br>
    <a class="link" href="kayitt.php">Kayıt Ol</a>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>