# Website Sales - CodeIgniter 3 (PHP 7)

## Cara Setting Environment

Berikut langkah-langkah menjalankan website sales CI3 di **PHP 7**:

### 1. Persiapan

- Pastikan sudah menginstal **XAMPP / WAMP / LAMP** dengan PHP 7.
- Download CodeIgniter 3 dari [https://codeigniter.com/download](https://codeigniter.com/download).
- Ekstrak project ke folder `htdocs` (XAMPP) atau `www` (WAMP).

### 2. Konfigurasi Database

1. Buka `application/config/database.php`.
2. Sesuaikan pengaturan database:

```php
$db['default'] = array(
    'dsn'      => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'nama_database', // Ganti dengan nama database Anda
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt'  => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```
Import file database SQL yang terdapat pada folder database_sales (sales.sql) melalui phpMyAdmin.

###  3. Konfigurasi Base URL

Buka application/config/config.php.

Ubah base_url sesuai lokasi project Anda:

$config['base_url'] = 'http://localhost/sales/';

###  4. Menjalankan Server

Jalankan Apache + MySQL melalui XAMPP/WAMP.

Akses website di browser:

http://localhost/sales/


Website siap digunakan.
