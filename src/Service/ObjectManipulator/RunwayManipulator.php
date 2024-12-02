<?php

declare(strict_types=1);

namespace App\Service\ObjectManipulator;

use Pimcore\Model\DataObject\Runway;
use Pimcore\Model\Element\ValidationException;

class RunwayManipulator
{
    private const CORRECT_WORDS = ['GRAVEL', 'GRASS', 'TURF', 'TURF-F'];

    /**
     * @param Runway $runway
     * @return void
     * @throws ValidationException
     */
    public function validateSurface(Runway $runway): void
    {
        $percentMax = 0;

        foreach (self::CORRECT_WORDS as $word) {
            $surface = $runway->getSurface();

            similar_text($word, $surface, $percent);
//            levenshtein($word, $surface);

            if ($percent == 100) {
                if (!ctype_upper($surface)) {
                    $runway->setSurface(strtoupper($surface));
                }
                break;
            } elseif ($percent >= 50 && $percent > $percentMax) {
                $percentMax = $percent;
                $runway->setSurface($word);
            } else {
                $runway->setSurface(strtoupper($surface));
            }
        }
    }
}
