# Complete pharmacy management system

# Note:
this is a modified clone of this repo "https://github.com/MusheAbdulHakim/Pharmacy-management-system.git"
with the following changes below

```
1. Made it loadable without "php artisan serve"
2. Modified the font family to look more professional
3. fixed certain UI disorientation
4. fixed certain loop statements e.g edit sale page
5. fixed laravel error issues for migrate
6. made the .env file available for less commands
7. added vendor files to avoid excess requirements of laravel commands
```

# Features

1. Products
2. Product categories
3. Purchases
4. Sales
5. Supplier
6. Reports
7. Access Control (roles and permissions)
8. Users
9. User Profile
10. Settings (Application settings)
11. Application backup
12. Dashboard
13. Stock notifications

# Installation
 Follow these steps to install the application.
1. Clone the Repository
```
git clone git@github.com:anthony0000/Pharmacy-management-system.git
```
2. Go to project directory

```
cd Pharmacy-management-system
```

3. Create a database called "pharmacy" in phpmyadmin

4. run the following command to auto create tables
   
```
php artisan migrate --seed
```

5. Generate app key with this command (terminal)
```
php artisan key:generate
```

6. Set database connection to your database in the .env file.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pharmacy
DB_USERNAME=root
DB_PASSWORD=
```

7. Open the address in the terminal in your browser.
   Usually address is usually like this:
```
http://localhost/project-name
```
8. Enjoy and make sure to star the repo :).Report bugs,features and also send your pull requests.

# admin login credentials

```
 email: admin@admin.com
 password: admin
```

Theme: https://themeforest.net/item/doccure-doctor-appointment-booking-system-bootstrap-angular-template/28201296

# Usage

- Profile => 
	Each user has a profile of their own.
	You can update your profile credentials from this page by clicking on the edit button.
	You can also change your password by clicking on the password tab
	and choosing your new password.Also make sure you type your old password correctly

- Users => 
	list of all users in the system.
	You can add new user by clicking on the add user button on the users page.
	You can also edit user details by clicking on the edit button on the users page.
	You can easily delete a user by clicking on the delete button.
	You can export or print all the users data by clicking on the export data button dropdown.


- Access Control =>
	User roles and permissions are here.
	Every user in the system has a role and each role has some number of permissions in the system.
	You can create new roles and choose their permissions. 
	Click the add role button, and write the role name and choose some number of permissions you want 
	the user holding this role to have and submit.
	you can edit or delete roles by clicking on either the edit button or delete button.



- Suppliers =>
	The suppliers page has a list of all your product suppliers.
	You can add new suppliers by clicking on add supplier button on the page or from the sidebar.
	You can also edit supplier details by clicking on the edit button on the suppliers page.
	You can also delete by clicking on the delete button.


- Sales => 

	The sales page has list of all the sales that has ever been made on the system.
	You can add sales by clicking on the sales button on the sales page.
	You can also delete sales by clicking on the delete button.

	You can export or print the sales data by clicking on the export data dropdown menu at the top of the list
	and choosing which option you want.


- Purchases =>
	The Purchases page contains all your product purchases.This is the core part of the 
	your application products.
	you can add purchases by clicking on the add new button on the purchases page or by clicking on the add purchase button
	on the sidebar.After that, fill in the details and submit the form.
	You can edit purchases by clicking edit button on the purchases page.
	You can also delete purchase by clicking on the delete button on the purchases page.
	You can also export or print the purchases data by clicking on the export data dropdown And choose your option.

- Products =>
	The products page contains all products that you are selling.
	You can add product by clicking on the add product from the sidebar or add new button the products page.

	You can edit the product details by clicking on the edit button on the products page
	Or you can also delete product by clicking on the delete button on the products page.

	->Outstock =>This page contains all products that are out of stock.That is when a purchased product quantity is zero and is not updated,
		It is refered to as outstocked product.
		You don't need to add or delete outstocked products.
		The system automatically recognize outstocked products and put the there
		You also export or print them too.

	->Expired =>This page  contains all products that are expired.That is products whose expiry date has reach.
		The system automatically recognize them and put them there so you don't have to add them yourself.



- Categories => 
	The categories page contains your products categories.
	You can add product category by clicking on the add category button on the categories page.
	You can also edit by clicking on the edit button on the categories page.
	You can delete categories by clicking on the delete button.


# How to add product and sell It

1 First add the category of product

2 Add the product supplier

3. Make a purchase of the product by adding purchase.

4. After purchase is made, add the product to your products.

5. You can start selling the product.

6. When you are notified of the stock, just update the purchased product quantity.
Or make a new purchase.

![ScreenShot](screenshots/login.png?raw=true "Login page")

![Dashboard](screenshots/dashboard.png?raw=true "Dashbaord page")

![Profile](screenshots/user-profile.png?raw=true "User profile")
