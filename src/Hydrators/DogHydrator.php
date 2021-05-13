<?php
namespace Fetch\Hydrators;

use Fetch\Classes\Dog;

Class DogHydrator {

    /** Function to retrieve all dogs with all data from database
     * @param \PDO $db takes a parameter that is the database of dogs
     * @return array of dog objects from database
     */
    public static function getDogs(\PDO $db, string $dogTemperament = ''): array{
        $query = $db->prepare("SELECT `id`, `name`, `temperament`, `weight_imperial` AS 'weightImperial', `weight_metric` AS 'weightMetric', `height_imperial` AS 'heightImperial', `height_metric` AS 'heightMetric', `bred_for` AS 'bredFor', `breed_group` AS 'breedGroup', `life_span` AS 'lifeSpan', `origin`, `country_code` AS 'countryCode', `description` FROM `dogs` WHERE `temperament` LIKE '%$dogTemperament%';");
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, \Fetch\Classes\Dog::class);
        return $query->fetchAll();
    }

    /** Function to retrieve a single dog with all data from database
     * @param \PDO $db takes a parameter that is the database of dogs
     * @param string $dogId takes string containing dog ID from get request
     * @return array array containing a single dog object from database or a false boolean if not present
     */
    public static function getSingleDog(\PDO $db, string $dogId): array {
        $query = $db->prepare("SELECT `id`, `name`, `temperament`, `weight_imperial` AS 'weightImperial', `weight_metric` AS 'weightMetric', `height_imperial` AS 'heightImperial', `height_metric` AS 'heightMetric', `bred_for` AS 'bredFor', `breed_group` AS 'breedGroup', `life_span` AS 'lifeSpan', `origin`, `country_code` AS 'countryCode', `description` FROM `dogs` WHERE `id` = :DogId;");
        $query->bindParam(':DogId', $dogId);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, \Fetch\Classes\Dog::class);
        return [$query->fetch()];
    }
}