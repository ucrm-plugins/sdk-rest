<?php
/** @noinspection PhpUnused */
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use Exception;
use SpaethTech\UCRM\SDK\REST\Endpoints\EndpointObject;
use SpaethTech\UCRM\SDK\REST\Annotations\EndpointAnnotation as Endpoint;
use SpaethTech\UCRM\SDK\REST\Annotations\PostRequiredAnnotation as PostRequired;
use Psr\Http\Message\ResponseInterface;
use UCRM\REST\Endpoints\Helpers\EmailHelper;
use UCRM\REST\Endpoints\Lookups\EmailAttachment;

/**
 * Class Email
 *
 * @Endpoint { "post": "/email/:organizationId/enqueue" }
 *
 * @method Email setTo(string $to)
 * @method Email setSubject(string $subject)
 * @method Email setBody(string $body)
 * @method Email setClientId(int $clientId)
 *
 * @see    bool  enqueue(int $organizationId)
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright Copyright (c) 2020 - Spaeth Technologies Inc.
 * @final
 */
final class Email extends EndpointObject
{
    use EmailHelper;

    /**
     * @var string
     * @PostRequired
     */
    protected $to;

    /**
     * @var string
     * @PostRequired
     */
    protected $subject;

    /**
     * @var string
     * @PostRequired
     */
    protected $body;

    /**
     * @var int
     */
    protected $clientId;

    /**
     * @var EmailAttachment[]
     */
    protected $attachments;

    public function addAttachment(EmailAttachment $attachment): self
    {
        if (!$this->attachments)
            $this->attachments = [];

        array_push($this->attachments, $attachment);
        return $this;
    }

}
