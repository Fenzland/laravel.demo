<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

////////////////////////////////////////////////////////////////

class Index extends Controller
{
	
	/**
	 * Method welcome
	 *
	 * @access public
	 *
	 * @return View
	 */
	public function welcome():View
	{
		return view( 'welcome' );
	}
	
	/**
	 * Method page
	 *
	 * @access public
	 *
	 * @param  string $page
	 *
	 * @return View
	 */
	public function page( string$page ):View
	{
		return view( str_replace( '/', '.', $page ) );
	}
	
}
