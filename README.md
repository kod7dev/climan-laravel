# Climan Laravel

basit bir çak cümlelik açıklama

## Installation

### Linux

(Bilgisayarda Git, NodeJS ve NPM, Composer kurulu olmalı)

Terminal/Komut Satırı açılır.

- `git clone https://github.com/kod7dev/TestFull.git` ile TestFull indirilir.

- `git clone https://github.com/kod7dev/climan-laravel.git` ile climan-laravel indirilir.

![Installation](readme/kurulum.gif)


**climan-laravel** için gerekli paketlerin kurulumu:

```
cd climan-laravel

composer install
```

**TestFull** için gerekli paketlerin kurulumu:

```
cd TestFull

npm install
```

![Installation](readme/paketlerin-kurulumu.gif)

İstekleri karşılayacak TestFull programını çalıştırmak için 

```
cd TestFull

node index.js
```

## Usage example

```
./climan-laravel get:users                  // tüm kullanıcıların bilgileri
./climan-laravel get:users 3                // id'si 3 olan kullanıcının bilgileri

./climan-laravel get:users 3 --posts        // id'si 3 olan kullanıcının tüm yazıları
./climan-laravel get:users 3 --postid=10    // id'si 3 olan kullanıcının postid'si 10 olan yazısı

./climan-laravel post:users                 // kullanıcı ekler

./climan-laravel delete:users 3             // id'si 3 olan kullanıcıyı siler.

./climan-laravel put:users 3                // id'si 3 olan kullanıcıyı günceller.

```

## API References

komutların anlamı

## Features

özelliklker

## Credit

yardımda bulunanlar

## License

https://jsonplaceholder.typicode.com/ adresine GET, POST, PUT, DELETE isteklerini gönderir.

Eğer başka site kullanılacaksa `climan-laravel` da **SITE_URL** sabitine istek atılacak adres yazılır
