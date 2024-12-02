<?php

declare(strict_types=1);

namespace App\Service\ObjectManipulator;

use Pimcore\Model\DataObject\Airport;
use Pimcore\Model\Element\ValidationException;

class AirportManipulator
{
    /**
     * @param Airport $airport
     * @return void
     * @throws ValidationException
     */
    public function validateCountry(Airport $airport): void
    {
        if ($airport->getIsoCountry() !== 'PL') {
            throw new ValidationException('Wrong country');
        }
    }
}
