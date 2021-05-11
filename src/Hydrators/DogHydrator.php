<?php
namespace Fetch\Hydrators;

Class DogHydrator {

    /** Function to retrieve all dogs with all data from database
     * @param \PDO $db takes a parameter that is the database of dogs
     * @return array of dog objects from database
     */
    public static function getDogs(\PDO $db){
        $query = $db->prepare("SELECT `name`, `temperament`, `weight_imperial` AS 'weightImperial', `weight_metric` AS 'weightMetric', `height_imperial` AS 'heightImperial', `height_metric` AS 'heightMetric', `bred_for` AS 'bredFor', `breed_group` AS 'breedGroup', `life_span` AS 'lifeSpan', `origin`, `country_code` AS 'countryCode', `description` FROM `dogs`;");
    $query->execute();
    $query->setFetchMode(\PDO::FETCH_CLASS, \Fetch\Classes\Dog::class);
    return $query->fetchAll();
    }
}


