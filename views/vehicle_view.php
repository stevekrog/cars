<?php
$updatedDate = new DateTime();
$updatedDate->setTimestamp($vehicle->getModifiedDate());
?>
<ul>
    <li><?php echo "Vehicle ID: ", $vehicle->getVID();?></li>
    <li><?php echo "Order Owned: ", $vehicle->getOrderOwned();?></li>
    <li><?php echo "Type: ", $vehicle->getType();?></li>
    <li><?php echo "Year: ", $vehicle->getModelYear();?></li>
    <li><?php echo "Make: ", $vehicle->getMake();?></li>
    <li><?php echo "Model: ", $vehicle->getModel();?></li>
    <li><?php echo "Color: ", $vehicle->getColor();?></li>
    <li><?php echo "Num Cyl: ", $vehicle->getNumCyl();?></li>
    <li><?php echo "Trans Type: ", $vehicle->getTransType();?></li>
    <li><?php echo "Year Bought: ", $vehicle->getPurchaseYear();?></li>
    <li><?php echo "Updated: ", $updatedDate->format('Y-m-d H:i:s');?></li>
</ul>
<a href='vehicle.php' class='button'>View All Vehicles</a>

<a href='vehicle.php?action=delete_vehicle&target=<?= $vehicle->getVID() ?>'
    class='button'>Delete This Vehicle</a>

<a href='vehicle.php?action=edit_vehicle&target=<?= $vehicle->getVID() ?>'
    class='button'>Edit This Vehicle</a>
