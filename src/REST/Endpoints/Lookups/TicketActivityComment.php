<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints\Lookups;

use SpaethTech\UCRM\SDK\REST\Annotations\PostAnnotation as Post;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchAnnotation as Patch;

use SpaethTech\UCRM\SDK\Collections\Collection;

/**
 * Class TicketActivityComment
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @method string|null getBody()
 * @method TicketActivityComment setBody(string $body)
 * @see    Collection|null getAttachments()
 */
final class TicketActivityComment extends Lookup
{
    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var string
     * @PostRequired
     * @PatchRequired
     */
    protected $body;

    /**
     * @var TicketActivityCommentAttachment[]
     * @Post
     * @Patch
     */
    protected $attachments;

    /**
     * @return Collection
     * @throws \Exception
     */
    public function getAttachments(): Collection
    {
        return new Collection(TicketActivityCommentAttachment::class, $this->attachments);
    }

}
