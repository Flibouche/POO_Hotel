<?php

class Client {

    private int $idClient;
    private string $lastName;
    private string $firstName;
    private array $reservations;

    private static int $nbClient = 0;

    public function __construct(
        int $idClient,
        string $lastName,
        string $firstName
        ) {
        self::$nbClient++;
        $this->idClient = self::$nbClient;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->reservations = [];
    }

    //===================== ID Client =====================// 

    public function getIdClient() : int
    {
        return $this->idClient;
    }

    public function setIdClient(int $idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    //===================== Last Name =====================// 

    public function getLastName() : string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    //===================== First Name =====================// 

    public function getFirstName() : string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
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
        $result = "<h3>Réservation de $this</h3>";
        
        foreach($this->reservations as $reservation) {
            $result .= $reservation->getRoom()->getHotel()." / ".$reservation->getRoom()." (".$reservation->getRoom()->getNbBeds()." lits - ".$reservation->getRoom()->getPrice()." € - Wifi : ".$reservation->getRoom()->internet()." )"." du ".$reservation->getDateReservation(). " au ".$reservation->getDateDeparture()."<br>";
        }
        
        return $result;
        echo "Total :  €<br><br>";
    }
    
    //===================== toString =====================//
    
    public function __toString()
    {
        return $this->firstName." ".$this->lastName;
    }

}

?>