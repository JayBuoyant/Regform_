</head>
<body>
    <p> Creating a Registration Form </p>
    <form method="post" action="user_data.php">
    <label for="name">First name:</label> 
    <input type="text" id="name" name="name" /><br><br>
    <label for="lastname">Last name:</label>
    <input type="text" id="lastname" name="lastname" /><br><br> 
    <label for="email">Email address:</label>
    <input type="text" id="email" name="email" /><br><br>
    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday" /> <br><br>
    <label for="gender">Gender</label>
    <input type="text" id="gender" name="gender" /> <br><br>
    <label for="country">Country</label>
    <input type="text" id="country" name="country" /> <br><br>
    <input type="submit" value="Register" name="submit /">
    </form>

        <?php
        
        /* $introduce_your_firstname = $_POST ['firstname'];
        $introduce_your_lastname = $_POST ['lastname'];
        $email = $_POST ['email'];
        $when_is_your_birthday = $_POST ['birthday'];
        $what_is_your_gender = $_POST ['gender'];
        $Which_country= $_POST ['country'];

        echo 'Thanks for submitting the form. </br>';
        echo 'What is your firstname' . $introduce_your_firstname;
        echo 'What is your lastname' . $introduce_your_lastname;
        echo 'Your email address is' . $email;
        echo 'What year were your born' . $when_is_your_birthday;
        echo 'State your gender' . $what_is_your_gender;
        echo 'Where are you from' . $Which_country;*/
        ?>
    </body>
</html>