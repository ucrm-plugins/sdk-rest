<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints\Helpers;

use SpaethTech\UCRM\SDK\Collections\Collection;
use UCRM\REST\Endpoints\Device;
use UCRM\REST\Endpoints\DeviceInterface;

/**
 * Trait DeviceInterfaceHelper
 *
 * @package UCRM\REST\Endpoints\Helpers
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 */
trait DeviceInterfaceHelper
{
    use Common\DeviceHelpers;

    // =================================================================================================================
    // OBJECT METHODS
    // -----------------------------------------------------------------------------------------------------------------

    // =================================================================================================================
    // CREATE METHODS
    // -----------------------------------------------------------------------------------------------------------------

    // =================================================================================================================
    // READ METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @param Device $device
     * @return Collection
     * @throws \Exception
     */
    public function getByDevice(Device $device): Collection
    {
        return DeviceInterface::get("", [ "deviceId" => $device->getId() ]);
    }

    // =================================================================================================================
    // UPDATE METHODS
    // -----------------------------------------------------------------------------------------------------------------

    // =================================================================================================================
    // DELETE METHODS
    // -----------------------------------------------------------------------------------------------------------------

    // =================================================================================================================
    // EXTRA FUNCTIONS
    // -----------------------------------------------------------------------------------------------------------------

}
