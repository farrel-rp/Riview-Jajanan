# 📖 Deskripsi
Review Jajanan merupakan aplikasi berbasis web yang dibangun menggunakan Framework **CodeIgniter 4**. Aplikasi ini digunakan untuk memberikan ulasan terhadap berbagai jenis jajanan. Pengguna dapat melihat daftar review, memberikan rating, mengunggah foto, mengelola data review, serta melakukan simulasi pembayaran menggunakan **Midtrans Sandbox**.


# 🚀 Teknologi yang Digunakan
- PHP 8.x
- CodeIgniter 4
- MySQL
- Bootstrap 5
- Midtrans Sandbox
- REST API
- HTML
- CSS
- JavaScript


#  Cara Instalasi

## 1. Clone Repository

bash
git clone https://github.com/USERNAME/review-jajanan.git

Masuk ke folder project

bash
cd review-jajanan


## 2. Install Dependency

bash
composer install


## 3. Copy File Environment

Windows
bash
copy env .env

Linux / Mac
bash
cp env .env



# Konfigurasi Database

Buka file
.env

Ubah bagian berikut
env
CI_ENVIRONMENT = development

app.baseURL = 'http://localhost:8080'

database.default.hostname = localhost

database.default.database = review_jajanan

database.default.username = root

database.default.password =

database.default.DBDriver = MySQLi

database.default.port = 3306



# 👤 Akun Demo

## Admin

Email
admin@gmail.com

Password
admin123

## User

Email
user@gmail.com

Password
user123


# 🔗 REST API Endpoint

## GET

GET /api/reviews
Menampilkan seluruh data review.

## GET BY ID

GET /api/reviews/{id}
Menampilkan detail review.


## POST

POST /api/reviews
Menambahkan data review.


## PUT

PUT /api/reviews/{id}
Mengubah data review.


## DELETE

DELETE /api/reviews/{id}
Menghapus data review.


# 💳 Payment Gateway

Payment Gateway menggunakan

**Midtrans Sandbox**

Metode pembayaran yang didukung

- QRIS
- Virtual Account
- Bank Transfer
- E-Wallet

<img width="1536" height="1024" alt="image" src="https://github.com/user-attachments/assets/de473b3b-06b2-4b9c-abd7-146560f2f907" />

