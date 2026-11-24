<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioPageTest extends TestCase
{
    public function test_portfolio_page_shows_profile_and_career_information(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('Andy Putra')
            ->assertSee('Manajemen Informatika')
            ->assertSee('Terbuka untuk kesempatan kerja')
            ->assertSee('Unduh CV saya')
            ->assertSee('Aldy Computer')
            ->assertSee('Pekerja Konstruksi')
            ->assertSee('andy-putra.jpg')
            ->assertSee('andy-putra-cv.pdf');
    }

    public function test_profile_photo_and_cv_downloads_are_available(): void
    {
        $this->assertFileExists(public_path('images/andy-putra.jpg'));
        $this->assertFileExists(public_path('documents/andy-putra-cv.pdf'));
        $this->assertFileExists(public_path('documents/andy-putra-cv-lama.pdf'));
    }
}
