<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints\Lookups;

use SpaethTech\UCRM\SDK\REST\Annotations\PostAnnotation as Post;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchAnnotation as Patch;

use SpaethTech\UCRM\SDK\Collections\Collection;

/**
 * Class TicketActivityStatusChange
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @method int|null getStatus()
 */
final class TicketActivityStatusChange extends Lookup
{

    public const STATUS_NEW     = 0;
    public const STATUS_OPEN    = 1;
    public const STATUS_PENDING = 2;
    public const STATUS_SOLVED  = 3;

    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var int
     */
    protected $status;

}
