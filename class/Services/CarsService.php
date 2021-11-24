<?php

namespace App\Services;

use App\Entities\Car;
use App\Entities\User;
use DateTime;

class CarsService
{
    /**
     * Create or update an car.
     */
    public function setCar(?string $id, string $brand, string $model, string $color, int $nbrSlots): string
    {
        $carId = '';

        $dataBaseService = new DataBaseService();
        if (empty($id)) {
            $carId = $dataBaseService->createCar($brand, $model, $color, $nbrSlots);
        } else {
            $dataBaseService->updateCar($id, $brand, $model, $color, $nbrSlots);
            $carId = $id;
        }

        return $carId;
    }

    /**
     * Return all cars.
     */
    public function getCars(): array
    {
        $cars = [];

        $dataBaseService = new DataBaseService();
        $carsDTO = $dataBaseService->getCars();
        if (!empty($carsDTO)) {
            foreach ($carsDTO as $carDTO) {
                // Get car :
                $car = new Car();
                $car->setId($carDTO['id']);
                $car->setBrand($carDTO['brand']);
                $car->setModel($carDTO['model']);
                $car->setColor($carDTO['color']);
                $car->setNbrSlots($carDTO['nbrSlots']);
                
                }

              /*  // Get cars of this user :
                $cars = $this->getUserCars($userDTO['id']);
                $user->setCars($cars);

                $users[] = $user; */
            }

        return $cars;
    }

    /**
     * Delete an car.
     */
    public function deleteCar(string $id): bool
    {
        $isOk = false;

        $dataBaseService = new DataBaseService();
        $isOk = $dataBaseService->deleteCar($id);

        return $isOk;
    }

    /**
     * Create relation bewteen an user and his car.
     */
    /* public function setUserCar(string $userId, string $carId): bool
    {
        $isOk = false;

        $dataBaseService = new DataBaseService();
        $isOk = $dataBaseService->setUserCar($userId, $carId);

        return $isOk;
    } */

    /**
     * Get cars of given user id.
     */
    /* public function getUserCars(string $userId): array
    {
        $userCars = [];

        $dataBaseService = new DataBaseService();

        // Get relation users and cars :
        $usersCarsDTO = $dataBaseService->getUserCars($userId);
        if (!empty($usersCarsDTO)) {
            foreach ($usersCarsDTO as $userCarDTO) {
                $car = new Car();
                $car->setId($userCarDTO['id']);
                $car->setBrand($userCarDTO['brand']);
                $car->setModel($userCarDTO['model']);
                $car->setColor($userCarDTO['color']);
                $car->setNbrSlots($userCarDTO['nbrSlots']);
                $userCars[] = $car;
            }
        }

        return $userCars;
    } */
}

