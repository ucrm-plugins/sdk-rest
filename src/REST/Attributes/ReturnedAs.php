<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

namespace SpaethTech\UCRM\SDK\REST\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class ReturnedAs
{

    public function __construct(protected string $name)
    {
    }
}
