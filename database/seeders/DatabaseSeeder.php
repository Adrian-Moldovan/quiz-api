<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $seedData = [
            array(
                'question' => 'What is the capital of Chile?',
                'answers' => [
                    array(
                        'text' => 'Santiago',
                        'right' => 1
                    ),
                    array(
                        'text' => 'Buenos Aires',
                        'right' => 0
                    ),
                    array(
                        'text' => 'Bucharest',
                        'right' => 0
                    ),
                    array(
                        'text' => 'Russia',
                        'right' => 0
                    )
                ]
            ),
            array(
                'question' => 'What is the smallest country in the world?',
                'answers' => [
                    array(
                        'text' => 'Vatican City',
                        'right' => 1
                    ),
                    array(
                        'text' => 'Luxemburg',
                        'right' => 0
                    ),
                    array(
                        'text' => 'India',
                        'right' => 0
                    ),
                    array(
                        'text' => 'Liechtenstein',
                        'right' => 0
                    )
                ]
            ),
            array(
                'question' => 'What is the most famous Mexican beer?',
                'answers' => [
                    array(
                        'text' => 'Corona',
                        'right' => 1
                    ),
                    array(
                        'text' => 'Timisoreana',
                        'right' => 0
                    ),
                    array(
                        'text' => 'Ursus',
                        'right' => 0
                    ),
                    array(
                        'text' => 'Palinca de prune',
                        'right' => 0
                    )
                ]
            ),
            array(
                'question' => 'What is Scooby Doo’s full name?',
                'answers' => [
                    array(
                        'text' => 'Scoobert Doo',
                        'right' => 1
                    ),
                    array(
                        'text' => 'Scoob Doolitle',
                        'right' => 0
                    ),
                    array(
                        'text' => 'Scooba Dive',
                        'right' => 0
                    ),
                    array(
                        'text' => 'Greg',
                        'right' => 0
                    )
                ]
            ),
            array(
                'question' => 'What is the collective noun for a group of unicorns?',
                'answers' => [
                    array(
                        'text' => 'A blessing',
                        'right' => 1
                    ),
                    array(
                        'text' => 'A pack',
                        'right' => 0
                    ),
                    array(
                        'text' => 'A gang',
                        'right' => 0
                    ),
                    array(
                        'text' => 'A flock',
                        'right' => 0
                    )
                ]
            ),
            array(
                'question' => 'Who composed the music for Sonic the Hedgehog 3?',
                'answers' => [
                    array(
                        'text' => 'Michael Jackson',
                        'right' => 1
                    ),
                    array(
                        'text' => 'Fuego',
                        'right' => 0
                    ),
                    array(
                        'text' => 'The Pope',
                        'right' => 0
                    ),
                    array(
                        'text' => 'Himself',
                        'right' => 0
                    )
                ]
            ),
            array(
                'question' => 'The first hockey pucks used in early outdoor hockey games were made of what?',
                'answers' => [
                    array(
                        'text' => 'Frozen cow dung',
                        'right' => 1
                    ),
                    array(
                        'text' => 'Frozen chicken dung',
                        'right' => 0
                    ),
                    array(
                        'text' => 'Guano',
                        'right' => 0
                    ),
                    array(
                        'text' => 'Leather',
                        'right' => 0
                    )
                ]
            )
        ];

        foreach($seedData as $question){
            // adding questions
            echo "\n\r" . $question['question'];
            $questionRecord = \App\Models\Question::create(['question' => $question['question']]);
            echo ' [id: ' . $questionRecord->id . ']' . "\n\r";

            // adding answers
            foreach($question['answers'] as $i => $answer){
                echo ($i + 1) . ". " .$answer['text'];
                $answer['question_id'] = $questionRecord->id;
                $answerRecord = \App\Models\Answer::create($answer);
                echo ' [id: ' . $answerRecord->id . ']' . "\n\r";
            }
        }

        // \App\Models\User::factory(10)->create();
    }
}
