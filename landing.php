<?php require("./phpdb/phpgeneralfun.php"); ?>
<!DOCTYPE HTML>
<html>
<head>

    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <base href="http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/" >
    <!-- activate Menu -->
    <link rel="stylesheet" href="http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/slicknav/dist/slicknav.css">
    <link rel="stylesheet" href="http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/css/body.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script src="http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/slicknav/dist/jquery.slicknav.js"></script>



    <script type="text/javascript">
        $(document).ready(function(){
            $('#menu').slicknav();
        });
    </script>




</head>
<body>
<!-- Menu -->
<ul id="menu">
    <li>Further Offers
        <ul>
            <li><a href="/staging/landing.php">More Game Characters</a></li>
            <li><a href="/staging/EXPANSION1.php">Power Up's</a></li>
            <li><a href="/staging/EXPANSION2.php">MIsc</a></li>
        </ul>
    </li>
    <li>Character Specials
        <ul>
            <li><a href="/staging/100.php">Crash Bandicoot Armour £5.00</a></li>
            <li><a href="/staging/500.php">Mario Mushroom £5.00</a></li>
            <li><a href="/staging/2000.php">SpaceMan Space Boots £5.00</a></li>
        </ul>
    </li>
</ul>


<!-- 1st block /Destiny logo text overlay -->
<div class="block_1">
    <h1>Davids Emporium Of Game Characters</h1>
</div>

<div class="block_1" id="success" style="display: none;">Success!!!!!!</div>
<img id="halfway" src="http://i.imgur.com/V9NFmT5.gif" class="banner" style="display: none;">
<div class="block_1" id="halfway" style="display: none;">Almost Complete</div>

<!-- 2nd block  -->
<div class="block_66" data-pfi-area="true" id="showmeee" style="<?php if ($_SERVER['HTTP_X_PFI_STATUS'] == 'PfiHybridSession') {echo "display:none";}else{echo "";}; ?>" >
    <br>
    <img src="http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/images/generic_wallpaper_title_by_mod_a_holic-d642ypq.png" class="banner" alt="Header"> <br>
    Today's Specials
        <h2 style="color: white;font-family: 'Raleway', sans-serif;font-weight: 5000;">Buy Your Game Characters and Upgrades Below</h2></a><br><br>
</div>

<br>


<div class="block_66" data-pfi-service-id="2" data-pfi-button="true" data-pfi-button-id="purchase-main01" data-pfi-reference="<?php echo $out1;?>"  id="showmeee" style="<?php if ($_SERVER['HTTP_X_PFI_STATUS'] == 'PfiHybridSession') {echo "display:none";}else{echo "";}; ?>" >
    <br>
    <img src="http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/images/200_s.gif" class="banner02" alt="Header"> <br>
    Crash Bandicoot
    <h2 style="color: deepskyblue;font-family: 'Raleway', sans-serif;font-weight: 100;">Buy Crash Bandicoot charcater for £10.00 - Click Here!</h2></a><br><br>
</div>

<br>


<div class="block_66" data-pfi-service-id="4" data-pfi-button="true" data-pfi-button-id="purchase-main02" data-pfi-reference="<?php echo $out2;?>"  id="showmeee" style="<?php if ($_SERVER['HTTP_X_PFI_STATUS'] == 'PfiHybridSession') {echo "display:none";}else{echo "";}; ?>" >
    <br>
    <img src="http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/images/retro-gaming-3d-3.gif" class="banner02" alt="Header"> <br>
    Retro Spaceman
    <h2 style="color: deepskyblue;font-family: 'Raleway', sans-serif;font-weight: 100;">Subscribe to SpaceMan Upgrades for £3.00 Per Day - Click Here!</h2></a><br><br>
</div>

<br>


<div class="block_66" data-pfi-service-id="5" data-pfi-button="true" data-pfi-button-id="purchase-main03" data-pfi-reference="<?php echo $out3;?>"  id="showmeee" style="<?php if ($_SERVER['HTTP_X_PFI_STATUS'] == 'PfiHybridSession') {echo "display:none";}else{echo "";}; ?>" >
    <br>
    <img src="http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/images/ryeouokmadri0gex4zvu.gif" class="banner02" alt="Header"> <br>
    Mario
    <h2 style="color: deepskyblue;font-family: 'Raleway', sans-serif;font-weight: 100;">Enter Competition to win Mario Upgrade for £5.00 - Click Here!</h2></a><br><br>
</div>


<div class="footer">
    <br>
    DEBUG:
    <?php require("./phpdb/phpdebug.php"); ?>

</div>

</body>
<script>
    function success() {
        document.getElementById('success').style.display = '';
        $(function(){
            $("body").fadeOut(4200,function(){
                window.location.href = "http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/success.php"
            })
        });
    }



</script>

<script>
    function success() {
        document.getElementById('success').style.display = '';
        document.getElementById('halfway').style.display = 'none';
        $(function(){
            $("body").fadeOut(4200,function(){
                window.location.href = "http://ec2-52-57-166-45.eu-central-1.compute.amazonaws.com/success.php"
            })
        });
    }

</script>
<script>
    function halfway() {
        document.getElementById('halfway').style.display = '';

    }

</script>

</html>