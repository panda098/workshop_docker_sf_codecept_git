<?php

namespace App\Tests;

use App\Tests\AcceptanceTester;

class BlogCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function blogPostsAreVisible(AcceptanceTester $I)
    {
      $I->amOnPage('/cs/blog/');
      $I->see('kokos');
    }
}
