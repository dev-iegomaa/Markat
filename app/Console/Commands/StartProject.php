<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class StartProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init:project';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Project For Starting Application';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        Artisan::call('migrate:fresh');
        $this->info('Database Was Migrated');

        $username = $this->ask('Enter Username');
        $email = $this->ask('Enter Email');
        $password = $this->secret('Enter Password');

        User::create([
            'name' => $username,
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        $this->info('User Created Successfully');
        return self::SUCCESS;
    }
}
