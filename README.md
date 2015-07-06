# meetup-vagrant-2nd
Demonstração de orquestração de containers com vagrant apresentado no Meetup Vagrant SP #2


## Instalar plugin docker compose

```bash
vagrant plugin install vagrant-docker-compose
```

## Subindo VM e provisionando containers via plugin

```bash
vagrant up
```

## Exportando variáveis de ambiente para localizar o docker service

```bash
export DOCKER_TLS_VERIFY=1
export DOCKER_HOST=tcp://192.168.10.10:2376 #se o nat estiver ok use localhost
export DOCKER_CERT_PATH=$(pwd)/tls
```

## Para listar os containers rodando:

```bash
docker ps
```

## Para acessar o boot2docker (VM)

```bash
vagrant ssh
```

## Para ver o status global

```bash
vagrant global-status
```