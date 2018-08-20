<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('activity')->insert([
                'title'         => 'test_' . $i,
                'goods_id_list' => $i,
                'depot_id'      => 1,
                'start_time'    => date('Y-m-d H:i:s'),
                'end_time'      => date('Y-m-d H:i:s'),
                'limit_price'   => 1,
                'limit_time'    => 41,
                'is_delete'     => 0,
                'create_time'   => date('Y-m-d H:i:s'),
                'operator'      => $i,
            ]);
        }
    }
}
