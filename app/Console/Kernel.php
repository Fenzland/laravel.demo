<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

////////////////////////////////////////////////////////////////

class Kernel extends ConsoleKernel
{
	
	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands= [
		// 早期版本的 Laravel 沒有下面的自動導入，就要在生成命令之後，將完整類名註冊到這裏
	];
	
	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
	 * @return void
	 */
	protected function schedule( Schedule$schedule )
	{
		// 這裏的配置，都需要在配置了 cron 後方能生效。配置語句如下：
		// * * * * * /項目路徑/artisan schedule:run >> /dev/null 2>&1
		
		// 每 5 分鐘執行一次 artisan command:log-time
		$schedule->command( 'command:log-time' )->everyFiveMinutes();
	}
	
	/**
	 * Register the commands for the application.
	 *
	 * @return void
	 */
	protected function commands()
	{
		// 自動導入 app/Console/Commands 中的命令 [通常由 artisan make:command 命令生成]
		$this->load( __DIR__.'/Commands' );
		
		// 使用類似路由的方式創建簡短命令（示例作者不推薦）
		// require base_path( 'routes/console.php' );
	}
	
}
