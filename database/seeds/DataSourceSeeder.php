<?php

use Illuminate\Database\Seeder;
use App\Models\DataSource;
use PhpMyAdmin\Server\Status\Data;

class DataSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['name' => '促销', 'data_model' => 'thread_from'],
            ['name' => '搜索引擎', 'data_model' => 'thread_from'],
            ['name' => '广告', 'data_model' => 'thread_from'],
            ['name' => '转介绍', 'data_model' => 'thread_from'],
            ['name' => '线上注册', 'data_model' => 'thread_from'],
            ['name' => '线上购价', 'data_model' => 'thread_from'],
            ['name' => '预约上门', 'data_model' => 'thread_from'],
            ['name' => '陌拜', 'data_model' => 'thread_from'],
            ['name' => '电话咨询', 'data_model' => 'thread_from'],
            ['name' => '邮件咨询', 'data_model' => 'thread_from'],
            ['name' => '重要客户', 'data_model' => 'thread_level'],
            ['name' => '普通客户', 'data_model' => 'thread_level'],
            ['name' => '非优先客户', 'data_model' => 'thread_level'],
            ['name' => 'IT', 'data_model' => 'thread_industry'],
            ['name' => '金融业', 'data_model' => 'thread_industry'],
            ['name' => '房地产', 'data_model' => 'thread_industry'],
            ['name' => '商业服务', 'data_model' => 'thread_industry'],
            ['name' => '运输/物流', 'data_model' => 'thread_industry'],
            ['name' => '生产', 'data_model' => 'thread_industry'],
            ['name' => '政府', 'data_model' => 'thread_industry'],
            ['name' => '文化传媒', 'data_model' => 'thread_industry'],

            ['name' => '一级商机', 'data_model' => 'business_level'],
            ['name' => '二级商机', 'data_model' => 'business_level'],
            ['name' => '三级商机', 'data_model' => 'business_level'],
            ['name' => '八级商机', 'data_model' => 'business_level'],
            

        ];
        foreach($datas as $v) {
            if(DataSource::where([['name', $v['name']], ['data_model', $v['data_model']]])->doesntExist()) {
                DataSource::create($v);
            }
        }
    }
}
