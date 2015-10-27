<!DOCTYPE html>
<html>
  <head>
    <title>ORM/MVC</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
  </head>
  <body>
    <h2>Vehicle Management</h2>
    <?php
        ini_set('display_errors', '1');
        require_once('../lib/db.interface.php');
        require_once('../lib/db.class.php');
        require_once('../models/vehicle.class.php');
        require_once('../models/inventory.abstract.php');
        require_once('../models/inventory_manager.class.php');

        $action = isset($_GET["action"])?$_GET["action"]:'';
        $target = isset($_GET["target"])?$_GET["target"]:'';

        switch($action){
            case 'view_vehicle':
                $inventoryManager = new InventoryManager();
                $vehicle = $inventoryManager->getVehicle($target);
                include('../views/vehicle_view.php');
                break;
            case 'delete_vehicle':
                $inventoryManager = new InventoryManager();
                $inventoryManager->delete($target);
                header('Location: vehicle.php');
                break;
            case 'add_vehicle':
                $vehicle = new Vehicle();
                $MaxOrderOwned = NULL;
                if($vehicle->getOrderOwned() == ''){
                    $db = new Db();
                    $MaxOrderOwned = $db->query("select max(orderOwned) from vehicles);") + 1;
                    $vehicle->setOrderOwned($MaxOrderOwned);
                }
                include('../views/vehicle_add_edit.php');
                break;
            case 'edit_vehicle':
                $inventoryManager = new InventoryManager();
                $vehicle = $inventoryManager->getVehicle($target);
                include('../views/vehicle_add_edit.php');
                break;
            case 'save_vehicle':
                $inventoryManager = new InventoryManager();
                $arr = array();
                $arr["vid"] = isset($_GET["vid"])?$_GET["vid"]:'';
                $arr["orderOwned"] = isset($_GET["orderOwned"])?$_GET["orderOwned"]:'';
                $arr["type"] = isset($_GET["type"])?$_GET["type"]:'';
                $arr["modelYear"] = isset($_GET["modelYear"])?$_GET["modelYear"]:'';
                $arr["make"] = isset($_GET["make"])?$_GET["make"]:'';
                $arr["model"] = isset($_GET["model"])?$_GET["model"]:'';
                $arr["color"] = isset($_GET["color"])?$_GET["color"]:'';
                $arr["numCyl"] = isset($_GET["numCyl"])?$_GET["numCyl"]:'';
                $arr["transType"] = isset($_GET["transType"])?$_GET["transType"]:'';
                $arr["purchaseYear"] = isset($_GET["purchaseYear"])?$_GET["purchaseYear"]:'';
                $arr["modifiedDate"] = time();

                $vehicle = new Vehicle();
                $vehicle->hydrate($arr);
                $inventoryManager->save($vehicle);
                header('Location: vehicle.php');
                break;
            default:
                $inventoryManager = new InventoryManager();
                $vehicles = $inventoryManager->getAllVehicles();
                include('../views/vehicle_view_list.php');
                break;
        }
    ?>

</body>
</html>
