<?php

class Hotel {

    private int $idHotel;
    private string $name;
    private string $address;
    private array $rooms;
    private array $reservations;

    private static int $nbHotel = 0;

    public function __construct(
        int $idHotel,
        string $name,
        string $address,
        ) {
        self::$nbHotel++;
        $this->idHotel = self::$nbHotel;
        $this->name = $name;
        $this->address = $address;
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

    //===================== getInfos =====================//
    
    public function getInfos()
    {
        return "<h2>$this->name </h2>
        $this->address <br>
        Nombre de chambres : ".count($this->rooms)." <br>
        Nombre de chambres réservées : ".count($this->reservations)."<br>";
        $result = $this->rooms - $this->reservations;
        "Nombre de chambres disponibles : ".$result."<br><br>";
    }

    //===================== getInfosReservations =====================//
    
    // public function getInfosReservations()
    // {
    //     $result = "<h3>Réservation de l'hôtel $this</h3>";

    //     if($this->rooms->getIsBooked() >= 1)
    //         foreach($this->reservations as $reservation) {
    //             $result .= $reservation->getClient()." - ".$reservation->getRoom()." - du ".$reservation->getDateReservation()." au ".$reservation->getDateDeparture()."<br>";
    //     } else {
    //             echo "Aucune réservation !";
    //     }

    //     return $result;
    // }

    //===================== getRoomStatuts =====================//

    public function getRoomStatuts()
    {

    }


    //===================== __toString =====================//

    public function __toString()
    {
        return $this->name;
    }


}







?>