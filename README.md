# reversus
Reverse engineering tool for PHP applications

## run with docker

```
docker run --rm -v $(pwd):/app -w /app vaguesoftware/foxxxy:latest composer install
docker run --rm -v $(pwd):/app -w /app vaguesoftware/foxxxy:latest php index.php
```