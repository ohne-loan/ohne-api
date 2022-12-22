<?php

namespace App\Services;

use App\Models\UserDeviceData;
use DeviceDetector\DeviceDetector;
use DeviceDetector\Parser\Device\DeviceParserAbstract;

class UserDeviceDataService
{
    public function store(int $userId, string $userAgent) : void
    {
        DeviceParserAbstract::setVersionTruncation(DeviceParserAbstract::VERSION_TRUNCATION_NONE);

        $dd = new DeviceDetector($userAgent);
        $dd->parse();

        $userDeviceData = new UserDeviceData();

        $userDeviceData->user_id = $userId;

        $client = $dd->getClient();

        if (isset($client)) {
            foreach ($client as $clientData) {
                $userDeviceData->client = $userDeviceData->client . " | " . (string)$clientData;
            }
        }

        $os = $dd->getOs();

        if (isset($os)) {
            foreach ($os as $osData) {
                $userDeviceData->operating_system = $userDeviceData->operating_system . " | " . (string)$osData;
            }
        }

        $userDeviceData->device_name = $dd->getDeviceName() === "" ? null : mb_substr($dd->getDeviceName(), 0, 300, "utf-8");
        $userDeviceData->device_brand = $dd->getBrandName() === "" ? null : mb_substr($dd->getBrandName(), 0, 300, "utf-8");
        $userDeviceData->device_model = $dd->getModel() === "" ? null : mb_substr($dd->getModel(), 0, 300, "utf-8");

        if ($dd->isBot()) {
            $userDeviceData->is_bot = true;
            $userDeviceData->bot_info = $dd->getBot() === null ? null : mb_substr($dd->getBot(), 0, 300, "utf-8");
        }

        $userDeviceData->save();
    }
}
