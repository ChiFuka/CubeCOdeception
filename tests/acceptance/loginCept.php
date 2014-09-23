<?php 
$username = 'qa_user';
$userpass = '1234567890';
$I = new AcceptanceTester($scenario);
$I->wantTo('Log in');
$I->amOnPage('/');
$I->see('LOGIN NOW');
$I->fillField('#user_login', 'qa_admin');
$I->fillField('#user_pass', '1234567890');
$I->click('//p[3]/button');
$I->waitForElementNotVisible('#agree_button', 5);
$I->seeCurrentUrlEquals('/research-intro-page-1/');
$I->click('.holder');
$I->seeCurrentUrlEquals('/research-intro-page-2/');
$I->click('.holder');
$I->seeCurrentUrlEquals('/research-intro-page-3/');
$I->click('.holder');
$I->seeCurrentUrlEquals('/members/qa_user/mywall/');
