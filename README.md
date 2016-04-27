## How to use it?

Basically, you need to have [Docker installed](http://docs.docker.com/installation/).

### Pull the image

```
docker pull rrobledo/testing
```

### Run a container

Run a container based on downloaded image:

```
docker run -d rrobledo/testing:latest
```

### Check container's IP address
```
docker inspect --format='{{ .NetworkSettings.IPAddress }}' $(docker ps -l -q)
```

### Test the app
Curl or open in a web browser URL based on IP address followed by `/images/{image_id}` eg.:

```
curl http://172.17.0.5/images/123243243
```
