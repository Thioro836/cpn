<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\{RendezVou};

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function(){
            $rdvs=RendezVou::where('date_rapel', date('Y-m-d'))->get();
            foreach ($rdvs as $rdv)
            {
                $message= "Bonsoir madame, nous vous rappellons que votre rendez-vous pour la consultaion prénatale est prévue pour demain";
                send_sms($rdv->dossierPatient->patient->telephone_patient, $message);
            }
        })->dailyAt('20:00')->timezone('Africa/Conakry');

        $schedule->call(function(){
            $rdvs=RendezVou::where('date_rendez_vous', date('Y-m-d'))->get();
            foreach ($rdvs as $rdv)
            {
                $message= "Bonsoir madame, nous vous rappellons que votre rendez-vous pour la consultaion prénatale est prévue pour aujourd'hui";
                send_sms($rdv->dossierPatient->patient->telephone_patient, $message);
            }
        })->dailyAt('05:30')->timezone('Africa/Conakry');
    }

    
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
