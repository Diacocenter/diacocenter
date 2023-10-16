<?php

namespace Database\Seeders;

use App\Models\Communication;
use App\Models\CommunicationRecord;
use App\Models\TicketRecord;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommunicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {

            for ($i=0; $i < 15; $i++) {
                $randomUserObj = User::where("id", "<>", $user->id)->inRandomOrder()->first();
                if(!Communication::where("user_id", "=", $user->id)->where("assigned_by", "=", $randomUserObj->id)->first()) {
                    $communicationObj = new Communication([
                        "title"     =>  "salam jafar",
                    ]);
                    $communicationObj->user()->associate($user);
                    $communicationObj->assignBy()->associate($randomUserObj);
                    $communicationObj->save();

                    for ($i=0; $i < random_int(5,9); $i++) {
                        $communicationRecordObj=CommunicationRecord::factory()->makeOne();
                        $communicationRecordObj->communication()->associate($communicationObj);
                        $users = array($user, $randomUserObj);
                        $communicationRecordObj->user()->associate($users[array_rand($users)]);
                        $communicationRecordObj->saveQuietly();
                    }
                }
            }
        }

    }
}
