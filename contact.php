<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noydir, noodp">
    <meta name="description" content="I'm João Marques, a Multimedia Designer.">
      
    <meta name="keywords" content="Design, Multimedia, Coimbra, Web Design, Motion Design, Web, Motion, Editorial Design, Editorial, Branding">
    <meta name="author" content="João Marques 2017">
    <link rel="icon" href="assets/favicon.ico">
    <meta property="og:image" content="http://joaomarques.altervista.org/assets/thumbnail.png" />
    <meta property="og:title"  content="Get in Touch - João Marques" />
    <meta property="og:url"    content="http://joaomarques.altervista.org" />
    <meta property="og:type"   content="website" />  
    <meta name="twitter:card" content="João Marques — Multimedia Designer" />
    <meta name="twitter:site" content="@joaornmarques" />
    <meta name="twitter:creator" content="joaornmarques" />
    <link rel="canonical" href="http://joaomarques.altervista.org">  
      
    <title>Get in Touch - João Marques</title>

    <link href="resources/bootstrap.min.css" rel="stylesheet">
    <link href="style/main.css" rel="stylesheet">
    <link href="style/about.css" rel="stylesheet">
    <link href="style/contact.css" rel="stylesheet">  
      
    <link rel="stylesheet" href="resources/fa/css/font-awesome.min.css">  
    <link href="https://fonts.googleapis.com/css?family=Space+Mono:400,400i" rel="stylesheet">
    
      
    <?php 
        if(isset($_POST['submit'])){
        $to = "joaornmarques@gmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $subject = "Message to João Marques";
        $subject2 = "Copy of your message to João Marques";
        $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        header("location: contact.html");
        // You can also use header('Location: thank_you.php'); to redirect to another page.
        }
    ?>  
      
      
      
  </head>

  <body class="loading-black">
    <img class="right-logo logo-rotate" src="assets/logo.png"/>
    <nav class="navbar">
      <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.php" class="active">Get in Touch</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid" id="about">

      <div class="title">
        <h1>Feel free to contact me, anytime.</h1>
          <p class="lead">Send me a message or follow my social networking accounts... and why not both?</p>
      </div>
        
        
        <section>
        <a href="index.html"><img class="right-logo" src="assets/logo.png"/></a>
            
        <div class="text-container">
            
            <!-----------ROW 1--------------------->
            
            <div class="row">
                
                <div class="col-sm-3">
                </div>  
                
                <div class="col-sm-6">
                    <form id="cont" action="" method="post">
                        
                        <div class="col-sm-6 col--no-margin col--padding-right">    
                            <br><input type="text" name="name" placeholder="Name"><br>
                        </div>
                        <div class="col-sm-6 col--no-margin col--padding-left">      
                            <br><input type="text" name="email" placeholder="Email"><br>
                        </div>
                        <div class="col-sm-12 col--no-margin">     
                            <br><textarea rows="5" name="message" cols="30" placeholder="Your message here..."></textarea><br>
                        </div>
                        <input type="submit" name="submit" value="Submit">
                    </form>
                    
                    
                    
                    <!---------EDUCATION----------->
                    <h3 class="contact-header">Social Networks</h3>
                    <div class="contact-social-networks">
                    <div class="row">
                
                
                        <div class="col-sm-4">
                            <a class="portfolio__project" href="https://www.facebook.com/joaornmarques" target="_blank">
                            <img class="portfolio__logo-image portfolio__logo-image--cube" src="assets/landing/facebook_logo.svg"/>
                            <img class="portfolio__bottom-image" src="assets/landing/facebook-back.png"/>
                            </a>
                        </div>

                        <div class="col-sm-4">
                            <a class="portfolio__project" href="https://www.instagram.com/joaornmarques/" target="_blank">
                            <img class="portfolio__logo-image portfolio__logo-image--cube" src="assets/landing/instagram_logo.svg"/>
                            <img class="portfolio__bottom-image" src="assets/landing/instagram-back.png"/>
                            </a>
                        </div>
                        
                        <div class="col-sm-4">
                            <a class="portfolio__project" href="https://vimeo.com/joaonrmarques" target="_blank">
                            <img class="portfolio__logo-image portfolio__logo-image--cube" src="assets/landing/vimeo_logo.svg"/>
                            <img class="portfolio__bottom-image" src="assets/landing/vimeo-back.png"/>
                            </a>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                            <a class="portfolio__project" href="https://www.behance.net/joaorafaelmarques" target="_blank">
                            <img class="portfolio__logo-image portfolio__logo-image--cube" src="assets/landing/behance_logo.svg"/>
                            <img class="portfolio__bottom-image" src="assets/landing/behance-back.png"/>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="portfolio__project" href="https://www.linkedin.com/in/jo%C3%A3o-marques-90b97211b" target="_blank">
                            <img class="portfolio__logo-image portfolio__logo-image--cube" src="assets/landing/linkedin_logo.svg"/>
                            <img class="portfolio__bottom-image" src="assets/landing/linkedin-back.png"/>
                            </a>
                        </div>
                        
                    </div>
                    </div>
                    

                    
                   
                    
                </div>  
                
            </div>
            
        </div>    
        </section>
        
        
    <footer>
        <div class="footer__text hidden-xs">
            <p>by João Marques . 2017</p>
        </div>    
        <div class="footer__icons">
            <ul>
                <li><a target="_blank" href="https://www.facebook.com/joaornmarques"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://www.instagram.com/joaornmarques/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://vimeo.com/joaonrmarques"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://www.behance.net/joaorafaelmarques"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://www.linkedin.com/in/jo%C3%A3o-marques-90b97211b"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </footer>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="resources/bootstrap.min.js"></script>
    
    <script>
        setTimeout(function(){
            $('.title').addClass("title--animated");
        }, 100);
        setTimeout(function(){
            $('.text-container').addClass("text-container--animated");
        }, 400);
        $(window).load(function() {
            $('body').removeClass("loading-black").addClass('loaded');
            $('.logo-rotate').addClass("logo-rotate__loaded");  
            
            setTimeout(function(){
                $('.portfolio__logo-image').addClass("portfolio__logo-image--animated");
            }, 100);

            setTimeout(function(){
                $('.portfolio__bottom-image').addClass("portfolio__bottom-image--animated");
            }, 100);
        });  
    </script>  
  </body>
</html>
