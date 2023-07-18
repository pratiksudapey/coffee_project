

## About Project

Cup of Joe is an online coffee ordering system built on Laravel with bootstrap template. Here, user can place an order, edit the order and view their order history.

## Running the project

Clone the project from github to your local device.
Install composer and update .env file. Create an app key for the project.
Run the project in local host.

The Login page will appear.
Before Logging in, run "php artisan db:seed --class=UserSeeder" to seed the database. Thus login with the following credentials:

For admin: 
email : admin@gmail.com
password : admin123

For user: 
email : user@gmail.com
password : user1234

We can create multiple users accounts.

ROLE:
User
User account can create a coffee order, edit the order and view the order history.
Admin
Admin account can create a coffee order, edit the order, view the order history and delete the order.


## Running Test Case
Run "php artisan db:seed --class=CoffeeSeeder"
And run "php artisan test" to test the funtionality
