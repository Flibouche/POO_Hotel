<?php

class Reservation {

    private Room $room;
    private Client $client;
    private int $idReservation;
    private DateTime $dateReservation;
    private DateTime $dateDeparture;

    private static $nbReservation = 0;

    public function __construct(
        Room $room,
        Client $client,
        int $idReservation,
        string $dateDeparture,
        string $dateDeparture
        ) {
        $this->room = $room;
        $this->client = $client;
        self::$nbReservation++;
        $this->idReservation = self::$nbReservation;
        $this->dateReservation = new DateTime($dateReservation);
        $this->dateDeparture = new DateTime($dateDeparture);
    }

    //===================== Get Room =====================// 

    public function getRoom() : Room
    {
        return $this->room;
    }

    public function setRoom(Room $room)
    {
        $this->room = $room;

        return $this;
    }

    //===================== Get Client =====================// 

    public function getClient() : Client
    {
        return $this->client;
    }

    public function setClient(Client $client)
    {
        $this->client = $client;

        return $this;
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