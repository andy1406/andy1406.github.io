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
            ->assertSee('https://wa.me/6285271696776')
            ->assertSee('Aldy Computer')
            ->assertSee('instalasi sistem operasi dan perangkat lunak')
            ->assertSee('pengarsipan dokumen administrasi sekolah')
            ->assertSee('Menerapkan prosedur K3')
            ->assertSee('Pekerja Konstruksi')
            ->assertSee('Pekerja kasar konstruksi')
            ->assertSee('Pekerja pertukangan')
            ->assertSee('keterampilan tukang besi')
            ->assertSee('2023 — Oktober 2026')
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
