<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use SpaethTech\UCRM\SDK\REST\Endpoints\EndpointObject;
use SpaethTech\UCRM\SDK\REST\Annotations\EndpointAnnotation as Endpoint;
use SpaethTech\UCRM\SDK\REST\Annotations\ExcludeIdAnnotation as ExcludeId;

/**
 * Class Version
 *
 * @Endpoint { "get": "/version" }
 * @ExcludeId
 *
 * @method string|null getVersion()
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright Copyright (c) 2020 - Spaeth Technologies Inc.
 * @final
 */
final class Version extends EndpointObject
{
    /**
     * @var string
     */
    protected $version;

}
