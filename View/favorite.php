

<h2>Favorite</h2>
<hr>
  <div class="bannersong">
    <?php
    $sql = "SELECT * FROM song WHERE favorite = 1";
    $result = $mysqli->query($sql);

    if($result->num_rows  > 0){
      while($row = $result->fetch_assoc()) {
        echo'
        <div class="hero">
          <iframe width="100%" height="190" scrolling="no" frameborder="no" src="' .  $row['track']. '"></iframe>

          <form action="includes/outFavorite.php?from=favorite" method="post">
            <input type="hidden" name="id" value="'.  $row['id_song']. '">
            <input type="submit" id="button" value="Delete" name="button">
          </form>
        </div>
        ';
        }
    }
        ?>



      </div>

      <hr>
</body>
