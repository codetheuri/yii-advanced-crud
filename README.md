# Yii Advanced Car Database Application

This Yii Advanced application manages a car database with CRUD (Create, Read, Update, Delete) operations. The car database functionality is implemented as a module on the backend side. The application utilizes the AdminLTE theme for a modern and responsive admin interface.

## Table of Contents

- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [AdminLTE Theme](#adminlte-theme)
- [Modules](#modules)


## Features

- **CRUD Operations:** Add, delete, update, and view car records.
- **AdminLTE Integration:** Stylish and responsive admin interface.
- **Yii Advanced Structure:** Separate frontend and backend applications.

## Prerequisites

Before you begin, ensure you have the following installed:

- [PHP](https://www.php.net/) (>= 7.4)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) or [MariaDB](https://mariadb.org/)

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/your-repository.git
2. cd your-repository
   ```composer install```
  cd backend
  ```composer install```
3. Create databases for both frontend and backend applications.

4. Configure the database connection in frontend/config/main-local.php and backend/config/main-local.php.

5. Run migrations for both frontend and backend applications:
   ```cd frontend
      php yii migrate
     cd ../backend
   php yii migrate
   ```
6. Set up your web server to point to the frontend/web directory.

7. Access the frontend application in your browser.

8. To access the backend admin interface, visit /backend and use the credentials:

     Username: admin
     Password: admin
10. Usage
   Visit the backend to view the list of cars and perform CRUD operations.
11. Access the backend admin interface to manage the car database module.
12. AdminLTE Theme
This application uses the AdminLTE theme for a modern and responsive user interface. For more details on customization and features, refer to the AdminLTE documentation.

13. Modules
The car database functionality is implemented as a module on the backend side. The module is located in the backend/modules directory.   

