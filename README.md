# Portofolio Andy Putra

Portofolio ini dibuat dengan Laravel 12 dan Tailwind CSS. Halaman utama menampilkan profil, pengalaman, pendidikan, keahlian, kontak, foto, dan CV.

## Menjalankan secara lokal

1. Pasang dependency PHP dan JavaScript:

   ```powershell
   composer install
   npm install
   ```

2. Siapkan konfigurasi aplikasi jika belum ada:

   ```powershell
   Copy-Item .env.example .env
   php artisan key:generate
   ```

3. Jalankan Laravel dan Vite di dua terminal:

   ```powershell
   php artisan serve
   ```

   ```powershell
   npm run dev
   ```

4. Buka alamat yang ditampilkan Laravel, biasanya `http://127.0.0.1:8000`.

## Publikasi ke GitHub Pages

Workflow `.github/workflows/deploy-pages.yml` merender halaman Laravel menjadi HTML statis, lalu menerbitkannya ke GitHub Pages setiap ada push ke branch `main` atau `master`.

1. Push proyek ke repository GitHub pada branch `main` atau `master`.
2. Buka **Settings → Pages**, lalu pilih **GitHub Actions** sebagai sumber deployment bila belum dipilih.
3. Buka tab **Actions** dan tunggu workflow **Deploy portfolio to GitHub Pages** selesai.
4. Alamat situs akan terlihat di **Settings → Pages**. Untuk repository proyek, formatnya `https://NAMA-AKUN.github.io/NAMA-REPOSITORY/`.

GitHub Pages hanya menyajikan file statis dan tidak menjalankan PHP. Karena itu, situs publik tidak menyediakan login admin atau unggah sertifikat; perubahan konten dilakukan di proyek lalu dipush agar situs terbit ulang. Dukungan GitHub Pages untuk repository privat bergantung pada paket akun. Periksa visibilitas repository dan jangan unggah file rahasia.
