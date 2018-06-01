# Notes API interview code
### Setup:
1. `composer install`
2. `php artisan migrate`
3. `php artisan db:seed`
4. `php artisan serve`


### AUTH:
seeding will insert 2 users
1. paolo1@gmail.com
2. paolo2@gmail.com
3. password is `secret`

### Examples:
```Authorization: Basic cGFvbG8xQGdtYWlsLmNvbTpzZWNyZXQ=```
is ```paolo1@gmail.com:secret```

#### List
```
curl -X GET \
  http://127.0.0.1:8000/api/notes/ \
  -H 'Authorization: Basic cGFvbG8xQGdtYWlsLmNvbTpzZWNyZXQ='
```

#### Create
```
curl -X POST \
  http://127.0.0.1:8000/api/notes \
  -H 'Authorization: Basic cGFvbG8xQGdtYWlsLmNvbTpzZWNyZXQ=' \
  -H 'Content-Type: application/json' \
  -d '{
	"title" : "New Note",
	"note" : "The body"
}'
```

#### Retrieve
```
curl -X GET \
  http://127.0.0.1:8000/api/notes/1 \
  -H 'Authorization: Basic cGFvbG8xQGdtYWlsLmNvbTpzZWNyZXQ='
```


#### Update
```
curl -X PUT \
  http://127.0.0.1:8000/api/notes/1 \
  -H 'Authorization: Basic cGFvbG8xQGdtYWlsLmNvbTpzZWNyZXQ=' \
  -H 'Content-Type: application/json' \
  -d '{
	"title" : "Updated Note",
	"note" : "Updated body"
}'
```

#### Delete
```
curl -X DELETE \
  http://127.0.0.1:8000/api/notes/3 \
  -H 'Authorization: Basic cGFvbG8xQGdtYWlsLmNvbTpzZWNyZXQ='
```


#### Personal Notes
Notes API interview code


##### Some things I could still do:
1. Oauth2.0 Bearer
2. Use middleware to 'wrap' the payload
3. Use error handler middleware to catch API exceptions

##### Some things I tried that didn't work out as expected:
1. Injecting FormRequest into controller methods update and create to automatically validate
    1. This did not work as it was made for views (It seems to redirect back but since im calling from API it shows the laravel welcome screen)


##### Initial Notes:
TODO:
* Notes model
* notes controller
* Notes route
* possibly a service provider
* maybe a repository
* Validate using Request validation

