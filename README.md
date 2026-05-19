# Website Profile Klinik Hipnoterapi

Website profile untuk klinik hipnoterapi yang dibangun menggunakan Laravel dan Bootstrap. Project ini sedang dalam tahap pengembangan aktif dengan rencana penambahan fitur-fitur baru ke depannya.

## Teknologi yang Digunakan
- Laravel
- Bootstrap
- MySQL

## Fitur Saat Ini
- Halaman profil klinik
- Informasi layanan yang tersedia
- Tampilan responsif dengan Bootstrap

## Rencana Pengembangan
- [ ] Sistem booking/reservasi online
- [ ] Halaman kontak dan form pertanyaan
- [ ] Manajemen konten untuk pemilik klinik (CMS sederhana)

## Instalasi

1. Clone repository ini
```bash
git clone https://github.com/username/nama-repo.git
```

2. Install dependency
```bash
composer install
```

3. Salin file `.env.example` menjadi `.env` lalu sesuaikan konfigurasi database
```bash
cp .env.example .env
php artisan key:generate
```

4. Jalankan migrasi database
```bash
php artisan migrate
```

5. Jalankan aplikasi
```bash
php artisan serve
```

---
> Project ini dikembangkan sebagai website nyata untuk klinik hipnoterapi dan masih dalam tahap pengembangan aktif.
