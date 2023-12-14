<?php

namespace Database\Factories\Helpers;

/**
 */
class FactoryHelper
{
    /**
     * This function will get a random model id from the database.
     *
     * @param string $model | HasFactory $model
     * @return integer
     */
    public static function getRandomModelId(string $model): int
    {
        $count = $model::query()->count();

        if ($count === 0) {
            return $model::factory()->create()->id;
        }

        return rand(1, $count);
    }
}