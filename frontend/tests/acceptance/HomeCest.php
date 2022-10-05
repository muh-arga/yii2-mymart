<?php

class HomeCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function HomeTest(AcceptanceTester $I)
    {
        $I->amOnPage('site/index');
        $I->see('WELCOME TO TOKO BARU');
    }
}
