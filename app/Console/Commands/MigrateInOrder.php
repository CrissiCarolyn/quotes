<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateInOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate_in_order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execute the migrations in the order specified in the file app/Console/Comands/MigrateInOrder.php \n Drop all the table in db before execute the command.';

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
     * @return mixed
     */
    public function handle()
    {
       /** Specify the names of the migrations files in the order you want to 
        * loaded
        * $migrations =[ 
        *               'xxxx_xx_xx_000000_create_nameTable_table.php',
        *    ];
        */
        $migrations = [ 
                        '2022_12_20_121502_create_authors_table.php',
                        '2019_12_14_000001_create_personal_access_tokens_table', '2019_08_19_000000_create_failed_jobs_table','2014_10_12_100000_create_password_resets_table',
                        '2014_10_12_000000_create_users_table',
                        '2022_12_20_121519_create_quotes_table.php',
                        '2022_12_20_121604_create_categories_table.php',
                        '2022_12_20_121654_create_quote_categories_table.php'
        ];

        foreach($migrations as $migration)
        {
           $basePath = 'database/migrations/';          
           $migrationName = trim($migration);
           $path = $basePath.$migrationName;
           $this->call('migrate:refresh', [
            '--path' => $path ,            
           ]);
        }
    }
} 