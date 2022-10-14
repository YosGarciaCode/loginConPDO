<!doctype html>
<html>

<head>
    <title> login alumnos</title>
    <meta charset="utf-8">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        form {
            width: 360px;
            margin: auto;
            border: 2px blue solid;

            padding: 8% 0 0;
            text-align: center;
            vertical-align: center;
            border-collapse: collapse;
            padding: 0.5em;
            caption-side: bottom;
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }


        form input {


            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #a2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }


        form button {

            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #a2f2aa;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #F221aF;
            font-size: 16px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
            border-radius: 20px;
        }

        label {
            display: inline-block;
            width: 200px;
        }
    </style>
</head>

<body>
    <form method="post" action="comprueba_login.php">
        <label>Login:</label><input type="text" name="login">
        <label>Password:</label><input type="text" name="password">
        <button type="submit" value="login" name=enviar>enviar</button>
    </form>
</body>

</html>