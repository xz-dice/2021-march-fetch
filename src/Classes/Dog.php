<?php
namespace Fetch\Classes;

Class Dog {
    private $bredFor;
    private $breedGroup;
    private $heightImperial;
    private $heightMetric;
    private $weightImperial;
    private $weightMetric;
    private $lifeSpan;
    private $name;
    private $origin;
    private $temperament;
    private $countryCode;
    private $description;

    /**
     * @return mixed
     */
    public function getBredFor() : string
    {
        return $this->bredFor;
    }

    /**
     * @return mixed
     */
    public function getBreedGroup() : string
    {
        return $this->breedGroup;
    }

    /**
     * @return mixed
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }

    /**
     * @return mixed
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getHeightImperial() : string
    {
        return $this->heightImperial;
    }

    /**
     * @return mixed
     */
    public function getHeightMetric() : string
    {
        return $this->heightMetric;
    }

    /**
     * @return mixed
     */
    public function getLifeSpan() : string
    {
        return $this->lifeSpan;
    }

    /**
     * @return mixed
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getOrigin() : string
    {
        return $this->origin;
    }

    /**
     * @return mixed
     */
    public function getTemperament() : string
    {
        return $this->temperament;
    }

    /**
     * @return mixed
     */
    public function getWeightImperial() : string
    {
        return $this->weightImperial;
    }

    /**
     * @return mixed
     */
    public function getWeightMetric() : string
    {
        return $this->weightMetric;
    }
}

