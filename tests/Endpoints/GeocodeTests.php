<?php
/** @noinspection SpellCheckingInspection */
/** @noinspection PhpUnusedAliasInspection */
/** @noinspection PhpUnhandledExceptionInspection */
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use Exception;
use MVQN\Collections\Collection;
use MVQN\REST\Endpoints\EndpointObject;
use MVQN\REST\RestClient;
use UCRM\REST\Endpoints\Version;

/**
 * Class GeocodeTests
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 */
class GeocodeTests extends EndpointTestCase
{
    #region Geocode

    /**
     * @throws Exception
     */
    public function testGeocodeFromAddress()
    {
        $geocode = Geocode::fromAddress("235 North Main Street, Yerington, Nevada, United States");

        print_r($geocode->getLat());
        echo ", ";
        print_r($geocode->getLon());
        echo "\n";

        print_r($geocode->getAddressComponents());

        print_r($geocode->getAddressComponent("city"));
        echo "\n";

        print_r($geocode->getDisplayName());

    }

    /*
    public function testGeocodeSuggest()
    {
        //$geocode = Geocode::suggest("235 North Main Street");
        //print_r($geocode);
    }
    */

    #endregion


}
