<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Http;

use App\Models\Coin;

class FetchCoinData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'coin:fetch';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch coin data from Coingecko API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
         $response = Http::get('https://api.coingecko.com/api/v3/coins/list?include_platform=true');

        if ($response->successful()) {

            $coins = $response->json();



            foreach ($coins as $coin) {


                Coin::updateOrCreate(
                    ['coin_id' => $coin['id']],
                    [
                        'symbol' => $coin['symbol'],
                        'name' => $coin['name'],
                        'platforms' => is_array($coin['platforms']) ? implode(', ', $coin['platforms']) : $coin['platforms'],
                    ]
                );
            }


            $this->info('Coin data fetched and stored successfully.');
        }
         else {
            $this->error('Failed to fetch coin data.');
        }
    }
}
