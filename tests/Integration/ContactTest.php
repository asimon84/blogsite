<?php

namespace Tests\Integration;

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        Contact::factory(1)->create();

        $result = Contact::sendemail(1);

        $this->assertTrue($result);
    }
}
