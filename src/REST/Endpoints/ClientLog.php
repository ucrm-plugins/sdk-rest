<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use SpaethTech\UCRM\SDK\REST\Endpoints\EndpointObject;
use SpaethTech\UCRM\SDK\REST\Annotations\EndpointAnnotation as Endpoint;
use SpaethTech\UCRM\SDK\REST\Annotations\PostAnnotation as Post;
use SpaethTech\UCRM\SDK\REST\Annotations\PostRequiredAnnotation as PostRequired;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchAnnotation as Patch;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchRequiredAnnotation as PatchRequired;

use UCRM\REST\Endpoints\Helpers\ClientLogHelper;


/**
 * Class ClientLog
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @Endpoint { "get": "/client-logs", "getById": "/client-logs/:id" }
 * @Endpoint { "post": "/client-logs" }
 * @Endpoint { "patch": "/client-logs/:id" }
 *
 * @method int|null getClientId()
 * @method ClientLog setClientId(int $id)
 * @method string|null getMessage()
 * @method ClientLog setMessage(string $message)
 * @method int|null getUserId()
 * @method ClientLog setUserId(int $id)
 * @method string|null getCreatedDate()
 * @see    ClientLog::setCreatedDate()
 *
 */
final class ClientLog extends EndpointObject
{
    public const DATETIME_FORMAT = "Y-m-d\TH:i:sO";

    use ClientLogHelper;

    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var int
     * @PostRequired
     * @PatchRequired
     *
     */
    protected $clientId;

    /**
     * @var string
     * @PostRequired
     * @PatchRequired
     */
    protected $message;

    /**
     * @var int
     * @Post
     * @Patch
     */
    protected $userId;

    /**
     * @var string
     * @PostRequired
     * @Patch
     */
    protected $createdDate;

    /**
     * @param \DateTime $value
     * @return ClientLog Returns the ClientLog instance, for method chaining purposes.
     */
    public function setCreatedDate(\DateTime $value): ClientLog
    {
        $this->createdDate = $value->format(self::DATETIME_FORMAT);
        return $this;
    }

}
