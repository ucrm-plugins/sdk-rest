<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use SpaethTech\UCRM\SDK\REST\Endpoints\EndpointObject;
use SpaethTech\UCRM\SDK\REST\Annotations\EndpointAnnotation as Endpoint;

/**
 * Class Site
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @Endpoint { "get": "/sites", "getById": "/sites/:id" }
 *
 * @method string|null getName()
 * @method string|null getAddress()
 * @method string|null getGpsLat()
 * @method string|null getGpsLon()
 * @method string|null getContactInfo()
 * @method string|null getNotes()
 *
 */
final class Site extends EndpointObject
{

    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $gpsLat;

    /**
     * @var string
     */
    protected $gpsLon;

    /**
     * @var string
     */
    protected $contactInfo;

    /**
     * @var string
     */
    protected $notes;

}
