<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('channel_questions')->insert([
            [
                'channel_id' => 1,
                'question' => '今までどのくらいやってきましたか？',
            ],
            [
                'channel_id' => 1,
                'question' => 'どんなものを作ってきましたか？',
            ],
            [
                'channel_id' => 1,
                'question' => '今はどんな勉強をしてますか？',
            ],
            [
                'channel_id' => 1,
                'question' => 'どんなところが好きですか？',
            ],
            [
                'channel_id' => 2,
                'question' => 'どんなジャンルが好きですか？',
            ],
            [
                'channel_id' => 2,
                'question' => 'おすすめの曲を教えてください',
            ],
            [
                'channel_id' => 2,
                'question' => '最近ハマっている曲は？',
            ],
            [
                'channel_id' => 2,
                'question' => '好きなアーティストを教えてください',
            ],
        ]);
    }
}
