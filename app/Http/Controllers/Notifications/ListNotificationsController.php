<?php

namespace App\Http\Controllers\Notifications;

class ListNotificationsController
{
    protected array $notifications;

    public function __construct(array $notifications)
    {
        $this->notifications = $notifications;
    }

    public function handle()
    {
        return view( 
            'notifications/notification', 
            [
                'admin' => true,
                'notifications' => $this->notifications
            ] 
        );
    }
}