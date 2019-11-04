<?php

namespace Icinga\Module\Eagle\Common;

use Icinga\Module\Eagle\Model\Host;
use Icinga\Module\Eagle\Model\Service;
use ipl\Web\Url;

abstract class ServiceLinks
{
    public static function acknowledge(Service $service, Host $host)
    {
        return Url::fromPath(
            'eagle/service/acknowledge', ['name' => $service->name, 'host.name' => $host->name]
        );
    }

    public static function addComment(Service $service, Host $host)
    {
        return Url::fromPath(
            'eagle/service/add-comment', ['name' => $service->name, 'host.name' => $host->name]
        );
    }

    public static function checkNow(Service $service, Host $host)
    {
        return Url::fromPath(
            'eagle/service/check-now', ['name' => $service->name, 'host.name' => $host->name]
        );
    }

    public static function comments(Service $service, Host $host)
    {
        return Url::fromPath(
            'eagle/service/comments', ['name' => $service->name, 'host.name' => $host->name]
        );
    }

    public static function downtimes(Service $service, Host $host)
    {
        return Url::fromPath(
            'eagle/service/downtimes', ['name' => $service->name, 'host.name' => $host->name]
        );
    }

    public static function history(Service $service, Host $host)
    {
        return Url::fromPath(
            'eagle/service/history', ['name' => $service->name, 'host.name' => $host->name]
        );
    }

    public static function removeAcknowledgement(Service $service, Host $host)
    {
        return Url::fromPath(
            'eagle/service/remove-acknowledgement', ['name' => $service->name, 'host.name' => $host->name]
        );
    }

    public static function removeComment(Service $service, Host $host)
    {
        return Url::fromPath(
            'eagle/service/delete-comment', ['name' => $service->name, 'host.name' => $host->name]
        );
    }

    public static function scheduleDowntime(Service $service, Host $host)
    {
        return Url::fromPath(
            'eagle/service/schedule-downtime', ['name' => $service->name, 'host.name' => $host->name]
        );
    }

    public static function sendCustomNotification(Service $service, Host $host)
    {
        return Url::fromPath(
            'eagle/service/send-custom-notification', ['name' => $service->name, 'host.name' => $host->name]
        );
    }
}
