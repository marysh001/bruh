<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-database';

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
        $employee->first_name = 'Mary';
        $employee->save();

        Employee::where('id', 6)->delete();
    }
}

