# Corporate Analyzer

## Project Description

**Corporate Analyzer** is a robust and dynamic web application built using the Laravel framework. It empowers organizations to gather, analyze, and visualize employee feedback and insights to improve corporate strategies and decision-making.

## Features

- **User-Friendly Survey Management:** Create and manage employee surveys effortlessly.
- **Dynamic Reporting:** Generate insightful reports based on survey responses.
- **Admin Dashboard:** Comprehensive dashboard for managing users, surveys, and reports.
- **Secure Authentication:** Role-based access and secure authentication using Laravel’s built-in security features.

## Tech Stack

- **Backend:** Laravel 10.x (PHP framework)
- **Frontend:** Blade templating engine, HTML, CSS, and JavaScript
- **Database:** SQLite (previously MySQL)
- **Authentication:** Laravel Breeze (or alternative authentication system)
- **Deployment:** Local and cloud environments

## Installation Instructions

### Prerequisites

- PHP 8.x or higher
- Composer
- Node.js and NPM
- SQLite (or any supported database)
- Git (optional)

### Setup Steps

1. **Clone the Repository:**

   ```bash
   git clone <repository-url>
   cd CorporateAnalyzer
   ```

2. **Install Dependencies:**

   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Environment Configuration:**

   - Create a `.env` file by copying the example:
     ```bash
     cp .env.example .env
     ```
   - Update the `.env` file:
     ```env
     APP_NAME=CorporateAnalyzer
     DB_CONNECTION=sqlite
     DB_DATABASE=/absolute/path/to/database.sqlite
     ```

4. **Generate Application Key:**

   ```bash
   php artisan key:generate
   ```

5. **Database Setup:**

   ```bash
   touch database/database.sqlite
   php artisan migrate
   ```

6. **Run the Application:**

   ```bash
   php artisan serve
   ```

   Visit `http://localhost:8000` in your browser.

## Usage

### Admin Dashboard

1. Register as an admin or modify the seeders for admin roles.
2. Manage surveys, view analytics, and control user roles.

### User Flow

1. Users can register and participate in surveys.
2. Results are dynamically updated in the dashboard.

## Project Structure

```
CorporateAnalyzer/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
└── tests/
```

## Contributing

We welcome contributions! Please follow the standard fork-branch-PR workflow.

## Security

If you discover any security issues, please open an issue or contact the maintainers directly.

## License

This project is licensed under the MIT License.

