<?php require 'includes/header.php';
?>


    <!-- fOOD sEARCH Section Starts Here -->
    <section class= "event-search text-centre">
      <div class="container">
        <h1>Event search</h1>
    <form action="event-search.php" method="POST">
      <input type="search" name="search" placeholder="Search for Events.." required>
      <input type= "submit" name="submit" value="Search" class="btn btn-primary">
    </form>
    </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <section class= "events-menu">
      <div class="container">
        <h2 class="text-centre text-white">Events</h2>
        <?php
        $sql2 = "SELECT * FROM events";
        $res2 = mysqli_query($conn, $sql2);
        $count2 = mysqli_num_rows($res2);

        if ($count2>0)
        {
          while ($row= mysqli_fetch_assoc($res2))
          {
            $title = $row['title'];
            $description = $row['description'];
            $datetime = $row['datetime'];
            //$images = $row['images[]'];
            ?>
            <div class="events-menu-box">
                  <div class="events-menu-img">
                    <img src="images/dance.jpg" alt="jewish" class="img-responsive img-curv">
                  </div>
                  <div class="events-menu-desc">
                    <h4><?php echo $title; ?></h4>
                    <p class= event-organiser><?php echo $description; ?></p>
                    <p class= event-datetime><?php echo $datetime; ?></p>
                    <br>
                    <form action="info.php" method="post">
                      <input type="hidden" name="event_id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="more_btn" class="btn btn-primary">More info</button>
                    </form>
                  </div>
                  </div>

                  <?php
        }
      }
      else {
        echo "Currently no Events";
      }
?>
            <div class="clearfix"></div>
              </div>
    </section>

    <!-- fOOD Menu Section Ends Here -->

    <section class= "social">
      <div class="container social text-centre">
        <ul>
        <li><a href=""><img src="https://img.icons8.com/fluent/48/000000/facebook.png"/></a></li>
        <li><a href=""><img src="https://img.icons8.com/color/48/000000/twitter--v2.png"/></a></li>
        <li><a href=""><img src="https://img.icons8.com/color/48/000000/instagram-new--v2.png"/></a></li>
        </ul>
    </div>
    </section>

    <section class= "footer">
      <div class="container text-centre">
        <p> All rights are reserved 2021. Designed By <a href="#">Brenda Kuekia</a></p>

    </div>
    </section>

    </body>
    </html>
