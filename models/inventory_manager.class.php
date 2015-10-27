<?php
class InventoryManager extends Inventory
{
    public function getVehicle($arg){
        if(!is_numeric($arg)){ return FALSE; }

        $db = new Db();

        $vid = $db->quote($arg);
        $results = $db->select("select vehicleID as vid, orderOwned, type, modelYear,
        make, model, color, numCyl, transType, purchaseYear, modifiedDate from vehicles where vehicleID = $vid limit 1");

        foreach($results as $result){
            $vehicle = new Vehicle();
            $vehicle->hydrate($result);
        }
        return $vehicle;
    }

    public function getAllVehicles(){
        $db = new Db();
        $vehicles = array();

        $results = $db->select("select vehicleID as vid, orderOwned, type, modelYear,
        make, model, color, numCyl, transType, purchaseYear, modifiedDate from vehicles;");

        foreach($results as $result){
            $vehicle = new Vehicle();
            $vehicle->hydrate($result);
            $vehicles[] = $vehicle;
        }
        return $vehicles;
    }

    public function save($vehicle){
        if($vehicle->getVID()){ // if there is a vid, then update that vehicle
            $this->_update($vehicle);
        }
        else{
            $this->_add($vehicle);
        }
    }

    private function _add($vehicle){
        $db = new Db();

        $orderOwned = $db->quote($vehicle->getOrderOwned());
        $type = $db->quote($vehicle->getType());
        $modelYear = $db->quote($vehicle->getmodelYear());
        $make = $db->quote($vehicle->getMake());
        $model = $db->quote($vehicle->getModel());
        $color = $db->quote($vehicle->getColor());
        $numCyl = $db->quote($vehicle->getNumCyl());
        $transType = $db->quote($vehicle->getTransType());
        $purchaseYear = $db->quote($vehicle->getPurchaseYear());
        $modifiedDate = time();

        $results = $db->query("insert into vehicles (orderOwned, type, modelYear, make, model,
         color, numCyl, transType, purchaseYear, modifiedDate)
        values($orderOwned, $type, $modelYear, $make, $model, $color, $numCyl, $transType, $purchaseYear, $modifiedDate);");
    }

    public function _update($vehicle){
        $db = new Db();

        $vid = $db->quote($vehicle->getVID());
        $orderOwned = $db->quote($vehicle->getOrderOwned());
        $type = $db->quote($vehicle->getType());
        $modelYear = $db->quote($vehicle->getModelYear());
        $make = $db->quote($vehicle->getMake());
        $model = $db->quote($vehicle->getModel());
        $color = $db->quote($vehicle->getColor());
        $numCyl = $db->quote($vehicle->getNumCyl());
        $transType = $db->quote($vehicle->getTransType());
        $purchaseYear = $db->quote($vehicle->getPurchaseYear());
        $modifiedDate = $db->quote($vehicle->getModifiedDate());

        $results = $db->query("update vehicles set orderOwned=$orderOwned, type=$type, modelYear=$modelYear,
        make=$make, model=$model, color=$color, numCyl=$numCyl, transType=$transType, purchaseYear=$purchaseYear,
        modifiedDate=$modifiedDate
        where vehicleID = $vid;");
    }

    public function delete($arg){
        $db = new Db();
        $vid = $db->quote($arg);
        $results = $db->query("DELETE from vehicles where vehicleID = $vid");
    }
}
