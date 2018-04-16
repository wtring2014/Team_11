<html>
    <head>
        <title>Products</title>
        <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
                background-color: LIGHTGRAY;
            }

            .topnav {
                overflow: hidden;
                background-color: ROYALBLUE;
                border: 3px solid red;
            }

            .topnav a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;

            }

            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }

            .topnav a.active {
                background-color: ROYALBLUE;
                color: white;
            }
            footer {
                position: fixed;
                left: 0;
                bottom: 0;
                right: 0;
                background-color: ROYALBLUE;
                color: ROYALBLUE;
                text-align: center;
                border: 3px solid red;

            }
        </style>
    </head>
    <body>
        <div class="topnav">
            <a class="active" href="#home">E11even</a>
            <a href="Products.php">Products</a>
            <a href="search.php">Search</a>
            <a href="../About.html">About</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
        <div align="center">
            <div class="container">
                <div class="mainHeader">
                    <h1>E11even</h1>
                    <h2>We supply and assist, you build it.</h2>
                </div>
                <div class="header">
                    <h2>Products</h2>
                </div>
                <div class="content">
                    <?php
                    $output = NULL;
                    $mysqli = NEW MySQLi("localhost", "CEN4010_S2018g11", "cen4010_s2018", "CEN4010_S2018g11");
                    $resultSet = $mysqli->query("SELECT * FROM Inventory");
                    while($rows = $resultSet->fetch_assoc())
                    {
                        $quantity = $rows['quantity'];
                        $Part_Name = $rows['Part_Name'];
                        $SKU = $rows['SKU'];
                        $Price = $rows['price each'];
                        $Newark = $rows['Newark p/n'];
                        $Img = $rows['Image'];                        
                        $output = "Serial Number: $SKU <br/> Part Name: $Part_Name <br/> Newark p/n: $Newark <br/> Quantity: $quantity <br/> Price each: $Price <br/> ";
                        echo '<img src="data:image/jpeg;base64,'.base64_encode( $Img ).'"/>';
                        echo "<br/> $output <br/>";
                    }
                    ?>
                </div></div></div>
    </body>
    <footer>footer</footer>
</html>