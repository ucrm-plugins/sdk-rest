<?php /** @noinspection SpellCheckingInspection, PhpUnusedAliasInspection, PhpUnhandledExceptionInspection */
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use Exception;
use MVQN\Collections\Collection;
use UCRM\REST\Endpoints\Version;

/**
 * Class GeneralTests
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 */
class GeneralTests extends EndpointTestCase
{
    #region Version

    /**
     * @throws Exception
     */
    public function testVersionGetters()
    {
        /** @var Version $version */
        $version = Version::get()->first(); // ONLY EVER ONE ELEMENT!
        $this->assertNotNull($version);

        $this->outputGetters($version, [ "id" ]);
    }

    /**
     * @covers Version
     * @throws Exception
     */
    public function testVersionGet()
    {
        /** @var Version $version */
        $version = Version::get()->first(); // ONLY EVER ONE ELEMENT!
        $this->assertNotNull($version);

        $this->outputResults($version);
    }

    #endregion

    #region Option

    /**
     * @throws Exception
     */
    public function testOptionGetters()
    {
        /** @var Option $option */
        $option = Option::get()->first();
        $this->assertNotNull($option);

        $this->outputGetters($option, [ "id" ]);
        //$this->outputGetters($option);
    }

    /**
     * @covers Option
     * @throws Exception
     */
    public function testOptionGet()
    {
        /** @var Option $option */
        $option = Option::get()->first();
        $this->assertNotNull($option);

        $this->outputResults($option);
    }

    #endregion

    #region Country

    public function testCountryGetters()
    {
        /** @var Country $country */
        $country = Country::getById(249);
        $this->assertNotNull($country);
        $this->assertEquals(249, $country->getId());

        $this->outputGetters($country);
    }

    /**
     * @covers Country::get()
     * @throws Exception
     */
    public function testCountryGet()
    {
        /** @var Collection $countries */
        $countries = Country::get();
        $this->assertNotNull($countries);

        $this->outputResults($countries);
    }

    /**
     * @covers Country::getById(249)
     * @throws Exception
     */
    public function testCountryGetById()
    {
        /** @var Country $country */
        $country = Country::getById(249);
        $this->assertNotNull($country);
        $this->assertEquals(249, $country->getId());

        $this->outputResults($country);
    }

    /**
     * @covers Country::getByName("United States")
     * @throws Exception
     */
    public function testCountryGetByName()
    {
        /** @var Country $country */
        $country = Country::getByName("United States");
        $this->assertNotNull($country);
        $this->assertEquals("United States", $country->getName());

        $this->outputResults($country);
    }

    /**
     * @covers Country::getByCode("US")
     * @throws Exception
     */
    public function testCountryGetByCode()
    {
        /** @var Country $country */
        $country = Country::getByCode("US");
        $this->assertNotNull($country);
        $this->assertEquals("US", $country->getCode());

        $this->outputResults($country);
    }

    /**
     * @covers Country::getStates(249)
     * @throws Exception
     */
    public function testCountryGetStates()
    {
        /** @var Country $country */
        $country = Country::getById(249);
        $this->assertNotNull($country);
        $this->assertEquals(249, $country->getId());

        $states = $country->getStates();
        $this->assertGreaterThanOrEqual(50, $states->count());

        $this->outputResults($states);
    }

    #endregion

    #region Currency

    public function testCurrencyGetters()
    {
        /** @var Currency $currency */
        $currency = Currency::getById(33);
        $this->assertNotNull($currency);
        $this->assertEquals(33, $currency->getId());

        $this->outputGetters($currency);
    }

    /**
     * @covers Currency::get()
     * @throws Exception
     */
    public function testCurrencyGet()
    {
        /** @var Collection $currencies */
        $currencies = Currency::get();
        $this->assertNotNull($currencies);

        $this->outputResults($currencies);
    }

    /**
     * @covers Currency::getById(33)
     * @throws Exception
     */
    public function testCurrencyGetById()
    {
        /** @var Currency $currency */
        $currency = Currency::getById(33);
        $this->assertNotNull($currency);
        $this->assertEquals(33, $currency->getId());

        $this->outputResults($currency);
    }

    /**
     * @covers Currency::getByName("Dollars")
     * @throws Exception
     */
    public function testCurrencyGetByName()
    {
        /** @var Collection $currencies */
        $currencies = Currency::getByName("Dollars");
        $this->assertNotNull($currencies);
        $this->assertGreaterThan(0, count($currencies));

        /** @var Currency $currency */
        $currency = $currencies->first();
        $this->assertEquals("Dollars", $currency->getName());

        $this->outputResults($currencies);
    }

    /**
     * @covers Currency::getByCode("USD")
     * @throws Exception
     */
    public function testCurrencyGetByCode()
    {
        /** @var Currency $currency */
        $currency = Currency::getByCode("USD");
        $this->assertNotNull($currency);
        $this->assertEquals("USD", $currency->getCode());

        $this->outputResults($currency);
    }

    /**
     * @covers Currency::getBySymbol("$")
     * @throws Exception
     */
    public function testCurrencyGetBySymbol()
    {
        /** @var Collection $currencies */
        $currencies = Currency::getBySymbol("$");
        $this->assertNotNull($currencies);
        $this->assertGreaterThan(0, count($currencies));

        /** @var Currency $currency */
        $currency = $currencies->first();
        $this->assertEquals("$", $currency->getSymbol());

        $this->outputResults($currencies);
    }

    #endregion

    #region State

    public function testStateGetters()
    {
        /** @var State $state */
        $state = State::getById(28);
        $this->assertNotNull($state);
        $this->assertEquals(28, $state->getId());

        $this->outputGetters($state);
    }

    /**
     * @covers State::getById(28)
     * @throws Exception
     */
    public function testStateGetById()
    {
        /** @var State $state */
        $state = State::getById(28);
        $this->assertNotNull($state);
        $this->assertEquals(28, $state->getId());

        $this->outputResults($state);
    }

    /**
     * @covers State::getByName(Country::getById(249), "Nevada")
     * @throws Exception
     */
    public function testStateGetByName()
    {
        /** @var Country $country */
        $country = Country::getById(249);
        $this->assertNotNull($country);

        /** @var State $state */
        $state = State::getByName($country, "Nevada");
        $this->assertNotNull($state);
        $this->assertEquals("Nevada", $state->getName());

        $this->outputResults($state);
    }

    /**
     * @covers State::getByCode(Country::getById(249), "NV")
     * @throws Exception
     */
    public function testStateGetByCode()
    {
        /** @var Country $country */
        $country = Country::getById(249);
        $this->assertNotNull($country);

        $state = State::getByCode($country, "NV");
        $this->assertNotNull($state);
        $this->assertEquals("NV", $state->getCode());

        $this->outputResults($state);
    }

    #endregion

}
