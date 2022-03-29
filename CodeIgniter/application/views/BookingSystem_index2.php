<link href="/CodeIgniter/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<link href="/CodeIgniter/css/offcanvas.css" rel="stylesheet">
<script src="/CodeIgniter//js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

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
      <div class="row">
        <h2>&nbsp; Rocommend Event</h2>
        <br>
        <?php
        foreach ($query_recommend->result() as $row)
        {
          echo "<div class='col-xs-6 col-lg-4' style='overflow:hidden'  >";
          echo  "<image 	width='30%'  src='"
                .$row->session_theme_photo
                . "' style='margin-top:8px'>";
          echo "<h2>"
                 . $row->session_title
                 . "</h2>";
          echo "<p>"
                . $row->description_s
                . "</p>";
          echo  "<p><a class='btn btn-default' role='button' href='"
                . "/CodeIgniter/index.php/BookingSystem/session/"
                . $row->session_id
                . "'>View details &raquo;</a></p>";
          echo "</div><!--/.col-xs-6.col-lg-4-->";
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
          echo '<a class="list-group-item  href="' . "/CodeIgniter/index.php/BookingSystem/session/"
          . $row->tag_id
          . '" >'
          . $row->tag_name
          . '</a>';
        }
        ?>
      </div>
    </div><!--/.sidebar-offcanvas-->

  </div><!--/row-->

  <hr>
