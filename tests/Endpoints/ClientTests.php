<?php
/** @noinspection PhpUnusedLocalVariableInspection */
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use DateTime;
use Exception;

/**
 * Class ClientTests
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth
 *
 * @coversDefaultClass \UCRM\REST\Endpoints\Client
 *
 */
class ClientTests extends EndpointTestCase
{
    // =================================================================================================================
    // CLIENT TESTS - GETTERS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @throws Exception
     */
    public function testAllGetters()
    {
        /** @var Client $client */
        $client = Client::getById(1);
        $this->assertNotNull($client);

        $this->outputGetters($client);
    }

    // =================================================================================================================
    // CREATE TESTS - CREATE
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @covers ::insert
     * @return Client
     * @throws Exception
     */
    public function testInsert(): Client
    {
        /** @var Organization $organization */
        $organization = Organization::getByDefault();

        $client = new Client();

        /** @noinspection SpellCheckingInspection */
        $client
            // REQUIRED: Organization (NOT AVAILABLE ON EDIT SCREEN)
            //->setOrganizationId($organization->getId())

            // --- GENERAL ---------------------------------------------------------------------------------------------
            // REQUIRED (FOR COMMERCIAL): Company Name
            ->setCompanyName("United States Government")
            // Contact Person
            ->setCompanyContactFirstName("Donald")
            ->setCompanyContactLastName("Trump")
            // REQUIRED (FOR RESIDENTIAL): First Name
            ->setFirstName("Donald")
            // REQUIRED (FOR RESIDENTIAL): Last Name
            ->setLastName("Trump")
            // REQUIRED: Client Lead
            ->setIsLead(true)
            // REQUIRED: Company?
            //->setClientType(Client::CLIENT_TYPE_COMMERCIAL)
            // Registration Number
            ->setCompanyRegistrationNumber("12345")
            // Tax ID
            ->setCompanyTaxId("12-3456789")
            // Website
            ->setCompanyWebsite("https://www.usa.gov/")
            // Tags
            // TODO: Add Tag support ???
            // Note
            ->setNote("President of the United States of America!")

            // --- CONTACT ADDRESS -------------------------------------------------------------------------------------
            ->setStreet1("1600 Pennsylvania Avenue NW")
            ->setStreet2("")
            ->setCity("Washington")
            ->setCountryByName("United States")
            ->setStateByCode("DC")
            ->setZipCode("20500")

            // --- INVOICE ADDRESS -------------------------------------------------------------------------------------
            // REQUIRED: Invoice address is the same as contact address
            ->setInvoiceAddressSameAsContact(false)
            // REQUIRED (WHEN NOT THE SAME)
            //->setInvoiceStreet1("")
            //->setInvoiceStreet2("") // NOT REQUIRED!
            //->setInvoiceCity("")
            //->setInvoiceCountryByName("")
            //->setInvoiceStateByCode("")
            //->setInvoiceZipCode("")

            // --- CONTACT DETAILS -------------------------------------------------------------------------------------
            // Primary Contact
            ->setContacts([
                ((new ClientContact())
                    ->setEmail("potus@usa.gov.notreal")
                    ->setName("Donald Trump")
                    ->setPhone("(202) 555-1234")
                    ->setIsContact(true)
                ),
                ((new ClientContact())
                    ->setEmail("accountsreceivable@usa.gov.notreal")
                    ->setName("Steven Mnuchin")
                    ->setPhone("(202) 555-5678")
                    ->setIsBilling(true)
                )
            ])

            // UNIQUE: Username
            //->setUsername("potus1@usa.gov.notreal")

            // --- INVOICE OPTIONS -------------------------------------------------------------------------------------
            // NOTE: Setting any of the below options overrides the defaults.
            // Invoice by Post
            ->setSendInvoiceByPost(true)
            // Invoice maturity days
            ->setInvoiceMaturityDays(30)
            // Suspend services if payment is overdue
            ->setStopServiceDue(true)
            // Suspension delay
            ->setStopServiceDueDays(10)
            // MISSING: Late fee delay (NO API???)
            ->resetInvoiceMaturityDays()

            // --- TAXES -----------------------------------------------------------------------------------------------
            // Tax 1
            //->setTax1Id()
            // Tax 2
            //->setTax2Id()
            // Tax 3
            //->setTax3Id()
            // TODO: Test Taxes Later!

            // --- OTHER -----------------------------------------------------------------------------------------------
            // UNIQUE: Custom ID
            //->setUserIdent("POTUS")
            // Previous ISP
            ->setPreviousIsp("ARPANET")
            // REQUIRED: Registration date
            ->setRegistrationDate(new DateTime("02/12/2019"));

            //->setUsername("test123")
            //->setUsername(null);

            // --- CUSTOM ATTRIBUTES -----------------------------------------------------------------------------------
            // TODO: Test Attributes Later!

        /** @var Client $inserted */
        $inserted = $client->insert();
        $this->assertNotNull($inserted);

        return $inserted;
    }

