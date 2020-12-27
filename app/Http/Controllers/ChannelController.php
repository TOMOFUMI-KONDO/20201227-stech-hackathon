<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Services\ChannelService;

class ChannelController extends Controller
{
    /**
     * @var ChannelService
     */
    private $channel_service;

    public function __construct(ChannelService $channel_service){
        $this->channel_service = $channel_service;
    }

    public function __invoke(){
        return $this->channel_service->getChannelQuestions();
    }
}
