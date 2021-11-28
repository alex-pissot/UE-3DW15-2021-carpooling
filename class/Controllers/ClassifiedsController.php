<?php

namespace App\Controllers;

use App\Services\ClassifiedsService;

class ClassifiedsController
{
    /**
     * Return the html for the create action.
     */
    public function createClassified(): string
    {
        $html = '';

        // If the form have been submitted :
        if (isset($_POST['title']) &&
            isset($_POST['description']) &&
            isset($_POST['price'])) {
            // Create the classified :
            $classifiedsService = new ClassifiedsService();
            $classifiedId = $classifiedsService->setClassified(
                null,
                $_POST['title'],
                $_POST['description'],
                $_POST['price']
            );

            /*   // Create the user classifieds relations :
               $isOk = true;
               if (!empty($_POST['classifieds'])) {
                   foreach ($_POST['classifieds'] as $classifiedId) {
                       $isOk = $classifiedsService->setUserClassified($userId, $classifiedId);
                   }
               }
               if ($classifiedId && $isOk) {
                   $html = 'Annonce créée avec succès.';
               } else {
                   $html = 'Erreur lors de la création de l\'annonce.';
               } */
        }

        return $html;
    }

    /**
     * Return the html for the read action.
     */
    public function getClassifieds(): string
    {
        $html = '';

        // Get all classifieds :
        $classifiedsService = new ClassifiedsService();
        $classifieds = $classifiedsService->getClassifieds();

        // Get html :
        foreach ($classifieds as $classified) {
            $classifiedsHtml = '';
            if (!empty($classified->getClassifieds())) {
                foreach ($classified->getClassifieds() as $classified) {
                    $classifiedsHtml .= $classified->getTitle() . ' ' . $classified->getDescription() . ' ' . $classified->getPrice() . ' ';
                }
            }
            $html .=
                '#' . $classified->getId() . ' ' .
                $classified->getTitle() . ' ' .
                $classified->getDescription() . ' ' .
                $classified->getPrice() . ' ' .
                $classifiedsHtml . '<br />';
        }

        return $html;
    }

    /**
    * Update the classified.
    */
    public function updateClassified(): string
    {
        $html = '';

        // If the form have been submitted :
        if (isset($_POST['id']) &&
            isset($_POST['title']) &&
            isset($_POST['description']) &&
            isset($_POST['price'])) {
            // Update the classified :
            $carsService = new ClassifiedsService();
            $isOk = $carsService->setClassified(
                $_POST['id'],
                $_POST['title'],
                $_POST['description'],
                $_POST['price']
            );
            if ($isOk) {
                $html = 'Annonce mise à jour avec succès.';
            } else {
                $html = 'Erreur lors de la mise à jour de l\'annonce.';
            }
        }

        return $html;
    }

    /**
     * Delete a classified.
     */
    public function deleteClassified(): string
    {
        $html = '';

        // If the form have been submitted :
        if (isset($_POST['id'])) {
            // Delete the car :
            $classifiedsService = new ClassifiedsService();
            $isOk = $classifiedsService->deleteClassified($_POST['id']);
            if ($isOk) {
                $html = 'Annonce supprimée avec succès.';
            } else {
                $html = 'Erreur lors de la supression de l\'annonce.';
            }
        }
        
        return $html;
    }
}
