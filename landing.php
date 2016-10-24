<?php require("./phpdb/phpgeneralfun.php"); ?>
<!DOCTYPE HTML>
<html>
<head>

    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <base href="http://ec2-52-57-166-131.eu-central-1.compute.amazonaws.com/" >
    <!-- activate Menu -->
    <link rel="stylesheet" href="/slicknav/dist/slicknav.css">
    <link rel="stylesheet" href="/css/body.css" type="text/css">
    <link rel="stylesheet" href="/css/fonts.css" type="text/css">
    <script src="/jquery-2.1.4.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script src="/slicknav/dist/jquery.slicknav.js"></script>



    <script type="text/javascript">
        $(document).ready(function(){
            $('#menu').slicknav();
        });
    </script>




</head>
<body>
<!-- Menu -->
<ul id="menu">
    <li>Offers
        <ul>
            <li><a href="/staging/landing.php">HOME (The Taken King)</a></li>
            <li><a href="/staging/EXPANSION1.php">EXPANSION I Offer</a></li>
            <li><a href="/staging/EXPANSION2.php">EXPANSION II Offer</a></li>
        </ul>
    </li>
    <li>The Taken King Offer
        <ul>
            <li><a href="/staging/100.php">Buy 100 In-Game Credits</a></li>
            <li><a href="/staging/500.php">Buy 500 In-Game Credits</a></li>
            <li><a href="/staging/2000.php">Buy 2000 In-Game Credits</a></li>
        </ul>
    </li>
    <li>Destiny Competitions
        <ul>
            <li><a href="/staging/wine.php">WIN The Expansion Packs</a></li>
            <li><a href="/staging/wint.php">WIN Free T-Shirt</a></li>
        </ul>
    </li>
</ul>


<!-- 1st block /Destiny logo text overlay -->
<div class="block_1">
    <br>
    <br><br><br><br><br><br>
    <br>
</div>

<!-- 2nd block  -->
<div class="block_66" data-pfi-area="true" id="showmeee" style="<?php if ($_SERVER['HTTP_X_PFI_STATUS'] == 'PfiHybridSession') {echo "display:none";}else{echo "";}; ?>" >
    <br>
    <img src="http://www.deepspace.ucsb.edu/wp-content/uploads/2015/04/NASA-LOGO_1-on-white-background.png" class="banner" alt="Header"> <br>
    <a href="/staging/test2.php"><h2 style="color: deepskyblue">Available Now!</h2>
        <h2 style="color: deepskyblue">Click Here to Purchase</h2></a><br><br>

</div>


<!-- 3nd block  -->
<div class="block_2">
    <video class="video" width="100%"  poster="http://<?php echo $_SERVER['SERVER_NAME'];?>/staging/images/image1.jpg" controls >
        <source src="http://<?php echo $_SERVER['SERVER_NAME'];?>/staging/video/des1.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
</div>

    <br>
<br>
<br>
<br>




<div class="footer">
    <br>
    <img src="http://ridl.cfd.rit.edu/docs/posters/proposal%20posters/Logos%20and%20Images/NASA_Transparent.gif"  class="foot_logo" alt="Header"><br><br>
    <?php require("./phpdb/phpdebug.php"); ?>

</div>
<?php require("./phpdb/mainpage.php"); ?>

</body>
</html>