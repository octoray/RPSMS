<?php require("./phpdb/phpgeneralfun.php");?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name=viewport content="width=device-width">
    <meta charset=UTF-8>
    <link rel=stylesheet href=http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/slicknav/dist/slicknav.css>
    <link rel=stylesheet href=http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/css/body2.css type=text/css>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel=stylesheet type=text/css>
    <script src=http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/jquery-3.1.1.js></script>
    <script src=http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/mod.js></script>
    <script src=http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/slicknav/dist/jquery.slicknav.min.js></script>
    <script type=text/javascript>$(document).ready(function(){$("#menu").slicknav()});</script>
</head>
<body>
<ul id=menu>
    <li>Further Offers
        <ul>
            <li><a href=/other.php>More Game Characters</a></li>
            <li><a href=/other.php>Power Up's</a></li>
            <li><a href=/other.php>MIsc</a></li>
        </ul>
    </li>
    <li>Character Specials
        <ul>
            <li><a href=/other.php>Crash Bandicoot Armour £5.00</a></li>
            <li><a href=/other.php>Mario Mushroom £5.00</a></li>
            <li><a href=/other.php>SpaceMan Space Boots £5.00</a></li>
        </ul>
    </li>
</ul>
<div class=block_1>
    <h1>Davids Emporium Of Game Characters</h1>
    <h2>
        <?php if(empty($_SERVER['HTTP_X_PFI_ALIAS'])){echo "Hello New User";;}else{echo "Welcome Back ".$_SERVER['HTTP_X_PFI_ALIAS'];}?>
    </h2>
</div>
<div class=block_1 id=success style=display:none>Success. You've been Billed :) !!!!!!</div>
<img id=halfway src=https://s-media-cache-ak0.pinimg.com/originals/34/cc/62/34cc62d1df1c8328f56ae7a7acf2e83a.gif class=bannerload style="display:none;><div class="block_1" id=halfway style="display: none;">Almost Complete</div>
<div class=block_66 onclick="location.href='#top'" data-pfi-area=true id=showmeee style=<?php if($_SERVER['HTTP_X_PFI_STATUS']=='PfiHybridSession'){echo "display:none";}else{echo "";};?>>
    <br>
    <img src=http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/images/generic_wallpaper_title_by_mod_a_holic-d642ypq.png class=banner alt=Header> <br>
    <h2 style="color:white;font-family:'Raleway',sans-serif;font-weight:5000">Buy Your Game Characters and Upgrades Below</h2></a><br>Today's Specials<br>
</div>
<br>
<div class=block_66 onclick="location.href='#top'" data-pfi-service-id=2 data-pfi-button=true data-pfi-button-id=purchase-main01 data-pfi-reference=<?php echo $out1;?> id=showmeee style=<?php if($_SERVER['HTTP_X_PFI_STATUS']=='PfiHybridSession'){echo "display:none";}else{echo "";};?>>
    <br>
    <img src=http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/images/giphy.gif class=banner02 alt=Header> <br>
    Crash Bandicoot
    <h2 style="color:deepskyblue;font-family:'Raleway',sans-serif;font-weight:100">Buy Crash Bandicoot charcater for £10.00 - Click Here!</h2></a><br><br>
</div>
<br>
<div class=block_66 onclick="location.href='#top'" data-pfi-service-id=4 data-pfi-button=true data-pfi-button-id=purchase-main02 data-pfi-reference=<?php echo $out2;?> id=showmeee style=<?php if($_SERVER['HTTP_X_PFI_STATUS']=='PfiHybridSession'){echo "display:none";}else{echo "";};?>>
    <br>
    <img src=http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/images/retro-gaming-3d-3.gif class=banner02 alt=Header> <br>
    Retro Spaceman
    <h2 style="color:deepskyblue;font-family:'Raleway',sans-serif;font-weight:100">Subscribe to SpaceMan Upgrades for £3.00 Per Day - Click Here!</h2></a><br><br>
</div>
<br>
<div class=block_66 data-pfi-service-id=5 data-pfi-button=true data-pfi-button-id=purchase-main03 data-pfi-reference=<?php echo $out3;?> id=showmeee style=<?php if($_SERVER['HTTP_X_PFI_STATUS']=='PfiHybridSession'){echo "display:none";}else{echo "";};?>>
    <br>
    <img src=http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/images/ryeouokmadri0gex4zvu.gif class=banner02 alt=Header> <br>
    Mario: What Was Mario's Sidekick Name?
</div><br><br>
<span style=display:inline onclick="location.href='#top'" class=comp data-pfi-service-id=5 data-pfi-button=true data-pfi-button-id=purchase-main03 data-pfi-reference=<?php echo $out3;?>>
<button class=myButton onclick="location.href='#top'">Toad</button>
<button class=myButton onclick="location.href='#top'">Luigi</button>
<button class=myButton onclick="location.href='#top'">Bowser</button>
</span>
<br>
<br>
<div class=block_66f style=word-wrap:break-word>
    <br><p>
        DEBUG:
        <?php require("./phpdb/phpdebug.php");?>
    </p>
</div>
</body>
<script>function success(){document.getElementById("success").style.display="";document.getElementById("halfway").style.display="none";$(function(){$("body").fadeOut(4200,function(){window.location.href="http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/success.php"})})}</script>
<script>function halfway(){document.getElementById("halfway").style.display=""};</script>
</html>