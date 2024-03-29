<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints\Lookups;

use SpaethTech\UCRM\SDK\REST\Annotations\PostAnnotation as Post;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchAnnotation as Patch;

/**
 * Class ServicePlanPeriod
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @method int|null getPeriod()
 * @method QuoteItem setPeriod(int $period)
 * @method float|null getPrice()
 * @method QuoteItem setPrice(float $price)
 * @method bool|null getEnabled()
 * @method QuoteItem setEnabled(bool $enabled)
 *
 */
final class ServicePlanPeriod extends Lookup
{

    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var int
     */
    protected $period;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var bool
     */
    protected $enabled;

}
