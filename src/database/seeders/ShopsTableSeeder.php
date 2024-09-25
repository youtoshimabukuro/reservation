<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'shop_img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
            'shop_name' => '仙人',
            'city_id' => 1,
            'genre_id' => 1,
            'shop_overview' => '料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。',
            'creator_user_id' => 2
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
            'shop_name' => '牛助',
            'city_id' => 2,
            'genre_id' => 2,
            'shop_overview' => '焼肉業界で20年間経験を積み、肉を熟知したマスターによる実力派焼肉店。長年の実績とお付き合いをもとに、なかなか食べられない希少部位も仕入れております。また、ゆったりとくつろげる空間はお仕事終わりの一杯や女子会にぴったりです。',
            'creator_user_id' => 3
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
            'shop_name' => '戦慄',
            'city_id' => 3,
            'genre_id' => 3,
            'shop_overview' => '気軽に立ち寄れる昔懐かしの大衆居酒屋です。キンキンに冷えたビールを、なんと199円で。鳥かわ煮込み串は販売総数100000本突破の名物料理です。仕事帰りに是非御来店ください。',
            'creator_user_id' => 4
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
            'shop_name' => 'ルーク',
            'city_id' => 1,
            'genre_id' => 4,
            'shop_overview' => '都心にひっそりとたたずむ、古民家を改築した落ち着いた空間です。イタリアで修業を重ねたシェフによるモダンなイタリア料理とソムリエセレクトによる厳選ワインとのペアリングが好評です。ゆっくりと上質な時間をお楽しみください。',
            'creator_user_id' => 5
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
            'shop_name' => '志摩屋',
            'city_id' => 3,
            'genre_id' => 5,
            'shop_overview' => 'ラーメン屋とは思えない店内にはカウンター席はもちろん、個室も用意してあります。ラーメンはこってり系・あっさり系ともに揃っています。その他豊富な一品料理やアルコールも用意しており、居酒屋としても利用できます。ぜひご来店をお待ちしております。',
            'creator_user_id' => 6
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
            'shop_name' => '香',
            'city_id' => 1,
            'genre_id' => 2,
            'shop_overview' => '大小さまざまなお部屋をご用意してます。デートや接待、記念日や誕生日など特別な日にご利用ください。皆様のご来店をお待ちしております。',
            'creator_user_id' => 7
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
            'shop_name' => 'JJ',
            'city_id' => 2,
            'genre_id' => 4,
            'shop_overview' => 'イタリア製ピザ窯芳ばしく焼き上げた極薄のミラノピッツァや厳選されたワインをお楽しみいただけます。女子会や男子会、記念日やお誕生日会にもオススメです。',
            'creator_user_id' => 8
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
            'shop_name' => 'らーめん極み',
            'city_id' => 1,
            'genre_id' => 5,
            'shop_overview' => '一杯、一杯心を込めて職人が作っております。味付けは少し濃いめです。 食べやすく最後の一滴まで美味しく飲めると好評です。',
            'creator_user_id' => 9
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
            'shop_name' => '鳥雨',
            'city_id' => 2,
            'genre_id' => 3,
            'shop_overview' => '素材の旨味を存分に引き出す為に、塩焼を中心としたお店です。比内地鶏を中心に、厳選素材を職人が備長炭で豪快に焼き上げます。清潔な内装に包まれた大人の隠れ家で贅沢で優雅な時間をお過ごし下さい。',
            'creator_user_id' => 10
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
            'shop_name' => '築地色合',
            'city_id' => 1,
            'genre_id' => 1,
            'shop_overview' => '鮨好きの方の為の鮨屋として、迫力ある大きさの握りを1貫ずつ提供致します。',
            'creator_user_id' => 11
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
            'shop_name' => '晴海',
            'city_id' => 2,
            'genre_id' => 2,
            'shop_overview' => '毎年チャンピオン牛を買い付け、仙台市長から表彰されるほどの上質な仕入れをする精肉店オーナーの本当に美味しい国産牛を食べてもらいたいという思いから誕生したお店です。',
            'creator_user_id' => 12
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
            'shop_name' => '三子',
            'city_id' => 3,
            'genre_id' => 2,
            'shop_overview' => '最高級の美味しいお肉で日々の疲れを軽減していただければと贅沢にサーロインを盛り込んだ御膳をご用意しております。',
            'creator_user_id' => 13
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
            'shop_name' => '八戒',
            'city_id' => 1,
            'genre_id' => 3,
            'shop_overview' => '当店自慢の鍋や焼き鳥などお好きなだけ堪能できる食べ放題プランをご用意しております。飲み放題は2時間と3時間がございます。',
            'creator_user_id' => 14
        ];
        DB::table('shops')->insert($param);
    }
}
