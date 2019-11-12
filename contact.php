<!--https://www.youtube.com/watch?v=4q0gYjAVonI This video tutorial by mmtuts on Youtube was used to help create the PHP contact form. -->

<?php
if(isset($_POST['submit'])){
if (empty($_POST['name'])){
    echo "Your fullname is required";
}

if (empty($_POST['email'])){
    echo "Your email is required";
}

if (empty($_POST['subject'])){
    echo "The subject is required";
}
if (empty($_POST['message'])){
    echo "The message is required";
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="portfolio.css">
 <link rel="shortcut icon" type="image/png" href="images/favicon.png">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact - Aleena Aqeel - web developer</title>
<meta name="language" content="en">
<meta name="keywords" content="name,email,subject,message,">
<meta name="description" content="Qot a question? Then please contact me using the form below">


<style>
form {
  display: flex;
  justify-content: center;
  flex-direction: column;
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  padding-top: 30px;
  }
  
input{
height: 30px;
font-size: 18px;
font-family: Arial, Helvetica, sans-serif;
padding-left:10px;
padding-right:20px;
padding-top:12px;
margin-bottom:20px;
border: solid 1px #F5A40C;
border-radius: 4px;
  }
  
  
textarea {
max-width: 400px;
  height: 170px;
  font-size:18px;
  font-family: Arial, Helvetica, sans-serif;
 padding-left:10px;
  padding-right:20px;
  padding-top:12px;
  margin-bottom:20px;
  overflow:hidden;
  border: solid 1px #F5A40C;;
  border-radius: 4px;
}
  
    .submit_button{
      display: block;
      margin: auto;
      width:90px;
      height: 40px;
      background:#F5A40C;   
      border-color:#F5A40C;
    }
  
    .submit_button:hover{\

      background: #0A5CF5;
    }
  
  h2{
    text-align:center;
  font-size: 1.3em;
  
  }

  @media screen and (max-width:480px) {

.logo img{
width: 150px;
}
.navbar ul{
display: flex; 
justify-content: space-between; 
}


.navbar ul li a{
font-size: 18px;

}
}
</style>
</head>
<body>
<header>
    <div class="navbar">
      <div class="logo">
      

     
              <a href="homepage.html"><img src="images/logo.png" alt="blue and orange aleena aqeel logo"></a>
        
    </div>
        <ul>
            <li><a href="index.html">Homepage </a></li>
            <li><a href="portfolio.html">About me </a></li>
            <li><a href="cv.html">My CV </a></li>
            
            <li><a href="contact.php">Contact</a></li>
       </ul>



</div>

              </header>
              <main>





            <div class="contact_form">
<h2> Got a question to ask? Then please, don't hesitate to get in touch with me. You can contact me by filling in the super simple form below:</h2>
<div class="center">
<h1>Contact Me</h1> 
</div>
<form class="contact" action="contact_form.php" method="post">


     
        
<input type="text" name="name" placeholder="Enter your fullname" >
            
         
<input type="text" name="email" placeholder="Enter your email"  >
                  
         
<input type="text" name="subject" placeholder="Subject" >
            
               
            
            <textarea placeholder="Enter your message here"  name="message" width="48" height="48"></textarea> 
            <br>
            
            <input type="submit"  name="submit" class="submit_button" value="Submit">
          </form>

            </div>

            


        </main>

        <footer>
                <div class="footer">
<p>BY:ALEENA AQEEL<p>
</div>
              </footer>
          </body>
          </html>