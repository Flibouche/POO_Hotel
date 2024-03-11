<?php

class Hotel {

    private int $idHotel;
    private string $name;
    private string $address;
    private int $nbRooms;
    private array $rooms;
    private array $reservations;

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
        $this->reservations = [];
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
        Nombre de chambres disponibles : <br><br>";
    }

    //===================== getReservations =====================//
    
    public function getReservations()
    {
        $result = "Réservation de l'hôtel $this<br><br>";

        foreach($this->reservations as $reservation) {
            $result .= $reservation->getClient()." - Chambre ".$reservation->getRoom()." du ".$reservation->getDateReservation()." au ".$reservation->getDateDeparture();
        }

        return $result;
    }

    //===================== __toString =====================//

    public function __toString()
    {
        return $this->name;
    }


}







?>