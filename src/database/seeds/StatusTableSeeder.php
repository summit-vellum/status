<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Quill\Status\Models\Status;
use Carbon\Carbon;

class StatusTableSeeder extends Seeder
{
    /**
     * Inserts status.
     *
     * @return void
     */
    public function run()
    {
    	$defaultStatus = collect([
    		0 => 'Draft',
    		1 => 'Publish',
    		2 => 'Disable',
    		3 => 'Publish Later',
    		4 => 'Deleted'
    	]);

    	foreach($defaultStatus as $key => $status) {
			DB::table('status')->insert([
				'id' => $key,
	            'name' => $status,
	            'slug' => Str::slug($status),
	            'description' => '',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
	        ]);
    	}
    }
}
