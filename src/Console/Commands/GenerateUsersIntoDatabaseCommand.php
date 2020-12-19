<?php

namespace Masoud5070\VandarAuthBasic\Console\Commands;

use Illuminate\Console\Command;
use Masoud5070\VandarAuthBasic\Models\Admin;

class GenerateUsersIntoDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vandar:admins-consideration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get users and insert into database';

    /**
     * Save model instance
     *
     * @var \Illuminate\Contracts\Foundation\Application|mixed
     */
    private $model;

    /**
     * Create a new command instance.
     * Get model instance and save that to property.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->model = app(config('vandarauthbasic.model_name', Admin::class));
    }

    /**
     * Execute the console command.
     * First truncate table and get data from config and insert to table
     *
     * @return int
     */
    public function handle()
    {
        foreach (config('vandarauthbasic.database_records') as $item){
            $this->model->create($item);
        }

        $this->info('Vandar auth basic installed successfully!');
    }
}
