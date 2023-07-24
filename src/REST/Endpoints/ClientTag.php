<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use SpaethTech\UCRM\SDK\REST\Annotations\EndpointAnnotation as Endpoint;
use SpaethTech\UCRM\SDK\REST\Annotations\PostAnnotation as Post;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchAnnotation as Patch;

use SpaethTech\UCRM\SDK\Collections\Collection;
use SpaethTech\UCRM\SDK\REST\Endpoints\EndpointObject;
use UCRM\REST\Endpoints\Helpers\ClientTagHelper;

/**
 * Class ClientTag
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @Endpoint { "get": "/client-tags", "getById": "/client-tags/:id" }
 * @Endpoint { "post": "/client-tags" }
 * @Endpoint { "patch": "/client-tags/:id" }
 * @Endpoint { "delete": "/client-tags/:id" }
 *
 * @method string|null getName()
 * @method ClientTag setName(string $name)
 * @method string|null getColorBackground()
 * @method ClientTag setColorBackground(string $color)
 * @method string|null getColorText()
 * @method ClientTag setColorText(string $color)
 *
 */
final class ClientTag extends EndpointObject
{
    public const DATETIME_FORMAT = "Y-m-d\TH:i:sO";

    use ClientTagHelper;

    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var string
     * @Post
     * @Patch
     */
    protected $name;

    /**
     * @var string
     * @Post
     * @Patch
     */
    protected $colorBackground;

    /**
     * @var string
     * @Post
     * @Patch
     */
    protected $colorText;

}
