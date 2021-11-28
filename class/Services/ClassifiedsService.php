<?php

namespace App\Services;

use App\Entities\Classified;

class ClassifiedsService
{
    /**
     * Create or update a classified.
     */
    public function setClassified(?string $id, string $title, string $description, string $price): string
    {
        $classifiedId = '';

        $dataBaseService = new DataBaseService();
        if (empty($id)) {
            $classifiedId = $dataBaseService->createClassified($title, $description, $price);
        } else {
            $dataBaseService->updateClassified($id, $title, $description, $price);
            $classifiedId = $id;
        }

        return $classifiedId;
    }

    /**
     * Return all classifieds.
     */
    public function getClassifieds(): array
    {
        $classifieds = [];

        $dataBaseService = new DataBaseService();
        $classifiedsDTO = $dataBaseService->getClassifieds();
        if (!empty($classifiedsDTO)) {
            foreach ($classifiedsDTO as $classifiedDTO) {
                // Get classifieds :
                $classifieds = new Classified();
                $classifieds->setId($classifiedDTO['id']);
                $classifieds->setTitle($classifiedDTO['title']);
                $classifieds->setDescription($classifiedDTO['description']);
                $classifieds->setPrice($classifiedDTO['price']);
            }

            /*  // Get classified of this user :
              $classified = $this->getUserClassifieds($classifiedDTO['id']);
              $classified->setClassifieds($classifieds);

              $classifieds[] = $classified; */
        }

        return $classifieds;
    }

    /**
     * Delete a classified.
     */
    public function deleteClassified(string $id): bool
    {
        $isOk = false;

        $dataBaseService = new DataBaseService();
        $isOk = $dataBaseService->deleteClassified($id);

        return $isOk;
    }
}
