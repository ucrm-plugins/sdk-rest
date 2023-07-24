<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use SpaethTech\UCRM\SDK\REST\Endpoints\EndpointObject;
use SpaethTech\UCRM\SDK\REST\Annotations\EndpointAnnotation as Endpoint;
use SpaethTech\UCRM\SDK\REST\Annotations\PostAnnotation as Post;
use SpaethTech\UCRM\SDK\REST\Annotations\PostRequiredAnnotation as PostRequired;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchAnnotation as Patch;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchRequiredAnnotation as PatchRequired;

use UCRM\REST\Endpoints\Helpers\ServiceSurchargeHelper;

/**
 * Class ServiceSurcharge
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @Endpoint { "get": "/clients/services/:serviceId/service-surcharges" }
 * @Endpoint { "getById": "/clients/services/service-surcharges/:id" }
 * @Endpoint { "post": "/clients/services/:serviceId/service-surcharges" }
 * @Endpoint { "patch": "/clients/services/service-surcharges/:id" }
 *
 * @method int|null getServiceId()
 * @method ServiceSurcharge setServiceId(int $id)
 * @method int|null getSurchargeId()
 * @method ServiceSurcharge setSurchargeId(int $id)
 * @method string|null getInvoiceLabel()
 * @method ServiceSurcharge setInvoiceLabel(string $label)
 * @method float|null getPrice()
 * @method ServiceSurcharge setPrice(float $price)
 * @method bool|null getTaxable()
 * @method ServiceSurcharge setTaxable(bool $taxable)
 *
 */
final class ServiceSurcharge extends EndpointObject
{
    use ServiceSurchargeHelper;

    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------
    /**
     * @var int
     */
    protected $serviceId;

    /**
     * @var int
     * @PostRequired
     * @PatchRequired
     */
    protected $surchargeId;

    /**
     * @var string
     * @Post
     * @Patch
     */
    protected $invoiceLabel;

    /**
     * @var float
     * @Post
     * @Patch
     */
    protected $price;

    /**
     * @var bool
     * @Post
     * @Patch
     */
    protected $taxable;

}
