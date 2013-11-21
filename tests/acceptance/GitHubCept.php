<?php
$I = new WebGuy($scenario);
$I->wantTo('find facebook/php-webdriver on GitHub');
$I->amOnPage('/');
$I->submitForm('#top_search_form', array('q' => 'php-webdriver'));
$I->click('li.public:nth-child(1) > h3:nth-child(3) > a:nth-child(1) > em:nth-child(2)');
$I->seeInTitle("php-webdriver");
$I->seeCurrentUrlEquals('/facebook/php-webdriver');