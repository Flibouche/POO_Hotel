<?php

class Reservation {

    private int $idReservation;
    private DateTime $dateReservation;
    private DateTime $dateDeparture;

    private static $nbReservation = 0;

    public function __construct(
        int $idReservation,
        string $dateDeparture,
        string $dateDeparture
        ) {
        self::$nbReservation++;
        $this->idReservation = self::$nbReservation;
        $this->dateReservation = new DateTime($dateReservation);
        $this->dateDeparture = new DateTime($dateDeparture);
    }

    //===================== ID Reservation =====================// 

    public function getIdReservation() : int
    {
        return $this->idReservation;
    }

    public function setIdReservation(int $idReservation)
    {
        $this->idReservation = $idReservation;

        return $this;
    }

    //===================== Date Reservation =====================// 

    public function getDateReservation() : string
    {
        return $this->dateReservation;
    }
 
    public function setDateReservation(string $dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    //===================== Date Departure =====================// 

    public function getDateDeparture() : string
    {
        return $this->dateDeparture;
    }
 
    public function setDateDeparture(string $dateDeparture)
    {
        $this->dateDeparture = $dateDeparture;

        return $this;
    }
}

?>