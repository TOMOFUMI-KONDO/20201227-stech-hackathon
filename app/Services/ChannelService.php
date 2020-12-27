<?php


namespace App\Services;


use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ChannelService
{
    /**
     * @return Collection
     */
    public function getChannelQuestions(): Collection
    {
        $channels = DB::table('channels')
            ->select(['id', 'name'])
            ->get();

        return $channels->map(function ($channel) {
            return [
                'id' => $channel->id,
                'name' => $channel->name,
                'questions' => DB::table('channel_questions')
                    ->where('channel_id', '=', $channel->id)
                    ->pluck('question')
            ];
        });
    }
}
