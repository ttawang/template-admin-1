<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;

class DatabaseBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
    public function handle()
    {
        $filename = "backup-" . Carbon::now()->format('Y-m-d') . ".sql";

        // $command = "mysqldump --user=" . env('DB_USERNAME') . " --password=" . env('DB_PASSWORD') . " --host=" . env('DB_HOST') . " " . env('DB_DATABASE') . "  | gzip > " . storage_path() . "/app/backup/" . $filename;
        // $command = "PGPASSWORD=" . env('DB_PASSWORD') . " && pg_dump -U " . env('DB_USERNAME') . " " . env('DB_DATABASE') . ">" . storage_path() . "/app/BackupDB/" . $filename;
        // $command = "pg_dump --no-owner --dbname=postgresql://" . env('DB_USERNAME') . ":" . env('DB_PASSWORD') . "@" . env('DB_HOST') . ":" . env('DB_HOST') . "/" . env('DB_DATABASE') . " > " . "" . $filename;
        // $command = "pg_dump --dbname=postgresql://" . env('DB_USERNAME') . ":" . env('DB_PASSWORD') . "@" . "127.0.0.1:5432" . "/" . env('DB_DATABASE') . " > " . "BackupDB/" . $filename;
        $command = "pg_dump -U ".env('DB_USERNAME')." ".env('DB_DATABASE')." > " . "BackupDB/" . $filename;


        $returnVar = NULL;
        $output  = NULL;

        exec($command, $output, $returnVar);
    }
}
