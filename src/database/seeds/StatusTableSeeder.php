<?php

namespace Quill\Status\Database\Seeds;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Quill\Status\Models\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$defaultStatus = collect([
    		'Draft',
    		'Publish',
    		'Deleted',
    		'Publish Later',
    		'Draft Private',
    		'For Checking',
    		'For Revision'
    	]);

    	foreach($defaultStatus as $status) {		
			DB::table('status')->insert([
	            'name' => $status,
	            'slug' => Str::slug($status),
	            'description' => 'Description',
	        ]);
    	}
    }
}
