```
cd cap*/
docker run -d -p 80:80 -v "$PWD":/var/www/html --name oop-php php:7.0-apache
docker rm -f $(docker ps -aq)
```
