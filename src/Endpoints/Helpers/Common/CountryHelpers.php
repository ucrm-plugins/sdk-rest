<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints\Helpers\Common;

use UCRM\REST\Endpoints\Country;

/**
 * Trait CountryHelpers
 *
 * @package UCRM\REST\Endpoints\Helpers\Common
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 */
trait CountryHelpers
{
    // =================================================================================================================
    // HELPER METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @return Country|null
     * @throws \Exception
     */
    public function getCountry(): ?Country
    {
        $country = null;

        if(property_exists($this, "countryId") && $this->{"countryId"} !== null)
            $country = Country::getById($this->{"countryId"});

        /** @var Country $country */
        return $country;
    }

    /**
     * @param Country $value
     * @return self Returns the appropriate Endpoint instance, for method chaining purposes.
     */
    public function setCountry(Country $value): self
    {
        $this->{"countryId"} = $value->getId();

        /** @var self $this */
        return $this;
    }

    /**
     * @param string $name
     * @return self Returns the appropriate Endpoint instance, for method chaining purposes.
     * @throws \Exception
     */
    public function setCountryByName(string $name): self
    {
        $country = Country::getByName($name);
        $this->{"countryId"} = $country->getId();

        /** @var self $this */
        return $this;
    }

    /**
     * @param string $code
     * @return self Returns the appropriate Endpoint instance, for method chaining purposes.
     * @throws \Exception
     */
    public function setCountryByCode(string $code): self
    {
        $country = Country::getByCode($code);
        $this->{"countryId"} = $country->getId();

        /** @var self $this */
        return $this;
    }
}
