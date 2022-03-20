<?php

class EventoDTO {
    public $id;
    public $eventName;
    public $estimatedDate;
    public $estimatedHour;
    public $contactEmail;
    public $contactPhone;
    public $message;
    public $estimatedAttendees;

    public function __construct(){}

    public function getId() {
        return $this->id;
    }

    public function getEventName() {
        return $this->eventName;
    }

    public function getEstimatedDate() {
        return $this->estimatedDate;
    }

    public function getEstimatedHour() {
        return $this->estimatedHour;
    }

    public function getContactEmail() {
        return $this->contactEmail;
    }

    public function getContactPhone() {
        return $this->contactPhone;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getEstimatedAttendees() {
        return $this->estimatedAttendees;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setEventName($eventName) {
        $this->eventName = $eventName;
    }

    public function setEstimatedDate($estimatedDate) {
        $this->estimatedDate = $estimatedDate;
    }

    public function setEstimatedHour($estimatedHour) {
        $this->estimatedHour = $estimatedHour;
    }

    public function setContactEmail($contactEmail) {
        $this->contactEmail = $contactEmail;
    }

    public function setContactPhone($contactPhone) {
        $this->contactPhone = $contactPhone;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function setEstimatedAttendees($estimatedAttendees) {
        $this->estimatedAttendees = $estimatedAttendees;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'eventName' => $this->eventName,
            'estimatedDate' => $this->estimatedDate,
            'estimatedHour' => $this->estimatedHour,
            'contactEmail' => $this->contactEmail,
            'contactPhone' => $this->contactPhone,
            'message' => $this->message,
            'estimatedAttendees' => $this->estimatedAttendees
        ];
    }

    public static function fromArray($array) {
        return new EventoDTO(
            $array['id'],
            $array['eventName'],
            $array['estimatedDate'],
            $array['estimatedHour'],
            $array['contactEmail'],
            $array['contactPhone'],
            $array['message'],
            $array['estimatedAttendees']
        );
    }
}