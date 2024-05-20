### <p align="center"><b>Welcome to Healthection</b></p>

------------

<p align="center">
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## 🤨 What is Healthection?
Healthection is a powerful tool designed to detect and monitor cardiovascular disease with high accuracy. This tool combines the latest technology in digital health and artificial intelligence to provide fast and precise early diagnosis, as well as continuous monitoring of heart health.

## ✨ Features Available
- Authentication
  - Login (Admin, Operator & Patient)
  - Register (Patient)
- Data Management
  - Operator
  - Patient
     
## 💾 Required Prerequisites
To run this project, the following is a list of services and applications that are mandatory and required when running the Learnify application. If you don't have it installed, it is recommended to install it first.
- PHP (Minimum PHP v8.1.10)
- Web Server (XAMPP, Laragon, and other Web Servers)
- Web Browser (Chrome, Firefox, Safari & Opera)
- Internet Network
- PHP advanced settings (max_upload & post_max in php.ini)

## 💻 Guide to Running & Installing Applications
In order to run this application or website, you need to install a web server such as XAMPP or Laragon and have at least one web browser installed on your computer.

### Clone Repository
Open Command Prompt or Git Bash, then navigate to the directory where you want to save the project files. After that, type the following command.
```bash
git clone https://github.com/garlynugrahaa/healthection.git
```
```bash
cd healthection
```

### Install Depedency
Dependencies are a collection of libraries required by our Laravel application, including the Laravel framework itself. To install all dependencies, use the following command.
```bash
composer install
```

### Setup Environment Variable
After the composer installation process is complete, we need to create an .env file in our application folder. However, usually a sample file is available. We only need to copy the file by typing the following command.
```bash
cp .env.example .env
```

### Generate an app Encryption Key
```bash
php artisan key:generate
```

### Open Project with VS Code
```bash
code .
```

### set Database on .env File
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YourDatabase
DB_USERNAME=YourUsernameDatabase
DB_PASSWORD=YourPasswordDatabase
```

### Finalizing The Installation
you should install and build your NPM dependencies and migrate your database
```bash
npm install
```
```bash
npm run build
```
```bash
php artisan migrate --seed
```
```bash
php artisan storage:link
```

### Running Server
```bash
php artisan serve
```

## 🧑 Author
- Garly Nugraha
  - Instagram : <a href="https://www.instagram.com/garlynugrahaa/">@garlynugrahaa</a>
  - GitHub : <a href="https://github/garlynugrahaa/">@garlynugrahaa</a>
- Finna Elfiana Nabilah
  - Instagram : <a href="https://www.instagram.com/finerlfinn/">@finelfinn</a>

## 🤝 Contribution
I really appreciate contributions, issues, and feature requests as this app is far from perfect. Feel free to submit a pull request and make changes to this project. Considering that I am working on this project myself, there are still many features and things that need to be improved, so your help means a lot to me.

## 📥 Push Repository
```bash
git add .
```
```bash
git commit -m "FEAT : Description"
```
Commit Information : 
- ADD (Copy and Paste File)
- INST (Install the package or technology needed)
- MAKE (Create migration files, seeders, controllers, models, and more)
- FEAT (Adding new features)
- FIX (Fixing bugs)
- DEL (Delete folder, file, or code)

```bash
git push -u origin branch-name
```

## 🔱 License
- The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
- Copyright © Arcanusantara - 2024

------------

<p align="center"><b>Made with ❤️ by Arcanusantara</b></p>
