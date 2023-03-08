<html>
    <head>
        <title> Lab1 </title>
        <link rel="stylesheet" href="/Lab1/Views/style.css">

    </head>

    <body>
    <div id="error">
        <?php echo $error ?? NULL ?>
        </div>
        <form id="contact_form" action="/Lab1/Views/welcom.php" method="POST" enctype="multipart/form-data">
        <h1> Contact Form </h1>
            <div class="row">
                <label class="required" for="name">Your name:</label><br />
                <input id="name" class="input"  name="name" type="text"  size="30" placeholder="Enter your Name"  /><br/>

            </div>
            <div class="row">
                <label class="required" for="email">Your email:</label><br />
                <input id="email" class="input" name="email" type="text" size="30" placeholder="Enter your Email"  /><br/>

            </div>
            <div class="row">
                <label class="required" for="message">Your message:</label><br />
                <textarea id="message" class="input" name="message" rows="7" cols="30" placeholder="Enter your Message" ></textarea><br/>

            </div>

            <div class="col">
                <input id="submit" name="submit" type="submit" value="Send email"class="submit"/>
                <input id="clear" name="clear" type="reset" value="clear form" class="clear" />
            </div>

        </form>
    </body>

</html>