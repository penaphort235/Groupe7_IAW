<?php

            if(isset($_POST['connecte'])){
                $nom=$_POST['nom'];
                $password=$_POST['password'];
                if(($nom=="Touristique")&& ($password=="123")){
                    header('Location: Admin_touristique.html');
                }
                elseif(($nom=="Mistral")&& ($password=="321")){
                    header('Location: Admin_mistral.html');
                }
                else echo ("Identifiant eronnées!");
            
            }
            

        ?>

<!DOCTYPE html>
<html>
    <header>
        <title>Autentification</title>
        <meta charset=" utf-8">
    </header>
    <body>

        <div class="login">
            <form action="" method="post">
                <input type="text" name="nom" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" id="submit" name="connecte" value="Login">
            </form>
        </div>
    </body>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login{
            display: flex;
            flex-direction: column;
            width: 350px;
            padding: 15px;
            border: 1px solid skyblue;
            border-radius: 5px;

        }
        input{
            margin: 5px 0px;
            height: 15px;
            padding: 70px;
        }
        #submit{
            height: 15px;
            margin: 5px;
            background-color: skyblue;
            border: none;
            border-radius: 5px;
            color: #333;
        }
        #submit:hover{
            background-color: #333;
            color: skyblue;
        }
    </style>

</html>