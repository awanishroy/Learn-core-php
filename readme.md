
---

# 📖 Daily Progress

## Day 1 – Setup & Database ⚡

### 📝 Reasoning
- Organized folders for maintainability  
- `config/` for constants and settings  
- `database/` for DB connection  
- `controller/` prepared for handling data later  
- `assets/` for frontend files  

### 🛠️ What I Did
1. Created `index.html` as a starting point  
2. Set up `config/database.php` for constants  
3. Built `database/connection.php` to connect with MySQL  
4. Tested data fetching to verify DB connection  

### ✅ Outcome
- Basic folder structure ready  
- Database connection successful  
- Data fetching from MySQL verified  
- Ready for **Day 2: form handling & validation**  

---

## Day 2 – Reusability, Routing & Users 👤

### 📝 Reasoning
- Needed a **consistent layout** → added reusable header, navbar, footer  
- Added `user.php` and `register.php` for starting user management  
- Wanted clean URLs → configured `.htaccess` rules  

### 🛠️ What I Did
1. Built **header.php**, **navbar.php**, **footer.php** for reusability  
2. Created `user.php` for listing users  
3. Created `register.php` for user creation form  
4. Updated `.htaccess` to allow clean URLs:  
   - `/home` → `index.php`  
   - `/user` → `user.php`  
   - `/register` → `register.php`  
   - `/about` → `views/pages/about.php`  
5. Added **user creation form** with DB insert functionality  

### ✅ Outcome
- UI uses **reusable layouts**  
- Clean URLs without `.php` extensions  
- Basic user management pages (`user.php`, `register.php`) created  
- User data can be inserted into DB  

---

## 🔗 Next Steps
- Display user list dynamically from database  
- Add **form validation** (server + client side)  
- Implement **Update & Delete** functionality for users  
- Add flash messages (success/error notifications)  

---

💡 This README is updated daily with **progress, reasoning, and outcomes**. It acts as both a **learning journal** and **documentation** of the project’s growth.
