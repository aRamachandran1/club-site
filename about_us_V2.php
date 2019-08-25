<pre>
<?php

    //print_r($_POST);
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $whoAreYou = $_POST["whoAreYou"];
    $message = $_POST["message"];
    $to = "shswebdevclub@gmail.com";
    $subject = "Web Dev Contact Form";
/*
    $from = $_POST['Web Dev Contact Form'];
    $to = $_POST['nkchakra2@gmail.com'];
    $subject = $_POST['Message From Web Dev Contact Form'];
*/
    $body = "First Name: $firstName\n Last Name: $lastName\n Email: $email\n Who Am I: $whoAreYou\n Message: $message";


    // name validations
    if(!$_POST['firstName']){
        $errFirstName = "Please Enter Your First Name";
    }
    if(!$_POST['lastName']){
        $errLastName = "Please Enter Your Last Name";
    }

    //email verification
    if(!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errEmail = "Please Enter Valid Email Address";
    }

    //message validation
    if(!$_POST['message']){
        $errMessage = "Please Enter A Message";
    }
    $result = "";
    //check if there is an error before submitting
    if(!$errFirstName && !$errLastName && !$errEmail && !$errMessage){
        if(mail($to, $subject, $body, $email)){
            $result = '<div class = "alert alert-success">Thank You! We will be in touch!</div>';
        }
        else{
            $result = '<div class = "alert alert-danger">Sorry, there was an error sending your message. Try again later.</div>';
        }

        $curr_data = file_get_contents("info.json");
        $php_data = json_decode($curr_data, true);
        $new_data = array(
            "first-name" => $_POST["firstName"],
            "last-name" => $_POST["lastName"],
            "email" => $_POST["email"],
            "id" => $_POST["whoAreYou"],
            "message" => $_POST["message"]
        );
        $php_data[] = $new_data;
        $final_data = json_encode($php_data);
        file_put_contents("info.json", $final_data);
    }


?>
</pre>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.ico" />


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>

    <title>About Us</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-xl navbar-expand-lg navbar-expand-md navbar-dark bg-custom navbar-fixed-top">
            <a class="navbar-brand invisible-sm" href="index.html"><img src="images/logo.png" alt="Web Dev Logo"></a>

            <a id="web-dev-text"class="invisible-m-l-xl"href="index.html">WebDev</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="about_us_V2.php">About Us</a>
                </li>
                  <a class="nav-link" href="schedule.html">Schedule</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="lectures.html">Lectures</a>
                </li>
              </ul>
            </div>
        </nav>
    </header>

    <div id="content">
        <h1 class="text-center" style="margin-bottom: 50px;">About Us</h1>
        <h2 class="text-center font-weight-bold">Our Mission Statement:</h2>
        <h3 class="text-center">To Educate and Further The Talents of the Next Generation</h3>
        <p class="text-center">Goal: To enlighten and further the passion of young programmers, to create the very best and original websites a company can offer</p>
        <hr/>

        <div class="container-fluid">
            <div id="officer-list" class="rounded">
                <div class="row">
                    <div class="col-md-3 col-sm-6 officer">
                        <h4 class="text-center officer-name">Krish Chaudhary</h4>
                        <p class="position text-center">President</p>
                        <div>
                            <img class="img-fluid rounded mx-auto d-block" src="images/krish-pfp.jpg">
                        </div>
                        <div class="text-center">
                            <a target="_blank"href="https://www.linkedin.com/in/krish-chaudhary-a96720191/">LinkedIn</a><span> or</span>
                            <a href = "mailto: krish.sfo.ca@gmail.com">Send Email</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 officer">
                        <h4 class="text-center officer-name">Proby Shandilya</h4>
                        <p class="position text-center">Vice President</p>
                        <div>
                            <img class="img-fluid rounded mx-auto d-block" src="images/proby-pfp.jpg">
                        </div>
                        <div class="text-center">
                            <a target="_blank"href="https://www.linkedin.com/in/proby-shandilya/">LinkedIn</a><span> or</span>
                            <a href = "mailto: probyshan@gmail.com">Send Email</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 officer">
                        <h4 class="text-center officer-name">Neelay Chakravarthy</h4>
                        <p class="position text-center">Secretary</p>
                        <div>
                            <img class="img-fluid rounded mx-auto d-block" src="images/neelay-pfp.jpg">
                        </div>
                        <div class="text-center">
                            <a target="_blank"href="https://www.linkedin.com/in/neelay-chakravarthy-2a2602191">LinkedIn</a><span> or</span>
                            <a href = "mailto: nkchakra2@gmail.com">Send Email</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 officer">
                        <h4 class="text-center officer-name">Arvind Ramachandran</h4>
                        <p class="position text-center">Treasurer</p>
                        <div>
                            <img class="img-fluid rounded mx-auto d-block" src="images/arvind-pfp.jpg">
                        </div>
                        <div class="text-center">
                            <a target="_blank"href="#">LinkedIn</a><span> or</span>
                            <a href = "mailto: arvind8964@gmail.com">Send Email</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr/>

            <h2 class="text-center font-weight-bold">Get In Touch!</h2>

            <div id="sign-up" class="rounded col-sm-10 offset-sm-1">
                <form role = "form" method = "post">
                    <div class="form-row">
                    <div class="col">
                      <label for="first-name">First Name</label>
                      <input type="text" class="form-control" placeholder="First name" id="first-name" name = "firstName">
                      <!-- <?php echo "<p class= 'text-danger'>$errFirstName</p>";?> -->
                    </div>
                    <div class="col">
                      <label for="last-name">Last Name</label>
                      <input type="text" class="form-control" placeholder="Last name" id="last-name" name = "lastName">
                      <!-- <?php echo "<p class= 'text-danger'>$errLastName</p>";?> -->
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name = "email"/>
                        <!-- <?php echo "<p class= 'text-danger'>$errEmail</p>";?> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Who Are You?</label>
                        <select class="form-control" id="exampleFormControlSelect1" name = "whoAreYou">
                          <option>Student</option>
                          <option>Parent</option>
                          <option>Company/Organization</option>
                          <option>School</option>
                          <option>Other</option>
                        </select>
                    <div class="form-group">
                        <label for="form-message">Message</label>
                        <textarea type="text" id="form-message" class="form-control" placeholder="Type Something!" rows="3" name = "message"></textarea>
                        <!-- <?php echo "<p class= 'text-danger'>$errMessage</p>";?> -->
                    </div>
                    <input type="submit" class="btn btn-success col-sm-12 offset-sm-0"/>
                    <div class="col-sm-12 offset-sm-0">
                        <?php echo $result; ?>
                    </div>
                </form>
            </div>

        </div>

    </div>

</body>
</html>
