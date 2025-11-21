<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IndustrySeeder extends Seeder
{
    public function run(): void
    {
        $industries = [
            'Banking & Finance',
            'Real Estate',
            'Technology',
            'Healthcare',
            'Telecommunications',
            'E-commerce',
            'Insurance',
            'Government',
            'Retail',
            'Manufacturing',
            'Property Development',
            'Property Management',
            'Fintech',
            'Consulting',
            'Investment',
        ];

        foreach ($industries as $industry) {
            Industry::create([
                'name' => $industry,
                'slug' => Str::slug($industry),
            ]);
        }
    }
}