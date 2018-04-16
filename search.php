<!DOCTYPE html>
<html>
    <head>
        <title>Search for a Product</title>
        <link rel="stylesheet" type="text/css" href="style.css">
            <link rel="stylesheet" type="text/css" href="style.css">

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
                        <h2>Parts</h2>
                    </div>
                    <div class="row">
                        <div class="content">
                            <form method="POST">
                                <input type="TEXT" name="search" placeholder="Part Name or SKU..." class="mytext"/>
                                <input type="SUBMIT" name="submit" value="Search" placeholder="Part Name or SKU..." class="mysubmit"/>
                            </form>
                            <?php
                            $output = NULL;
                            if(isset($_POST['submit'])){
                                $mysqli = NEW MySQLi("localhost", "CEN4010_S2018g11", "cen4010_s2018", "CEN4010_S2018g11");
                                $search = $_POST['search'];
                                $resultSet = $mysqli->query("SELECT * FROM Inventory WHERE SKU LIKE '$search%' OR Part_Name LIKE '%$search%'");
                                echo "<br/>";
                                if($resultSet->num_rows > 0)
                                {
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
                                }
                                else{
                                    echo "<br/> No Results found.";
                                }

                            }
                            ?>
                        </div></div></div></div>

        </body>
        <footer>footer</footer>
        </html>