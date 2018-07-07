<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

////////////////////////////////////////////////////////////////

/**
 * 鬼哭狼嚎
 * 
 * 受傷後，馬上鬼哭狼嚎
 */
class Cry
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
	 * 監聽器業務代碼
	 *
	 * @param  object  $event
	 * 
	 * @return void
	 */
	public function handle( $event )
	{
		//
	}
}
