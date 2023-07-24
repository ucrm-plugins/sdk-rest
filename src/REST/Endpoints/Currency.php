<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use SpaethTech\UCRM\SDK\REST\Endpoints\EndpointObject;
use SpaethTech\UCRM\SDK\REST\Annotations\CachedAnnotation as Cached;
use SpaethTech\UCRM\SDK\REST\Annotations\EndpointAnnotation as Endpoint;

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
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright Copyright (c) 2020 - Spaeth Technologies Inc.
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
