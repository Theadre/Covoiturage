<?php
require('DatabaseService.php');
class ReservationService
{
    public function add($data): bool
    {
        $isOk = false;

        $service = new DataBaseService();
        $isOk = $service->ajouterReservation($data);

        return $isOk;
    }

    public function getAll(): array
    {
        $objects = [];
        $service = new DataBaseService();
        $list = $service->getAll('Reservation');

        foreach ($list as $element) {
            $o = new Reservation($element['id'], $element['date'], $element['idUtilisateur'], $element['idAnnonce'], $element['status']);
            $objects[] = $o;
        }

        return $objects;
    }
}
