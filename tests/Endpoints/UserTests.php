<?php
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use MVQN\REST\RestClient;

require_once __DIR__ . "/_TestFunctions.php";

class UserTests extends \PHPUnit\Framework\TestCase
{
    // =================================================================================================================
    // INITIALIZATION
    // -----------------------------------------------------------------------------------------------------------------

    /** @var string Location of the .env file for development. */
    protected const DOTENV_PATH = __DIR__ . "/../../tests/";

    protected function setUp()
    {
        // Load ENV variables from a file during development.
        if(file_exists(self::DOTENV_PATH))
        {
            $dotenv = new \Dotenv\Dotenv(self::DOTENV_PATH);
            $dotenv->load();
        }

        //RestClient::cacheDir(__DIR__);

        RestClient::setBaseUrl(getenv("REST_URL"));
        RestClient::setHeaders([
            "Content-Type: application/json",
            "X-Auth-App-Key: ".getenv("REST_KEY")
        ]);
    }

    // =================================================================================================================
    // TESTS
    // -----------------------------------------------------------------------------------------------------------------

    public function testAllGetters()
    {
        $user = User::getById(1);

        $test = _TestFunctions::testAllGetters($user);
        $this->assertTrue($test);
    }

    // -----------------------------------------------------------------------------------------------------------------

    public function testGet()
    {
        $users = User::get();
        $this->assertNotNull($users);

        echo ">>> User::get()\n";
        echo $users."\n";
        echo "\n";
    }

    public function testGetById()
    {
        $user = User::getById(1);
        $this->assertEquals(1, $user->getId());

        echo ">>> User::getById(1)\n";
        echo $user."\n";
        echo "\n";
    }

    // -----------------------------------------------------------------------------------------------------------------

    public function testGetByEmail()
    {
        /** @var User $user */
        $user = User::getByEmail("rspaeth@spaethtech.com");
        $this->assertEquals("rspaeth@spaethtech.com", $user->getEmail());

        echo ">>> User::getByEmail('rspaeth@spaethtech.com')\n";
        echo $user."\n";
        echo "\n";
    }

    public function testGetByName()
    {
        /** @var User $user */
        $user = User::getByName("Ryan", "Spaeth");
        $this->assertEquals("Ryan", $user->getFirstName());
        $this->assertEquals("Spaeth", $user->getLastName());

        echo ">>> User::getByName('Ryan', 'Spaeth')\n";
        echo $user."\n";
        echo "\n";
    }

    public function testGetByUsername()
    {
        /** @var User $user */
        $user = User::getByUsername("rspaeth");
        $this->assertEquals("rspaeth", $user->getUsername());

        echo ">>> User::getByUsername('rspaeth')\n";
        echo $user."\n";
        echo "\n";
    }


}
