<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints\Lookups;

use SpaethTech\UCRM\SDK\REST\Annotations\PostAnnotation as Post;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchAnnotation as Patch;

/**
 * Class QuoteTax
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @method string|null getName()
 * @method InvoiceTax setName(string $name)
 * @method float|null getTotalValue()
 * @method InvoiceTax setTotalValue(float $value)
 *
 */
final class QuoteTax extends Lookup
{
    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var string
     */
    protected $name;

    /**
     * @var float
     */
    protected $totalValue;

}
