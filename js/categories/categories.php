<?php
    require("../../connect.php");
    session_start();
    $query="SELECT id,name FROM category";
    $result=mysqli_query($conn,$query);
?>
<form action='category_post.php' method='post'>
    <div id="row">
        <div col-xs-12>
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <button type='submit' class="xbox" name="btn" value="<?php echo $row['id']; ?>">
                <div class="levo">
                </div>
                <div class="centar">
                    <img class="rotate" src="/img/categories/<?php echo $row['name']?>.png"></img>
                    <div class="tekst">
                        <?php echo $row["name"]?>
                    </div>
                </div>
                <div class="desno">
                </div>
            </button>
            <?php
            }
            ?>
        <div>
    </div>
</form>