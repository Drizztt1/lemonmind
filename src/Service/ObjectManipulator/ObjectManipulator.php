<?php

declare(strict_types=1);

namespace App\Service\ObjectManipulator;

use Pimcore\Model\DataObject\Airport;
use Pimcore\Model\DataObject\Runway;

class ObjectManipulator
{
    public function __construct(
        private AirportManipulator $airportManipulator,
        private RunwayManipulator $runwayManipulator,
    ) {
    }

    /**
     * @param Airport $object
     * @return void
     * @throws \Pimcore\Model\Element\ValidationException
     */
    public function airportValidateCountry(Airport $object): void
    {
        $this->airportManipulator->validateCountry($object);
    }

    /**
     * @param Runway $object
     * @return void
     * @throws \Pimcore\Model\Element\ValidationException
     */
    public function runwayValidateSurface(Runway $object): void
    {
        $this->runwayManipulator->validateSurface($object);
    }
}
