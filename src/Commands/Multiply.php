<?php 

namespace Jakmall\Recruitment\Calculator\Commands;

use Illuminate\Console\Command;

class Multiply extends Command
{
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
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'multiply
        {bil1=1 : Bilangan Pertama}
        {bil2=2 : Bilangan Kedua}
        {bil3=3 : Bilangan Ketiga}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Perkalian';

    public function handle()
    {
        dump(
            'Hasil Perkalian ' .
            $this->argument('bil1') .
            ' * ' .
            $this->argument('bil2') .
            '*'  .
            $this->argument('bil3') .
            ' = ' .
            ($this->argument('bil1') * $this->argument('bil2') * $this->argument('bil3'))

        );
    }
}