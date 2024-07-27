# Docker Nginx MySQL PHP

Master branch is containing Nginx, MySQL, PHP, Composer, PHPMyAdmin, and Adminer.

For Additional container please browse to specific branches

<!--Memecache -->

**How to Use**
***Option 1: Docker Command***
1. `cd <to the roor directory>` 
2. `Rename the 'example.env' file to '.env' file and change any required configuration like DB Name, Username, Password etc`    
3. `Run command: > docker compose build`  
4. `Run command: > docker compose up`  
5. `From browser: browse '127.0.0.1'`
6. `For PHPMyAdmin: browse '127.0.0.1:8080' or For Adminer: browse '127.0.0.1:8081'`
7. `For composer run command: > docker compose run composer`

***Option 2: Make Command***
1. `cd <to the roor directory>` 
2. `Rename the 'example.env' file to '.env' file and change any required configuration like DB Name, Username, Password etc`    
3. `Run command: > make build`  
4. `Run command: > make up`  
5. `From browser: browse '127.0.0.1'`
6. `For PHPMyAdmin: browse '127.0.0.1:8080' or For Adminer: browse '127.0.0.1:8081'`
7. `For composer run command: > docker compose run composer`


## Useful Nginx images
-  [`latest`, `1.23`](https://hub.docker.com/_/nginx)  
-  [`stable`, `1.22`](https://hub.docker.com/_/nginx)  
-  [`alpine`](https://hub.docker.com/_/nginx)  

Example
```dockerfile
FROM nginx:latest
```


## Useful PHP images
-  [`latest`](https://hub.docker.com/layers/library/php/latest/images/sha256-87ecd40a269e50eda37bf634802d84efa206ea68e2cbd71fb7c470416eb2908b?)
- [`8.2-fpm`](https://hub.docker.com/layers/library/php/8.2-fpm/images/sha256-6c6cb6cf5c673dd4802a18963b2e60e529c7fb09cd08bd9e068ae27f238a65f8)  
-  [`7.4-fpm`](https://hub.docker.com/layers/library/php/7.4-fpm/images/sha256-7c6a2cba718f37c4b3ca3486476c7d3dc68dc3ea9b12bde9c57bd4b8d9479fc0), [`7.4-cli`](https://hub.docker.com/layers/library/php/7.4-cli/images/sha256-691f9ae2a3639de11d95f507bc29c723a7f27b79bdf91317aef8ded35f9864ce), [`7.3-fpm`](https://hub.docker.com/layers/library/php/7.3-fpm/images/sha256-09f7ea00daaa3b9cae2e5951b975de4dabf85357ffd707739c1779cd6dfec82a)
- [`7.3-fpm-alpine`](https://hub.docker.com/layers/library/php/7.3-fpm-alpine/images/sha256-d0494f03d38e50e69a48acab4480f3a459af7ff3693909e888b05d3839c7e944?context=explore)   
-  [`5.6-fpm`](https://hub.docker.com/layers/library/php/5.6-fpm/images/sha256-3458979c7744b141df354aff9cb3233733c0f5077aa638a1b39a64d53d7c7c52)  

Example
```dockerfile
FROM php:8.1-fpm
```

## Useful MySQL images
- [`latest`](https://hub.docker.com/layers/library/mysql/latest/images/sha256-cfddf275c8b1ae1583c0f6afb4899d4dbe14111a6462699559a1f4dc8f4d5f6e), [`8.0`](https://hub.docker.com/layers/library/mysql/8.0/images/sha256-cfddf275c8b1ae1583c0f6afb4899d4dbe14111a6462699559a1f4dc8f4d5f6e)
- [`5.7`](https://hub.docker.com/layers/library/mysql/5.7/images/sha256-bd0fb5a175fc225ce9c2c4357c0f532bda1413e0b8555a157770f92daa5a89e0), [`5.7.40`](https://hub.docker.com/layers/library/mysql/5.7.40/images/sha256-bd0fb5a175fc225ce9c2c4357c0f532bda1413e0b8555a157770f92daa5a89e0)  

Example
```dockerfile
FROM mysql:8.4
```