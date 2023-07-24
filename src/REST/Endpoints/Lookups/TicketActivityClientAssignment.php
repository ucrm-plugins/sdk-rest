<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints\Lookups;

use SpaethTech\UCRM\SDK\REST\Annotations\PostAnnotation as Post;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchAnnotation as Patch;

use SpaethTech\UCRM\SDK\Collections\Collection;

/**
 * Class TicketActivityClientAssignment
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @method int|null getAssignedClientId()
 */
final class TicketActivityClientAssignment extends Lookup
{
    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var int
     */
    protected $assignedClientId;

}
