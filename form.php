<html>
<body>
<?php

function print_M() {
    $fname = $_POST["fname"];
    $sname = $_POST["surname"];
    $mail = $_POST["mail"]; 
    $date = $_POST["start"];
    $htmlr = $_POST["htmlr"];
    $drop = $_POST["drop"];
    $css = $_POST["csshtml"];

    
    
    // posting the name
    if (isset($fname)) {
        echo "Your name: " .$fname ."<br>";
    } else {
        relax();
    }


    // posting the surname
    if (isset($sname)) {
        echo "Your surname: " .$sname ."<br>";
    } else {
        relax();
    }

    // posting the mail
    if (isset($mail)) {
        echo "Your mail: " .$mail ."<br>";
    } else {
        relax();
    }

    // posting the date
    if (isset($date)) {
        echo "The date: " .$date ."<br>";
    } else {
        relax();
    }

    // posting the radio i guess
    if (isset($htmlr)) {
        if ($htmlr=="First") {
            echo "Your answer for the radio question: Hyper Text Markup Language <br>";
        }

        else if ($htmlr=="Second") {
            echo "Your answer for the radio question: Hyper Text Makeup Language <br>";
        }

        else {
            echo "Your answer for the radio question: Hyper Tech Markup Language <br>";
        }
    } else {
        relax();
    }

    // posting the checkbox
    if (isset($_POST["htmlc1"])) {
        echo "Your checked boxes: h7";
    }
    else {
        echo "Your checked boxes: ";
    }
    if (isset($_POST["htmlc2"])) {
        echo ", h6";
    }
    else {
        relax();
    }
    if (isset($_POST["htmlc3"])) {
        echo ", p";
    }
    else {
        relax();
    }
    if (isset($_POST["htmlc4"])) {
        echo ", form";
    }
    else {
       relax();
    }
    if (isset($_POST["htmlc5"])) {
        echo ",promt.";
    }
     else {
        relax();
    }

    // drop menu displaying
    if (isset($drop)) {
        echo "<br>Your answer for the drop menu question: " .$drop . "<br><br>";
    } else {
        relax();
    }

    // posting the css
    if (isset($css)) {
        echo "Your css code: " .$css ."<br>";
    } else {
        relax();
    }
}


// just relax
function relax() {
    ;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    print_M();
}

?>
</body>
</html>

