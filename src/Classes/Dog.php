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

    /** Function that returns the Bred For property
     * @return string Bred For property
     */
    public function getBredFor() : string
    {
        return $this->bredFor;
    }

    /** Function that returns the Breed Group property
     * @return string Breed Group property
     */
    public function getBreedGroup() : string
    {
        return $this->breedGroup;
    }

    /** Function that returns the Country Code property
     * @return string Country Code property
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }

    /** Function that returns the Description property
     * @return string Description property
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**  Function that returns the Height(Imperial) property
     * @return string Height (Imperial) property
     */
    public function getHeightImperial() : string
    {
        return $this->heightImperial;
    }

    /** Function that returns the Height(Metric) property
     * @return string Height (Metric) property
     */
    public function getHeightMetric() : string
    {
        return $this->heightMetric;
    }

    /** Function that returns the Life Span property
     * @return string Life Span property
     */
    public function getLifeSpan() : string
    {
        return $this->lifeSpan;
    }

    /** Function that returns the Name property
     * @return string Name property
     */
    public function getName() : string
    {
        return $this->name;
    }

    /** Function that returns the Origin property
     * @return string Origin property
     */
    public function getOrigin() : string
    {
        return $this->origin;
    }

    /** Function that returns the Temperament property
     * @return string Temperament property
     */
    public function getTemperament() : string
    {
        return $this->temperament;
    }

    /** Function that returns the Weight (Imperial) property
     * @return string Weight (Imperial) property
     */
    public function getWeightImperial() : string
    {
        return $this->weightImperial;
    }

    /** Function that returns the Weight (Metric) property
     * @return string Weight (Metric) property
     */
    public function getWeightMetric() : string
    {
        return $this->weightMetric;
    }
}

