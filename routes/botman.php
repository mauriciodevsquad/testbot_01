<?php

use App\Http\Controllers\BotManController;


$botman = app('botman');


// Define all your bot commands
$botman->hears('([a-z])(.*)', function($bot) {
    $bot->startConversation(new \App\Conversations\CaseReviewConversation());
});





