# Climan Laravel

Laravel-Zero micro-framework'ü kullanılarak yazılan ve Consolda çalışan HTTP request CLI'dır.

Verileri https://jsonplaceholder.typicode.com/ 'den çeker.

## Kullanım

### `https://jsonplaceholder.typicode.com/`

```
GET	    /users                      get:users                       // tüm kullanıcılar
GET	    /users/1                    get:users 2                     // 2 id'li kullanıcı

GET	    /users/1/comments           get:users 2 --comments          // 2 id'li post'un yorumları
GET	    /users/1/posts              get:users 2 --posts             // 2 id'li post'un postları

POST	/users                      post:users --p1= --p2= --p3=    // user ekler

PUT	    /users/1                    put:users 2 --p1= --p2= --p3=   // 2 id'li kullanıcıyı günceller

<
```