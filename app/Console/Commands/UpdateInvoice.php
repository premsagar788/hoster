<?php

namespace App\Console\Commands;

use App\Models\Invoice;
use Illuminate\Console\Command;

class UpdateInvoice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-user-invoice';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update users invoice';

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
        $id = (int) $this->ask('Enter invoice id');

        if ($this->confirm('Do you wish to mark this invoice as paid? [y|N]')) {
            $invoice = Invoice::findOrFail($id);
            $invoice->status = 'Paid';
            $invoice->save();
            $this->info('Invoice marked as paid: ');
            print($invoice);
        }
    }
}
