<?php include_component('home','leftmenu'); ?>
<?php
// auto-generated by sfPropelCrud
// date: 2009/02/10 08:15:01
?>
<table>
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $role->getId() ?></td>
</tr>
<tr>
<th>Name: </th>
<td><?php echo $role->getName() ?></td>
</tr>
<tr>
<th>Description: </th>
<td><?php echo $role->getDescription() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'role/edit?id='.$role->getId()) ?>
&nbsp;<?php echo link_to('list', 'role/list') ?>
