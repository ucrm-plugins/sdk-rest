<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

namespace SpaethTech\UCRM\SDK\REST\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
abstract class Endpoint
{

    public function __construct(protected string $method, protected string $endpoint)
    {
    }
}
