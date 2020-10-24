<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>resume</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/p5@1.1.9/lib/p5.js"></script>
  </head>
  <body>
    <?php
        error_reporting(0);
        $_POST["trans"] = explode(",",$_POST["trans"]);
        if ($_POST["firstname"] !== null) {
            $info = array($_POST["firstname"],
                            $_POST["state"],
                            $_POST["city"],
                            $_POST["address"],
                            $_POST["phone"],
                            $_POST["email"],
                            $_POST["lastname"]);
            $_POST["trans"] = $info;
        }
        else if (is_string($_POST["trans"])) {
            $info = array("Elion",
                        "Ohio",
                        "Youngstown",
                        "184 Homestead Dr.",
                        "+1 (330)-318-0068",
                        "elion.K.oliver@gmail.com",
                        "Oliver");
            $_POST["trans"]=$info;
        }
        else {
            $info = $_POST["trans"];
        }
    ?>
    <div class="container">
      <img class="portrait" src="images/submissionPhoto.jpg" />
      <div class="education">
        <h1>Education</h1>
        <h3></h3>
        <h2 style="height: 2.5em"><b>Software Engineering</b></h2>
        <p style="height: 3.5em">MCCTC highschool, ICONS academy (2020-2022)</p>
        <h2 style="height: 2.5em"><b></b></h2>
        <p style="height: 3.5em"></p>
      </div>
      <div class="personalinfo">
        <div>
          <h1>About Me</h1>
          <h3></h3>
          <p style="height: 8em">
            I am the most ideal person for problem solving and calculations. I
            have always been a person that likes to solve complex problems and
            reinterperet my intuitions.
          </p>
        </div>
        <div>
          <h1>Contacts</h1>
          <h3></h3>
          <p style="height: 8em">
            <img width="20px" height="15px" src="" /><?php
                error_reporting(0);
                if ($_POST["address"] == $null) {
                    $info[3] = $_POST["trans"][3];
                }
                else {
                    $info[3] = $_POST["address"];
                }
                echo $info[3]." ";
                if ($_POST["city"] == $null) {
                    $info[2] = $_POST["trans"][2];
                }
                else {
                    $info[2] = $_POST["city"];
                }
                echo $info[2];
                echo ", ";
                error_reporting(0);
                if ($_POST["state"] == $null) {
                    $info[1] = $_POST["trans"][1];
                }
                else {
                    $info[1] = $_POST["state"];
                }
                echo $info[1];
            ?><br />
            <img width="20px" height="15px" src="" />
            <?php
                error_reporting(0);
                if ($_POST["phone"] == $null) {
                    $info[4] = $_POST["trans"][4];
                }
                else {
                    $info[4] = $_POST["phone"];
                }
                echo $info[4];?><br />
            <img
              width="20px"
              height="15px"
              src=""
            /><?php
                error_reporting(0);
                if ($_POST["email"] == $null) {
                    $info[5] = $_POST["trans"][5];
                }
                else {
                    $info[5] = $_POST["email"];
                }
                echo $info[5];?><br />
            <img width="20px" height="15px" src="" /><a
              href="https://github.com/lithric?tab=repositories"
              >https://github.com/lithric?tab=<br />repositories</a
            >
          </p>
        </div>
        <div>
          <h1>Expertise</h1>
          <h3></h3>
          <p style="height: 8em">
            <a href="https://github.com/lithric/moveboxing"
              >https://github.com/lithric/moveboxing</a
            ><br /><br />
            <a href="https://github.com/lithric/FolderOfTheCode"
              >https://github.com/lithric/<br />FolderOfTheCode</a
            >
          </p>
        </div>
      </div>
      <div class="name">
        <h1 style="height: 2.33em">
            <?php
                error_reporting(0);
                if ($_POST["firstname"] == $null) {
                    if ($_POST["trans"][0] !== $null) {
                        $info[0] = $_POST["trans"][0];
                    }
                }
                else {
                    $info[0] = $_POST["firstname"];
                }
                echo $info[0];
                echo " ";
                if ($_POST["lastname"] == $null) {
                    if ($_POST["trans"][6] !== $null) {
                        $info[6] = $_POST["trans"][6];
                    }
                }
                else {
                    $info[6] = $_POST["lastname"];
                }
                echo $info[6];
            ?>
        </h1>
        <h2 style="height: 2em">Software Engineer</h2>
      </div>
      <div class="experience">
        <h1>Experience</h1>
        <h3 style="position: absolute; transform: translate(0px, 45px)"></h3>
        <h2 style="transform: translate(0px, 30px)">
          <span>Architectural Developement Intern</span><br />
          PHI (2017-2020)
        </h2>
        <p>
          Creates the environmental protection that sheilds houses and sheds
          from rain and snow.
        </p>
        <h2 style="height: 2.75em">
          <span>Script Implementation & Manifest <br />Trainee</span><br />
          Codecademy, CodeHS, ICONS academy (2017-2020)
        </h2>
        <p>
          The programs I have been in to learn how to implement and apply a
          script to any program or application.
        </p>
        <h2 style="height: 2.75em"></h2>
        <p></p>
        <h2 style="height: 2.75em"></h2>
        <p></p>
      </div>
    </div>
    <a class="contact" href="forms.php">
        <form action="./forms.php" method="post">
            <input name="trans" <?php
                    error_reporting(0);
                    for ($i = 0; $i<count($info); $i++) {
                        if ($_POST["trans"][$i] !== $null) {
                            $info[$i] = $_POST["trans"][$i];
                        }
                    }
                    echo "value="."\"".implode($info, ",")."\"";
                ?> hidden>
            <button type="submit">Contact<br>Forms</button>
        </form>
    </a>
    <script src="JS/script.js" async defer></script>
  </body>
</html>