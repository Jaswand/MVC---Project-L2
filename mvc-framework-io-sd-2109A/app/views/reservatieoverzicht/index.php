
<?php
require_once APPROOT . '/Views/Includes/Navbar.php';
?>


<table class="table table-hover">
  <thead>
    <tr>
      <th>Naam</th>
      <th>Voornaam</th>
      <th>Geboortedatum</th>
      <th>Adres</th>
      <th>Postcode</th>
      <th>Gemeente</th>
      <th>Telefoon</th>
      <th>Email</th>
      <th>Gebruikersnaam</th>
      <th>Wachtwoord</th>
      <th>Acties</th>
    </tr>
  </thead>
</table>
<tbody>
        <?php foreach ($data['rocambolesque'] as $rocambolesque) { ?>
            <tr>
                <input type="hidden" id="id" value="<?= $rocambolesque->Id ?>">
                <td> <?= $rocambolesque->Voornaam . ' ' . $rocambolesque->Achternaam ?> </td>
                <td> <?= $rocambolesque->Adres ?> </td>
                <td> <?= $rocambolesque->Email ?> </td>
                <td> <?= $rocambolesque->Tafelnummer ?> </td>
                <td> <?= $rocambolesque->Datum ?> </td>
            </tr>
        <?php } ?>
    </tbody>
</table>