<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;

class TestDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:test-insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        for ($i = 0; $i < 6; $i++) {
            $employee = new Employee();
            $employee->first_name = 'John';
            $employee->save();
        }

        $employee = Employee::where('id', 5)->first();
        $employee->first_name = 'Vasiliy';
        $employee->save();

        Employee::where('id', 6)->delete();
    }
}
