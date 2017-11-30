



<hr>
  <div class="bannersong">
    <?php
    $sql = "SELECT * FROM song";
    $result = $mysqli->query($sql);

    if($result->num_rows  > 0){
      while($row = $result->fetch_assoc()) {
        echo'
        <div class="hero">
          <iframe width="100%" height="190" scrolling="no" id="frame" frameborder="no" src="' .  $row['track']. '"></iframe>';
          if ($row['favorite'] == 0) {
            echo '

            <form action="includes/toFavorite.php?from=article" method="post">
              <input type="hidden" name="id" value="' .  $row['id_song']. '">
              <input type="submit" id="noster" value="" name="button">
            </form>';
          }
          if ($row['favorite'] == 1) {
            echo '
            <form action="includes/outFavorite.php?from=article" method="post">
              <input type="hidden" name="id" value="'.  $row['id_song']. '">
              <input type="submit" id="welster" value="" name="button">
            </form>';
          }

          echo '
        </div>
        ';
        }
    }
        ?>


      </div>

      <hr>
</body>
