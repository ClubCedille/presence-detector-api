# presence-detector-api
API for https://github.com/waldo121/presence-detector

## How to run it

1. Build the docker image (e.g.)
```bash
docker build -t pd-api .
```
2. Run it (e.g.)
```bash
docker run -d -p 5000:5000 --name=pd-api pd-api
```

By default it will run in production mode(without debugger).

You can tell Flask to run in development mode setting `FLASK_ENV` to 'development'. It will then run in development mode __with the debugger enabled__ by default.

You also have access to the `FLASK_DEBUG` variable for more control over the debugger.

The flask debugger __must not be used in production machines__ because it allows code execution.

e.g. To run flask in development mode with the debugger disabled, you would run a command like

```bash
docker run -d -p 5000:5000 --name=pd-api -e FLASK_ENV=development -e FLASK_DEBUG=0 pd-api
```

## Endpoints

GET /status

e.g.
```bash
curl localhost:5000/status
```

Response
```bash
$ curl localhost:5000/status
False%
```
POST /status/{value}

- value : 0 or 1

e.g.

```bash
curl -X POST localhost:5000/status/0
```

Response
```bash
$ curl -X POST localhost:5000/status/1
True%
```


