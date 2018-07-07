<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

////////////////////////////////////////////////////////////////

/**
 * 睡覺養傷
 * 
 * 養傷是耗時任務，放在隊列中慢慢執行
 */
class SleepForHealTheKnee implements ShouldQueue
{
	/**
	 * 構造函數，可在這裏使用 Laravel 服務容器的依賴注入
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  object  $event
	 * @return void
	 */
	public function handle($event)
	{
		//
	}
}
