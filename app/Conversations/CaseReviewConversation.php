<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

$answer1 = 'empty';
$answer2 = 'empty';
$answer3 = 'empty';
$answer4 = 'empty';
$answer5 = 'empty';
$answer6 = 'empty';
$answer7 = 'empty';
$answer8 = 'empty';
$answer9 = 'empty';
$answer10 = 'empty';
$answer11 = 'empty';
$answer12 = 'empty';
$answer13 = 'empty';
$answer14 = 'empty';
$answer15 = 'empty';
$answer16 = 'empty';
$answer17 = 'empty';
$answer18 = 'empty';
$answer19 = 'empty';


class CaseReviewConversation extends Conversation
{



    public function firstQuestion()
    {

        $question1 = Question::create("Welcome to Siegfried & Jensen! What brought you here to check us out?")
            ->fallback('Unable to ask question')
            ->addButtons([
                Button::create('Find out if I have a case')->value('case'),
                Button::create('I have a question')->value('question'),
            ]);

        $this->ask($question1, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                if ($answer->getValue() === 'case') {

                    global $answer1;

                    $answer1 = 'Find out if I have a case';


                    $question3 = Question::create("Were you injured in an accident?")
                        ->fallback('Unable to ask question')
                        ->addButtons([
                            Button::create('Yes')->value('yes'),
                            Button::create('No')->value('no'),
                        ]);

                    $this->ask($question3, function (Answer $answer) {
                        if ($answer->getValue() === 'yes') {

                            $question6 = Question::create("Ouch, sorry to hear that. How were you injured?")
                                ->fallback('Unable to ask question')
                                ->addButtons([
                                    Button::create('Car Accident')->value('car'),
                                    Button::create('Semi-Truck Accident')->value('semi'),
                                    Button::create('Dog Bite')->value('dog'),
                                    Button::create('Slip & Fall')->value('slip'),
                                    Button::create('Motorcycle Accident')->value('motocycle'),
                                    Button::create('Other')->value('other'),
                                ]);

                            $this->ask($question6, function (Answer $answer) {
                                if ($answer->isInteractiveMessageReply()) {
                                    if ($answer->getValue() === 'other') {

                                        $question7 = Question::create("How were you injured?")
                                            ->fallback('Unable to ask question')
                                            ->addButtons([
                                                // input ?!?
                                            ]);

                                        $this->ask($question7, function (Answer $answer) {

                                        });
                                    }

                                    $question8 = Question::create("Have you received any kind of medical treatment?")
                                        ->fallback('Unable to ask question')
                                        ->addButtons([
                                            Button::create('Yes')->value('yes'),
                                            Button::create('Not yet')->value('no'),
                                        ]);

                                    $this->ask($question8, function (Answer $answer) {

                                        $question9 = Question::create("Were you at fault for the accident?")
                                            ->fallback('Unable to ask question')
                                            ->addButtons([
                                                Button::create('Yes')->value('yes'),
                                                Button::create('No')->value('no'),
                                            ]);

                                        $this->ask($question9, function (Answer $answer) {

                                            $question10 = Question::create("Did the accident happen within the last 4 years?")
                                                ->fallback('Unable to ask question')
                                                ->addButtons([
                                                    Button::create('Yes')->value('yes'),
                                                    Button::create('No')->value('no'),
                                                ]);

                                            $this->ask($question10, function (Answer $answer) {

                                                $question11 = Question::create("Did anyone involved in the accident have insurance?")
                                                    ->fallback('Unable to ask question')
                                                    ->addButtons([
                                                        Button::create('Yes')->value('yes'),
                                                        Button::create('No')->value('no'),
                                                        Button::create('I don\'t know')->value('dont-know'),
                                                    ]);

                                                $this->ask($question11, function (Answer $answer) {

                                                    $question12 = Question::create("Sounds like you might have a case! Would you like to find out how much your case could be worth?")
                                                        ->fallback('Unable to ask question')
                                                        ->addButtons([
                                                            Button::create('Yes, Tell Me!')->value('yes')
                                                        ]);

                                                    $this->ask($question12, function (Answer $answer) {

                                                        $question13 = Question::create("What is your name?")
                                                            ->fallback('Unable to ask question')
                                                            ->addButtons([
                                                                // input ?!?
                                                            ]);

                                                        $this->ask($question13, function (Answer $answer) {

                                                            $question14 = Question::create("What's your best email?")
                                                                ->fallback('Unable to ask question')
                                                                ->addButtons([
                                                                    // input ?!?
                                                                ]);

                                                            $this->ask($question14, function (Answer $answer) {

                                                                $question15 = Question::create("What's your phone number?")
                                                                    ->fallback('Unable to ask question')
                                                                    ->addButtons([
// input ?!?
                                                                    ]);

                                                                $this->ask($question15, function () {

                                                                    $this->say("We'll be contacting you soon. If you'd prefer to talk with us right now, please give us a call at (801)-845-9000. Talk soon!");
                                                                });
                                                            });
                                                        });
                                                    });
                                                });
                                            });
                                        });
                                    });
                                }
                            });


                        } else {
                            $question4 = Question::create("Would you like to send us a message about your situation? Perhaps we can refer you to the right person.")
                                ->fallback('Unable to ask question')
                                ->addButtons([
                                    Button::create('Yes')->value('yes'),
                                    Button::create('No')->value('no'),
                                ]);
                            $this->ask($question4, function (Answer $answer) {

                                if ($answer->getValue() === 'yes') {

                                    $question13 = Question::create("What is your name?")
                                        ->fallback('Unable to ask question')
                                        ->addButtons([
                                            // input ?!?
                                        ]);

                                    $this->ask($question13, function (Answer $answer) {

                                        $question14 = Question::create("What's your best email?")
                                            ->fallback('Unable to ask question')
                                            ->addButtons([
                                                // input ?!?
                                            ]);

                                        $this->ask($question14, function (Answer $answer) {

                                            $question15 = Question::create("What's your phone number?")
                                                ->fallback('Unable to ask question')
                                                ->addButtons([
// input ?!?
                                                ]);

                                            $this->ask($question15, function () {

                                                $this->say("We'll be contacting you soon. If you'd prefer to talk with us right now, please give us a call at (801)-845-9000. Talk soon!");
                                            });
                                        });
                                    });
                                } else {
                                    $this->say("Thank you for contacting us. If you'd like to talk with us, please give us a call at (801)-845-9000. See you later!");
                                }
                            });
                        }
                    });

                } else {
                    $question2 = Question::create("What is your question? Let us know and we'll get back to you as soon as possible with an answer!")
                        ->fallback('Unable to ask question')
                        ->addButtons([
                            // add input ?!?
                        ]);

                    $this->ask($question2, function () {
                        $question13 = Question::create("What is your name?")
                            ->fallback('Unable to ask question')
                            ->addButtons([
                                // input ?!?
                            ]);

                        $this->ask($question13, function (Answer $answer) {

                            $question14 = Question::create("What's your best email?")
                                ->fallback('Unable to ask question')
                                ->addButtons([
                                    // input ?!?
                                ]);

                            $this->ask($question14, function (Answer $answer) {

                                $question15 = Question::create("What's your phone number?")
                                    ->fallback('Unable to ask question')
                                    ->addButtons([
// input ?!?
                                    ]);

                                $this->ask($question15, function () {

                                    $this->say("We'll be contacting you soon. If you'd prefer to talk with us right now, please give us a call at (801)-845-9000. Talk soon!");
                                });
                            });
                        });
                    });
                }
            }
        });
    }

    /**
     * Start the conversation
     */
    public function run()
    {
        $this->firstQuestion();
    }
}
