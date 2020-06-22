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
  _____ _ _                             _                           _ 
 / ____| (_)                           | |                         | |
| |    | |_ _ __ ___   __ _ _ __ ______| | __ _ _ __ __ ___   _____| |
| |    | | | '_ ` _ \ / _` | '_ \______| |/ _` | '__/ _` \ \ / / _ \ |
| |____| | | | | | | | (_| | | | |     | | (_| | | | (_| |\ V /  __/ |
 \_____|_|_|_| |_| |_|\__,_|_| |_|     |_|\__,_|_|  \__,_| \_/ \___|_|
                                                                      
                                                                      
  USAGE: ./climan-laravel <command> [options] [arguments]

  get:users    Bellli bir kullanıcıyı ya da tüm kullanıcıların bilgilerini listeler

  post:users   Kullanıcı ekler

  delete:users Kullanıcı siler

  put:users    Kullanıcı bilgilerini günceller

```

## Features



## Credit



## License

