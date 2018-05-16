<?php

return [

    /*
    |--------------------------------------------------------------------------
    | デフォルトブロードキャスター
    |--------------------------------------------------------------------------
    |
    | このオプションはイベントをブロードキャストする必要がある場合に
    | 使用されるデフォルトをコントロールします。下の"connections"
    | 配列で定義されている接続から選択してください。
    |
    | Supported: "pusher", "redis", "log", "null"
    |
    */

    'default' => env('BROADCAST_DRIVER', 'null'),

    /*
    |--------------------------------------------------------------------------
    | ブロードキャスト接続
    |--------------------------------------------------------------------------
    |
    | 他のシステムやWebsocketを利用しブロードキャストイベントを
    | 使用する場合の全ブロードキャスト接続をここで定義します。
    | 使用可能な接続タイプのサンプルをこの配列の中に用意してあります。
    |
    */

    'connections' => [

        'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_APP_KEY'),
            'secret' => env('PUSHER_APP_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
            'options' => [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'encrypted' => true,
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

        'null' => [
            'driver' => 'null',
        ],

    ],

];
