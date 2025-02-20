INSTALLATION
------------

### Install via Docker

Run the following command:
```bash
make up
```

Once the application is running, you can access it at:

    http://127.0.0.1:8000

To enable Xdebug, update docker-compose.yml by uncommenting the following lines:
```
environment:
    - PHP_ENABLE_XDEBUG=1
```

DIRECTORY STRUCTURE
-------------------

      components/         contains application components such as filters
      config/             contains application configuration files
      controllers/        contains controller classes
      dto/                contains DTO (Data Transfer Object) classes
      interfaces/         contains interface definitions
      runtime/            contains files generated during runtime
      services/           contains service classes
      tests/              contains test cases
      vendor/             contains third-party dependencies
      web/                contains the entry script

USAGE EXAMPLE
------------
Send a `POST` request to `/api/sum-even` with the following JSON body:
`{
    "numbers": [1,2,3,4,5,6,2]
}`

You can use `curl` to make the request:
```bash
curl --location 'http://localhost:8000/api/sum-even' \
--header 'Content-Type: application/json' \
--data '{
    "numbers": [1,2,3,4,5,6]
}'
```
Expected JSON response:
`{
    "sum": 12
}`
