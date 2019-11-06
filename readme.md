## Server Requirements
The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

PHP >= 7.2.0
BCMath PHP Extension
Ctype PHP Extension
JSON PHP Extension
Mbstring PHP Extension
OpenSSL PHP Extension
PDO PHP Extension
Tokenizer PHP Extension
XML PHP Extension

## Installing Laravel
1. Siapkan dataase mysql  dan beri nama "laravel"  lalu buat tabel berikut
    CREATE TABLE `template` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `a` varchar(45) NOT NULL,
  `b` varchar(45) NOT NULL,
  `c` varchar(45) NOT NULL,
  `d` varchar(45) NOT NULL,
  `e` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

2. Selanjutnya buka folder htdocs
3. jalankan perintah clone
    git clone "https://github.com/suhendrajaya/test2.git"

4. rename .env.example jadi .env pastikan setting database sesuai dengan local Anda
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

5.  dalam folder "test2" buat folder berikut:
    - storage <br>
    -- app<br>
    ---- files<br>
    ------ Type_A.xls<br>
    ------ Type_A.xlsx<br>
    ------ Type_B.xls<br>
    ------ Type_B.xlsx<br>
    -- framework<br>
    ---- cache<br>
    ---- sessions<br>
    ---- testing<br>
    ---- views<br>
    -- logs<br>

6. masih di dalan folder "test2" jalankan perintah cli  "composer install"

7. jalankan perintah "php artisan serve"

8. dan terakhir buka browser  dan ketik "http://localhost:8000"
