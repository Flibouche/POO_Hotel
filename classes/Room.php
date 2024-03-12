<?php

class Room {

    private Hotel $hotel;
    private int $idRoom;
    private int $roomNumber;
    private int $nbBeds;
    private float $price;
    private bool $wifi = true;
    private bool $isBooked = false;
    private array $reservations;

    private static int $nbRoom = 0;

    public function __construct(
        Hotel $hotel,
        int $idRoom,
        int $roomNumber,
        int $nbBeds,
        float $price,
        bool $wifi = true
        ) {
        $this->hotel = $hotel;
        self::$nbRoom++;
        $this->idRoom = self::$nbRoom;
        $this->roomNumber = $roomNumber;
        $this->nbBeds = $nbBeds;
        $this->price = $price;
        $this->wifi = $wifi;
        $this->hotel->addRoom($this);
        $this->reservations = [];
    }

    //===================== Get/Set Hotel =====================// 
    
    public function getHotel() : Hotel
    {
        return $this->hotel;
    }
    
    public function setHotel(Hotel $hotel)
    {
        $this->hotel = $hotel;
        
        return $this;
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

    public function getNbBeds() : int
    {
        return $this->nbBeds;
    }

    public function setNbBeds(int $nbBeds)
    {
        $this->nbBeds = $nbBeds;

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
    
    //===================== Availability =====================// 
    
    public function availability()
    {
        if(!$this->isBooked)
        {
            return "Available<br>";
        } else {
            return "Booked<br>";
        }
    }

    //===================== Reservation =====================//
    
    public function getReservations() : array
    {
        return $this->reservations;
    }

    public function setReservations(array $reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }

    public function addReservation(Booking $reservation)
    {
        $this->reservations[] = $reservation;
    }

    //===================== Internet =====================//
    
    public function internet()    
    {
        if($this->wifi)
        {
            return "Oui";
        } else {
            return "Non";
        }
    }

    //===================== getInfos =====================//
    
    public function getInfos()
    {
        return "Hotel : $this->hotel / Chambre : $this->roomNumber ($this->nbBeds lits - $this->price € - Wifi : ".$this->internet().")<br><br>";
    }  

    //===================== toString =====================//
    
    public function __toString()
    {
        return "Chambre : $this->roomNumber";
    }

}

?>