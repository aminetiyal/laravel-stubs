<?php

namespace Aminetiyal\LaravelStubs\Commands;

use Illuminate\Console\Command;

class PublishStubsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'at:stubs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish my costum stubs';

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
        $this->call('vendor:publish', ['--tag' => 'aminetiyal:stubs']);
    }
}
