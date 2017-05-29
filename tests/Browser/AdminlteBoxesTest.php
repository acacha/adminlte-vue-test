<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

/**
 * Class AdminlteBoxesTest.
 *
 * @package Tests\Browser
 */
class AdminlteBoxesTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * Test default box.
     *
     * @return void
     */
    public function testDefaultBox()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/widgets')
                ->driver->executeScript('document.getElementById("default_box").scrollIntoView();');
            $browser->assertVisible('div#default_box.box')
                    ->assertVisible('div#default_box.box-default')
                    ->assertVisible('div#default_box.box-default div.box-header div.box-tools button.btn-box-tool i.fa-times')
                    ->assertVisible('div#default_box.box-default div.box-header div.box-tools button.btn-box-tool i.fa-minus')
                    ->assertSeeIn('div#default_box div.box-body','Put your content here using default slot')
                    ->assertSeeIn('div#default_box div.box-title','Put your title here using slot with name title');
        });
    }

    /**
     * Test default box.
     *
     * @return void
     */
    public function testPrimaryboxWithContent()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/widgets')
                ->driver->executeScript('document.getElementById("primary_box_with_content").scrollIntoView();');
            $browser->assertVisible('div#primary_box_with_content.box')
                ->assertVisible('div#primary_box_with_content.box-primary')
                ->assertVisible('div#default_box.box-default div.box-header div.box-tools button.btn-box-tool i.fa-times')
                ->assertVisible('div#default_box.box-default div.box-header div.box-tools button.btn-box-tool i.fa-minus')
                ->assertSeeIn('div#primary_box_with_content div.box-body','Content here!')
                ->assertSeeIn('div#primary_box_with_content div.box-title','Put your title here using slot with name title');
        });
    }

    /**
     * Test default box with title.
     *
     * @return void
     */
    public function testDefaultBoxWithTitle()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/widgets')
                ->driver->executeScript('document.getElementById("default_box_with_title").scrollIntoView();');
            $browser->assertVisible('div#default_box_with_title.box')
                ->assertVisible('div#default_box.box-default div.box-header div.box-tools button.btn-box-tool i.fa-times')
                ->assertVisible('div#default_box.box-default div.box-header div.box-tools button.btn-box-tool i.fa-minus')
                ->assertVisible('div#default_box_with_title.box-default')
                ->assertSeeIn('div#default_box_with_title div.box-body','Put your content here using default slot')
                ->assertSeeIn('div#default_box_with_title div.box-title','Amazing Title!');
        });
    }

    /**
     * Test info box with title and footer.
     *
     * @return void
     */
    public function testInfoBoxWithTitleAndFooter()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/widgets')
                ->driver->executeScript('document.getElementById("info_box_with_title_and_footer").scrollIntoView();');
            $browser->assertVisible('div#info_box_with_title_and_footer.box')
                ->assertVisible('div#info_box_with_title_and_footer.box-info')
                ->assertVisible('div#default_box.box-default div.box-header div.box-tools button.btn-box-tool i.fa-times')
                ->assertVisible('div#default_box.box-default div.box-header div.box-tools button.btn-box-tool i.fa-minus')
                ->assertSeeIn('div#info_box_with_title_and_footer div.box-body','Put your content here using default slot')
                ->assertSeeIn('div#info_box_with_title_and_footer div.box-title','Amazing Title!')
                ->assertSeeIn('div#info_box_with_title_and_footer div.box-footer','This is a footer!');
        });
    }

    /**
     * Test success box with h3 title.
     *
     * @return void
     */
    public function testSuccessBoxWithH3Title()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/widgets')
                ->driver->executeScript('document.getElementById("success_box_with_title_h3").scrollIntoView();');
            $browser->assertVisible('div#success_box_with_title_h3.box')
                ->assertVisible('div#success_box_with_title_h3.box-success')
                ->assertVisible('div#default_box.box-default div.box-header div.box-tools button.btn-box-tool i.fa-times')
                ->assertVisible('div#default_box.box-default div.box-header div.box-tools button.btn-box-tool i.fa-minus')
                ->assertSeeIn('div#success_box_with_title_h3 div.box-body','Put your content here using default slot')
                ->assertSeeIn('div#success_box_with_title_h3 div.box-title h3','Here a h3 title!');
        });
    }

    /**
     * Test solid default box with title.
     *
     * @return void
     */
    public function testSolidDefaultBoxWithTitle()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/widgets')
                ->driver->executeScript('document.getElementById("default_solidbox_with_title").scrollIntoView();');
            $browser->assertVisible('div#default_solidbox_with_title.box')
                ->assertVisible('div#default_solidbox_with_title.box-default')
                ->assertVisible('div#default_box.box-default div.box-header div.box-tools button.btn-box-tool i.fa-times')
                ->assertVisible('div#default_box.box-default div.box-header div.box-tools button.btn-box-tool i.fa-minus')
                ->assertSeeIn('div#default_solidbox_with_title div.box-body','Put your content here using default slot')
                ->assertSeeIn('div#default_solidbox_with_title div.box-title',"I'm a solid box!");
        });
    }

    /**
     * Test default box with custom box tools.
     *
     * @return void
     */
    public function testDefaultBoxWithCustomBoxTools()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/widgets')
                ->driver->executeScript('document.getElementById("default_box_with_custom_box_tools").scrollIntoView();');
            $browser->assertVisible('div#default_box_with_custom_box_tools.box')
                ->assertVisible('div#default_box_with_custom_box_tools.box-default')
                ->assertVisible('div#default_box_with_custom_box_tools.box-default div.box-header div.box-tools button.btn-box-tool i.fa-cog')
                ->assertVisible('div#default_box_with_custom_box_tools.box-default div.box-header div.box-tools button.btn-box-tool i.fa-user')
                ->assertSeeIn('div#default_box_with_custom_box_tools div.box-body','Custom tool box')
                ->assertSeeIn('div#default_box_with_custom_box_tools div.box-title',"Custom tool box!");
        });
    }

    /**
     * Test box danger.
     *
     *
     * @return void
     */
    public function testBoxDanger()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/widgets')
                ->driver->executeScript('document.getElementById("box_danger").scrollIntoView();');
            $browser->assertVisible('div#box_danger.box')
                ->assertVisible('div#box_danger.box-danger')
                ->assertVisible('div#box_danger.box-danger div.box-header div.box-tools button.btn-box-tool i.fa-times')
                ->assertVisible('div#box_danger.box-danger div.box-header div.box-tools button.btn-box-tool i.fa-minus')
                ->assertSeeIn('div#box_danger div.box-body','Put your content here using default slot')
                ->assertSeeIn('div#box_danger div.box-title',"Danger!");
        });
    }

    /**
     * Test default box collapsed.
     *
     *
     * @return void
     */
    public function testDefaultBoxCollapsed()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/widgets')
                ->driver->executeScript('document.getElementById("default_box_collapsed").scrollIntoView();');
            $browser->assertVisible('div#default_box_collapsed.box')
                ->assertVisible('div#default_box_collapsed.box-default')
                ->assertVisible('div#default_box_collapsed.box-default div.box-header div.box-tools button.btn-box-tool i.fa-times')
                ->assertVisible('div#default_box_collapsed.box-default div.box-header div.box-tools button.btn-box-tool i.fa-plus')
                ->assertMissing('div#default_box_collapsed div.box-body')
                ->assertSeeIn('div#default_box_collapsed div.box-title',"Collapsed box!");
        });
    }

    /**
     * Test warning box loading.
     *
     * @return void
     */
    public function testWarningBoxLoading()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/widgets')
                ->driver->executeScript('document.getElementById("warning_box_loading").scrollIntoView();');
            $browser->assertVisible('div#warning_box_loading.box')
                ->assertVisible('div#warning_box_loading.box-warning')
                ->assertVisible('div#warning_box_loading.box-warning div.box-header div.box-tools button.btn-box-tool i.fa-times')
                ->assertVisible('div#warning_box_loading.box-warning div.box-header div.box-tools button.btn-box-tool i.fa-minus')
                ->assertVisible('div#warning_box_loading.box-warning div.overlay i.fa-refresh')
                ->assertSeeIn('div#warning_box_loading div.box-body','Put your content here using default slot')
                ->assertSeeIn('div#warning_box_loading div.box-title',"Loading warning box!");
        });
    }

    /**
     * Test default box not removable.
     *
     * @return void
     */
    public function testDefaultBoxNotRemovable()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/widgets')
                ->driver->executeScript('document.getElementById("default_box_not_removable").scrollIntoView();');
            $browser->assertVisible('div#default_box_not_removable.box')
                ->assertVisible('div#default_box_not_removable.box-default')
                ->assertMissing('div#default_box_not_removable.box-default div.box-header div.box-tools button.btn-box-tool i.fa-times')
                ->assertVisible('div#default_box_not_removable.box-default div.box-header div.box-tools button.btn-box-tool i.fa-minus')
                ->assertSeeIn('div#default_box_not_removable div.box-body','Not removable!')
                ->assertSeeIn('div#default_box_not_removable div.box-title',"Put your title here using slot with name title");
        });
    }

    /**
     * Test default box not collapsable.
     *
     * @return void
     */
    public function testDefaultBoxNotCollapsable()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/widgets')
                ->driver->executeScript('document.getElementById("default_box_not_collapsable").scrollIntoView();');
            $browser->assertVisible('div#default_box_not_collapsable.box')
                ->assertVisible('div#default_box_not_collapsable.box-default')
                ->assertVisible('div#default_box_not_collapsable.box-default div.box-header div.box-tools button.btn-box-tool i.fa-times')
                ->assertMissing('div#default_box_not_collapsable.box-default div.box-header div.box-tools button.btn-box-tool i.fa-minus')
                ->assertSeeIn('div#default_box_not_collapsable div.box-body','Not collapsable!')
                ->assertSeeIn('div#default_box_not_collapsable div.box-title',"Put your title here using slot with name title");
        });
    }

    /**
     * Test default box no toolbox.
     *
     * @return void
     */
    public function testDefaultBoxNoToolbox()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/widgets')
                ->driver->executeScript('document.getElementById("default_box_no_toolbox").scrollIntoView();');
            $browser->assertVisible('div#default_box_no_toolbox.box')
                ->assertVisible('div#default_box_no_toolbox.box-default')
                ->assertMissing('div#default_box_no_toolbox.box-default div.box-header div.box-tools button.btn-box-tool i.fa-times')
                ->assertMissing('div#default_box_no_toolbox.box-default div.box-header div.box-tools button.btn-box-tool i.fa-minus')
                ->assertSeeIn('div#default_box_no_toolbox div.box-body','No toolbox!')
                ->assertSeeIn('div#default_box_no_toolbox div.box-title',"Put your title here using slot with name title");
        });
    }

    /**
     * Test default box without border header.
     *
     * @return void
     */
    public function testDefaultBoxWithoutBorderHeader()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(\App\User::class)->create();
            $browser->loginAs($user);
            $browser->visit('/widgets')
                ->driver->executeScript('document.getElementById("default_box_without_border_header").scrollIntoView();');
            $browser->assertVisible('div#default_box_without_border_header.box')
                ->assertVisible('div#default_box_without_border_header.box-default')
                ->assertMissing('div#default_box_without_border_header.box-default div.box-header.with-border')
                ->assertVisible('div#default_box_without_border_header.box-default div.box-header div.box-tools button.btn-box-tool i.fa-times')
                ->assertVisible('div#default_box_without_border_header.box-default div.box-header div.box-tools button.btn-box-tool i.fa-minus')
                ->assertSeeIn('div#default_box_without_border_header div.box-body','No border on header!')
                ->assertSeeIn('div#default_box_without_border_header div.box-title',"Put your title here using slot with name title");
        });
    }

}
