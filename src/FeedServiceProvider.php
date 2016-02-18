<?php namespace JetCMS\Feed;

use JetCMS\Core\CoreServiceProvider;

class FeedServiceProvider extends CoreServiceProvider {

	/**
	 * Define Service Providers from our dependencies
	 */
	protected $parent_providers = [];

	/**
	 * Define aliases to register
	 */
	protected $aliases = [];

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		include __DIR__.'/../routes.php';
	}

}