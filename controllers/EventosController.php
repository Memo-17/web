<?php

require_once 'models/EventosModel/EventosModel.php';
require_once 'models/EventosModel/EventoDTO.php';

require_once "helpers/sanitizers.php";

class EventosController {
    private $model;

    public function __construct() {
        $this->model = new EventosModel();
    }

    public function index() {
        require_once 'views/principal.php';
    }

    public function showEvents() {
        $rangeId = $_GET['range'];

        $scheduleEvents = $this->model->getAllScheduleEventsBySize($rangeId);
        $attendeesRanges = $this->model->getAttendeesRanges();
        require_once 'views/principal/scheduleEvents.php';
    }

    public function scheduleForm() {
        $scheduleEvent = null;

        if ( isset($_GET['id']) ) {
            $scheduleEvent = $this->model->getScheduleEventById($_GET['id']);
        }

        $attendeesRanges = $this->model->getAttendeesRanges();

        require_once 'views/principal/scheduleForm.php';
    }

    public function createScheduleEvent() {
        $eventoDTO = new EventoDTO();

        $eventoDTO->setEventName(sanitizeText($_POST['eventName']));
        $eventoDTO->setEstimatedDate(sanitizeText($_POST['estimatedDate']));
        $eventoDTO->setEstimatedHour(sanitizeText($_POST['estimatedHour']));
        $eventoDTO->setContactEmail(sanitizeText($_POST['contactEmail']));
        $eventoDTO->setContactPhone(sanitizeText($_POST['contactPhone']));
        $eventoDTO->setMessage(sanitizeText($_POST['message']));
        $eventoDTO->setEstimatedAttendees(sanitizeText($_POST['estimatedAttendees']));

        $scheduleEventId = $this->model->createScheduleEvent($eventoDTO);

        header('Location: index.php?c=eventos&a=showEvents&range='.$eventoDTO->getEstimatedAttendees());
    }

    public function updateScheduleEvent() {
        $eventoDTO = new EventoDTO();

        $eventoDTO->setId(sanitizeText($_GET['id']));
        $eventoDTO->setEventName(sanitizeText($_POST['eventName']));
        $eventoDTO->setEstimatedDate(sanitizeText($_POST['estimatedDate']));
        $eventoDTO->setEstimatedHour(sanitizeText($_POST['estimatedHour']));
        $eventoDTO->setContactEmail(sanitizeText($_POST['contactEmail']));
        $eventoDTO->setContactPhone(sanitizeText($_POST['contactPhone']));
        $eventoDTO->setMessage(sanitizeText($_POST['message']));
        $eventoDTO->setEstimatedAttendees(sanitizeText($_POST['estimatedAttendees']));

        var_dump($eventoDTO);

        $this->model->updateScheduleEvent($eventoDTO);

        header('Location: index.php?c=eventos&a=showEvents&range='.$eventoDTO->getEstimatedAttendees());
    }

    public function deleteScheduleEvent() {
        $eventId = sanitizeText($_POST['id']);

        $this->model->deleteScheduleEvent($eventId);

        header('Location: index.php?c=eventos&a=showEvents&range='.$_POST['estimatedAttendees']);
    }
}
?>