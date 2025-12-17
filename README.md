# KostBox - Sistem Informasi Penitipan Barang

Aplikasi web untuk manajemen penitipan barang (KostBox), dibangun dengan framework Laravel.

## Fitur Utama

-   **Manajemen Penitipan**: Mencatat barang yang dititipkan, durasi, dan status.
-   **Tipe Box & Harga**: Pilihan ukuran box (Small, Medium, Large) dengan perhitungan harga otomatis.
-   **Admin Dashboard**: Halaman khusus admin untuk mengelola semua data penitipan.
-   **Autentikasi**: Sistem login dan registrasi pengguna.

## Teknologi

-   **Framework**: Laravel
-   **Sisi Klien**: Blade Templates, Bootstrap (atau CSS kustom sesuai desain)
-   **Database**: MySQL

## Instalasi

1.  Clone repository:
    ```bash
    git clone https://github.com/surungmanalu/Pemweb_KostBox.git
    ```
2.  Masuk ke direktori:
    ```bash
    cd Pemweb_KostBox
    ```
3.  Install dependencies:
    ```bash
    composer install
    npm install
    ```
4.  Setup .env:
    Copy `.env.example` ke `.env` dan konfigurasi database.
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
5.  Migrasi database:
    ```bash
    php artisan migrate
    ```
6.  Jalankan server:
    ```bash
    php artisan serve
    ```
