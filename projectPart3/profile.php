<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">      <!-- Defines character set  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RS Web Solutions.</title>
    
    <style>     /* Creates the CSS which will style the web page, altering how it will display */
        .error {color: #FF0000;}        /* Creates the class 'error' to alter the text color to red in the event of an error */
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
            padding: 20px;      /* Creates the class 'section' to create sectional boxes for the web
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
                    color: navy;                    /* Changes color of text inside nav boxes to navy when hovered over */
                }
    </style>
    <script>
        // JavaScript for dynamic content update
        window.addEventListener('DOMContentLoaded', function () {
            var skills = ["Microsoft Office", "HTML Web Design", "Artificial Intelligence & Large Language Model tools", "Qualified Barista", "Safe Manual Handling", "Store checkout trained", "Bar trained"];
            var randomSkill = skills[Math.floor(Math.random() * skills.length)];
            document.getElementById('randomSkill').innerText = randomSkill;     // Displays a random skill every time the page is reloaded from the list above
        });
    </script>
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
        <h1>Profile</h1>
        <p>My name is <b>Reuben</b>. I am a <b>19-year-old student</b> studying <b>Business Information Systems</b> in <b>University College Cork.</b><br>
         I have worked for 3 years in the hospitality sector <b>(Qualified Barista & Bar Trained)</b>.
          I have 2 years of experience in the retail sector <b>(Checkout Trained)</b>. 
          I also completed <b>manual handling training</b> while working in the construction industry (4 years experience).<br>
         I am proficient in the use of <b>Microsoft Office</b> applications such as <b>Word, Excel, Powerpoint, Visio & Visual Studio.</b>
         4 years experience in <b>Python</b> & 3 years experience in <b>XHTML, JavaScript, CSS & PHP.</b>
         In my spare time, I enjoy <b>working out</b>, <b>playing rugby</b> & listening to <b>music.</b></p>
    </div>
    <div class="section">
        <h2>Skills</h2>
        <p>Random Skill: <b id="randomSkill"></b></p>
        <?php
            $skills = [
            'Proficient in <b>Microsoft Office</b>',
            '<b>HTML</b> Web Design',
            'Practical use of <b>Artificial Intelligence & Large Language Model</b> tools (ChatGPT, Gemini, Dall-E etc.)',
            'Level 1 <b>Qualified Barista</b>',
            'Trained in <b>Safe Manual Handling</b>',
            'Store <b>checkout trained</b>',
            '<b>Bar trained</b>'
            ];

        shuffle($skills);
        ?>

        <ul>
            <li>Proficient in <b>Microsoft Office</b></li>
            <li><b>HTML</b> Web Design</li>
            <li>Practical use of <b>Artificial Intelligence & Large Language Model</b> tools (ChatGPT, Gemini, Dall-E etc.)</li>
            <li>Level 1 <b>Qualified Barista</b></li>
            <li>Trained in <b>Safe Manual Handling</b></li>
            <li>Store <b>checkout trained</b></li>
            <li><b>Bar trained</b></li>
        </ul>
    </div>

    <div class="section">
        <h2>Interests</h2>
        <ul>
            <li>Rugby</li>
            <li>Basketball</li>
            <li>Formula One</li>
            <li>Computers</li>
            <li>Music</li>
            <li>Working out & training</li>
            <li>Immersing myself in new & diverse cultures through my love for food & drink.</li>
        </ul>
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
    $name = $email = $comment  = "";            // The $ symbols denote a variable in php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {         // The "POST" method is used to transmit sensitive/personal information as it is more secure
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
    echo "<br>";
    echo $email;                // "echo" is essentially the same as "print" in python - here it will display the user's inputs for each field back to them
    echo "<br>";
    echo $comment;
    ?>
        </div>

<?php
    echo "Date is ".date("Y/m/d")."<br>";       // this displays the current date to the user
?>
</body>

</html>

