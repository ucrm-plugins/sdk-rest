<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints\Lookups;

use SpaethTech\UCRM\SDK\REST\Annotations\PostAnnotation as Post;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchAnnotation as Patch;

/**
 * Class ClientContactType
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @method int|null getId()
 * @method ClientContactType setId(int $id)
 * @method string|null getName()
 * @method ClientContactType setName(string $name)
 *
 */
final class ClientContactType extends Lookup
{
    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     * @Post
     * @Patch
     */
    protected $name;

}
