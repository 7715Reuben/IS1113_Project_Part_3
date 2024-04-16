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


    <body>


        <div class="section">
            <!-- This is an example of the "section" divider in use, it allows for a tabular display of images which are relevant
            to the text below/above them. It guides the user through the website and almost tells them where to look. -->
            <h1>Work Experience</h1>

            <div class="timeline">

                <div class="timeline-item">
                    <h3>Sweetnam Building & Maintenance Ltd - (Moneygourney, Cork) <i>(07/2020 - 09/2023)</i></h3>
                    <h5>Small-Medium sized construction firm based in Cork City.</h5>
                    <h4>Labourer</h4>
                    <ul>
                        <li>Worked here each summer from 2020-2023.</li>
                        <li>Managed incoming stock deliveries by carefully counting and storing materials for maximum team efficiency.</li>
                        <li>Acted as a point of contact for clients when working independently.</li>
                        <li>Sustained safety protocols by ensuring proper and safe usage of equipment, tools, and materials.</li>
                        <li>Developed open and professional relationships with team members to facilitate effective issue resolution</li>
                        <li>Operated in small teams as part of a bigger task, usually comprising of no more than 6 members.</li>
                    </ul>
                </div>
                <h1><b>|</b></h1>
                <div class="timeline-item">
                    <h3>Fitzgerald Menswear - (24 Patrick's Street, Cork) <i>(12/2021 - 01/2022)</i></h3>
                    <h5>Premium Clothing Shop located in the heart of Cork City.</h5>
                    <h4>Retail Sales Assistant</h4>
                    <ul>
                        <li>Processed cash and card payments during busy festive shopping periods to minimize customer waiting times.</li>
                        <li>Provided helpful, attentive sales support to generate positive customer feedback.</li>
                        <li>Cultivated excellent customer relationships by providing helpful, friendly and attentive service.</li>
                    </ul>
                </div>
                <h1><b>|</b></h1>
                <div class="timeline-item">
                    <h3>Excel Recruitment - <i>(07/2022 - Present)</i></h3>
                    <h5>Gig Recruitment Agency</h5>
                    <h4>Bar & Waiting Staff</h4>
                    <ul>
                        <li>Upheld a high standard of cleanliness in all work areas to comply with health and safety regulations.</li>
                        <li>Processed cash, credit card and voucher payments using POS terminals.</li>
                        <li>Optimized customer experience, serving each guest with sincere, positive, and enthusiastic attitude.</li>
                        <li>Maintained calm and professional demeanor when dealing with complaints, for exemplary customer service.</li>
                        <li>Demonstrated full knowledge of all menu items, contents, and preparation methods to provide suggestions based on customer preference.</li>
                    </ul>
                </div>
                <h1><b>|</b></h1>
                <div class="timeline-item">
                    <h3>Dunnes Stores (Drapery Department) - (Douglas Court Shopping Centre, Cork) <i>(12/2023 - 01/2024)</i></h3>
                    <h5>Clothing & Homeware Shop located in Douglas Village.</h5>
                    <h4>Retail Sales Assistant</h4>
                    <ul>
                        <li>Processed cash and card payments during exceptionally busy shopping periods during the festive season.</li>
                        <li>Provided helpful, attentive sales support to generate positive customer feedback.</li>
                        <li>Cultivated excellent customer relationships by providing helpful, friendly and attentive service.</li>
                        <li>Packed away inbound stock and packed-out stock to shop floor.</li>
                        <li>Helped prepare stock trays and pallets for courier pickup.</li>
                        <li>Used store computer system to locate desired products in other Dunnes stores when the item was out of stock in our store.</li>
                        <li>Completed safe manual handling training as well as checkout training</li>
                    </ul>
                </div>
                <h1><b>|</b></h1>
                <div class="timeline-item">
                    <h3>UCC Business Information Systems (BIS) Society - (University College Cork) <i>(09/2023 - Present)</i></h3>
                    <h4>First Year Representative</h4>
                    <ul>
                        <li>Tasked with encouraging fellow first year students to get involved in society events and to network within their course.</li>
                        <li>Organized the annual BIS Society Pub Quiz as part of a cohesive team.</li>
                        <li>Sourced prizes from locally owned businesses for this quiz.</li>
                        <li>Developed fantastic professional relationships with my fellow committee members.</li>
                        <li>Helped organize and market our annual BIS Society Ball which we sold over 700 tickets for and was a great success!</li>
                    </ul>
                </div>
                <h1><b>_</b></h1>
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
    echo "<br>";                // "echo" is essentially the same as "print" in python - here it will display the user's inputs for each field back to them
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





