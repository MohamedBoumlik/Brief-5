


<table>

<tr>
<th>id</th>
<th>libelle</th>
<th>capacite</th>
</tr>
<?php foreach($salles as $salle){?>
<tr>
<td><?php echo $salle['id'] ; ?></td>
<td><?php echo $salle['libelle_S'] ; ?></td>
<td><?php echo $salle['capacite_S'] ; ?></td>
</tr>
<?php }?>
</table>