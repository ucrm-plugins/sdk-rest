<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

namespace SpaethTech\UCRM\SDK\REST\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class GetEndpoint extends RestEndpoint
{

    public function __construct(protected string $endpoint)
    {
        parent::__construct("GET", $endpoint);
    }
}
