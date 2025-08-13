# Laravel Login with Cookies

A simple Laravel-based authentication system that uses **cookies** instead of sessions to store login information.  
This project demonstrates user registration, login, and logout functionality with cookies for persistent authentication.

📺 **Project Demonstration Video:** [Watch on YouTube](https://youtu.be/dlD707VTJEg)

---

## 🚀 Features

- User Registration with validation
- Secure password hashing
- Login authentication with email & password
- Store user ID and name in browser cookies
- Logout functionality with cookie deletion
- Error handling and validation messages
- Minimal and easy-to-understand code structure

---

## 🛠️ Technologies Used

- **Laravel** (PHP Framework)
- **PHP** >= 8.0
- **MySQL** (or any database supported by Laravel)
- **Blade** (Laravel templating engine)

---

## 📂 Project Structure

Key files and directories:
app/
├── Http/
│ └── Controllers/
│ └── AuthController.php # Handles registration, login, and logout
resources/
└── views/
├── login.blade.php # Login page
├── register.blade.php # Registration page
└── dashboard.blade.php # Example dashboard after login
routes/
└── web.php # Application routes

---

## ⚙️ Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/ImtiazHabib/login_laravel_cookie.git
   cd login_laravel_cookie
## Install dependencies
composer install
## Configure database in .env
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
🔑 Usage
Visit /register_page to create an account.

After registration, go to /login_page to log in.

Upon successful login, cookies (user_id and user_name) will be stored in the browser for 60 minutes.

Logout will clear the stored cookies.

📹 Demonstration
▶ Watch Full Demo on YouTube

📜 License
This project is open-source and available under the MIT License.
