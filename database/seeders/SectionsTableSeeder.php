<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectionsRecords = [
            ['id'=>1, 'name'=>'მთავარი', 'status'=>1],
            ['id'=>2, 'name'=>'ტურები', 'status'=>1],
            ['id'=>4, 'name'=>'ბლოგი', 'status'=>1],
            ['id'=>5, 'name'=>'ჩვენს შესახებ', 'status'=>1],
            ['id'=>6, 'name'=>'გალერეა', 'status'=>1],
            ['id'=>7, 'name'=>'კონტაქტი', 'status'=>1],
        ];
        Sections::insert($sectionsRecords);
    }
}
