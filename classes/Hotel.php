<?php

class Hotel {

    private int $idHotel;
    private string $name;
    private string $address;
    private int $nbRooms;
    private array $rooms;

    private static $nbHotel = 0;

    public function __construct(
        int $idHotel,
        string $name,
        string $address,
        int $nbRooms
        ) {
        self::$nbHotel++;
        $this->idHotel = self::$nbHotel;
        $this->name = $name;
        $this->address = $address;
        $this->nbRooms = $nbRooms;
        $this->rooms = [];
    }

//===================== ID Hotel =====================// 
    
    public function getIdHotel() : int
    {
        return $this->idHotel;
    }

    public function setIdHotel(int $idHotel)
    {
        $this->idHotel = $idHotel;

        return $this;
    }

    //===================== Name =====================// 

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
 
    //===================== Address =====================// 

    public function getAddress() : string
    {
        return $this->address;
    }

    public function setAddress(string $address)
    {
        $this->address = $address;

        return $this;
    }

    //===================== NbRooms =====================// 

    public function getNbRooms() : int
    {
        return $this->nbRooms;
    }

    public function setNbRooms(int $nbRooms)
    {
        $this->nbRooms = $nbRooms;

        return $this;
    }

    //===================== Get/Set Rooms =====================//

    public function getRooms() : array
    {
        return $this->rooms;
    }

    public function setRooms(array $rooms)
    {
        $this->rooms = $rooms;

        return $this;
    }

    public function addRoom(Room $room)
    {
        $this->rooms[] = $room;
    }

    //===================== Room Booked =====================//

    public function roomBooked()
    {

    }

    //===================== getInfos =====================//
    
    public function getInfos()
    {
        return "$this->name <br>
        Nombre de chambres : $this->nbRooms <br>
        Nombre de chambres réservées : <br>
        Nombre de chambres disponibles : <br>";
    }
    
    //===================== __toString =====================//

    public function __toString()
    {
        return $this->name;
    }


}







?>