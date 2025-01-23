# Employee-Survey-Portal
# Laravel Project

This README file provides the necessary steps and dependencies required to run the Laravel project successfully.

## Requirements
To run this project, ensure your system meets the following requirements:

1. **PHP**: >= 8.0
2. **Composer**: Latest stable version
3. **Laravel Framework**: Installed via Composer (version specified in `composer.json`)
4. **Database**: MySQL or SQLite (as configured in `.env` file)
5. **Node.js and npm**: For front-end dependencies (Node.js >= 16.x)
6. **Git**: For version control

## Installation Steps

### 1. Clone the Repository
```bash
git clone <repository-url>
cd <repository-folder>
```

### 2. Install Dependencies

#### Composer Dependencies
```bash
composer install
```

#### Node.js Dependencies
```bash
npm install
```

### 3. Environment Configuration
Copy the `.env.example` file to `.env` and configure the database and other settings.
```bash
cp .env.example .env
```

Update the `.env` file with your database details:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

For SQLite:
```
DB_CONNECTION=sqlite
DB_DATABASE=path_to_your_database.sqlite
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Run Migrations and Seed Database (if applicable)
```bash
php artisan migrate
php artisan db:seed
```

### 6. Compile Frontend Assets
```bash
npm run dev
```

### 7. Start the Development Server
```bash
php artisan serve
```

The application will be available at `http://127.0.0.1:8000` by default.

## Dependencies

Below is a list of key dependencies used in this project:

### PHP Dependencies (via Composer)
- **Laravel Framework**: Version defined in `composer.json`
- **Faker**: For generating dummy data
- **Database Driver Packages**: Example: `doctrine/dbal` (if database operations like renaming columns are required)

### JavaScript Dependencies (via npm)
- **Vite**: For frontend asset bundling
- **Axios**: For HTTP requests
- **Laravel Mix**: For Webpack configuration (if applicable)
- **TailwindCSS/Bootstrap**: If used for frontend styling

Refer to the `composer.json` and `package.json` files for the complete list of dependencies.

## Additional Notes
- Make sure the web server (e.g., Apache or Nginx) is properly configured if you deploy the application.
- Set appropriate file permissions for the `storage` and `bootstrap/cache` directories.
- Use `npm run build` for production assets.

---

This documentation should help you set up the project easily. If you encounter any issues, feel free to reach out!
