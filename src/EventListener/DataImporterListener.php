<?php

declare(strict_types=1);

namespace App\EventListener;

use App\Service\ObjectManipulator\ObjectManipulator;
use Pimcore\Bundle\DataImporterBundle\Event\DataObject\PreSaveEvent;
use Pimcore\Model\DataObject\Airport;
use Pimcore\Model\DataObject\Runway;
use Pimcore\Model\Element\ValidationException;

class DataImporterListener
{
    public function __construct(
        private ObjectManipulator $objectManipulator,
    ) {
    }

    /**
     * @throws ValidationException
     */
    public function __invoke(PreSaveEvent $event): void
    {
        $configName = $event->getConfigName();

        if ($configName !== 'airport' && $configName !== 'runway') {
            return;
        }

        $dataObject = $event->getDataObject();

        match ($dataObject::class) {
            Airport::class => $this->objectManipulator->airportValidateCountry($dataObject),
            Runway::class => $this->objectManipulator->runwayValidateSurface($dataObject),
        };
    }
}
