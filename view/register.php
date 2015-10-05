      <div class="content_item">
        <h2>Registracija</h2>
        <p>Pažljivo popunite sva polja tačnim podacima.</p>
        <p>Nakon slanja podataka dobićete mail na vašu adresu u konme su uputstva za validaciju podataka i time će registracija biti završena.</p>
        <p style="color:red" ><?php if (isset($_SESSION['errors'])) {foreach ($_SESSION['errors'] as $value) { echo $value."<br>";}} ?></p>
        <form class="form" method="post" action="registration.php">
          <label>Ime:</label><br><input type="text" name="tb_fname" id="name"><br>
          Prezime:<br><input type="text" name="tb_lname"><br>
          Username:<br><input type="text" name="tb_username"><br>
          Password:<br><input type="text" name="tb_password"><br>
          Email:<br><input type="text" name="tb_email" id="email"><br>
          <input id="btn" type="submit" value="Registruj se" name="btn_submit">
        </form>
      </div><!--close content_item-->
        <br style="clear:both"/> 
      </div><!--close content-->    


      <div class="sidebar_container">  
      <?php foreach ($data1 as $news) { ?>      
        <div class="sidebar">
          <div class="sidebar_item">
            <h2><a href="/article/main/<?php echo $news->category[0] ?>/<?php echo $news->news_id ?>"><?php echo $news->title ?></a></h2>
      <h4><?php echo $news->time ?></h4>
            <p><?php echo $news->content ?></p>
          <a href="/article/main/<?php echo $news->category[0] ?>/<?php echo $news->news_id ?>">Read more</a>
           </div><!--close sidebar_item--> 
         </div><!--close sidebar-->       
      <?php } ?>
      </div><!--close sidebar_container-->
