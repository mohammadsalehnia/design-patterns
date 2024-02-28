<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Src\DesignPatterns\FactoryMethod\Client;
use Src\DesignPatterns\FactoryMethod\DownloadableProduct;
use Src\DesignPatterns\FactoryMethod\DownloadableProductCreator;
use Src\DesignPatterns\FactoryMethod\PhysicalProduct;
use Src\DesignPatterns\FactoryMethod\PhysicalProductCreator;

class TestFactoryMethodCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-factory-method';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Factory Method command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $downloadableProductCreator = new DownloadableProductCreator();
        $client = new Client($downloadableProductCreator);
        echo $client->doStuff();

        echo "\n-------------------- \n";

        $physicalProductCreator = new PhysicalProductCreator();
        $client = new Client($physicalProductCreator);
        echo $client->doStuff();
    }
}
