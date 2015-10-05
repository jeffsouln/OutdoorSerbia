      <div class="content_item">
        <h2>Log in</h2>
        <p><a href="register">Registruj se!</a></p>
        <p style="color:red" ><?php if (isset($_SESSION['errorLogin'])) { echo "Neispravni podaci!";} session_destroy(); ?></p>
        <form class="form" method="post" action="logingin.php">
          <label>Email:</label><br><input type="text" name="tb_email"><br>
          <label>Password:</label><br><input type="text" name="tb_password"><br>
          <input id="btn" type="submit" value="Uloguj se" name="btn_submit">
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