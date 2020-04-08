<html>
    <head>
    <title></title>

        <meta charset="UTF-8">

        <style>
            body {
            margin: 0;
            padding: 0;
            }

            #wallpaper{
                position: fixed;
                height: 100%;
                width: 100%;
                left: 0;
                bottom: 0;
            }

            .box {
                position: relative;
                width: 310px;
                height: 460px;
                padding: 40px;
                margin-top: 190px;
                margin-right: 560px;
                margin-left:  560px;
                margin-bottom: auto;
                background: #191919;
                text-align:center;
            }
            .box h1{
                color: white;
                text-transform: uppercase;
                font-weight:500;
            }
            .box input[type ="text"], .box input[type ="password"]{
                border: 0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align:center;
                border:2px solid #3498db;
                padding: 14px 10px;
                width: 200px;
                outline: none;
                color: white;
                border-radius: 24px;
                transition: 0,25s;
            }
            .box input[type ="text"]:focus, .box input[type ="password"]:focus{
                width: 280px;
                border-color: #2ecc71;
            }
            .box input[type ="submit"]{
                border: 0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align:center;
                border:2px solid #2ecc71;
                padding: 14px 40px;
                outline: none;
                color: white;
                border-radius: 24px;
                transition: 0,25s;
                cursor: pointer;
            }
            .box input[type ="submit"]:hover{
                background: #2ecc71;
            }

            a{
                margin: auto 20px;
                margin-top: 25px;
                padding: 2.5px 7px;
                cursor: pointer;
                background: none;
                border: 0;
                outline: none;
                position: relative;
                color: white;
                border:2px solid #2ecc71;
                border-radius: 24px;
                box-shadow: antiquewhite; 
                text-decoration: none;
            }

            .button-box{
                width: 220px;
                margin: 5px auto;
                position: relative;
                border-radius: 24px;
            }
        </style>

</head>

	<body> 

        <img id="wallpaper" src="img/e.jpeg" alt="">

        <form action="proses_register.php" class="box" method="post">

            <div class="button-box">
                    <a href="Login.php">○</a>
                    <a href="">●</a>
            </div>

                 <h1>Register</h1>
                    <input type="text" name="username" placeholder="Set Username" required>
                    <input type="text" name="nama_lengkap" placeholder="Your Name (Full Name)" required>
                    <input type="text" name="email" placeholder="Your Email" required>
                    <input type="text" name="telephone" placeholder="Your Number" required>
                    <input type="password" name="password" placeholder="Set Password" required>
                    <input type="submit" name="" value="Register">
        </form>

    </body>
    
</html>