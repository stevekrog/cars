<form action="vehicle.php" method="get">
    <input type="hidden" name="vid" value="<?= $vehicle->getVID() ?>">
    <input type="hidden" name="action" value="save_vehicle">

    <label>Order Owned: </label><input type="text" name="orderOwned"
    value="<?= $vehicle->getOrderOwned() ?>"><br>

    <label>Type: </label><input type="text" name="type"
    value="<?= $vehicle->getType() ?>"><br>

    <label>Model Year: </label><input type="text" name="modelYear"
    value="<?= $vehicle->getModelYear() ?>"><br>

    <label>Make: </label><input type="text" name="make"
    value="<?= $vehicle->getMake() ?>"><br>

    <label>Model: </label><input type="text" name="model"
    value="<?= $vehicle->getModel() ?>"><br>

    <label>Color: </label><input type="text" name="color"
    value="<?= $vehicle->getColor() ?>"><br>

    <label>Number of Cylinders: </label><input type="text" name="numCyl"
    value="<?= $vehicle->getNumCyl() ?>"><br>

    <label>Transmission Type: </label><input type="text" name="transType"
    value="<?= $vehicle->getTransType() ?>"><br>

    <label>Purchase Year: </label><input type="text" name="purchaseYear"
    value="<?= $vehicle->getPurchaseYear() ?>"><br>
<!--
    <label>Date Modified: </label><input type="text" name="modifiedDate"
    value="<?= $vehicle->getModifiedDate() ?>"><br> -->

    <input type="submit" value="Save" class="button">
</form>
