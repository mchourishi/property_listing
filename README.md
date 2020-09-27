# Real Estate Property List & Search with Laravel
This is a Laravel 7 based simple CRUD app to manage Properties.
The Admin Panel is created on AdminLTE3.

## Description
- Admin user can add/update/delete properties.
- Normal user can filter and see properties.
- Two users exists on running seeder one of type admin and other of type user.
- Admin user credentials : Email : admin@admin.com, Password : admin
- Normal user credentials : Email : user@user.com, Password : user

## Installation
- Run ``composer install``  and ``npm install`` to install dependencies. 
- Copy .env.example to .env and update database credentials and table.
- Run ``php artisan key:generate``
- Run ``php artisan migrate --seed`` to migrate and seed data.

### Usage
- Access admin panel (Eg: localhost/property_listing/public/admin) and login with above user credentials.
- Create or Manage Properties as admin user.
- Logout from Admin User.
- Access frontend panel (Eg: localhost/property_listing/public/)
- Filter Properties and click on property name to display details.
- Login Page for both Admin and User is same.


