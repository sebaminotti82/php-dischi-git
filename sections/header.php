<header>

            <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_Green.png" alt="logo_page">
     
            <div class="selected">
                  <select name="cerca" id="cerca">
                      <?php for($i = 0; $i < count($genre);$i++){ ?>
                        <option value="gen"><?php echo $genre[$i] ?></option>
                      <?php } ?>
                  </select>
            </div>

</header>