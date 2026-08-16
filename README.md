# 📖 Core PHP Project

<p align="center">
  <img src="https://readme-typing-svg.demolab.com?font=Fira+Code&size=26&pause=1000&color=c42c14&center=true&vCenter=true&width=800&lines=Building+%7C+Creating+%7C+Improving;Built+with+Core+PHP+%F0%9F%90%98;PHP+%7C+MySQL+%7C+HTML+%7C+CSS+%7C+JavaScript;Always+Building+%F0%9F%9A%80" alt="Typing SVG" />
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-Core%20PHP-c42c14?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-Database-0d1117?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/HTML-CSS-JavaScript-0d1117?style=for-the-badge" />
</p>

---

## 🟠 About This Project

This is a **Core PHP project** created to build a structured PHP-based website using **Core PHP, MySQL, HTML, CSS, and JavaScript**.

The project demonstrates how different parts of a web application work together, including **project structure, configuration, database connectivity, SQL queries, user data handling, controllers, and frontend assets**.

> **Structure → Data → Logic → Interface → Application**

---

## 🟠 📂 Project Structure

```text
Learn-core-php/
│
├── 📁 assets/
│   ├── index.css
│   └── index.js
│
├── 📁 config/
│   └── database.php
│
├── 📁 controller/
│   └── save-user-data.php
│
├── 📁 database/
│   ├── connection.php
│   └── seed.php
│
├── 📄 .gitignore
├── 📄 index.php
└── 📄 README.md
```

---

## 🟠 📁 Folder & File Purpose

### 🎨 `assets/`

Contains the frontend assets used by the application.

```text
assets/
├── index.css
└── index.js
```

- `index.css` → Website styling
- `index.js` → JavaScript functionality

---

### ⚙️ `config/`

Contains project configuration.

```text
config/
└── database.php
```

Used for database-related configuration.

---

### 🎛️ `controller/`

Contains application actions and request-handling logic.

```text
controller/
└── save-user-data.php
```

Handles user data submission and related application actions.

---

### 🗄️ `database/`

Contains database-related files.

```text
database/
├── connection.php
└── seed.php
```

- `connection.php` → Database connection
- `seed.php` → Database seed/data setup

---

### 🏠 `index.php`

The main entry point of the application.

It connects the application with the database and displays user-related data.

---

## 🟠 🗄️ Database

The application uses a database to store and retrieve application data.

The current `users` table contains:

```text
id
name
email
phone
```

Example query:

```php
$user_list = q("SELECT id, name, email, phone FROM users");
```

---

## 🟠 🔄 Application Flow

The basic application flow is:

```text
        🌐 Browser
            ↓
        🏠 index.php
            ↓
      ⚙️ Configuration
            ↓
      🗄️ Database Connection
            ↓
       📊 Database Query
            ↓
        👤 User Data
            ↓
        🖥️ HTML Output
```

### Saving User Data

```text
        👤 User
           ↓
      📝 Form Data
           ↓
      🎛️ Controller
           ↓
      🗄️ Database
           ↓
      💾 Saved Data
```

---

## 🟠 🎯 What This Project Demonstrates

- 🐘 Core PHP development
- 📁 Structured project organization
- 🗂️ Separation of application files
- ⚙️ Configuration handling
- 🗄️ Database connection
- 🌱 Database seeding
- 🧮 SQL queries
- 👤 User data management
- 🎛️ Controller-based handling
- 🌐 PHP and HTML integration
- 🎨 CSS styling
- ⚡ JavaScript integration
- 🔗 Connecting frontend, backend, and database

---

## 🟠 💻 How to Run

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/awanishroy/Learn-core-php.git
```

### 2️⃣ Open the Project

```bash
cd Learn-core-php
```

### 3️⃣ Check PHP

```bash
php -v
```

### 4️⃣ Start the PHP Development Server

```bash
php -S localhost:8000
```

### 5️⃣ Open in Browser

```text
http://localhost:8000
```

---

## 🟠 🛠️ Technologies

<p align="left">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white" />
  <img src="https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" />
</p>

---

## 🟠 🚀 Project Development

The project is designed to grow into a more complete Core PHP application.

Planned improvements include:

- [ ] Authentication
- [ ] Form validation
- [ ] Complete CRUD operations
- [ ] Improved error handling
- [ ] Better application architecture
- [ ] Additional database features
- [ ] More frontend functionality

---

## 🟠 📌 Project Status

**🚧 Active Development**

This project is being continuously developed with new features, improvements, and better application structure.

---

## 🟠 🚀 Vision

> **Build with Core PHP → Work with Data → Connect Components → Create Applications**

The purpose of this repository is to build a practical **Core PHP application** and demonstrate how PHP can be used together with databases and frontend technologies to create a complete website.

---

## 🤝 Let's Connect

<p align="center">
  <a href="https://github.com/awanishroy">
    <img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white" alt="GitHub" />
  </a>
</p>

<h2 align="center">✨ Thank You! ❤️</h2>

<p align="center">
  <img src="https://capsule-render.vercel.app/api?type=waving&color=c42c14&height=180&section=footer" width="100%" alt="Footer" />
</p>
