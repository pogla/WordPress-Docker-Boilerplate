# Boilerplate for WordPress theme and plugin development with Docker

* Replace all occurrences of 'boilerplate' keyword in build commands and docker-compose file
* For XDEBUG, use your ip
* You need to configure local PHP interpreters in PhpStorm to be able to use Xdebug
* Installing Xdebug chrome plugin is necessary

#### Build nginx proxy image
docker build -f Dockerfile.nginx -t boilerplate-nginx .

#### Build wp image
docker build -f Dockerfile.wp -t boilerplate-wp .

#### Build wp image with Xdebug
Replace ip with yours

docker build --build-arg XDEBUG_REMOTE_HOST=192.168.0.107 -f Dockerfile.wp.xdebug -t boilerplate-wp .