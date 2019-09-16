# symfony-service-template

* Please add api.crosslend.develop to your etc/hosts

* got to the root of the project and execute on /nginx_proxy/:
```$bash
docker-compose up -d
```

this will initialize the nginx-proxy in order to have multiple projects
running on the port 80.

* Go back to the root and execute:
```$bash
docker-compose build

docker-compose up -d
```

This will init the app.

* On the browser: http://api.crosslend.develop/test

you should see a response like: 
```$bash
{
"status": "200"
}
```

