<?php
/** @noinspection PhpUnused */
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use Exception;
use SpaethTech\UCRM\SDK\REST\Endpoints\EndpointObject;
use SpaethTech\UCRM\SDK\REST\Annotations\EndpointAnnotation as Endpoint;

/**
 * Class Geocode
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @Endpoint { "get": "/geocode" }
 *
 * @method string|null getLat()
 * @method string|null getLon()
 * @method string|null getDisplayName()
 * @method array|null  getAddressComponents()
 *
 * @see    string|null getAddressComponent(string $component)
 * @see    Geocode   geocode(string $address)
 */
final class Geocode extends EndpointObject
{
    /**
     * @var string
     */
    protected $lat;

    /**
     * @var string
     */
    protected $lon;

    /**
     * @var string
     */
    protected $displayName;

    /**
     * @var array
     */
    protected $addressComponents;

    /**
     * @param string $component
     * @return string|null
     */
    public function getAddressComponent(string $component): ?string
    {
        if(!$this->addressComponents || !array_key_exists($component, $this->addressComponents))
            return null;

        return $this->addressComponents[$component];
    }


    /**
     * @param string $address
     * @return Geocode
     * @throws Exception
     */
    public static function fromAddress(string $address): self
    {
        /** @var Geocode $response */
        $response = self::get("", [], [ "address" => $address ])->first();
        return $response;
    }

    /**
     * @param string $query
     * @return Geocode
     * @throws Exception
     */
    public static function suggest(string $query): self
    {
        /** @var Geocode $response */
        $response = self::get("/geocode/suggest", [], [ "query" => $query ])->first();
        return $response;
    }


}
