<?php

/**
 * Test: Latte\Engine: {first}, {last}, {sep}.
 */

use Tester\Assert;


require __DIR__ . '/../bootstrap.php';


$latte = new Latte\Engine;

Assert::matchFile(
	__DIR__ . '/expected/macros.first-sep-last.phtml',
	$latte->compile(__DIR__ . '/templates/first-sep-last.latte')
);
Assert::matchFile(
	__DIR__ . '/expected/macros.first-sep-last.html',
	$latte->renderToString(
		__DIR__ . '/templates/first-sep-last.latte',
		['people' => ['John', 'Mary', 'Paul']]
	)
);
