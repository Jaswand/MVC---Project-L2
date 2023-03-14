<table>
  <tr>
    <th>Naam</th>
    <th>Email</th>
    <th>Aantal personen</th>
    <th>Datum</th>
    <th>Tijd</th>
  </tr>
  <?php foreach($reserveringen as $reservering): ?>
  <tr>
    <td><?php echo $reservering['naam'] ?></td>
    <td><?php echo $reservering['email'] ?></td>
    <td><?php echo $reservering['aantal_personen'] ?></td>
    <td><?php echo $reservering['datum'] ?></td>
    <td><?php echo $reservering['tijd'] ?></td>
    <td><a href="reservering.php?id=<?php echo $reservering['id'] ?>">Details</a></td>
  </tr>
  <?php endforeach; ?>
</table>