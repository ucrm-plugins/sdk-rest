<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use SpaethTech\UCRM\SDK\REST\Endpoints\EndpointObject;
use SpaethTech\UCRM\SDK\REST\Annotations\EndpointAnnotation as Endpoint;

/**
 * Class Vendor
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @Endpoint { "get": "/vendors", "getById": "/vendors/:id" }
 *
 * @method string|null getName()
 *
 */
final class Vendor extends EndpointObject
{
    use Helpers\VendorHelper;

    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var string
     */
    protected $name;

}
