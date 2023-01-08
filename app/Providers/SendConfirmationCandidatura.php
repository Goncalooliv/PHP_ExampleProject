<?php

namespace App\Providers;

use App\Events\CandidaturaRealizada;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendConfirmationCandidatura
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
     * @param  \App\Events\CandidaturaRealizada  $event
     * @return void
     */
    public function handle(CandidaturaRealizada $event)
    {
        //
    }
}
