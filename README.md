# 🏥 PHP (Public Healthcare Portal)

[![Live Demo](https://img.shields.io/badge/Live-Demo-green?style=flat-square&logo=google-chrome)](http://officialphp.epizy.com/)
[![GitHub Issues](https://img.shields.io/github/issues/codekanhaiya/php?style=flat-square)](https://github.com/codekanhaiya/php/issues)
[![License](https://img.shields.io/github/license/codekanhaiya/php?style=flat-square)](LICENSE)

> A full-featured, responsive Healthcare Portal built with PHP and MySQL, enabling patient-doctor interactions, appointment scheduling, and health content delivery.

🔗 **Live Preview**: [http://officialphp.epizy.com](http://officialphp.epizy.com/)

---

## 📌 Highlights

- 🧑‍⚕️ Doctor and patient login & dashboards
- 📅 Appointment management system
- 📚 Health tips and articles
- 📄 PDF generation using FPDF
- 📧 Contact form with email support
- 🔒 Secure login/logout flow
- 🔍 Doctor search with specialization filter

---

## 🖥️ Tech Stack

| Tech | Description |
|------|-------------|
| PHP  | Server-side scripting |
| MySQL | Database management |
| HTML/CSS | Frontend markup and styling |
| JavaScript | Frontend interactions |
| FPDF | PDF generation |
| Bootstrap | Responsive UI components |

---

## 🌐 Screenshots

### 🏠 Homepage
![Homepage](https://via.placeholder.com/1000x500?text=Homepage)

### 👨‍⚕️ Doctor Dashboard
![Doctor Dashboard](https://via.placeholder.com/1000x500?text=Doctor+Dashboard)

### 👩‍💼 Patient Dashboard
![Patient Dashboard](https://via.placeholder.com/1000x500?text=Patient+Dashboard)

---

## ⚙️ Installation Guide

### 🛠 Requirements

- PHP 7.x+
- MySQL Server
- Web server (e.g., XAMPP, Apache)

### 🚀 Setup Instructions

```bash
# Clone the repository
git clone https://github.com/codekanhaiya/php.git

# Navigate into the directory
cd php

# Import the database (php.sql) using phpMyAdmin or CLI

# Configure database credentials in includes/db.php
# Start your local server and visit http://localhost/php/
```

---

## 👨‍💻 Usage

1. Register as either a doctor or a patient.
2. Log in to access personalized dashboard.
3. Patients can:
   - Schedule appointments
   - Read articles
   - Contact support
4. Doctors can:
   - View and manage appointments
   - Update profiles and availability

---

## 🗂️ Project Structure

```
php/
├── css/                # Stylesheets
├── js/                 # Scripts
├── includes/           # DB connection and utilities
├── fpdf/               # PDF generation library
├── subServer/          # Server logic (AJAX endpoints)
├── index.php           # Homepage
├── about.php           # About us
├── contact.php         # Contact page
├── doctorDash.php      # Doctor dashboard
├── patientDash.php     # Patient dashboard
├── findDoctor.php      # Doctor search
├── specialities.php    # Doctor specialties
├── php.sql             # MySQL database
└── README.md           # You’re reading it!
```

---

## ✨ Features in Progress

- 🔐 Two-factor authentication
- 📅 Calendar UI for scheduling
- 🌐 Multi-language support
- 💬 Real-time chat between patients and doctors

---

## 🙌 Contributing

Contributions are welcome!

```bash
# Fork the repo
# Create your branch
git checkout -b feature/new-feature

# Commit your changes
git commit -m "Add new feature"

# Push the branch
git push origin feature/new-feature

# Open a Pull Request
```

---

## 📄 License

This project is open for **educational learning and personal use**.

---

## 📫 Contact

- **Author**: Kanhaiya
- **GitHub**: [@codekanhaiya](https://github.com/codekanhaiya)
- **LinkedIn**: [@click here!](https://www.linkedin.com/in/kanhaiya-gupta-401303240)

---

> Give this repo a ⭐ if you find it helpful!
