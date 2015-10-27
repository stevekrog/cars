<table>
    <tr>
        <th>Vehicle ID</th>
        <th>Order Owned</th>
        <th>Type</th>
        <th>Year</th>
        <th>Make</th>
        <th>Model</th>
        <th>Color</th>
        <th>Num Cyl</th>
        <th>Trans Type</th>
        <th>Year Bought</th>
        <th>Record Last Modified</th>
    </tr>

    <?php foreach ($vehicles as $vehicle) { ?>
        <tr>
        <td><?php echo $vehicle->getVID();?></td>
        <td><?php echo $vehicle->getOrderOwned();?></td>
        <td><?php echo $vehicle->getType();?></td>
        <td><?php echo $vehicle->getModelYear();?></td>
        <td><?php echo $vehicle->getMake();?></td>
        <td><?php echo $vehicle->getModel();?></td>
        <td><?php echo $vehicle->getColor();?></td>
        <td><?php echo $vehicle->getNumCyl();?></td>
        <td><?php echo $vehicle->getTransType();?></td>
        <td><?php echo $vehicle->getPurchaseYear();?></td>
        <td><?php $updatedDate = new DateTime();
            $updatedDate->setTimestamp($vehicle->getModifiedDate());
            echo $updatedDate->format('Y-m-d H:i:s');?></td>
        <td><a href="vehicle.php?action=view_vehicle&target=<?= $vehicle->getVID();?>"
            class="button">View</a></td>
        <td><a href="vehicle.php?action=delete_vehicle&target=<?= $vehicle->getVID();?>"
            class="button">Delete</a></td>
        </tr>
    <?php } ?>
</table>
<a href='vehicle.php?action=add_vehicle' class='button'>Add New Vehicle</a>
