<table>
    <thead>
        <tr>
            <th>Reservation ID</th>
            <th>Customer Name</th>
            <th>Reservation Date</th>
            <th>Number of Guests</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($reservations as $reservation): ?>
        <tr>
            <td><?php echo $reservation['id']; ?></td>
            <td><?php echo $reservation['customer_name']; ?></td>
            <td><?php echo $reservation['reservation_date']; ?></td>
            <td><?php echo $reservation['number_of_guests']; ?></td>
            <td>
                <a href="index.php?action=update_reservation&id=<?php echo $reservation['id']; ?>">Update</a>
                <a href="index.php?action=delete_reservation&id=<?php echo $reservation['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
