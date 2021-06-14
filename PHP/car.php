<?php
require_once("account.php");

class Car {
    public $id;
    public $license;
    public $driver;
    protected $passanger;

    public function __construct($license, $driver) {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function getId() {
        return $this->id;
    }

    public function setId() {
        $this->id = $id;
    }

    public function getLicense($id) {
        return $this->license;
    }

    public function setLicense($license) {
        $this->license = $license;
    }

    public function getDriver() {
        return $this->driver;
    }

    public function setDriver($driver) {
        $this->driver = $driver;
    }

    public function getPassenger() {
        return $this->passengers;
    }

    public function setPassenger($passengers) {
        if ($passengers == 4) {
            $this-> passengers = $passengers;
        } else {
            echo "Necesitas asignar 4 pasajeros";
        }
    }

    public function printDataCar() {
        echo "Licencia: $this->license Driver: {$this->driver->name} Document: {$this->driver->document} Numero de pasajeros: $this->passengers";
    }

    // public function getPassenger() {
    //     return $this->passenger;
    // }

    // public function setPassenger($passenger) {
    //     if ($passenger == 4) {
    //         $this->passenger = $passenger;
    //     } else {
    //         echo "Necesitas asignar 4 pasajeros";
    //     }
    // }
}