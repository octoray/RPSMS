<?php require("./phpdb/phpgeneralfun.php"); ?>
<!DOCTYPE HTML>
<html>
<head>

    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <base href="http://ec2-52-57-166-131.eu-central-1.compute.amazonaws.com/" >
    <!-- activate Menu -->
    <link rel="stylesheet" href="http://ec2-52-57-166-131.eu-central-1.compute.amazonaws.com/slicknav/dist/slicknav.css">
    <link rel="stylesheet" href="http://ec2-52-57-166-131.eu-central-1.compute.amazonaws.com/css/body.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://ec2-52-57-166-131.eu-central-1.compute.amazonaws.com/css/fonts.css" type="text/css">
    <script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script src="http://ec2-52-57-166-131.eu-central-1.compute.amazonaws.com/slicknav/dist/jquery.slicknav.js"></script>



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

</div>

<!-- 2nd block  -->
<div class="block_66" data-pfi-service-id="2" data-pfi-button="true" data-pfi-button-id="purchase-main01" data-pfi-reference="dwpurchase01" data-pfi-area="true" id="showmeee" style="<?php if ($_SERVER['HTTP_X_PFI_STATUS'] == 'PfiHybridSession') {echo "display:none";}else{echo "";}; ?>" >
    <br>
    <img src="http://orig11.deviantart.net/e2f6/f/2013/124/5/2/generic_wallpaper_title_by_mod_a_holic-d642ypq.png" class="banner" alt="Header"> <br>
    Today's Special
        <h2 style="color: deepskyblue">Would You Like To Buy A Space Shuttle ?? - Click Here to Purchase One</h2></a><br><br>
</div>

<br>
<br>

<div class="block_66" data-pfi-service-id="2" data-pfi-button="true" data-pfi-button-id="purchase-main01" data-pfi-reference="dwpurchase01" data-pfi-area="true" id="showmeee" style="<?php if ($_SERVER['HTTP_X_PFI_STATUS'] == 'PfiHybridSession') {echo "display:none";}else{echo "";}; ?>" >
    <br>
    <img src="https://media0.giphy.com/media/PU3xIW1TaevoA/200_s.gif" class="banner02" alt="Header"> <br>
    Today's Special
        <h2 style="color: deepskyblue">Would You Like To xxxxxx? - Click Here to Purchase One</h2></a><br><br>
</div>


<div class="footer">
    <br>
    <img src="http://ridl.cfd.rit.edu/docs/posters/proposal%20posters/Logos%20and%20Images/NASA_Transparent.gif"  class="foot_logo" alt="Header"><br><br>
    <?php require("./phpdb/phpdebug.php"); ?>

</div>

</body>
</html>