<?php
class ReservationController {
    private $model;
    
    public function __construct($model) {
        $this->model = $model;
    }
    
    public function display() {
        $reservations = $this->model->getAllReservations();
        include('views/reservations.php');
    }
    
    public function create() {
        // Handle user input to create a new reservation
        $this->model->createReservation($data);
        // Redirect to the reservation display page
        header('Location: index.php?action=display_reservations');
    }
    
    public function update() {
        // Handle user input to update an existing reservation
        $this->model->updateReservation($id, $data);
        // Redirect to the reservation display page
        header('Location: index.php?action=display_reservations');
    }
    
    public function delete() {
        // Handle user input to delete an existing reservation
        $this->model->deleteReservation($id);
        // Redirect to the reservation display page
        header('Location: index.php?action=display_reservations');
    }
}
?>