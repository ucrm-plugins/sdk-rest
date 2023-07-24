<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints\Helpers;

use SpaethTech\UCRM\SDK\Collections\Collection;
use SpaethTech\UCRM\SDK\REST\Endpoints\EndpointObject;
use UCRM\REST\Endpoints\Service;
use UCRM\REST\Endpoints\ServiceSurcharge;

/**
 * Trait ServiceSurchargeHelper
 * @package UCRM\REST\Endpoints\Helpers
 */
trait ServiceSurchargeHelper
{
    use Common\ServiceHelpers;

    // =================================================================================================================
    // HELPER METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @return ServiceSurcharge
     * @throws \Exception
     */
    public function create(): ServiceSurcharge
    {
        /** @var EndpointObject $data */
        $data = $this;

        /** @var ServiceSurcharge $serviceSurcharge */
        $serviceSurcharge = ServiceSurcharge::post($data, ["serviceId" => $this->serviceId]);

        return $serviceSurcharge;
    }


    /**
     * @param Service $service
     * @return Collection
     * @throws \Exception
     */
    public static function getByService(Service $service): Collection
    {
        return ServiceSurcharge::get("", [ "serviceId" => $service->getId() ]);
    }


}
