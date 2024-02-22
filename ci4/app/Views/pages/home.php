<!DOCTYPE html>
<html lang="en">
<head>
  <title>Personal Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="shortcut icon" href="/assests/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@400;700&display=swap" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>

  </style>
</head>

<body>
  <div class="wrapper">
    <section class="me">
      <div class="mask">
          <button>About me</button>
      </div>
      <span class="close">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
      </span>
      <div class="inner">
          <div class="bg"></div>
          <div class="text">
              <div class="box">
                  <h3>About me</h3>
                  <p>Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Repudiandae magnam repellat commodi, quibusdam possimus illo a, accusamus itaque 
                    voluptatibus deleniti magni corrupti quos? Excepturi dolores provident expedita harum error consequuntur.
                  </p>
                  <div id="skills-container"></div>
                  <div class="social-media"></div>
              </div>
          </div>
      </div>
  </section>

    <section>
      <div class="container">
        <div class="header">
            <img src="./images/nightsky.png" alt = "header">
        </div>
        
        <div class="content-title">
          <div class="title">BREAKING NEWS</div>
        </div>
        <div class="content-large">
          <img src="./images/aircon.jpg" alt = "aircon">
        </div>
        <div class="content-small">
          <div class="Sumeru">
            Funny pictures
          </div>
        </div>
        <div class="content-small2">
          <img src="./images/transparentalhaithamheader2.png" alt="alhaithamheader">
        </div>
        <div class="content-small3">
         <img src="./images/car.jpg" alt="car">
         </div>
      </div>
    </section>
    
    <section>
      <div class="container2">
        <div class="content-horizontal">
          <img src="./images/horizontal.jpg" alt="horizontal">
        </div>
        <div class="content-large2">
          <img src="./images/ground.jpg" alt="shuttle">
        </div>
        <div class="content-medium2">
          <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </h1>
          Maxime sapiente alias nisi recusandae, quos corporis nostrum provident dolorem temporibus minima, 
          sed praesentium eaque sunt amet. Amet id ullam sint deleniti!
        </div>
        <div class="content-medium2a">medium2a</div>
        <div class="content-smallpage2">
          <img src="./images/leaves.jpg" alt="leaves">
        </div>
        <div class="content-smallpage2a">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Seulement des moments futiles Revoir ces images qui m'ont démoli
          Tu ferais mieux d'êtres loin de ma vie
        </div>
      </div>
    </section>

    <section>
      <div class="container3">
        <div class="forms">
          <?php
          // define variables and set to empty values
          $nameErr = $emailErr = $genderErr = $websiteErr = "";
          $name = $email = $gender = $comment = $website = "";

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
              
            if (empty($_POST["website"])) {
              $website = "";
            } else {
              $website = test_input($_POST["website"]);
              // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
              if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL";
              }
            }

            if (empty($_POST["comment"])) {
              $comment = "";
            } else {
              $comment = test_input($_POST["comment"]);
            }

            if (empty($_POST["gender"])) {
              $genderErr = "Gender is required";
            } else {
              $gender = test_input($_POST["gender"]);
            }
          }

          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
          ?>

          <h2>PHP Form Validation Example</h2>
          <p><span class="error">* required field</span></p>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Name: <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            Website: <input type="text" name="website" value="<?php echo $website;?>">
            <span class="error"><?php echo $websiteErr;?></span>
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
            <br><br>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">  
          </form>

          <?php
          echo "<h2>Your Input:</h2>";
          echo $name;
          echo "<br>";
          echo $email;
          echo "<br>";
          echo $website;
          echo "<br>";
          echo $comment;
          echo "<br>";
          echo $gender;
          ?>
          
          <?php
          $servername = "localhost";
          $username = "webprogss221";
          $password = "=latHen97";
          $dbname = "webprogss221";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "INSERT INTO jbvilleza_myguests (`name`, `email`, `website`, `comment`, `gender`)
          VALUES ('$name', '$email', '$website', '$comment', '$gender')";

          if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

          $conn->close();
          ?>
        </div>
      </div>
    </section>
  </div>

  <script src="test.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
  <script src="app.js"></script>

</body>
</html>
