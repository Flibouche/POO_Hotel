<?php

class Client {

    private int $idClient;
    private string $lastName;
    private string $firstName;
    private array $reservations;

    private static $nbClient = 0;

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
        return "Réservation de $this <br>
        
        
        Total :  €<br><br>";
    }
    
    //===================== toString =====================//
    
    public function __toString()
    {
        return $this->firstName." ".$this->lastName;
    }

}

?>