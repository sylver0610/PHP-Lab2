<?php

namespace App\Console\Commands;

use App\Models\Customers;
use Illuminate\Console\Command;

class CountAddress extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'customer:count-address {customerId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Выводим количество адресов покупателя';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $customer = new Customers();
        $customerId = (int)$this->argument('customerId');
        
        $count = $customer->getAdr($customerId);
        $c=count($count);
        //echo count($count);
        //$this->info('Count address = done');
        $this->info('Count address = '.$c);
    }
}
