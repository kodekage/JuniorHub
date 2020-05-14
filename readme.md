## JuniorHub

JuniorHub is an open source writer community for Junior developers with the promise of helping
them scale to senior level one keystroke at a time.

## Testing Locally
- Fork this repository
- Clone your forked repo by running `$ git clone https://github.com/<your-user-name>/JuniorHub.git`
- Navigate to the directory `$ cd /path/to/JuniorHub.`
- copy .env.example to .env .
- Add your local database details to the `.env`
- Run the following commands
    - `$ composer install`
    - `$ php artisan key:generate`
    - `$ php artisan config:cache`
    - `$ php artisan migrate` 
    - `$ php artisan storage:link`
    - `$ php artisan serve`
- Open your browser tab and load the application on port 8000: `localhost:8000`

## Contributing
This is an open source project and currently in its early days and undergoing active development.
Send me an email @ oparaprosper79@gmail.com

> Live server: http://juniorhub.herokuapp.com/
