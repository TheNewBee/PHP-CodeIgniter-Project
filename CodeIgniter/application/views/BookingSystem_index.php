<div class="container">

  <div class="row row-offcanvas row-offcanvas-right">

    <div class="col-xs-12 col-sm-9">
      <p class="pull-right visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>

      <!-- Feature -->
      <div class="jumbotron" style="overflow:hidden;">
              <?php
              foreach ($query_featuring->result() as $row)
              			{
                    echo  "<image 	width='35%'  src='"
                          .$row->session_theme_photo
                          . "'  style='float:right;    margin: auto 0px;    '  >";

                    echo  "<h1>Feature</h1>";
                    echo  '<a href="' . "/CodeIgniter/index.php/BookingSystem/session/"
                          . $row->session_id
                          . '" >';
                    echo  "<h2>"
                    			. $row->session_title
                    			. "</h2>";

                    echo  "<p>"
                    			. $row->description_s
                    			. "</p></a>";
                    }
              ?>
      </div>

      <!-- Recommend Event -->
      <h2>&nbsp; Rocommend Event</h2>
      <br>
      <div class="row">

        <?php

        foreach ($query_recommend->result() as $row)
        {
          echo "<div class='col-xs-6 col-lg-4' style='text-align: justify; margin-top:20px;'>";
          echo  "<b style='font-size:18px'>"
          . ((strlen($row->session_title) <= 20) ? str_pad($row->session_title, 20): substr_replace($row->session_title,"...",20))
          ."</b><br>";
          echo  "<image  src='"
                .  $row->session_theme_photo
                . "' style='height:100px; margin:8px;'>";
          // echo "<h2>"

                 // . "</h2>";
          echo "<p>"
                . ((strlen($row->description_s) <= 150) ?str_pad($row->description_s, 150,'　'): substr_replace($row->description_s,"...",150))
                . "</p>";
          echo  "<p><a class='btn btn-default' role='button' href='"
                . "/CodeIgniter/index.php/BookingSystem/session/"
                . $row->session_id
                . "'>View details &raquo;</a></p>";
          echo "</div>";
        }
       ?>
      </div><!--/row-->
    </div><!--/.col-xs-12.col-sm-9-->

    <!-- Tag -->

    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
      <div class="list-group">

        <?php
        foreach ($query_tag->result() as $row)
        {
          echo '<a class="list-group-item" href="/CodeIgniter/index.php/BookingSystem/search/search?search_param=tag&x='
          . $row->tag_name
          . '">'
          . $row->tag_name
          . '</a>';
        }
        echo '<a class="list-group-item" href="/CodeIgniter/index.php/BookingSystem/search/search?search_param=tag&x='

        . '">'
        . 'All of above'
        . '</a>';
        ?>
      </div>
    </div><!--/.sidebar-offcanvas-->



  </div><!--/row-->

  <hr>
