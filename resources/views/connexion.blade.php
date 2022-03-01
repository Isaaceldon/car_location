<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form | By Code Info</title>
    <link rel="stylesheet" href="style.css">

    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: tomato;
}
.container{
    width: 100%;
    display: flex;
    max-width: 850px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}
.login{
    width: 400px;
}
form{
    width: 250px;
    margin: 60px auto;
}
h1{
    margin: 20px;
    text-align: center;
    font-weight: bolder;
    text-transform: uppercase;
}

p{
    text-align: center;
    margin: 10px;
}
hr{
    border-top: 2px solid tomato;
}

.pic img{
    width: 450px;
    height: 100%;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
}

form label{
    display: block;
    font-size: 16px;
    font-weight: 600;
    padding: 5px;
}
input{
    width: 100%;
    margin: 2px;
    border: none;
    outline: none;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid gray;
}
button{
    border: none;
    outline: none;
    padding: 8px;
    width: 252px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 5px;
    background: tomato;
}
button:hover{
    background: rgba(214, 86, 64, 1);
}
p{
    margin: 20px;
}
a{
    color: black;
    text-decoration: none;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="login">
            <form>
                <h1>CONNEXION</h1>
                <hr>
                <p>Connectez-vous</p>
                <label>Email</label>
                <input type="text" placeholder="abc@exampl.com">
                <label>Mot de passe</label>
                <input type="password" placeholder="enter your password!">
                <button>Soumettre</button>
                <p>
                    <a href="#">Forgot Password?</a>
                </p>
            </form>
        </div>
        <div class="pic">
            <img src="images/foret2.jpg">
        </div>
    </div>

</body>
</html>
