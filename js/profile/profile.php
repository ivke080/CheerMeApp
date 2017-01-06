<?php
    require("../../connect.php");
    session_start();
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $query = "SELECT rating FROM users WHERE username = '$user'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
    
        $rating = $row[0];
    
        if ($rating < 20)
            $image = "rate1.png";
        else if ($rating < 40)
            $image = "rate2.png";
        else if ($rating < 60)
            $image = "rate3.png";
        else if ($rating < 80)
            $image = "rate4.png";
        else
            $image = "rate5.png";
    }
    else {
        $user = "Šini login";
        $image = "rate1.png";
        $rating = 0;
    }
?>
<style>
    .hideProfile { display: none; }
</style>

<div class="test">
        <div class="xbox">
            <div class="levo">
            </div>
            <div class="centar">
                <img class="rotate" src="<?php echo '/img/EMOdzi/'.$image;?>">
                <div class="tekst">
                    <?php echo $user; ?>
                </div>
            </div>
            <div class="desno">
            </div>
            <div class="mis">
                <div class="tekst3">
                    <?php echo $rating; ?><span style='font-size:90px'>%</span>
                </div>
            </div>
        </div>
        
   </div>
