<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use MVQN\REST\Endpoints\EndpointObject;
use MVQN\REST\Annotations\EndpointAnnotation as Endpoint;

use UCRM\REST\Endpoints\Helpers\StateHelper;

/**
 * Class State
 *
 * @Endpoint { "getById": "/countries/states/:id" }
 *
 * @method int|null getCountryId()
 * @method string|null getName()
 * @method string|null getCode()
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright Copyright (c) 2020 - Spaeth Technologies Inc.
 * @final
 */
final class State extends EndpointObject
{
    use StateHelper;

    /**
     * @var int
     */
    protected $countryId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $code;

}
