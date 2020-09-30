<?php

namespace App\Console\Commands;

use App\Product;
use Illuminate\Console\Command;

class ApproveProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:product-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'approve update';

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
        $product = Product::all();
        $product->each(function ($data){
            $data->update([
                'is_approve' => true

            ]);

        });
        return 0;
    }
}
