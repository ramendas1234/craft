<?php

namespace App\Listeners;

use App\Events\UserCreateDone;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyAdminNewEmployeeInsert;


class LogWhenUserCreate
{
    /**
     * Handle the event.
     */
    public function handle(UserCreateDone $event): void
    {
        Mail::to('ramend3@gmail.com')->send(new NotifyAdminNewEmployeeInsert($event->employee));
        //Log::info("{$event->employee->name} Has been inserted");
    }
}
