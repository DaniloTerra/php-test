# Construir Imagem
```
docker build -t dterra/php-test:v1 .
```

# Executar Container
```
docker run -d -p 8080:80 --name php-test -v "$PWD"/src:/var/www/html dterra/php-test:v1
```
