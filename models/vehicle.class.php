<?php

/**
 * User Object
 */
class Vehicle{

  private $_VID;
  private $_orderOwned;
  private $_type;
  private $_modelYear;
  private $_make;
  private $_model;
  private $_color;
  private $_numCyl;
  private $_transType;
  private $_purchaseYear;
  private $_modifiedDate;

  public function getVID(){return $this->_VID;}
  public function setVID($arg){$this->_VID = $arg;}

  public function getOrderOwned(){return $this->_orderOwned;}
  public function setOrderOwned($arg){$this->_orderOwned = $arg;}

  public function getType(){return $this->_type;}
  public function setType($arg){$this->_type = $arg;}

  public function getModelYear(){return $this->_modelYear;}
  public function setModelYear($arg){$this->_modelYear = $arg;}

  public function getMake(){return $this->_make;}
  public function setMake($arg){$this->_make = $arg;}

  public function getModel(){return $this->_model;}
  public function setModel($arg){$this->_model = $arg;}

  public function getColor(){return $this->_color;}
  public function setColor($arg){$this->_color = $arg;}

  public function getNumCyl(){return $this->_numCyl;}
  public function setNumCyl($arg){$this->_numCyl = $arg;}

  public function getTransType(){return $this->_transType;}
  public function setTransType($arg){$this->_transType = $arg;}

  public function getPurchaseYear(){return $this->_purchaseYear;}
  public function setPurchaseYear($arg){$this->_purchaseYear = $arg;}

  public function getModifiedDate(){return $this->_modifiedDate;}
  public function setModifiedDate($arg){$this->_modifiedDate = $arg;}

  public function hydrate($arr) {
    $this->setVID(isset($arr["vid"])?$arr["vid"]:'');
    $this->setOrderOwned(isset($arr["orderOwned"])?$arr["orderOwned"]:'');
    $this->setType(isset($arr["type"])?$arr["type"]:'');
    $this->setModelYear(isset($arr["modelYear"])?$arr["modelYear"]:'');
    $this->setMake(isset($arr["make"])?$arr["make"]:'');
    $this->setModel(isset($arr["model"])?$arr["model"]:'');
    $this->setColor(isset($arr["color"])?$arr["color"]:'');
    $this->setNumCyl(isset($arr["numCyl"])?$arr["numCyl"]:'');
    $this->setTransType(isset($arr["transType"])?$arr["transType"]:'');
    $this->setPurchaseYear(isset($arr["purchaseYear"])?$arr["purchaseYear"]:'');
    $this->setModifiedDate(isset($arr["modifiedDate"])?$arr["modifiedDate"]:'');
  }
}
