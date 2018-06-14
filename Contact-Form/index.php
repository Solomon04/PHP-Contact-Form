<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Bowlby+One+SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Vidaloka' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style> 
        body {
            background-color: rgb(245,245,245);
        }
        h2 {
            font-family: 'Bowlby One SC';
        }
        label {
            font-family: "Vidaloka";
        }
        .spacer {
            margin-bottom: 3%;
        }
    </style> 
</head>
<body>
    <!-- navigation bar -->
    <?php
        include_once 'components/nav-bar.php'; 
    ?> 
    <!-- end of navigation -->

    <!-- Start of Content -->
    <div class="container text-center" >

        <!-- Title -->
        <h2> The Website </h2> 
        <small> Please Contact Us Today! We will respond to you within 24 hours or sooner. </small> 
        <!-- End Title -->


        <div class="spacer"> </div> 

        <!-- Contact Form -->
        <form action="send-email.php" method="POST" >
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" name="Name" id="Name" placeholder="Your Name"required>
            </div>
            <div class="form-group">
                <label for="Email">Email address</label>
                <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp" placeholder="Enter email"required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="Subject">Subject</label>
                <input type="text" class="form-control" name="Subject" id="Subject" placeholder="Enter subject" required>
            </div>
            <div class="form-group">
                <label for="Message"> Message</label>
                <textarea class="form-control" id="Message" name="Message" rows="3" required></textarea>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
        <!-- End Form -->

    </div> 
    <!-- End of Content -->
</body>
</html>