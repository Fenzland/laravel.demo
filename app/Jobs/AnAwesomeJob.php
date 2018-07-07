<?php

/**
 * 本文件由 artisan make:job AnAwesomeJob 命令生成
 */

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

////////////////////////////////////////////////////////////////

/**
 * 在需要調用本任務之處，寫以下代碼
 * 
 * AnAwesomeJob::dispatch( 秒數 );
 */
class AnAwesomeJob implements ShouldQueue
{
	use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
	
	/**
	 * Var sleepSeconds
	 *
	 * @access protected
	 *
	 * @var    int
	 */
	protected $sleepSeconds;
	
	/**
	 * 構造函數，調度時傳入的參數會在這裏傳入
	 *
	 * @param  int $sleepSeconds
	 * 
	 * @return void
	 */
	public function __construct( int$sleepSeconds )
	{
		$this->sleepSeconds= $sleepSeconds;
	}

	/**
	 * 任務的業務代碼
	 *
	 * @return void
	 */
	public function handle()
	{
		file_put_contents( storage_path( 'job.log' ), "My awesome job is sleep.\n", FILE_APPEND );
		file_put_contents( storage_path( 'job.log' ), 'get to sleep at:'.\Carbon\Carbon::now()."\n", FILE_APPEND );
		file_put_contents( storage_path( 'job.log' ), "sleeping...\n", FILE_APPEND );
		sleep( $this->sleepSeconds );
		file_put_contents( storage_path( 'job.log' ), 'awake at:'.\Carbon\Carbon::now()."\n", FILE_APPEND );
		file_put_contents( storage_path( 'job.log' ), "--------------------------------\n", FILE_APPEND );
	}
}
