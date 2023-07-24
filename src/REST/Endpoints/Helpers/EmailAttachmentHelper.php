<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints\Helpers;

use Exception;
use SpaethTech\UCRM\SDK\Collections\Collection;
use Psr\Http\Message\ResponseInterface;
use UCRM\REST\Endpoints\Email;
use UCRM\REST\Endpoints\Lookups\EmailAttachment;

/**
 * Trait EmailAttachmentHelper
 *
 * @package UCRM\REST\Endpoints\Helpers
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 */
trait EmailAttachmentHelper
{
    // =================================================================================================================
    // OBJECT METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @param string $path
     * @return EmailAttachment
     * @throws Exception
     */
    public static function createFromFile(string $path): ?EmailAttachment
    {
        if(!file_exists($path))
            return null;

        return (new EmailAttachment())
            ->setFile(base64_encode(file_get_contents($path)))
            ->setFilename(basename($path))
            ->setMimeType(mime_content_type($path));
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
