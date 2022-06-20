# E-Shop-Dynamic Web Programing
E-Shopping website created using a free template
###### Class:
Dynamic Web Programming
###### Instructor:
Assoc. Prof. Dr. Gürhan GÜNDÜZ

## Goal of the Project
- Create 2 types of users on the system, admins and customers. (Completed)
- Create an admin and allow this admin to create users with privileges. (Completed)
- Allow admins and privileged users to add, update or delete a product. (Can add and delete)
- Create a customer registration and login pages. (Completed)
- Sell products with different categories. (Completed)
- Allow products to have title, picture price, description. (Completed)
- Implement a shopping cart mechanism. (Completed)
- Display total cost and allow users to checkout or continue shopping. (Completed)


## Admin User Details
- Email: “admin@gmail.com”
- Password: “admin”

## Explanation of Classes
Admin classes:
- welcomePageAdmin.php = Welcome page for admins and privileged users. Admin panel is 
open, can add items, remove items and create new users(optional:with admin privileges.)
- homePageAdmin.php = Welcome page for admins and privileged users. Admin panel is 
open, can add items, remove items and create new users.(optional:with admin privileges.)
- addNewItem.php = Only accessible by admins, they can add new products with name, price, 
description and image.
- removeItem.php = Only accessible by admins, they can choose the product they want to 
remove and delete it from the database.
- createUserAdmin.php = Only accessible by admins. It’s similar to normal registration page, 
but admins additionally can define usertype(admin/user) and give admin privileges to the 
users they created.
User Classes:
- welcomePageUser.php = Welcome page for logged in users. Can do everything a user is 
allowed to do.
- homePageUser.php = Home page for logged in users. Products are visible and users can 
purchase products they have added into the cart.
- login_form.php / logout.php= Allows users to login and logout
- cart.php = Allow users to view items they added and check out.
Guest Classes:
- homePageGuest.php = Home page for guest users. Products are visible but options are 
limited until a user logs in. For example, they can add items to card but cannot buy and has 
to create an account or log in.
- welcomePageGuest.php = Welcome page for guest users. Options are limited until a user 
logs in.
- cart.php = Allow guests to view items they added but they have to login to buy them.
Methods and Database Classes:
- login_form = database connection for login page.
- Action.php = Methods for project to run.
- Main.js = Javascript methods.
- databaseConnection = Establishes database connection
- veriler.sql = Database that includes all of the data for project to work.
- bootstrap.css = pre built style file

## Run:
Run ‘welcomePageGuest.php’ to open the website
