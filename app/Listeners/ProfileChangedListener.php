<?php

namespace App\Listeners;

use App\Events\ProfileChangedEvent;
use App\Notifications\ProfileChangeNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class ProfileChangedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProfileChangedEvent  $event
     * @return void
     */
    public function handle(ProfileChangedEvent $event)
    {
        $arm_email = config('app.admin_email');
        Notification::route('mail', $arm_email)->notify(new ProfileChangeNotification());
    }
}
