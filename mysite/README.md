# Installation

```
composer create-project yeaha/owl-site ./mysite
```

# Run

## Docker

```
$ cd mysite
$ docker-compose up -d
```

浏览器访问 http://127.0.0.1

## Swoole

```
$ php -q ./mysite/server.php start
```

浏览器访问 http://127.0.0.1:12345
