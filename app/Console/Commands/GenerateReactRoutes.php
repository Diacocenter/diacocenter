<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateReactRoutes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:react-routes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->warn('Admin panel React Routes generating started...');
        $this->call('generate:react-admin-panel-routes');

        $this->warn('Manager panel React Routes generating started...');
        $this->call('generate:react-manager-panel-routes');

        $this->warn('technology provider panel React Routes generating started...');
        $this->call('generate:react-technology-provider-panel-routes');

        $this->warn('technology seeker React Routes generating started...');
        $this->call('generate:react-technology-seeker-panel-routes');

        $this->warn('advisor React Routes generating started...');
        $this->call('generate:react-advisor-panel-routes');
    }
}
