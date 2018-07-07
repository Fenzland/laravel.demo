<?php

namespace App\Providers;

use App\Events as Ev;
use App\Listeners as Ls;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

////////////////////////////////////////////////////////////////

class EventServiceProvider extends ServiceProvider
{
	/**
	 * 事件監聽
	 * 
	 * 在這裏，配置哪些監聽器監聽哪些事件
	 *
	 * @var array
	 */
	protected $listen= [
		Ev\KneeBeStuckWithAnArrow::class=> [
			Ls\Cry::class,
			Ls\SleepForHealTheKnee::class,
		],
	];

	/**
	 * Register any events for your application.
	 *
	 * @return void
	 */
	public function boot()
	{
		parent::boot();

		//
	}
}
