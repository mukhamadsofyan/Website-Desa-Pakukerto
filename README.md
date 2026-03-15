<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<p align="center">
  <img src="LandingPage/images/logo_bumdes.png" width="160" alt="Logo Desa Pakukerto">
</p>

<h1 align="center">Website Desa Pakukerto</h1>

<p align="center">
  Sistem informasi desa berbasis Laravel untuk menyediakan layanan digital bagi masyarakat Desa Pakukerto.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-Framework-red">
  <img src="https://img.shields.io/badge/PHP-8.x-blue">
  <img src="https://img.shields.io/badge/MySQL-Database-orange">
  <img src="https://img.shields.io/badge/Status-Portfolio-green">
  <img src="https://img.shields.io/badge/Maintained-Yes-brightgreen">
</p>

---

# 📌 Project Overview

**Website Desa Pakukerto** adalah aplikasi web berbasis **Laravel** yang dikembangkan untuk membantu digitalisasi layanan desa dan memberikan akses informasi yang lebih mudah kepada masyarakat.

Sistem ini menyediakan berbagai fitur seperti:

* Informasi desa
* Persuratan online
* Informasi UMKM desa
* Agenda kegiatan desa
* Blog / berita desa
* Aduan masyarakat
* Data demografi desa

Website ini bertujuan untuk meningkatkan **transparansi, pelayanan publik, dan akses informasi** bagi masyarakat Desa Pakukerto.

---

# 🚀 Features

## 🌐 Landing Page

Halaman utama yang dapat diakses oleh masyarakat.

Fitur:

* Profil desa
* Berita dan informasi desa
* Event atau kegiatan desa
* Informasi layanan desa
* Kontak desa

---

## 🏛 Profil Desa

Informasi lengkap mengenai desa:

* Sejarah desa
* Visi dan misi desa
* Struktur kelembagaan desa
* Letak geografis
* Demografi penduduk
* Potensi desa

---

## 🧾 Persuratan Online

Masyarakat dapat mengajukan surat secara online.

Jenis surat yang tersedia:

* Surat SKCK
* Surat keterangan kematian
* Surat keterangan kelahiran
* Surat izin keramaian

Admin desa dapat memproses dan mengelola permohonan surat.

---

## 🛍 UMKM Desa

Fitur untuk menampilkan usaha masyarakat desa.

Fitur:

* Daftar UMKM
* Detail UMKM
* Informasi produk atau layanan

---

## 📅 Agenda Desa

Informasi kegiatan atau event desa.

Fitur:

* Daftar agenda desa
* Detail agenda
* Pengelolaan agenda oleh admin

---

## 📰 Blog / Berita Desa

Website menyediakan informasi berita desa.

Fitur:

* Artikel berita
* Detail artikel
* Manajemen artikel oleh admin

---

## 📣 Aduan Warga

Masyarakat dapat menyampaikan aduan atau laporan.

Fitur:

* Pengiriman aduan
* Moderasi oleh admin
* Persetujuan atau penolakan aduan

---

## 📊 Dashboard Admin

Admin desa dapat mengelola seluruh konten website.

Fitur utama:

* Manajemen blog
* Manajemen agenda desa
* Manajemen UMKM
* Manajemen data penduduk
* Manajemen RT / RW
* Manajemen testimoni
* Moderasi aduan masyarakat
* Pengelolaan persuratan

---

# 🧰 Tech Stack

| Technology           | Description             |
| -------------------- | ----------------------- |
| Laravel              | Backend Framework       |
| PHP                  | Server-side Programming |
| MySQL                | Database                |
| Blade                | Template Engine         |
| Bootstrap / Tailwind | UI Framework            |

---

# 📁 Project Structure

Simplified Laravel structure:

```
app/
database/
public/
resources/
routes/
```

---

# ⚙️ Installation

### 1 Clone Repository

```bash
git clone <repository-url>
```

---

### 2 Masuk ke Folder Project

```bash
cd pakukerto-website
```

---

### 3 Install Dependencies

```bash
composer install
```

---

### 4 Copy File Environment

```bash
cp .env.example .env
```

---

### 5 Generate Application Key

```bash
php artisan key:generate
```

---

### 6 Setup Database

Edit file `.env`

```
DB_DATABASE=pakukerto
DB_USERNAME=root
DB_PASSWORD=
```

---

### 7 Run Migration

```bash
php artisan migrate
```

---

### 8 Run Server

```bash
php artisan serve
```

Website akan berjalan di:

```
http://127.0.0.1:8000
```

---

# 👨‍💻 Contributors

Project ini dikembangkan oleh:

**Mukhamad Sofyan**
https://github.com/mukhamadsofyan

**Zaki Almukhtarom**
https://github.com/Jukiks45


---

# 🎯 Portfolio Purpose

Project ini dibuat untuk:

* Mengembangkan sistem informasi desa berbasis web
* Meningkatkan pelayanan digital kepada masyarakat
* Menerapkan teknologi Laravel pada proyek nyata
* Menjadi bagian dari portfolio pengembangan web

---

# 📄 License

Project ini dibuat untuk **tujuan edukasi dan portfolio pengembangan software**.
