<?php foreach ($actor as $key => $value): ?>

Show Actor By Id (<?=$value['actor_id']; ?>)
<table class="table table-hover">
      
      <tbody>
        <tr>
          <th>First Name</th>
          <td><?=$value['first_name']; ?></td>
        </tr>
        <tr>
           <th>Last Name</th>
          <td><?=$value['last_name']; ?></td>
          
        </tr>
        <tr>
        <th>Last Update</th>
          <td><?=$value['last_update']; ?></td>
        </tr>
      </tbody>
    </table>

<?php endforeach; ?>