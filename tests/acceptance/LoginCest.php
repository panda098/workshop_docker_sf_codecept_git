<?php

namespace App\Tests;

use App\Tests\AcceptanceTester;

class LoginCest
{
  public function _before(AcceptanceTester $I)
  {
  }

  // tests
  public function loginAsAdmin(AcceptanceTester $I)
  {
    $I->amOnPage('/cs/login');
    $I->fillField('_username', 'jane_admin');
    $I->fillField('_password', 'kitten');
    $I->click('button');
    $I->see('Seznam příspěvků');
  }
}
