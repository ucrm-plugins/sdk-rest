<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use SpaethTech\UCRM\SDK\REST\Endpoints\EndpointObject;
use SpaethTech\UCRM\SDK\REST\Annotations\EndpointAnnotation as Endpoint;
use SpaethTech\UCRM\SDK\REST\Annotations\PostAnnotation as Post;
use SpaethTech\UCRM\SDK\REST\Annotations\PostRequiredAnnotation as PostRequired;

use UCRM\REST\Endpoints\Helpers\TaxHelper;

/**
 * Class Tax
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @Endpoint { "get": "/taxes", "getById": "/taxes/:id" }
 * @Endpoint { "post": "/taxes" }
 *
 * @method string|null getName()
 * @method Tax setName(string $name)
 * @method string|null getAgencyName()
 * @method Tax setAgencyName(string $name)
 * @method float|null getRate()
 * @method Tax setRate(float $name)
 * @method bool|null getSelected()
 * @method Tax setSelected(bool $selected)
 *
 */
final class Tax extends EndpointObject
{
    use TaxHelper;

    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var string
     * @PostRequired
     */
    protected $name;

    /**
     * @var string
     * @Post
     */
    protected $agencyName;

    /**
     * Tax rate in percentage.
     *
     * @var float
     * @PostRequired
     */
    protected $rate;

    /**
     * Is selected to be assigned to every new client as default.
     *
     * @var bool
     *
     */
    protected $selected;

}
