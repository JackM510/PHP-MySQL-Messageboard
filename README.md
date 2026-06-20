# PHP MySQLMessageboard

A fully-featured Messageboard application with complete CRUD functionality for users, profiles, posts, and comments. Built with Bootstrap 5, JavaScript, PHP, and MySQL, this project demonstrates a responsive, production‑style client–server application. It includes 15 pre‑loaded user profiles and over 20 sample posts to illustrate how the live Messageboard would appear in a real‑world environment.


## Demo


### Screenshots (Desktop)
<div style="display: flex; flex-wrap: wrap; gap: 16px;">
  <img src="demo/desktop/desktop1-index.php.png" width="100%" />
  <img src="demo/desktop/desktop2-login.php.png" width="100%" />
  <img src="demo/desktop/desktop3-index.php.png" width="100%" />
  <img src="demo/desktop/desktop4-index.php.png" width="100%" />
  <img src="demo/desktop/desktop5-profile.php.png" width="100%" />
  <img src="demo/desktop/desktop6-account.php.png" width="100%" />
  <img src="demo/desktop/desktop7-admin.php.png" width="100%" />
  <img src="demo/desktop/desktop8-admin.php.png" width="100%" />
</div>

### Video (Desktop)
<div style="display: flex;">
  <img src="demo/desktop/desktop-demo.gif" width="100%" />
</div>

### Screenshots (Mobile)
<div style="display: flex; flex-wrap: wrap; gap: 16px;">
  <img src="demo/mobile/mobile1-index.php.png" width="200" />
  <img src="demo/mobile/mobile2-login.php.png" width="200" />
  <img src="demo/mobile/mobile3-index.php.png" width="200" />
  <img src="demo/mobile/mobile4-index.php.png" width="200" />
  <img src="demo/mobile/mobile5-profile.php.png" width="200" />
  <img src="demo/mobile/mobile6-account.php.png" width="200" />
  <img src="demo/mobile/mobile7-admin.php.png" width="200" />
  <img src="demo/mobile/mobile8-admin.php.png" width="200" />
</div>

### Video (Mobile)
<div style="display: flex;">
  <img src="demo/mobile/mobile-demo.gif" width="auto" />
</div>









## Features
- **Responsive Design:** works seamlessly across devices and browsers using CSS media queries and JavaScript.
- **Navbar:** quick links to all subpages, with the brand image linking back to the home feed (index.php).
- **User Authentication:** login.php lets users log in or create a new account via the signup option.
- **Main Feed (index.php):** guests can browse posts but cannot like, comment, or view profiles. Logged‑in users can create posts, comment, like, and view profiles.
- **User Profiles (profile.php):** view another user’s profile details and posts, or manage your own profile and update details.
- **Account Management (account.php):** update email, change password, or close your account.
- **Admin Dashboard (admin.php):** restricted to users with the admin role in MySQL. Admins can view all users, update credentials, or delete accounts.
- **Logout (logout.php):** clears session data and redirects to the login page.
- **Post Creation (create_post.php):** shared component for adding new posts on both the main feed and profile pages.
- **Display Posts (fetch_posts.php):** shared component for displaying all posts on the main feed or filtering posts by user on profile pages.


## How It Works


## Tech Stack
- Bootstrap 5
- JavaScript
- PHP
- MySQL
- Xampp

## Installation
1. Clone the repository to your local machine.
2. Start your Apache localhost environment and MySQL services.
3. Create a new database in MySQL named 'messageboard' and set the collation to `utf8mb4_general_ci`.
4. Import the schmea/data from 'db/messageboard.sql' into the new database.
5. Duplicate '.env-example' in the projects root directory and name the file '.env'. 
6. You can either use MySQLs default credentials or enter your unique MySQL credentials in the .env file.
7. Run the application on your local server at `http://localhost/PHP-MySQL-Messageboard/index.php`.

## Demo Login
- You can explore the application without creating an account by using one of the demo profiles.  
- Email and password details for these accounts are listed in `db/user_details.xlsx`.

##  Usage
1. Browse the main feed (index.php) to view posts from all users.
2. Sign up or log in via login.php or selecting the avatar icon in the navbar.
3. Create a new post using the “Create a new post...” form on the main feed or your profile page.
4. Like or comment on posts when logged in.
5. View user profiles by clicking a username or avatar on a post or comment.
6. Edit your profile from profile.php by selecting the pencil icon next to your name, or manage account settings in account.php.
7. Admin users can access admin.php from the navbar dropdown to manage all user accounts details.
8. Log out via the navigation bar to end your session.


##  Future Improvements
 - Post on other profiles.
 - Upload videos to posts.
 - Upload multiple media items to a post.
 - Post notifications.