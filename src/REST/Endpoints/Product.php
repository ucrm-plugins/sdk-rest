<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use SpaethTech\UCRM\SDK\REST\Endpoints\EndpointObject;
use SpaethTech\UCRM\SDK\REST\Annotations\EndpointAnnotation as Endpoint;
use SpaethTech\UCRM\SDK\REST\Annotations\PostAnnotation as Post;
use SpaethTech\UCRM\SDK\REST\Annotations\PostRequiredAnnotation as PostRequired;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchAnnotation as Patch;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchRequiredAnnotation as PatchRequired;

use UCRM\REST\Endpoints\Helpers\ProductHelper;

/**
 * Class Product
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @Endpoint { "get": "/products", "getById": "/products/:id" }
 * @Endpoint { "post": "/products" }
 * @Endpoint { "patch": "/products/:id" }
 *
 * @method string|null getName()
 * @method Product setName(string $name)
 * @method string|null getInvoiceLabel()
 * @method Product setInvoiceLabel(string $label)
 * @method float|null getPrice()
 * @method Product setPrice(float $price)
 * @method string|null getUnit()
 * @method Product setUnit(string $unit)
 * @method bool|null getTaxable()
 * @method Product setTaxable(bool $taxable)
 *
 */
final class Product extends EndpointObject
{
    use ProductHelper;

    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var string
     * @PostRequired
     * @PatchRequired
     */
    protected $name;

    /**
     * @var string
     * @Post
     * @Patch
     */
    protected $invoiceLabel;

    /**
     * @var float
     * @PostRequired
     * @PatchRequired
     */
    protected $price;

    /**
     * @var string
     * @Post
     * @Patch
     */
    protected $unit;

    /**
     * @var bool
     * @Post
     * @Patch
     */
    protected $taxable;

}
