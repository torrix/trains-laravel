<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Trains extends Component
{
    public function render()
    {
        $params = [
            'app_id'       => env('TRANSPORT_API_APP_ID'),
            'app_key'      => env('TRANSPORT_API_APP_KEY'),
            'darwin'       => true,
            'train_status' => 'passenger',
            // 'calling_at'   => 'BAR',
        ];

        $response = file_get_contents("https://transportapi.com/v3/uk/train/station/LAN/live.json?" . http_build_query($params));

        $response = json_decode($response, true);

        return view('livewire.trains')->with([
            'departures' => $response['departures']['all'],
        ]);
    }
}
