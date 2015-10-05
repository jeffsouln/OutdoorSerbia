		  <div class="content_item">
      <h1><?php echo $data1->title ?></a></h1>
      <?php foreach ($data1->category as $value) {
        echo "<div class='category'><a href='main/blog/{$value}'><h4>{$value}</h4></a></div>";
      } ?>
      <h4><?php echo $data1->time ?></h4>
      <div class="content_text_left">
          <div class=" block-ellipsis">
              <p><?php echo $data1->content ?></p>
          </div>
      </div>
        </div><!--close content_item-->
        <div class="content_image_right">
      <img style=" border: 10px solid #1D1D1D;" alt="image" src="images/stairwell.jpg" /></a>
    </div><!--close content_image-->
    <br style="clear:both"/>     
      </div><!--close content-->    

      <div class="sidebar_container">  		  
		    <div class="sidebar">
          <div class="sidebar_item">
            <h1><?php echo $data2->username ?></a></h2><br><br>
             <h3>Pridružio se: <br> <?php echo $data2->joined ?></h4>
			       <h3>Poslednje logovanje: <?php echo $data2->last_login ?></h4>
           </div><!--close sidebar_item--> 
         </div><!--close sidebar-->  
      </div><!--close sidebar_container-->
