<?php

require_once 'config/conexion.php';

class EventosModel {

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    public function getAllScheduleEventsBySize(int $rangeId) {
        $sql = "SELECT * FROM scheduleevents 
                    WHERE estimatedAttendees = :rangeId";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':rangeId', $rangeId);
        $stmt->execute();

        $scheduleEvents = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $scheduleEvents;
    }

    public function getAttendeesRanges() {
        $sql = "SELECT * FROM attendeesrange";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();

        $attendeesRanges = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $attendeesRanges;
    }

    public function getScheduleEventById() {
        $sql = "SELECT * FROM scheduleevents WHERE id = :id";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();

        $scheduleEvent = $stmt->fetch(PDO::FETCH_ASSOC);

        return $scheduleEvent;
    }

    public function createScheduleEvent(EventoDTO $eventoDTO) {
        $sql = "INSERT INTO scheduleevents (eventName, estimatedDate, estimatedHour, contactEmail, contactPhone, message, estimatedAttendees) 
                    VALUES (:eventName, :estimatedDate, :estimatedHour, :contactEmail, :contactPhone, :message, :estimatedAttendees)";

        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':eventName', $eventoDTO->getEventName());
        $stmt->bindParam(':estimatedDate', $eventoDTO->getEstimatedDate());
        $stmt->bindParam(':estimatedHour', $eventoDTO->getEstimatedHour());
        $stmt->bindParam(':contactEmail', $eventoDTO->getContactEmail());
        $stmt->bindParam(':contactPhone', $eventoDTO->getContactPhone());
        $stmt->bindParam(':message', $eventoDTO->getMessage());
        $stmt->bindParam(':estimatedAttendees', $eventoDTO->getEstimatedAttendees());
        $stmt->execute();

        return $this->con->lastInsertId();
    }

    public function updateScheduleEvent(EventoDTO $eventoDTO) {
        $sql = "UPDATE scheduleevents SET eventName = :eventName, estimatedDate = :estimatedDate, estimatedHour = :estimatedHour, 
                    contactEmail = :contactEmail, contactPhone = :contactPhone, message = :message, estimatedAttendees = :estimatedAttendees 
                    WHERE id = :id";

        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':eventName', $eventoDTO->getEventName());
        $stmt->bindParam(':estimatedDate', $eventoDTO->getEstimatedDate());
        $stmt->bindParam(':estimatedHour', $eventoDTO->getEstimatedHour());
        $stmt->bindParam(':contactEmail', $eventoDTO->getContactEmail());
        $stmt->bindParam(':contactPhone', $eventoDTO->getContactPhone());
        $stmt->bindParam(':message', $eventoDTO->getMessage());
        $stmt->bindParam(':estimatedAttendees', $eventoDTO->getEstimatedAttendees());
        $stmt->bindParam(':id', $eventoDTO->getId());
        $stmt->execute();

        return $stmt->rowCount();
    }

    public function deleteScheduleEvent($eventId) {
        $sql = "DELETE FROM scheduleevents WHERE id = :id";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':id', $eventId);
        $stmt->execute();

        return $stmt->rowCount();
    }
}