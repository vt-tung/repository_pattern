<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Posts as PostModel;
class Post extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:cron';

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
     */
    public function handle()
    {
        PostModel::create([
                    "title" => "Hello".time(),
                    "desc" => "Hello Vu Tri Tung".time()
                ]);
    }
}
