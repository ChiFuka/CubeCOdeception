<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Log in');
$I->amOnPage('livewall/');
$I->canSeeInCurrentUrl('livewall');
$I->see('MyWall');
$I->click('//*[@title="MyWall"]');
$I->see('Please log in');
#$I->fillField('Username', 'qa_user');
#$I->fillField('Password', '21234567890');
#$I->click('Log In');
#$I->canSeeInCurrentUrl('research-intro-page-1');