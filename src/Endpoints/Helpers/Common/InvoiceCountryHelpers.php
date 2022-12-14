<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints\Helpers\Common;

use UCRM\REST\Endpoints\Country;

/**
 * Trait InvoiceCountryHelpers
 *
 * @package UCRM\REST\Endpoints\Helpers\Common
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 */
trait InvoiceCountryHelpers
{
    // =================================================================================================================
    // HELPER METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @return Country|null
     * @throws \Exception
     */
    public function getInvoiceCountry(): ?Country
    {
        $country = null;

        if(property_exists($this, "invoiceCountryId") && $this->{"invoiceCountryId"} !== null)
            $country = Country::getById($this->{"invoiceCountryId"});

        /** @var Country $country */
        return $country;
    }

    /**
     * @param Country $value
     * @return self Returns the appropriate Endpoint instance, for method chaining purposes.
     */
    public function setInvoiceCountry(Country $value): self
    {
        $this->{"invoiceCountryId"} = $value->getId();

        /** @var self $this */
        return $this;
    }

    /**
     * @param string $name
     * @return self Returns the appropriate Endpoint instance, for method chaining purposes.
     * @throws \Exception
     */
    public function setInvoiceCountryByName(string $name): self
    {
        $country = Country::getByName($name);
        $this->{"invoiceCountryId"} = $country->getId();

        /** @var self $this */
        return $this;
    }

    /**
     * @param string $code
     * @return self Returns the appropriate Endpoint instance, for method chaining purposes.
     * @throws \Exception
     */
    public function setInvoiceCountryByCode(string $code): self
    {
        $country = Country::getByCode($code);
        $this->{"invoiceCountryId"} = $country->getId();

        /** @var self $this */
        return $this;
    }
}
