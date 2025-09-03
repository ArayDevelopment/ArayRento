# ArayRento — سامانه اجاره و خرید ملک | Real‑Estate Web App (PHP MVC)

> **FA / EN bilingual README**  
> این مخزن یک وب‌اپلیکیشن املاک با PHP (الگوی MVC) و MySQL است؛ با امکان ثبت ملک، آپلود چندتصویری، و پشتیبانی از تاریخ جلالی.  
> This repository contains a clean PHP (MVC) + MySQL real‑estate web app with property submission, multi‑image upload, and Persian (Jalali) date support.

<p align="center">
  <img alt="PHP" src="https://img.shields.io/badge/PHP-%5E8.x-777BB4?logo=php&logoColor=white">
  <img alt="MySQL" src="https://img.shields.io/badge/MySQL-5.7%2B-4479A1?logo=mysql&logoColor=white">
  <img alt="Architecture" src="https://img.shields.io/badge/Pattern-MVC-blue">
  <img alt="Language" src="https://img.shields.io/badge/Language-FA%20%7C%20EN-forestgreen">
</p>

---

## 🔀 Language | زبان
- [🇮🇷 فارسی](#-راهنما-به-فارسی)
- [🇬🇧 English](#-english-guide)

---

## 🧭 Project Snapshot | نمای کلی پروژه

**Folders (from repo root):**

```
ArayRento/
├─ index.php                 # Front Controller / Router
├─ ArayRentoController/      # Controllers (business flow)
├─ ArayRentoModel/           # Models (DB access & entities)
├─ ArayRentoView/            # Views (templates)
├─ ArayRentoDataBase/        # DB connection / utilities
└─ .idea/                    # IDE metadata
```

> Source: repository file tree as of 2025‑09‑03.

**Key Features**
- Property listing & submission (forms + validations)
- Multi‑image upload per property
- Persian (Jalali) date support across UI / records
- Clean MVC separation (Controller / Model / View)
- MySQL‑backed persistence
- Simple, framework‑free PHP codebase (easy to read / extend)

---

## ⚙️ Requirements | پیش‌نیازها

- **PHP** 8.0+ (recommended 8.1/8.2)
- **MySQL** 5.7+ (یا MariaDB 10.3+)
- **Web Server** (Apache/Nginx) یا `php -S` برای اجرای محلی
- **Extensions**: `PDO`، `pdo_mysql`, `mbstring`, `json`, `fileinfo` (برای آپلود)
- **Composer** *(اختیاری)* — Only if you later add libraries

---

## 🚀 Quick Start | شروع سریع

### Clone & Serve
```bash
git clone https://github.com/ArayDevelopment/ArayRento.git
cd ArayRento

# Option A: PHP built-in server (dev only)
php -S 127.0.0.1:8080 -t .

# Option B: Configure a vhost to point DocumentRoot to repo root
```

### Database Setup
1. Create a MySQL database (e.g. `aray_rento`).
2. Create a user and grant privileges (local use).
3. Configure DB credentials inside the **database config** file under:
   `ArayRentoDataBase/` (e.g. `Database.php` or similar).  
   Typical structure:
   ```php
   <?php
   return [
     'host' => '127.0.0.1',
     'port' => 3306,
     'dbname' => 'aray_rento',
     'user' => 'root',
     'pass' => 'secret',
     'charset' => 'utf8mb4',
   ];
   ```
4. Import your schema if a `schema.sql` exists, otherwise create minimal tables (see example below).

### Minimal Example Schema (adapt to your code)
```sql
CREATE TABLE properties (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  price DECIMAL(12,2) NOT NULL,
  city VARCHAR(120),
  address VARCHAR(255),
  bedrooms INT DEFAULT 0,
  bathrooms INT DEFAULT 0,
  area INT,               -- sqm
  created_at DATETIME,
  updated_at DATETIME
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE property_images (
  id INT AUTO_INCREMENT PRIMARY KEY,
  property_id INT NOT NULL,
  path VARCHAR(255) NOT NULL,
  alt VARCHAR(255),
  created_at DATETIME,
  FOREIGN KEY (property_id) REFERENCES properties(id) ON DELETE CASCADE
);
```

---

## 🧩 Architecture | معماری

**MVC Flow**
```
Request -> index.php (Front Controller/Router)
        -> ArayRentoController/* (decides action)
        -> ArayRentoModel/* (queries DB via PDO)
        -> ArayRentoView/* (renders HTML)
Response -> Browser
```

**Jalali Dates**
- UI utilities/helpers translate Gregorian <-> Jalali as needed.
- Keep canonical timestamps in UTC (DATETIME / TIMESTAMP) and format for display.

**Uploads**
- Store original files under e.g. `public/uploads/` (ensure write perms).
- Validate MIME/size via `fileinfo`; store DB paths in `property_images`.

---

## 🧪 Development Tips | نکات توسعه

- **Error Reporting (dev)**: enable `display_errors=1` and `error_reporting(E_ALL)` locally.
- **Routing**: centralize in `index.php` for clarity; keep clean controller names/methods.
- **Security**:
  - Use prepared statements (PDO) everywhere.
  - Validate/escape all user inputs (both server & client side).
  - Limit upload size & allowed MIME types; randomize file names.
  - Keep secrets out of VCS (use a local `config.local.php` or `.env`).
- **i18n**: wrap UI strings to allow easy localization (FA/EN toggles).
- **Pagination & Search**: consider adding to property list for large datasets.

---

## 🖥️ Scripts | اسکریپت‌های مفید

```bash
# Code style (example if you add tools later)
php -l **/*.php

# Run dev server
php -S 127.0.0.1:8080 -t .
```

---

## 📸 Screenshots | تصاویر (اختیاری)

> Add screenshots/GIFs of: Home, Property List, Property Detail, Submit Form, Admin (if any).

---

## 📦 Deployment | استقرار

- **Apache**: enable `AllowOverride All` and add a basic `.htaccess` to route to `index.php`.  
  Example:
  ```apacheconf
  RewriteEngine On
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteRule ^ index.php [QSA,L]
  ```
- **Nginx**: route all non-file requests to `index.php`.

---

## 🤝 Contributing | مشارکت

1. Fork & create feature branch.
2. Follow existing MVC structure & naming.
3. Open a PR with a clear description and screenshots when applicable.

---

## 📝 License | مجوز

> No explicit LICENSE file found yet. Choose one (MIT/Apache‑2.0/GPL‑3.0) and add `/LICENSE`.

---

## 🙏 Acknowledgements | قدردانی

- PHP & MySQL communities
- Jalali/Persian date libraries & contributors

---

# 🇮🇷 راهنما به فارسی

**ArayRento** یک وب‌اپلیکیشن املاک با PHP و MySQL است که بر اساس معماری **MVC** پیاده‌سازی شده و قابلیت‌های زیر را فراهم می‌کند:

- ثبت و مدیریت آگهی‌های ملک
- آپلود چندتصویری برای هر ملک
- پشتیبانی از **تاریخ جلالی** در رابط کاربری
- جداسازی تمیز لایه‌ها (Controller / Model / View)
- پایگاه‌داده MySQL و کدنویسی ساده بدون فریم‌ورک

## نصب و راه‌اندازی

1) مخزن را کلون کنید:
```bash
git clone https://github.com/ArayDevelopment/ArayRento.git
cd ArayRento
```

2) دیتابیس بسازید و دسترسی‌ها را تنظیم کنید.  
3) فایل تنظیمات اتصال دیتابیس را در پوشه `ArayRentoDataBase/` ویرایش کنید.  
4) سرور محلی را اجرا کنید:
```bash
php -S 127.0.0.1:8080 -t .
```

