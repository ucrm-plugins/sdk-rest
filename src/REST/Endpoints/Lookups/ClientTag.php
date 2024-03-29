<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints\Lookups;

use SpaethTech\UCRM\SDK\REST\Annotations\PostAnnotation as Post;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchAnnotation as Patch;

/**
 * Class ClientTag
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @method int|null getId()
 * @method ClientTag setId(int $id)
 * @method string|null getName()
 * @method ClientTag setName(string $name)
 * @method string|null getColorBackground()
 * @method ClientTag setColorBackground(string $color)
 * @method string|null getColorText()
 * @method ClientTag setColorText(string $color)
 *
 *
 */
final class ClientTag extends Lookup
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
     */
    protected $name;

    /**
     * @var string
     */
    protected $colorBackground;

    /**
     * @var string
     */
    protected $colorText;

}
