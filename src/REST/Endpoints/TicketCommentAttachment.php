<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use SpaethTech\UCRM\SDK\REST\Endpoints\EndpointObject;
use SpaethTech\UCRM\SDK\REST\Annotations\EndpointAnnotation as Endpoint;
use SpaethTech\UCRM\SDK\REST\Annotations\PostAnnotation as Post;
use SpaethTech\UCRM\SDK\REST\Annotations\PostRequiredAnnotation as PostRequired;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchAnnotation as Patch;
use SpaethTech\UCRM\SDK\REST\Annotations\PatchRequiredAnnotation as PatchRequired;
use SpaethTech\UCRM\SDK\REST\RestClient;
use UCRM\REST\Endpoints\Lookups\TicketActivityCommentAttachment;

//use UCRM\REST\Endpoints\Helpers\PaymentHelper;
//use UCRM\REST\Endpoints\Lookups\PaymentCover;

/**
 * Class TicketCommentAttachment
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @method string                       getFilename()
 * @method int|null                     getSize()
 * @method string|null                  getMimeType()
 *
 */
final class TicketCommentAttachment extends EndpointObject
{
    //use PaymentHelper;

    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var string
     * @PostRequired
     */
    protected $filename;

    /**
     * @var string
     * @PostRequired
     */
    protected $file;

    /**
     * @var int
     */
    protected $size;

    /**
     * @var string
     */
    protected $mimeType;






    public static function download(int $attachmentId)
    {
        return RestClient::download("/ticketing/tickets/comments/attachments/$attachmentId/file");
    }

}
