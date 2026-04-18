<?php

namespace Database\Seeders;

use App\Models\Fine;
use App\Models\Loan;
use Illuminate\Database\Seeder;

class FineSeeder extends Seeder
{
    public function run(): void
    {
        Loan::where('status', 'overdue')
            ->get()
            ->each(function (Loan $loan): void {
                Fine::factory()->create([
                    'loan_id' => $loan->id,
                    'status' => 'pending',
                    'paid_at' => null,
                ]);
            });
    }
}
