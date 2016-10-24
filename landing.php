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
    <script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
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
            <li><a href="/staging/landing.php">Rockets 1970's</a></li>
            <li><a href="/staging/EXPANSION1.php">Rockets 1980's</a></li>
            <li><a href="/staging/EXPANSION2.php">Rockets 1990's</a></li>
        </ul>
    </li>
    <li>1970's Specials
        <ul>
            <li><a href="/staging/100.php">Helmets 1970's</a></li>
            <li><a href="/staging/500.php">Space Suits 1970's</a></li>
            <li><a href="/staging/2000.php">Space Boots 1970's</a></li>
        </ul>
    </li>
    <li>Other
        <ul>
            <li><a href="/staging/wine.php">Jet Pack</a></li>
            <li><a href="/staging/wint.php">UFO Misc Parts</a></li>
        </ul>
    </li>
</ul>


<!-- 1st block /Destiny logo text overlay -->
<div class="block_1">
    <br>

    <br>
</div>

<!-- 2nd block  -->
<div class="block_66" data-pfi-button="true" data-pfi-button-id="purchase-main01" data-pfi-reference="dwpurchase01" id="showmeee" style="<?php if ($_SERVER['HTTP_X_PFI_STATUS'] == 'PfiHybridSession') {echo "display:none";}else{echo "";}; ?>" >
    <br>
    <img src="http://www.deepspace.ucsb.edu/wp-content/uploads/2015/04/NASA-LOGO_1-on-white-background.png" class="banner" alt="Header"> <br>
    Buy A Space Shuttle Now
        <h2 style="color: deepskyblue">Buy A Space Shuttle Now - Click Here to Purchase for £4.50</h2></a><br><br>
</div>

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