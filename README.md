# eCommerce_Store_Laravel
 
## Description 
![Screenshot (133)](https://user-images.githubusercontent.com/62790800/227343302-9ee36eda-692d-4b63-b21a-6e02b1b39ed9.png)

This project was created as part of my php final exam. It is a simple eCommerce website created using the framework Laravel. It has 2 parts: the client side and the administrator side.

The client is able to:
 - register and login in order to access the online shop
 - access profile page
 - browse through the available products
 - add products to cart
 
The administrator is able to:
 - login in order to access the admin dashboard
 - access profile page
 - manage products (perform CRUD operations on the products table)

## Installation

Before being able to open this project you need to have WAMP or XAMPP installed in order to access the apache server.

You also need to have Composer and Laravel installed. For more information about the installing process you can access the Laravel official website: https://laravel.com/docs/4.2/quick#installation

For the database, you can use the file "laravel_proiect.sql". Download it and import in into the phpMyAdmin database. 

After everything is installed and ready, you need to download the "Shop" file in the coresponding folder (depending on the program you use for the server). 
You can access the site using the command line: navigate to the folder and run the following command:

```bash
php artisan serve
```
You can access the site at http://127.0.0.1:8000/

## Usage

The first part that opens is the client side. In order to access the shop you need to register and log in. 

![Screenshot (134)](https://user-images.githubusercontent.com/62790800/227344848-2135e2a5-a97e-4c3b-8ad8-fdbbb60d6f46.png)

After loging in, you are redirected to the client dashboard. From the navbar you can access the shop, profile or come back to the dashboard.

![Screenshot (135)](https://user-images.githubusercontent.com/62790800/227344968-e1decdfa-31a1-4b71-9548-941f7f26bd2c.png)

![Screenshot (136)](https://user-images.githubusercontent.com/62790800/227345015-ca326e8a-8e5f-4b2e-98ff-7b0e942983fe.png)

![Screenshot (137)](https://user-images.githubusercontent.com/62790800/227345071-78a33c59-9588-434b-b0a1-32ec3a79a6b8.png)

For the administrator part, you need to access the login page at: http://127.0.0.1:8000/admin/login. If you are using the data from the SQL file provided, the email is admin@gmail.com and the password is password. Otherwise, you can add administrator accounts from the database.

After loging in, you are redirected to the administrator dashboard. There you can access from the navbar the products' details, profile or go back to the dashboard.

![Screenshot (139)](https://user-images.githubusercontent.com/62790800/227345105-58ee3782-7f50-4d49-9ae7-b354e6a13252.png)

