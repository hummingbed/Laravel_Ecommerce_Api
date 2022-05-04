<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Oauth endpoint (post request)
```
- http://127.0.0.1:8000/oauth/token

```

## json header
```

- KEY: Accept 
- KEY: Content-Type 
- VALUE: application/json
- VALUE: application/json

```
## json body
```
{
    "grant_type" : "password",
    "client_id" : "2",
    "client_secret" : "EqmGvEnB95hWoPpvx26dLz4Pv0bon7TKNU2m1wu4",
    "username" : "...@gmail.com",
    "password" : "12345678"
}

```