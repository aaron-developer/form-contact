<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact us form using php mysql</title>

    </head>
<body>

<div class="formulario">
<center><br>
<h5><?php require 'date.php' ?></h5>
</center>
<div class="container">
    <form action="form-process.php" method="POST">
        <div class="form-group">
            <label for="firstname" id="letters"><i class="fa fa-user"></i> Firstname</label> <br>
            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Write Here ;)" required>
        </div>
        <div class="form-group">
            <label for="lastname" id="letters"><i class="fa fa-user"></i> Lastname</label><br>
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Write Here ;)" required>
        </div>
        <div class="form-group">
            <label for="phone"  id="letters"><i class="fa fa-phone"></i> Phone</label><br>
            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Write Here ;)" required>
        </div>
        <div class="form-group">
            <label for="email" id="letters"><i class="fa fa-envelope"></i> Email</label><br>
            <input type="email" name="email" id="email" class="form-control" placeholder="Write Here ;)" required>
        </div>
        <div class="form-group">
            <label for="message"  id="letters"><i class="fa fa-send"></i> Message</label><br>
            <textarea type="text" name="message" id="message" class="form-control" placeholder="Write Here ;)" required> </textarea>
        </div>
        <div class="form-group"> <br><br>
   <center>
   <button class="btn btn-success" type="submit">Submit</button>
    <button class="btn btn-danger" type="reset">Reset</button>
   </center>
</div>
</form>
</div>
</div>

<article>

    ¡Subscribe for my channel, thanks you hack!
    <h6>Welcome to my website is pleasure that you subscribe to my channel ...
    <br><br> Look my project in github and look my others projects .  
    <a href="http://" target="_blank" rel="noopener noreferrer"> <i class="fa fa-github"></i></a>
    </h6>
    <img src="zero.png" alt="zero" id="zero">
</article>


</body>

</html>