    /**
     * @covers ::remove
     * @param Client $client
     * @depends testInsert
     */
    public function testRemove(Client $client)
    {
        $removed = $client->remove();
        $this->assertTrue($removed);
    }

    /**
     * @covers ::createResidential
     * @return Client
     * @throws Exception
     */
    public function testCreateResidential(): Client
    {
        $lastName = "Doe";
        $firstName = "John".rand(1, 9);

        $client = Client::createResidential($firstName, $lastName);

        $client->setAddress(
            "422 Silver Star Court\n".
            "c/o Michelle Spaeth",
            "Yerington", "NV", "US", "89447"
        );
        //$client->setInvoiceAddress("422 Silver Star Court\nc/o Ryan Spaeth", "Yerington", "NV", "US", "89447");
        $client->setInvoiceAddressSameAsContact(true);

        if(!$client->validate("post", $missing, $ignored))
        {
            echo "MISSING: ";
            print_r($missing);
            echo "\n";
        }

        if($ignored)
        {
            echo "IGNORED: ";
            print_r($ignored);
            echo "\n";
        }

        /** @var Client $inserted */
        $inserted = $client->insert();
        $this->assertEquals($lastName, $inserted->getLastName());

        echo $inserted."\n";
        return $inserted;
    }

    /**
     * @param Client $client
     * @depends testCreateResidential
     */
    public function testRemoveResidential(Client $client)
    {
        $removed = $client->remove();
        $this->assertTrue($removed);
    }

    /**
     * @covers ::createCommercial
     * @return Client
     * @throws Exception
     */
    public function testCreateCommercial(): Client
    {
        //$lastName = "Doe";
        //$firstName = "John".rand(1, 9);
        $companyName = "ACME Rockets, Inc.";

        /** @var Client $inserted */
        $inserted = Client::createCommercial($companyName)->insert();
        $this->assertEquals($companyName, $inserted->getCompanyName());

        echo $inserted."\n";
        return $inserted;
    }

    /**
     * @param Client $client
     * @depends testCreateCommercial
     */
    public function testRemoveCommercial(Client $client)
    {
        $removed = $client->remove();
        $this->assertTrue($removed);
    }


    /**
     * @covers ::createResidentialLead
     * @throws Exception
     */
    public function testCreateResidentialLead()
    {
        $created = Client::createResidentialLead("John", "Doe");
        $this->assertEquals("Doe", $created->getLastName());

        echo $created."\n";
    }

    /**
     * @covers ::createResidentialLead
     * @throws Exception
     */
    public function testCreateCommercialLead()
    {
        $created = Client::createCommercialLead("John Doe's Shoe Shop");
        $this->assertEquals("John Doe's Shoe Shop", $created->getCompanyName());

        echo $created."\n";
    }

    // -----------------------------------------------------------------------------------------------------------------





    // =================================================================================================================
    // READ METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @covers ::get
     * @throws Exception
     */
    public function testGet()
    {
        $clients = Client::get();
        $this->assertNotNull($clients);

        echo ">>> Client::get()\n";
        echo $clients."\n";
        echo "\n";
    }

    /**
     * @covers ::getById
     * @throws Exception
     */
    public function testGetById()
    {
        /** @var Client $last */
        $last = Client::get()->last();
        $id = $last->getId();

        /** @var Client $client */
        $client = Client::getById($id);
        $this->assertEquals($id, $client->getId());

        echo ">>> Client::getById($id)\n";
        echo $client."\n";
        echo "\n";
    }

    /**
     * @covers ::getClientsOnly
     * @throws Exception
     */
    public function testGetClientsOnly()
    {
        /** @var Client $client */
        $client = Client::createCommercial("John Doe's Shoe Shop")->insert();

        $clients = Client::getClientsOnly();

        echo ">>> Client::getClientsOnly()\n";
        echo $clients."\n";
        echo "\n";

        $this->assertNotEmpty($clients);

        $client->remove();
    }

    /**
     * @covers ::getLeadsOnly
     * @throws Exception
     */
    public function testGetLeadsOnly()
    {
        /** @var Client $lead */
        $lead = Client::createCommercialLead("John Doe's Shoe Shop")->insert();

        $leads = Client::getLeadsOnly();

        echo ">>> Client::getLeadsOnly()\n";
        echo $leads."\n";
        echo "\n";

        $this->assertNotEmpty($leads);

        $lead->remove();
    }

