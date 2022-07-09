<?php
class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToLogin(AcceptanceTester $I)
    {
        $I->amonPage('/login');
        $I->click('//*[@id="loginToSystem"]/div[2]/div/div[1]/ul[2]/li[3]');
        $I->fillField('sEmail','mrclim02@gmail.com');
        $I->fillField('sPassword','Sanzhar_02');
        $I->click('#login-button');
        sleep(3);

    }
}
