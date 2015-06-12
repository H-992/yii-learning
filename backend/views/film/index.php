<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><?=$film->title?></div>
  <div class="panel-body">
    <p><?=$film->description?></p>
  </div>


  <table class="table">
	<tr>
		<th>release_year</th>
		<th>rental_duration</th>
		<th>rental_rate</th>
		<th>length</th>
		<th>replacement_cost</th>
		<th>rating</th>
		<th>special_features</th>
		<th>last_update</th>
	</tr>
	<tr>
		<td><?=$film->release_year?></td>
		<td><?=$film->rental_duration?></td>
		<td><?=$film->rental_rate?></td>
		<td><?=$film->length?></td>
		<td><?=$film->replacement_cost?></td>
		<td><?=$film->rating?></td>
		<td><?=$film->special_features?></td>
		<td><?=$film->last_update?></td>
	</tr>
  </table>
</div>


<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Actors</div>

  <!-- Table -->
  <table class="table">
    <tr>
    	<th>
    		First Name
    	</th>
    	<th>
    		Last Name
    	</th>
    </tr>
    <?php foreach ($actors as $k => $v): ?>
    	<tr>
    		<td><?=$v['first_name']?></td>
    		<td><?=$v['last_name']?></td>

    	</tr>
    <?php endforeach;?>
  </table>
</div>