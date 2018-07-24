<?php

namespace CodeCraft\KitchenSink\PageType;

use PageController;

/**
 * This page displays a kitchen sink of re-usable elements
 */

class KitchenSinkPageController extends PageController {

	public function index()
	{
        return $this->renderWith([static::class, 'Page']);
	}

}