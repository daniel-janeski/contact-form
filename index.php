<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Contact Us</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- Custom Edits + IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">

            <form class="form-contact">
                
                <h2 class="form-contact-heading text-center">Contact Us</h2>

                <div class="form-group">
                    <label for="inputName">Your Name *</label>
                    <input type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
                </div>
                
                <div class="form-group">
                    <label for="inputEmail">E-mail *</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="example@mail.com" required>
                </div>
                
                <div class="form-group">
                    <label for="inputSelect">Subject</label>
                    <select id="inputSelect" class="form-control">
                        <option>General</option>
                        <option>Feedback</option>
                        <option>Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="inputTextarea">Your Comments *</label>
                    <textarea cols="40" rows="3" id="comments" class="form-control"></textarea>
                </div>
                
                <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
            </form>

        </div> <!-- /container -->


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