## ساختار پوشه‌ها

```
index.php                 # نقطه ورود و مسیریابی
ArayRentoController/      # کنترلرها
ArayRentoModel/           # مدل‌ها و لایه دیتابیس
ArayRentoView/            # نماها/قالب‌ها
ArayRentoDataBase/        # تنظیمات و ابزارهای پایگاه‌داده
```

## نکات مهم

- از **PDO** و کوئری‌های آماده استفاده کنید.  
- ورودی‌ها را اعتبارسنجی کنید و خروجی‌ها را ایمن بسازید.  
- محدودیت حجم و نوع فایل برای آپلود تصاویر را اعمال کنید.  
- تاریخ‌ها را در دیتابیس به صورت UTC/Gregorian نگه دارید و در نمایش به جلالی تبدیل کنید.  

---

# 🇬🇧 English Guide

**ArayRento** is a PHP + MySQL real estate app following **MVC**:

- Property CRUD & listing
- Multi‑image upload per property
- **Jalali** date support in the UI
- Clean separation of layers
- Plain PHP (no heavy framework)

## Setup

```bash
git clone https://github.com/ArayDevelopment/ArayRento.git
cd ArayRento
php -S 127.0.0.1:8080 -t .
```

Configure DB credentials under `ArayRentoDataBase/` and create necessary tables (see the example schema above).

## Folder Structure

See the tree under **Project Snapshot**.

## Notes

- Use PDO prepared statements, strict validation, and safe uploads.
- Keep secrets out of VCS; prefer local config files.
- Convert dates to/from Jalali only on presentation layer.

---

## 📬 Contact | ارتباط

- Owner: **ArayDevelopment**
- Repo: `ArayDevelopment/ArayRento`

> Found a bug or want a feature? Open an issue or PR.
