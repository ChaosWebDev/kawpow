<?php

namespace Database\Seeders;

use App\Models\Coin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coin::create([
            'symbol' => 'grr',
            'pool_name' => 'GhostRiderCoin',
            'name' => 'GhostRider',
            'color' => '#F29F05',
            'externals' => json_encode([
                'website' => [
                    'link' => 'https://ghostridercoin.org',
                    'icon' => 'nf nf-cod-globe'
                ],
                'explorer' => [
                    'link' => 'https://explorer.ghostridercoin.org',
                    'icon' => 'nf nf-fa-chain'
                ],
                'discord' => [
                    'link' => 'https://discord.gg/dYMFCQtKKR',
                    'icon' => 'nf nf-fa-discord'
                ],
            ])
        ]);
    }
}
