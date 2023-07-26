<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\UCRM\SDK\REST\Endpoints;

//use SpaethTech\UCRM\SDK\REST\Endpoints\EndpointObject;
//use SpaethTech\UCRM\SDK\REST\Annotations\CachedAnnotation as Cached;
//use SpaethTech\UCRM\SDK\REST\Annotations\EndpointAnnotation as Endpoint;

//use UCRM\REST\Endpoints\Helpers\CountryHelper;
use SpaethTech\UCRM\SDK\JSON\JsonObject;
use SpaethTech\UCRM\SDK\REST\Attributes\Endpoint;

/**
 * Class Country
 *
 * @Cached
 *
 * @Endpoint { "get": "/countries", "getById": "/countries/:id" }
 *
 * @method string|null getName()
 * @method string|null getCode()
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright Copyright (c) 2020 - Spaeth Technologies Inc.
 * @final
 */
final class Country extends EndpointObject
{
    use CountryHelper;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $code;

}
