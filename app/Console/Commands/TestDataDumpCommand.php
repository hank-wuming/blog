<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class TestDataDumpCommand extends Command
{
    const DUMP_BIN   = 'mysqldump';
    const DOCKER_BIN = 'docker-compose';
    const DUMP_FILE  = 'dump.sql';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test-data:dump';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Data dump test/mock';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();

        $this->addArgument(
            'type',
            InputArgument::OPTIONAL,
            'Dump mock/test for local/testing environment.'
        );
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $dump_file = config('data.dump_path') . '/' . self::DUMP_FILE;
        $command   = $this->buildCommand($dump_file);

        exec($command);

        if (\File::exists($dump_file)) {
            $this->info(self::DUMP_FILE . ' generate success.');
        } else {
            $this->error(self::DUMP_FILE . ' generate fail.');
        }
    }

    private function buildCommand(string $dump_file)
    {
        $bin        = self::DUMP_BIN;
        $docker_bin = self::DOCKER_BIN;

        $user     = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $db       = env('DB_DATABASE');

        $command  = 'cd laradock;';
        $command .= "{$docker_bin} exec mysql";
        $command .= " {$bin} --user={$user} --password={$password}";
        $command .= " --hex-blob --complete-insert --extended-insert --single-transaction --quick";
        $command .= " --databases {$db} > {$dump_file}";

        return $command;
    }
}
