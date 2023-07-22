# Modified PukiWiki within Docker

## Description

Customized PukiWiki with Docker which Dockerfile is cloning from [pen/docker-pukiwiki](https://github.com/pen/docker-pukiwiki).

微修改的 1.5.4 版繁體中文 PukiWiki，翻譯進度大約 60%，借用了 [pen/docker-pukiwiki](https://github.com/pen/docker-pukiwiki) 的 Dockerfile。

## Install

### Build Image

```shell
cd pukiwiki-modified-docker
docker build -t pukiwiki . --no-cache
```

### Run Image

```shell
mkdir pukiwiki-mount
cd pukiwiki-mount
docker run -p 8080:80 -v "$PWD":/var/www/html pukiwiki
```

### Accessing with bash

```shell
docker exec -it [container_id] bash
```
