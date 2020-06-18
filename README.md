# Climan Laravel


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

```

  USAGE: climan-laravel <command> [options] [arguments]

  test         Run the application tests

  app:build    Build a single file executable
  app:install  Install optional components
  app:rename   Set the application name

  delete:users Command description

  get:users    Bellli bir kullanıcıyı ya da tüm kullanıcılarıb bilgilerini listeler

  make:command Create a new command

  post:users   Bellli bir kullanıcıyı ya da tüm kullanıcıları listeler

  put:users    Command description

  stub:publish Publish all stubs that are available for customization
```

## Features



## Credit



## License

