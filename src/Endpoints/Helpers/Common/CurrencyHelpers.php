<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints\Helpers\Common;

use UCRM\REST\Endpoints\Currency;

/**
 * Trait CurrencyHelpers
 *
 * @package UCRM\REST\Endpoints\Helpers\Common
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 */
trait CurrencyHelpers
{
    // =================================================================================================================
    // HELPER METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @return Currency|null
     * @throws \Exception
     */
    public function getCurrency(): ?Currency
    {
        if(property_exists($this, "currencyId") && $this->{"currencyId"} !== null)
            $currency = Currency::getById($this->{"currencyId"});
        elseif(property_exists($this, "currencyCode") && $this->{"currencyCode"} !== null)
            $currency = Currency::getByCode($this->{"currencyCode"});

        /** @var Currency $currency */
        return $currency;
    }

    /**
     * @param Currency $value
     * @return self Returns the appropriate Endpoint instance, for method chaining purposes.
     */
    public function setCurrency(Currency $value): self
    {
        $this->{"currencyId"} = $value->getId();

        /** @var self $this */
        return $this;
    }

    /**
     * @param string $code
     * @return self Returns the appropriate Endpoint instance, for method chaining purposes.
     * @throws \Exception
     */
    public function setCurrencyByCode(string $code): self
    {
        $currency = Currency::getByCode($code);
        $this->{"currencyId"} = $currency->getId();

        /** @var self $this */
        return $this;
    }


}
