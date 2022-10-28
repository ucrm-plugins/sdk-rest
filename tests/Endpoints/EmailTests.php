<?php
/** @noinspection SpellCheckingInspection */
/** @noinspection PhpUnusedAliasInspection */
/** @noinspection PhpUnhandledExceptionInspection */
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use Exception;
use MVQN\Collections\Collection;
use MVQN\REST\Endpoints\EndpointObject;
use MVQN\REST\RestClient;
use UCRM\REST\Endpoints\Lookups\EmailAttachment;
use UCRM\REST\Endpoints\Version;

/**
 * Class EmailTests
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 */
class EmailTests extends EndpointTestCase
{
    #region Enqueue

    /**
     * @throws Exception
     */
    public function testEmailEnqueue()
    {
        $email = new Email();
        $email->setTo("rspaeth@spaethtech.com");
        $email->setSubject("Test Email API");
        $email->setBody("<p>This is a text email.</p>");
        $email->setClientId(1);
        $email->enqueue();
    }

    /**
     * @throws Exception
     */
    public function testEmailEnqueueWithAttachment()
    {
        $email = new Email();
        $email->setTo("rspaeth@spaethtech.com");
        $email->setSubject("Test Email API");
        $email->setBody("<p>This is a text email.</p>");
        $email->setClientId(1);

        // Not supported until UNMS 1.2.0-beta!
        $email->addAttachment(EmailAttachment::createFromFile("C:\\Users\\rspaeth\\Desktop\\placeholder.png"));

        $email->enqueue();
    }



    #endregion


}
