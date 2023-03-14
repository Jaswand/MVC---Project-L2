<?php

class ReserveringModel {
  private $db;

  function __construct($db) {
    $this->db = $db;
  }

  function getAllReserveringen() {
    $query = "SELECT * FROM reservering";
    $result = $this->db->query($query);
    return $result->fetchAll();
  }

  function getReserveringById($id) {
    $query = "SELECT * FROM reservering WHERE id = $id";
    $result = $this->db->query($query);
    return $result->fetch();
  }

  function saveReservering($naam, $email, $aantal_personen, $datum, $tijd) {
    $query = "INSERT INTO reservering(naam, email, aantal_personen, datum, tijd)
              VALUES ('$naam', '$email', '$aantal_personen', '$datum', '$tijd')";
    return $this->db->exec($query);
  }
}

?>