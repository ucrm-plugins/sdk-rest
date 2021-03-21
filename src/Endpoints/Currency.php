<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use MVQN\REST\Endpoints\EndpointObject;
use MVQN\REST\Annotations\CachedAnnotation as Cached;
use MVQN\REST\Annotations\EndpointAnnotation as Endpoint;

/**
 * Class Currency
 *
 * @Cached
 *
 * @Endpoint { "get": "/currencies", "getById": "/currencies/:id" }
 *
 * @method string|null getName()
 * @method string|null getCode()
 * @method string|null getSymbol()
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 * @copyright Copyright (c) 2020 - Spaeth Technologies, Inc.
 * @final
 */
final class Currency extends EndpointObject
{
    use Helpers\CurrencyHelper;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $symbol;

}
