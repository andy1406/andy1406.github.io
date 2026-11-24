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
            ->assertSee('Pekerja Konstruksi')
            ->assertSee('pengalaman-kerja/#teknisi')
            ->assertSee('Lihat semua detail pengalaman')
            ->assertDontSee('Menerapkan prosedur K3')
            ->assertSee('andy-putra.jpg')
            ->assertSee('andy-putra-cv.pdf');
    }

    public function test_dedicated_experience_page_shows_detailed_work_history(): void
    {
        $response = $this->get('/pengalaman-kerja');

        $response->assertOk()
            ->assertSee('Pengalaman Kerja — Andy Putra')
            ->assertSee('Aldy Computer')
            ->assertSee('instalasi sistem operasi dan perangkat lunak')
            ->assertSee('pengarsipan dokumen administrasi sekolah')
            ->assertSee('Pekerja kasar konstruksi')
            ->assertSee('keterampilan tukang besi')
            ->assertSee('2023 — Oktober 2026')
            ->assertSee('Menerapkan prosedur K3')
            ->assertSee('id="teknisi"', false)
            ->assertSee('id="administrasi"', false)
            ->assertSee('id="konstruksi"', false);
    }

    public function test_profile_photo_and_cv_downloads_are_available(): void
    {
        $this->assertFileExists(public_path('images/andy-putra.jpg'));
        $this->assertFileExists(public_path('documents/andy-putra-cv.pdf'));
        $this->assertFileExists(public_path('documents/andy-putra-cv-lama.pdf'));
    }
}
