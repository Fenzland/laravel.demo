<?php

/**
 * 本文件由 artisan make:command LogTime 命令生成
 */

namespace App\Console\Commands;

use Illuminate\Console\Command;

////////////////////////////////////////////////////////////////

class LogTime extends Command
{
	/**
	 * 命令名
	 *
	 * @var string
	 */
	protected $signature= 'command:log-time';

	/**
	 * 命令說明
	 *
	 * @var string
	 */
	protected $description = '示例命令：將當前時間記錄到 storage/time.log 文件';

	/**
	 * 構造函數，可在這裏使用 Laravel 服務容器的依賴注入
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 命令的業務代碼
	 *
	 * @return mixed
	 */
	public function handle()
	{
		file_put_contents( storage_path( 'time.log' ), \Carbon\Carbon::now()."\n", FILE_APPEND );
	}
}
