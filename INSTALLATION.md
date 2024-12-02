# Pimcore Project Lemonmind 

This skeleton should be used by experienced Pimcore developers for starting a new project from the ground up. 
If you are new to Pimcore, it's better to start with our demo package, listed below 😉

## Installation

### Follow these steps
1. Clone project using the `https://github.com/Drizztt1/lemonmind.git` reposytory
``git clone https://github.com/Drizztt1/lemonmind.git``

2. Go to your new project
`cd lemonmind/`

3. Part of the new project is a docker compose file
    * Run `sed -i "s|#user: '1000:1000'|user: '$(id -u):$(id -g)'|g" docker-compose.yaml` to set the correct user id and group id.
    * Start the needed services with `docker compose up -d`

4. Install pimcore and initialize the DB
    `docker compose exec php vendor/bin/pimcore-install`
    * When asked for admin user and password: Choose freely
    * This can take a while, up to 20 minutes
    * If you select to install the SimpleBackendSearchBundle please make sure to add the `pimcore_search_backend_message` to your `.docker/supervisord.conf` file inside value for 'command' like `pimcore_maintenance` already is.

6. DONE - You can now visit your pimcore instance:
    * The frontend: <http://localhost>
    * The admin interface, using the credentials you have chosen above:
      <http://localhost/admin>

## Recruitment tasks

### 1. Data modeling
To import class definitions, run the following command
`docker compose exec php bin/console pimcore:deployment:classes-rebuild --create-classes`
then add Quantity value unit definition
`docker compose exec php bin/console pimcore:definition:import:units ./installation/quantityvalue_unit_export.json`

### 2. Data import
To perform imports, you need to add the files located in the `installation` folder to assets. Then go to the data importer and run the imports one by one, first `airport, frequencies, runway` then those in the `AP relations` folder. If any import fails due to front-end limitations, we can use the command `docker compose exec php bin/console datahub:data-importer:prepare-import airport` where `airport` is the name of the import.

### 3. Integration with external REST API
To download data to the system via REST API, execute command `docker compose exec php bin/console app:import:todos` if data is to be downloaded periodically, add to the entry in `.docker/supervisord.conf` for this command with a firing frequency of every 15 minutes
