# Heroku web site config

create account

create project `picturbe`
link to repo git `CLD2_picturbe`

Choose `Master` branch
Enable automatic deploys

# Heroku install

Install (Heroku)[https://cli-assets.heroku.com/heroku-x64.exe]

    heroku login

    heroku create

    git push heroku master

Create file `Procfile` at base on project

    composer update

heroku config:set APP_KEY=base64:CQddJwYfwVMTVgsZRSPunO1J+8L4MZLC1vIYmnjRPdQ=

# Heroku DB

    heroku addons:create heroku-postgresql:hobby-dev

    heroku config

Set in config/database.php 
    - 'default' => env('DB_CONNECTION', 'pgsql')
    - Paste `DATABASE_URL` into config/database.php -> $DATABASE_URL=parse_url(`Your database URL`);
    - 'pgsql' => [
            'driver' => 'pgsql',
            'host' => $DATABASE_URL["host"],
            'port' => $DATABASE_URL["port"],
            'database' => ltrim($DATABASE_URL["path"], "/"),
            'username' => $DATABASE_URL["user"],
            'password' => $DATABASE_URL["pass"],
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'require',
        ],

commit change on master

    heroku run php artisan migrate

