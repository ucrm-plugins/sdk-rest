<?php
declare(strict_types=1);

namespace SpaethTech\UCRM\SDK\REST\Endpoints;

use SpaethTech\UCRM\SDK\Collections\Collection;
use SpaethTech\UCRM\SDK\REST\EndpointObject;

/**
 * @template-extends Collection<EndpointObject>
 */
class EndpointCollection extends Collection
{
    protected function default() : mixed
    {
        return null;
    }

    protected function validate(mixed $element) : bool
    {
        return $element instanceof EndpointObject;
    }
}
