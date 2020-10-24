<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
        />
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            $_POST["trans"] = explode(",",$_POST["trans"]);
            if (is_string($_POST["trans"])) {
                $info = array("Elion",
                                "Ohio",
                                "Youngstown",
                                "184 Homestead Dr.",
                                "+1 (330)-318-0068",
                                "elion.K.oliver@gmail.com",
                                "Oliver");
            }
            else {
                $info = $_POST["trans"];
            }
            if (is_string($_POST["trans"])) {
                $_POST["trans"]=$info;
            }
        ?>
        <form action="./index.php" method="post">
            First Name: <input type="text"
                            <?php
                                error_reporting(0);
                                if ($_POST["trans"][0] !== $null) {
                                    $info[0]=$_POST["trans"][0];
                                }
                                echo "value="."\"".$info[0]."\"";
                            ?>
                            name="firstname"><br>
            Last Name: <input type="text" 
                            <?php
                                error_reporting(0);
                                if ($_POST["trans"][6] !== $null) {
                                    $info[6]=$_POST["trans"][6];
                                }
                                echo "value="."\"".$info[6]."\"";
                            ?>
                            name="lastname"><br>
            State: <input type="text"
                            <?php
                                error_reporting(0);
                                if ($_POST["trans"][1] !== $null) {
                                    $info[1]=$_POST["trans"][1];
                                }
                                echo "value="."\"".$info[1]."\"";
                            ?>
                            name="state"><br>
            City: <input type="text"
                            <?php
                                error_reporting(0);
                                if ($_POST["trans"][2] !== $null) {
                                    $info[2]=$_POST["trans"][2];
                                }
                                echo "value="."\"".$info[2]."\"";
                            ?>
                            name="city"><br>
            Address: <input type="text"
                            <?php
                                error_reporting(0);
                                if ($_POST["trans"][3] !== $null) {
                                    $info[3]=$_POST["trans"][3];
                                }
                                echo "value="."\"".$info[3]."\"";
                            ?>
                            name="address"><br>
            Phone Number: <input type="tel" 
                            <?php
                                error_reporting(0);
                                if ($_POST["trans"][4] !== $null) {
                                    $info[4]=$_POST["trans"][4];
                                }
                                echo "value="."\"".$info[4]."\"";
                            ?>
                            pattern="\+\d{1,3} \(\d{3}\)-\d{3}-\d{4}"
                            name="phone"><br>
            Email: <input type="email" 
                            <?php
                                error_reporting(0);
                                if ($_POST["trans"][5] !== $null) {
                                    $info[5]=$_POST["trans"][5];
                                }
                                echo "value="."\"".$info[5]."\"";
                            ?>
                            name="email"><br>
            <input type="submit">
        </form>
        <a class="contact" href="index.php">
            <form action="./index.php" method="post">
                <input name="trans" <?php
                    error_reporting(0);
                    for ($i = 0; $i<count($info); $i++) {
                        if ($_POST["trans"][$i] !== $null) {
                            $info[$i] = $_POST["trans"][$i];
                        }
                    }
                    echo "value="."\"".implode($info, ",")."\"";
                ?> hidden>
                <button type="submit">Resume<br><p style="visibility: hidden;">a</p></button>
            </form>
        </a>
        <script src="" async defer></script>
    </body>
</html>