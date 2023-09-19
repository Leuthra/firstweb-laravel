# Portfolio Web Docs on Github

👋 Selamat datang di portofolio online saya, di mana saya memamerkan berbagai proyek, pencapaian, dan pengalaman kerja yang telah saya lakukan selama karier saya. Saya sangat senang Anda bisa mengunjungi halaman ini.

![github-profile](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)

Aplikasi Portfolio ini adalah sebuah platform yang dibangun menggunakan Laravel untuk memungkinkan Anda untuk mengatur, menampilkan, dan berbagi portofolio pribadi Anda dengan mudah. Aplikasi ini dirancang untuk memudahkan Anda dalam memamerkan pekerjaan, proyek, dan pencapaian Anda kepada dunia secara online.

## Persyaratan Sistem

- PHP 7.4 atau versi lebih baru
- MySQL Database
- Composer (untuk mengelola dependensi Laravel)
- Node.js dan npm (untuk mengelola aset frontend)

## Instalasi

1. Clone repositori ini ke dalam direktori lokal Anda.

```shell
git clone https://github.com/Leuthra/firstweb-laravel
cd firstweb-laravel
composer install
cp .env.example .env
php artisan migrate
php artisan key:generate

npm install
npm run dev

php artisan serve
```

Buka aplikasi di browser Anda dengan mengunjungi `http://localhost:8000.`

## Instalasi Advanced
Untuk instalasi advanced agar bagian `Contact Us` bisa bekerja dengan baik bisa di configurasi sebagai berikut
buka .env dan setting bagian gmail dengan SMTP server, untuk tutorial SMTP server bisa cek [disini](https://youtu.be/L5LAqIABGZE?si=SF8ODznZ2xeGxyUZ)

```sh
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=gmail@gmail.com
MAIL_PASSWORD=pwnya
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="gmail@gmail.com"
MAIL_FROM_NAME="${APP_NAME}"
```

pada bagian Contact Email, kita perlu settings Email Admin yang akan menerima pesan tersebut pada `App` -> `Models` -> `Contact.php`

```php
public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "your-admin-email@gmail.com"; //ubah email nya sesuai kamu
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
```

## Kontribusi
Jika Anda ingin berkontribusi pada pengembangan aplikasi ini, silakan buat pull request dan kami akan dengan senang hati mempertimbangkannya.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Selamat menggunakan Aplikasi Portfolio Laravel Anda! Jika Anda memiliki pertanyaan atau masalah, jangan ragu untuk menghubungi [Leuthra](https://github.com/Leuthra).
