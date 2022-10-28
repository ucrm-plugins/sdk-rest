<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use MVQN\REST\Endpoints\EndpointObject;
use MVQN\REST\Annotations\EndpointAnnotation as Endpoint;
use MVQN\REST\Annotations\ExcludeIdAnnotation as ExcludeId;

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
