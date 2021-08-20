<?php
error_reporting(0);
session_start();
if($_SESSION['uname'] == null)
{
  session_destroy();
  echo "
  <script>
  window.open('http://localhost/projects/login/index.php', '_self');
  </script>
  ";
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Side Sliding Menu CSS</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html><html class="menu">
<html>

<head>

<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Side Menu</title>

<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


  
 



</head>
<body>

<div class="top1">
 <center> <h1><u>Welcome <?php echo $_SESSION['uname']; ?></u></h1> </center>
</div>

<div class="images">
<img src="inception.jpg">
<img src="inception2.jpg"	>
</div>
</div><nav class="main-menu">


  
 <div>
    <a class="logo" href="#">
    </a> 
  </div> 
<div class="settings"></div>
<div class="scrollbar" id="style-1">
      
<ul>
  
<li>                                   
<a href="index.php">
<i class="fa fa-sign-out"></i>
<span class="nav-text">Logout</span>
</a>
</li>   
   


    
<li>                                 
<a href="check.php">
<i class="fa fa-code fa-lg"></i>
<span class="nav-text">Shell</span>
</a>
</li>   
 

 
<li>
<a href="#">
<i class="fa fa-heart-o fa-lg"></i>
                        
<span class="share"> 


<div class="addthis_default_style addthis_32x32_style">
  
<div style="position:absolute;
margin-left: 56px;top:3px;"> 
   
  

  
 <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" class="share-popup"><img src="http://icons.iconarchive.com/icons/danleech/simple/512/facebook-icon.png" width="30px" height="30px"></a>

   <a href="https://twitter.com/share" target="_blank" class="share-popup"><img src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/512/Twitter_alt.png" width="30px" height="30px"></a>

   


<a href="https://plusone.google.com/_/+1/confirm?hl=en&url=_URL_&title=_TITLE_
" target="_blank" class="share-popup"><img src="http://icons.iconarchive.com/icons/danleech/simple/512/google-plus-icon.png" width="30px" height="30px"></a>   
  
  
  
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4ff17589278d8b3a"></script>
                       
                            
                              
                            
                          
                        </span>
                        <span class="twitter"></span>
                        <span class="google"></span>
                        

</li>
                            

  
  
</li>
<li class="darkerlishadow">
<a href="news.php">
<i class="fa fa-clock-o fa-lg"></i>
<span class="nav-text">News</span>
</a>
</li>
  
<li class="darkerli">
<a href="technology.php">
<i class="fa fa-desktop fa-lg"></i>
<span class="nav-text">Technology</span>
</a>
</li>

<li class="darkerli">                                   
<a href="admin.php">
<i class="fa fa-shield"></i>
<span class="nav-text">Admin</span>
</a>
</li>

<li class="darkerli">
<a href="travel.php">
<i class="fa fa-plane fa-lg"></i>
<span class="nav-text">Travel</span>
</a>
</li>
  
<li class="darkerli">
<a href="shopping.php">
<i class="fa fa-shopping-cart"></i>
 <span class="nav-text">Shopping</span>
</a>
</li>
 
  
<li class="darkerli">
<a href="fnm.php">
<i class="fa fa-microphone fa-lg"></i>
<span class="nav-text">Film & Music</span>
</a>
</li>

<li class="darkerli">
<a href="webtools.php">
<i class="fa fa-flask fa-lg"></i>
<span class="nav-text">Web Tools</span>
</a>
</li>
  
<li class="darkerli">
<a href="and.php">
<i class="fa fa-picture-o fa-lg"></i>
<span class="nav-text">Art & Design</span>
</a>
</li>

<li class="darkerli">
<a href="magazines.php">
<i class="fa fa-align-left fa-lg"></i>
<span class="nav-text">Magazines
</span>
</a>
</li>
  
<li class="darkerli">
<a href="games.php">
<i class="fa fa-gamepad fa-lg"></i>
<span class="nav-text">Games</span>
</a>
</li>
  
<li class="darkerli">
<a href="lns.php">
<i class="fa fa-glass fa-lg"></i>
<span class="nav-text">Life & Style
</span>
</a>
</li>
  

 
  
</ul>

  
<li>
                                   
<a href="help.php">
<i class="fa fa-question-circle fa-lg"></i>
<span class="nav-text">Help</span>
</a>
</li>   
    
  
<ul class="logout">
<li>
                   <a href="blog.php">
                         <i class="fa fa-lightbulb-o fa-lg"></i>
                        <span class="nav-text">
                            BLOG 
                        </span>
                        
                    </a>
</li>  
</ul>
        </nav>
        
  

			
  
  
</body>
</html>
<!-- partial -->
  
</body>
</html>
