<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">      <!-- Defines character set  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RS Web Solutions.</title>

    <style>         /* Creates the CSS which will style the web page, altering how it will display */
        .error {color: #FF0000;}        /* Creates the class 'error' to alter the text color to red in the event of an error */
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        body {
            font-family: Arial, sans-serif;         /* Defines the default styling of the 'body' */
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            background-color: navy;         /* Defines the default styling of the 'header' */
            color: white;
            text-align: center;
            padding: 10px;
        }

        .section {
            margin: 20px;
            padding: 20px;          /* Creates the class 'section' to create sectional boxes for the web
                                                        pages content to display within, these help with clarity of use */
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1,
        h2,
        h3 {
            color: navy;
        }

        a {
            color: navy;
            text-decoration: none;      /* Changes the color of text within 'h1','h2','h3' tags to navy */
        }

            a:hover {
                text-decoration: underline;     /* Displays text underlined when hovered over the mouse */
            }

        nav {
            background-color: navy;
            overflow: hidden;       /* Background color of each nav box is by default navy (without being hovered over) */
            text-align: center;
        }

            nav a {
                float: left;
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;      /* Changes the background color of each nav box to white when hovered over */
            }

                nav a:hover {
                    background-color: #ddd;
                    color: navy;            /* Changes color of text inside nav boxes to navy when hovered over */
                }


    
    </style>

</head>

<body>

    <nav>
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="education.php">Education</a>
        <a href="work.php">Work Experience</a>   <!-- Creates the hyperlinks to other webpages and text which displays in the navigational bar -->
        <a href="portfolio.php">Portfolio</a>
        <a href="pricing.php">Pricing</a>
    </nav>


    <header>    <!-- Creates the header section which contains some of my key information required to make contact/do business -->
        <h1 style="color:white;">RS Web Solutions.</h1>
        <p>Email: reubenskuse@gmail.com | Phone: (+353) 087 ******* | 
        Address: 26 My Street, Cork, Ireland |
         <a style="color:white;" href="https://www.linkedin.com/in/reuben-skuse-774743297/"><u>View LinkedIn</u></a></p>
    </header>

    <div class="section">
        <!-- This is an example of the "section" divider in use, it allows for a tabular display of images which are relevant
            to the text below/above them. It guides the user through the website and almost tells them where to look. -->
        <h2>Discover Our Portfolio: A Showcase of Digital Excellence</h2>
        <p>Welcome to our portfolio, where we proudly display a curated selection of our finest digital creations.
             From sleek and intuitive websites to robust backend systems, each project exemplifies our commitment to excellence in web development and IT consultancy.
             Explore our portfolio to witness firsthand the innovative solutions and transformative results we deliver to our valued clients.
        </p>
    </div>

    <div class="section">
        <img src="https://i.imgur.com/R4IMOL8.jpeg" alt="Portfolio Piece 1" width=900 height=500>
        <h3>'Boole Pizza' Application</h3>
        <p>This application was developed to the specifications of a new pizza chain who required a platform
            for their customers to complete orders on.
            <div>
            In this image we can see the resultant product of a consultancy process 
            where the client was involved every step of the way to establish what they needed us to develop. </p>
            </div>
    </div>

    <div class="section">
        <img src="https://i.imgur.com/FJ8SXLh.jpeg" alt="Portfolio Piece 2" width=900 height=500>
        <h3>'RS Web Solutions' Website</h3>
        <p>The RS Web Solutions website itself was developed in-house to our project specifications and a coursework assignment rubric.
            <div>
            This is an original screenshot of RS Web Solutions' first commission and showcases a simple, yet extremely functional design.
            As can be seen in the image, the website has undergone evolution since with the addition of 2 further pages. </p>
        </div>
    </div>

    <div class="section">
        <h2>Contact Form</h2>   
         <!-- This contact form which is adapted from w3schools.com (referenced below) is an excellent use
        of php scripting to collect data from the user which would be important in a business' webpage.
        This form takes advantage of email validation techniques and also allows the user to submit a note along
        with their request, which could streamline the process of doing business with them. -->  

    <!--adapted from w3Schools - (https://www.w3schools.com/php/php_form_complete.asp) -->
     <?php
    // define variables and set to empty values
    $nameErr = $emailErr = "";
    $name = $email = $comment  = "";        // The $ symbols denote a variable in php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {     // The "POST" method is used to transmit sensitive/personal information as it is more secure
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
        }
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        }
    }
        

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    }

    function test_input($data) {
    $data = trim($data);            // the 'trim' function removes blank spaces from the variable's input
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>

    <p><span class="error">* required field</span></p>  <!-- Will display an error message if user leaves a required field blank -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>  <!-- No "error" class here as the comment is not a required field -->
    <br><br>
    <br><br>
    <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";            // "echo" is essentially the same as "print" in python - here it will display the user's inputs for each field back to them
    echo $email;
    echo "<br>";
    echo $comment;
    ?>
        </div>

    <?php
        echo "Date is ".date("Y/m/d")."<br>";       // this displays the current date to the user.

    ?>

</body>
</html>