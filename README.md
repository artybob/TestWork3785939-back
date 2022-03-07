Simple CRUD app

1. cd /back 
2. run: composer install
3. create database and edit env
4. run:  php artisan migrate --seed
5. cd /front
6. run: npm install
7. run: npm run serve
8. go to http://localhost:8080/

API

Request Headers:

Accept
application/json

Content-Type
application/json

GET
http://127.0.0.1:8000/api/post

Return all posts

PATCH
http://127.0.0.1:8000/api/post/{post_id}

Save edited post

(x-www-form-urlencoded)

DEL
http://127.0.0.1:8000/api/post/{post_id}

Remove post


GET
http://127.0.0.1:8000/api/post/{post_id}

Get one post

POST
http://127.0.0.1:8000/api/post

Create new post (x-www-form-urlencoded or form-data)
