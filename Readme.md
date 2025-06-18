# Corporate Analyser

A prototype Laravel-based internal survey platform built using the **TALL Stack** (Tailwind CSS, Alpine.js, Laravel, Livewire). This system is built for internal company use to analyze employee feedback via a multi-step survey form.

⚠️ **Note:** This project is still under **active development and prototyping**, and should not be used in production environments. Features like email notifications, access control, analytics, and advanced survey configuration are yet to be added.

---

## 🚀 Features


- ✅ Multi-step survey form using Livewire components
- ✍️ Collects personal info, work experience, ratings, and feedback
- ⭐️ Star-based ratings for key employee metrics
- 💾 Stores data securely in a MySQL database
- 🔄 Real-time form interaction with Livewire (no full page reloads)
- 🐢 Lazy loading indicators between survey steps
- 📊 Structure ready for future analytics/dashboard integration
---

---

## 🛠️ Tech Stack

| Layer         | Technology          |
|---------------|---------------------|
| Backend       | Laravel 12          |
| Frontend      | Blade, Tailwind CSS |
| Interactivity | Livewire            |
| UI Components | Flux UI, Blade UI Icons |
| Database      | MySQL               |

---

## 📁 Project Structure

```
corporate-analyser/
├── app/
│   └── Livewire/
│       └── SurveyForm.php         # Livewire component logic
├── resources/
│   └── views/
│       └── livewire/
│           └── survey-form.blade.php  # Survey form UI
├── database/
│   └── migrations/
│       └── create_demo_surveys_table.php  # DB structure for survey
├── app/
│   └── Models/
│       └── DemoSurvey.php         # Eloquent model
├── routes/
│   └── web.php                    # Route to load the Livewire component
└── README.md
```

---

## 🛠 How to Set Up the Project

1. **Clone the repository**

```bash
git clone https://github.com/your-username/corporate-analyser.git
cd corporate-analyser
```

2. **Install dependencies**

```bash
composer install
npm install && npm run dev
```

3. **Create `.env` file and setup DB**

```bash
cp .env.example .env
php artisan key:generate
```

Edit your `.env` file to configure your database:

```
DB_CONNECTION=mysql
DB_DATABASE=corporate_analyser
DB_USERNAME=root
DB_PASSWORD=
```

4. **Run migrations**

```bash
php artisan migrate
```

5. **Serve the application**

```bash
php artisan serve
```

Now visit [http://127.0.0.1:8000](http://127.0.0.1:8000) to use the survey form.

---

## 📬 Upcoming Features

* [ ] Email invitations to employees for surveys
* [ ] Admin dashboard with analytics
* [ ] Authentication (admin and employee)
* [ ] Configurable survey questions from admin panel
* [ ] PDF/Excel exports of results
* [ ] Graphical insights and charts

---

## 📢 Disclaimer

This project is strictly for internal prototyping and learning purposes. It is **not ready for production** use. Do not deploy or distribute without additional security, testing, and features.

---

## 🙌 Author

**Soumyadeep Dey**
This project is part of an academic minor project implementation using Laravel and TALL Stack.

Feel free to fork and explore, but please don’t use it as-is in a production environment.

---

## 📝 License

This project is for **internal/academic use only**. A proper open-source license will be added once it's ready for public release.
