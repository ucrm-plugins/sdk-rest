<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints\Helpers;

use Exception;
use SpaethTech\UCRM\SDK\Collections\Collection;
use Psr\Http\Message\ResponseInterface;
use UCRM\REST\Endpoints\Email;
use UCRM\REST\Endpoints\Lookups\EmailAttachment;

/**
 * Trait EmailHelper
 *
 * @package UCRM\REST\Endpoints\Helpers
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 */
trait EmailHelper
{
    // =================================================================================================================
    // OBJECT METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @param int $organizationId
     * @return bool
     * @throws Exception
     */
    public function enqueue(int $organizationId = 1): bool
    {
        /** @var Email $this */
        self::post($this, [ "organizationId" => $organizationId ], $response);

        /** @var ResponseInterface $response */
        return $response->getStatusCode() === 201;
    }



    // =================================================================================================================
    // CREATE METHODS
    // -----------------------------------------------------------------------------------------------------------------

    // =================================================================================================================
    // READ METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @param string $name
     * @return Collection
     * @throws Exception
     */
    public static function getByName(string $name): Collection
    {
        return Currency::get()->where("name", $name);
    }

    /**
     * @param string $code
     * @return Currency|null
     * @throws Exception
     */
    public static function getByCode(string $code): ?Currency
    {
        $currencies = Currency::get();

        /** @var Currency $currency */
        $currency = $currencies->where("code", $code)->first();
        return $currency;
    }

    /**
     * @param string $symbol
     * @return Collection
     * @throws Exception
     */
    public static function getBySymbol(string $symbol): Collection
    {
        return Currency::get()->where("symbol", $symbol);
    }

    // =================================================================================================================
    // UPDATE METHODS
    // -----------------------------------------------------------------------------------------------------------------

    // =================================================================================================================
    // DELETE METHODS
    // -----------------------------------------------------------------------------------------------------------------

    // =================================================================================================================
    // EXTRA FUNCTIONS
    // -----------------------------------------------------------------------------------------------------------------

}
