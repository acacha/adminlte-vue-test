<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

/**
 * Class AdminlteModalsTest.
 *
 * @package Tests\Browser
 */
class AdminlteModalsTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * Test default modal.
     *
     * @return void
     */
    public function testDefaultModal()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/modals')
                ->assertMissing('div#modal-default.modal')
                ->press('Launch Default Modal')
                ->assertVisible('div#modal-default.modal')
                ->assertSeeIn('div#modal-default.modal div.modal-dialog div.modal-content div.modal-header', 'Default Modal')
                ->assertSeeIn('div#modal-default.modal div.modal-dialog div.modal-content div.modal-body', 'One fine body')
                ->press('Close')
                ->assertMissing('div#modal-default.modal')
                ->press('Launch Default Modal')
                ->assertVisible('div#modal-default.modal')
                ->click('div#modal-default.modal div.modal-dialog div.modal-content div.modal-header button.close')
                ->assertMissing('div#modal-default.modal');
        });
    }

    /**
     * Test primary modal.
     *
     * @return void
     */
    public function testPrimaryModal()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/modals')
                ->assertMissing('div#modal-primary.modal')
                ->press('Launch Primary Modal')
                ->assertVisible('div#modal-primary.modal')
                ->assertSeeIn('div#modal-primary.modal div.modal-dialog div.modal-content div.modal-header', 'Primary Modal')
                ->assertSeeIn('div#modal-primary.modal div.modal-dialog div.modal-content div.modal-body', 'One fine body')
                ->press('Close')
                ->assertMissing('div#modal-primary.modal')
                ->press('Launch Primary Modal')
                ->assertVisible('div#modal-primary.modal')
                ->click('div#modal-primary.modal div.modal-dialog div.modal-content div.modal-header button.close')
                ->assertMissing('div#modal-primary.modal');
        });
    }

    /**
     * Test info modal.
     *
     * @return void
     */
    public function testInfoModal()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/modals')
                ->assertMissing('div#modal-info.modal')
                ->press('Launch Info Modal')
                ->assertVisible('div#modal-info.modal')
                ->assertSeeIn('div#modal-info.modal div.modal-dialog div.modal-content div.modal-header', 'Info Modal')
                ->assertSeeIn('div#modal-info.modal div.modal-dialog div.modal-content div.modal-body', 'One fine body')
                ->press('Close')
                ->assertMissing('div#modal-info.modal')
                ->press('Launch Info Modal')
                ->assertVisible('div#modal-info.modal')
                ->click('div#modal-info.modal div.modal-dialog div.modal-content div.modal-header button.close')
                ->assertMissing('div#modal-info.modal');
        });
    }

    /**
     * Test danger modal.
     * 
     * @return void
     */
    public function testDangerModal()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/modals')
                ->assertMissing('div#modal-danger.modal')
                ->press('Launch Danger Modal')
                ->assertVisible('div#modal-danger.modal')
                ->assertSeeIn('div#modal-danger.modal div.modal-dialog div.modal-content div.modal-header', 'Danger Modal')
                ->assertSeeIn('div#modal-danger.modal div.modal-dialog div.modal-content div.modal-body', 'One fine body')
                ->press('Close')
                ->assertMissing('div#modal-danger.modal')
                ->press('Launch Danger Modal')
                ->assertVisible('div#modal-danger.modal')
                ->click('div#modal-danger.modal div.modal-dialog div.modal-content div.modal-header button.close')
                ->assertMissing('div#modal-danger.modal');
        });
    }

    /**
     * Test warning modal.
     *
     * @return void
     */
    public function testWarningModal()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/modals')
                ->assertMissing('div#modal-warning.modal')
                ->press('Launch Warning Modal')
                ->assertVisible('div#modal-warning.modal')
                ->assertSeeIn('div#modal-warning.modal div.modal-dialog div.modal-content div.modal-header', 'Warning Modal')
                ->assertSeeIn('div#modal-warning.modal div.modal-dialog div.modal-content div.modal-body', 'One fine body')
                ->press('Close')
                ->assertMissing('div#modal-warning.modal')
                ->press('Launch Warning Modal')
                ->assertVisible('div#modal-warning.modal')
                ->click('div#modal-warning.modal div.modal-dialog div.modal-content div.modal-header button.close')
                ->assertMissing('div#modal-warning.modal');
        });
    }

    /**
     * Test success modal.
     *
     * @return void
     */
    public function testSuccessModal()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/modals')
                ->assertMissing('div#modal-success.modal')
                ->press('Launch Success Modal')
                ->assertVisible('div#modal-success.modal')
                ->assertSeeIn('div#modal-success.modal div.modal-dialog div.modal-content div.modal-header', 'Success Modal')
                ->assertSeeIn('div#modal-success.modal div.modal-dialog div.modal-content div.modal-body', 'One fine body')
                ->press('Close')
                ->assertMissing('div#modal-success.modal')
                ->press('Launch Success Modal')
                ->assertVisible('div#modal-success.modal')
                ->click('div#modal-success.modal div.modal-dialog div.modal-content div.modal-header button.close')
                ->assertMissing('div#modal-success.modal');
        });
    }
}