<div class="container">
	<div class="row">
		<table class="table table-bordered">
    <thead>
      <tr>
        <?php
          echo '<th>'. $column. ' name</th>';
          echo '<th>'. $column. ' description</th>';
        ?>
      </tr>
    </thead>
    <tbody>
      <?php
      if($column == 'organizer'){
        foreach ($query_listing->result() as $row){
          echo  "<tr data-href='/CodeIgniter/index.php/BookingSystem/search/search?search_param=organizer&x="
                .$row->organizer_name
                ."'><td>"
                .$row->organizer_name
                ."</td><td>"
                .$row->organizer_description
                ."</td></tr>";
        }
      }else {
        foreach ($query_listing->result() as $row){
          echo  "<tr data-href='/CodeIgniter/index.php/BookingSystem/search/search?search_param=trainer&x="
                .$row->trainer_name
                ."'><td>"
                .$row->trainer_name
                ."</td><td>"
                .$row->trainer_description
                ."</td></tr>";
        }
      }
      ?>
    </tbody>
  </table>
	</div>
</div>
