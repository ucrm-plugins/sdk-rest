<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use SpaethTech\UCRM\SDK\REST\Endpoints\EndpointObject;
use SpaethTech\UCRM\SDK\REST\Annotations\EndpointAnnotation as Endpoint;
use SpaethTech\UCRM\SDK\REST\Annotations\PostAnnotation as Post;
use SpaethTech\UCRM\SDK\REST\Annotations\PostRequiredAnnotation as PostRequired;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchAnnotation as Patch;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchRequiredAnnotation as PatchRequired;

/**
 * Class JobComment
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @Endpoint { "get": "/scheduling/jobs/comments", "getById": "/scheduling/jobs/comments/:id" }
 * @Endpoint { "post": "/scheduling/jobs/comments" }
 * @Endpoint { "patch": "/scheduling/jobs/comments/:id" }
 * @Endpoint { "delete": "/scheduling/jobs/comments/:id" }
 *
 * @method int|null getJobId()
 * @method JobComment setJobId(int $id)
 * @method int|null getUserId()
 * @method JobComment setUserId(int $id)
 * @method string|null getCreatedDate()
 * @see    JobComment::setCreatedDate()
 * @method string|null getMessage()
 * @method JobComment setMessage(string $message)
 *
 */
final class JobComment extends EndpointObject
{
    public const DATETIME_FORMAT = "Y-m-d\TH:i:sO";

    use Helpers\JobCommentHelper;

    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var int
     * @PostRequired
     * @PatchRequired
     */
    protected $jobId;

    /**
     * @var int
     * @Post
     * @Patch
     */
    protected $userId;

    /**
     * @var string
     * @PostRequired
     * @PatchRequired
     */
    protected $createdDate;

    /**
     * @param \DateTime $value
     * @return JobComment
     */
    public function setCreatedDate(?\DateTime $value = null): JobComment
    {
        if($value === null)
            $value = new \DateTime();

        $this->createdDate = $value->format(self::DATETIME_FORMAT);
        return $this;
    }

    /**
     * @var string
     * @PostRequired
     * @PatchRequired
     */
    protected $message;

}
