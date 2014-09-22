<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Log in');
$I->amOnPage('/');
$I->see('LOGIN NOW');
$I->fillField('singup_email', 'qa_user');
$I->fillField('Password', '21234567890');
$I->click('Log In');
$I->amOnPage('/research-intro-page-1/');
#$I->canSeeInCurrentUrl('livewall');
#$I->see('MyWall');
#$I->click('//*[@title="MyWall"]');
#
#
#$I->canSeeInCurrentUrl('research-intro-page-1');