    /**
     * @covers ::getByUserIdent
     * @throws Exception
     * @noinspection SpellCheckingInspection
     */
    public function testGetByUserIdent()
    {
        $existing = Client::getByUserIdent("JDSS");
        if (!$existing)
            Client::createCommercial("John Doe's Shoe Shop")->setUserIdent("JDSS")->insert();

        $client = Client::getByUserIdent("JDSS");
        $this->assertNotNull($client);

        echo ">>> Client::getByUserIdent('JDSS')\n";
        echo $client."\n";
        echo "\n";

        $client->remove();
    }

    /**
     * @covers ::getByCustomAttribute
     * @throws Exception
     */
    public function testGetByCustomAttribute()
    {
        $clients = Client::getByCustomAttribute("age", "60");
        // TODO: Improve test, once this functionality is added!
        $this->assertEquals(0, $clients->count());

        echo ">>> Client::getByCustomAttribute('Age', '60')\n";
        echo $clients."\n";
        echo "\n";
    }



    // =================================================================================================================
    // UPDATE METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @covers ::update
     * @throws Exception
     */
    public function testUpdate()
    {
        /** @var Client $client */
        $client = Client::getById(1);

        $oldName = $client->getLastName();

        $this->assertNotEquals("Doe", $oldName);

        // Update any setting here...
        $newName = "Doe";
        $client->setLastName($newName);

        // Use the built-in reset commands to change back to system defaults.
        //$client->setSendInvoiceByPost(true);
        //$client->resetSendInvoiceByPost();

        /** @var Client $updated */

        // Validate the information...
        if($client->validate("patch", $missing, $ignored))
        {
            echo "IGNORED: ";
            print_r($ignored);
            echo "\n";

            $updated = $client->update();
            $this->assertEquals($newName ,$updated->getLastName());
            echo $updated."\n";
        }
        else
        {
            echo "MISSING: ";
            print_r($missing);
            echo "\n";
        }

        $client->setLastName($oldName);
        $updated = $client->update();
        $this->assertEquals($oldName ,$updated->getLastName());
    }



    // =================================================================================================================
    // DELETE METHODS
    // -----------------------------------------------------------------------------------------------------------------


    /**
     * @covers ::addContact
     * @return Client
     * @throws Exception
     */
    public function testAddContact1(): Client
    {
        /** @var Client $client */
        $client = Client::getById(1);

        $contact = new ClientContact();
        $contact
            ->setClientId($client->getId())
            ->setName("Ryan Spaeth")
            ->setEmail("rspaeth@spaethtech.com");

        $updated = $client->addContact($contact);
        /** @var ClientContact $last */
        $last = $updated->getContacts()->last();
        $this->assertEquals("Ryan Spaeth", $last->getName());

        return $updated;
    }

    /**
     * @covers ::delContact
     * @depends testAddContact1
     *
     * @param Client $client
     * @throws Exception
     */
    public function testDelContact(Client $client)
    {
        $count = $client->getContacts()->count();
        $this->assertGreaterThan(1, $count);

        /** @var ClientContact $last */
        $last = $client->getContacts()->last();

        $updated = $client->delContact($last);
        $this->assertEquals($count - 1, $updated->getContacts()->count());
    }

    /**
     * @covers ::addContact
     * @return Client
     * @throws Exception
     */
    public function testAddContact2(): Client
    {
        /** @var Client $client */
        $client = Client::getById(1);

        $contact = new ClientContact();
        $contact
            ->setClientId($client->getId())
            ->setName("Ryan Spaeth")
            ->setEmail("rspaeth@spaethtech.com");

        $updated = $client->addContact($contact);
        /** @var ClientContact $last */
        $last = $updated->getContacts()->last();
        $this->assertEquals("Ryan Spaeth", $last->getName());

        return $updated;
    }

    /**
     * @covers ::delContactById
     * @depends testAddContact2
     *
     * @param Client $client
     * @throws Exception
     */
    public function testDelContactById(Client $client)
    {
        $count = $client->getContacts()->count();
        $this->assertGreaterThan(1, $count);

        /** @var ClientContact $last */
        $last = $client->getContacts()->last();

        $updated = $client->delContactById($last->getId());
        $this->assertEquals($count - 1, $updated->getContacts()->count());
    }





    // =================================================================================================================
    // EXTRA METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @throws Exception
     */
    public function testSendInvitation()
    {
        /** @var Client $client */
        $client = Client::getById(1);
        $client->sendInvitationEmail();
        $this->assertNotNull($client);

        echo ">>> Client::getById(1)->sendInvitationEmail()\n";
        echo $client."\n";
        echo "\n";
    }

}
