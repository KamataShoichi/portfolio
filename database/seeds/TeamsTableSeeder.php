<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
             'team_name' => '北海道コンサドーレ札幌',
             'place' => '札幌ドーム',
            ],
            [
             'team_name' => 'ベガルタ仙台',
             'place' => 'ユアテックスタジアム仙台',
            ],
            [
             'team_name' => '鹿島アントラーズ',
             'place' => '県立カシマサッカースタジアム',
            ],
            [
             'team_name' => '浦和レッズ',
             'place' => '埼玉スタジアム２００２',
            ],
            [
             'team_name' => '柏レイソル',
             'place' => '三協フロンテア柏スタジアム',
            ],
            [
             'team_name' => 'ＦＣ東京',
             'place' => '味の素スタジアム',
            ],
            [
             'team_name' => '川崎フロンターレ',
             'place' => '等々力陸上競技場',
            ],
            [
             'team_name' => '横浜Ｆ・マリノス',
             'place' => '日産スタジアム',
            ],
            [
             'team_name' => '横浜ＦＣ',
             'place' => 'ニッパツ三ツ沢球技場',
            ],
            [
             'team_name' => '湘南ベルマーレ',
             'place' => 'レモンガススタジアム平塚',
            ],
            [
             'team_name' => '清水エスパルス',
             'place' => 'ＩＡＩスタジアム日本平',
            ],
            [
             'team_name' => '名古屋グランパス',
             'place' => '豊田スタジアム',
            ],
            [
             'team_name' => 'ガンバ大阪',
             'place' => 'パナソニックスタジアム吹田',
            ],
            [
             'team_name' => 'セレッソ大阪',
             'place' => 'ヤンマースタジアム長居',
            ],
            [
             'team_name' => 'ヴィッセル神戸',
             'place' => 'ノエビアスタジアム神戸',
            ],
            [
             'team_name' => 'サンフレッチェ広島',
             'place' => 'エディオンスタジアム広島',
            ],
            [
             'team_name' => '徳島ヴォルティス',
             'place' => '鳴門・大塚スポーツパーク ポカリスエットスタジアム',
            ],
            [
             'team_name' => 'アビスパ福岡',
             'place' => 'ベスト電器スタジアム',
            ],
            [
             'team_name' => 'サガン鳥栖',
             'place' => '駅前不動産スタジアム',
            ],
            [
             'team_name' => '大分トリニータ',
             'place' => '昭和電工ドーム大分',
            ],
        ]);
    }
}
