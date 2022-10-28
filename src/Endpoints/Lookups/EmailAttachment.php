<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints\Lookups;

use MVQN\REST\Annotations\PostRequiredAnnotation as PostRequired;
use UCRM\REST\Endpoints\Helpers\EmailAttachmentHelper;

/**
 * Class EmailAttachment
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @final
 *
 * @method string|null     getFile()
 * @method EmailAttachment setFile(string $file)
 * @method string|null     getFilename()
 * @method EmailAttachment setFilename(string $filename)
 * @method string|null     getMimeType()
 * @method EmailAttachment setMimeType(string $mimeType)
 *
 */
final class EmailAttachment extends Lookup
{
    use EmailAttachmentHelper;

    /**
     * @var string File encoded in base64.
     * @PostRequired
     */
    protected $file;

    /**
     * @var string File name.
     * @PostRequired
     */
    protected $filename;

    /**
     * @var string MIME Type of the file.
     */
    protected $mimeType;

}
