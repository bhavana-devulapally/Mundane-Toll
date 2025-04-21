
# Mundane Toll 

**Tech Stack**: HTML, CSS, JavaScript, PHP, MySQL  
**Type**: Full-Stack Web Application  
**Domain**: Personal Finance / Expense Tracking  

##  Overview

**Mundane Toll** is a dynamic web application designed to help users track and manage their day-to-day expenses efficiently. The platform offers a seamless, user-friendly interface for recording, reviewing, and analyzing personal financial activities. By moving away from traditional Excel-based tracking, this application provides a smarter, real-time alternative for budget-conscious individuals.

This project was developed as part of a summer internship and was recognized for its utility, performance, and clean design.

---

##  Problem Statement

People often rely on spreadsheets to log their expenses, which lack structure, analytics, and can become cluttered with scale. This project addresses:

- Inability to segregate or categorize expenses in Excel
- Time-consuming retrieval of old entries
- Lack of intelligent summaries or reminders
- No insights into spending patterns or financial health

---

##  Solution

**Mundane Toll** provides an all-in-one portal where users can:
- Register and securely log in to their account
- Add and categorize daily expenses
- Set reminders for upcoming payments
- Get alerts for spending thresholds
- Review monthly expense summaries
- Access historical expense data instantly

---

##  Features

- **User Authentication**: Secure login and signup using PHP sessions
- **Add Expense**: Add individual records tagged by date and category
- **Monthly Lookup**: View monthly expenditure breakdowns
- **Expense History**: Retrieve past records at any time
- **Remainder System**: Google Calendar integration to set alerts
- **Threshold Alerting**: Warnings when nearing a user-defined budget limit
- **My Account**: Update and manage personal profile details

---

##  Technologies Used

| Layer            | Tools & Languages                         |
|------------------|-------------------------------------------|
| Frontend         | HTML, CSS, JavaScript                     |
| Backend          | PHP                                       |
| Database         | MySQL (User and Expense Tables)           |
| Server           | XAMPP (Apache, PHP, MySQL)                |

---



##  Database Structure

- **`loginsystem.users`** – Stores user credentials and profiles
- **`expenses.expenses`** – Stores detailed transaction records including date, amount, description, and category

---

##  Setup Instructions

1. Clone the repo and place it in your `htdocs` folder (`XAMPP`).
2. Import the provided SQL file into your `phpMyAdmin` to create necessary tables.
3. Update database credentials in `config.php`.
4. Start Apache and MySQL servers.
5. Open your browser and visit: `http://localhost/mundane-toll/index.php`.

---

##  Testing

Manual testing was performed across 25+ test cases covering:
- Valid and invalid login attempts
- Expense addition and deletion
- Reminder addition and calendar links
- Boundary testing for threshold alerts
- Responsiveness on various screen sizes

---



---

##  References

- [W3Schools - HTML, CSS, PHP](https://www.w3schools.com/)
- [TutorialsPoint - JavaScript](https://www.tutorialspoint.com/javascript/index.htm)

---

