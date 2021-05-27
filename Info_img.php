<?php
  $imagefilepath="admin/images/InformationImage/";
  $query="SELECT * FROM Infodb";
  $result=mysqli_query($conn,$query);
  while ($row=mysqli_fetch_assoc($result)) {
    $img_name = $row['img_name'];
    $img_date = $row['img_date'];
    $img		  = $row['img'];
 ?>

        <div class="single-portfolio col-sm-4 all vector">
          <div class="relative">
            <div class="thumb">
              <div class="overlay overlay-bg"></div>
               <img class="image img-fluid" src=<?php echo $imagefilepath.$img; ?> alt="">
            </div>
        <a href=<?php echo $imagefilepath.$img; ?> class="img-pop-up">
                    <div class="middle">
                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                    </div>
        </a>
          </div>
        <div class="p-inner">
        <h4><?php echo $img_name ?></h4>
        <div class="cat"><?php echo $img_date; ?></div>
         </div>
        </div>

<?php
        }
 ?>
