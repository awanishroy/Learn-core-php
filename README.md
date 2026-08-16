# 📖 Core PHP Project

<p align="center">
  <img src="https://readme-typing-svg.demolab.com?font=Fira+Code&size=26&pause=1000&color=c42c14&center=true&vCenter=true&width=800&lines=Learning+%7C+Building+%7C+Understanding;Learning+Core+PHP+by+Building+Projects+%F0%9F%90%98;PHP+%7C+MySQL+%7C+HTML+%7C+CSS+%7C+JavaScript;Always+Learning+%F0%9F%9A%80" alt="Typing SVG" />
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-Core%20PHP-c42c14?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-Database-0d1117?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/HTML-CSS-JavaScript-0d1117?style=for-the-badge" />
</p>

---

## 🟠 About This Project

This is my **Core PHP learning project**, created to understand how a PHP application is structured and how different parts of a website work together.

Instead of learning PHP only through individual examples, I am using this project to understand **real project structure, database handling, controllers, configuration, assets, and application flow**.

> **Learn → Build → Understand → Improve**

---

## 🟠 📚 What I'm Learning

Through this project, I am learning:

- 🐘 Core PHP
- 📁 Project structure
- 🗂️ File organization
- ⚙️ Configuration
- 🗄️ Database connection
- 🧮 SQL queries
- 👤 User data handling
- 🎛️ Controllers
- 🎨 CSS
- ⚡ JavaScript
- 🌐 HTML
- 🔗 Connecting different parts of a PHP application
- 🚀 Building a complete PHP-based website

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

Contains the frontend assets used by the project.

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

Used for handling user data submission.

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

The project uses a database to work with application data.

Example query used in the project:

```php
$user_list = q("SELECT id, name, email, phone FROM users");
```

The project currently works with a `users` table containing:

```text
id
name
email
phone
```

---

## 🟠 🔄 Project Flow

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

For saving user data:

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

## 🟠 🎯 Learning Approach

```text
        📖 Learn
           ↓
      💡 Understand
           ↓
        💻 Code
           ↓
       🗄️ Use Database
           ↓
       🧪 Test
           ↓
       🔧 Improve
           ↓
       🚀 Build
```

The purpose of this project is to understand **how Core PHP can be used to build a structured application**, not just individual PHP files.

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

### 4️⃣ Start PHP Development Server

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

## 🟠 📈 Learning Progress

- [x] Core PHP project structure
- [x] File organization
- [x] Database configuration
- [x] Database connection
- [x] Database seed
- [x] SQL queries
- [x] User data handling
- [x] Controller structure
- [x] CSS assets
- [x] JavaScript assets
- [ ] Authentication
- [ ] Validation
- [ ] More CRUD operations
- [ ] Better project architecture
- [ ] More complete application features

---

## 🟠 🚀 Goal

> **Learn Core PHP → Understand Project Structure → Work with Data → Build Real Applications**

This project will continue to grow as I learn more about **Core PHP, databases, application structure, and real-world web development**.

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