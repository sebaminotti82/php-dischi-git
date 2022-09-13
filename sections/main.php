<main>
    <div id="container_main">
          
          <?php  for($i = 0; $i < count($musicDb); $i++){  ?>
                 
               <div class="card">
                   <h2>Music-Card</h2>
                  <div class="container_photo">
                       <img src="<?php echo $musicDb[$i]['poster'] ?>" alt="">
                  </div>
                    <ul>
                        <li> <b>Album:</b> <span> <?php echo $musicDb[$i]['album'] ?></span></li>
                        <li> <b>Artista:</b> <span> <?php echo $musicDb[$i]['artista'] ?></span></li>
                        <li> <b>Anno:</b> <span> <?php echo $musicDb[$i]['anno'] ?></span></li>
                        <li> <b>Genere:</b> <span> <?php echo $musicDb[$i]['genere'] ?></span></li>
                    </ul>
               </div>

          <?php  }  ?>

    </div>
</main>