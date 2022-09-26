<?php

declare(strict_types=1);

namespace EinarHansen\FootballData\Traits;

trait MapsCollections
{
    /**
     * Transform the items of the collection to the given class.
     *
     * @param  array<int, array<string, string>>  $collection
     * @param  string  $class
     * @param  array<string, string>  $extraData
     * @return array
     */
    protected function mapToArray(array $collection, $class, array $extraData = []): array
    {
        return array_map(function ($data) use ($class, $extraData) {
            return new $class($data + $extraData, $this->forge);
        }, $collection);
    }
}
