<?php

class Room {

    private int $idRoom;
    private int $roomNumber;
    private int $roomBeds;
    private float $price;
    private bool $wifi = false;
    private bool $isBooked = false;

    private static $nbRoom = 0;

    public function __construct(
        int $idRoom,
        int $roomNumber,
        int $roomBeds,
        float $price
        ) {
        self::$nbRoom++;
        $this->idRoom = self::$nbRoom;
        $this->roomNumber = $roomNumber;
        $this->roomBeds = $roomBeds;
        $this->price = $price;
    }

    //===================== ID Room =====================// 

    public function getIdRoom() : int
    {
        return $this->idRoom;
    }

    public function setIdRoom(int $idRoom)
    {
        $this->idRoom = $idRoom;

        return $this;
    }

    //===================== Room Number =====================// 

    public function getRoomNumber() : int
    {
        return $this->roomNumber;
    }

    public function setRoomNumber(int $roomNumber)
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    //===================== Room Beds =====================// 

    public function getRoomBeds() : int
    {
        return $this->roomBeds;
    }

    public function setRoomBeds(int $roomBeds)
    {
        $this->roomBeds = $roomBeds;

        return $this;
    }

    //===================== Price =====================// 

    public function getPrice() : float
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;

        return $this;
    }

    //===================== WIFI =====================// 

    public function getWifi() : bool
    {
        return $this->wifi;
    }

    public function setWifi(bool $wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    //===================== isBooked =====================// 

    public function getIsBooked() : bool
    {
        return $this->isBooked;
    }

    public function setIsBooked(bool $isBooked)
    {
        $this->isBooked = $isBooked;

        return $this;
    }
}

?>