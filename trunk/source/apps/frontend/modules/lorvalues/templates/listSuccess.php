<?php
// auto-generated by sfPropelCrud
// date: 2009/03/16 02:49:27
?>
<h1>lorvalues</h1>

<table>
<thead>
<tr>
  <th>Id</th>
  <th>Lorfields</th>
  <th>Data</th>
  <th>User</th>
</tr>
</thead>
<tbody>
<?php foreach ($lorvaluess as $lorvalues): ?>
<tr>
    <td><?php echo link_to($lorvalues->getId(), 'lorvalues/show?id='.$lorvalues->getId()) ?></td>
      <td><?php echo $lorvalues->getLorfieldsId() ?></td>
      <td><?php echo $lorvalues->getData() ?></td>
      <td><?php echo $lorvalues->getUserId() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'lorvalues/create') ?>
