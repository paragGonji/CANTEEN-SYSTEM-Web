# CANTEEN-SYSTEM-Web

### Canteen-Management-System<br>
1. Customer Table :

![host](https://github.com/user-attachments/assets/1e4f8473-8cbc-4848-9536-4700b9356d95)


2. Add Order :
   
![order](https://github.com/user-attachments/assets/f7e2737d-5a2f-400a-9451-2b3186148141)


3. XAMMP Server :
   
![server](https://github.com/user-attachments/assets/89603200-8517-4126-a2ea-25f5eeb99ae8)


The **Canteen Management System** is an innovative and user-friendly software solution designed to streamline the management of student data and academic performance in educational institutions. This project addresses the pressing need for efficient data handling and offers a versatile platform for educators, administrators, and students to interact with essential academic information seamlessly.


The system involves:
- Creating a user-friendly interface for customers to place orders.
- Enabling canteen staff to manage inventory and orders.
- Generating reports for administrative purposes.

The result is a comprehensive software solution that simplifies canteen operations, enhances customer satisfaction, and optimizes resource management.

---

# DESCRIPTION

### Event Handling
Buttons like **"ADD ORDER"**, **"UPDATE"**, **"DELETE"**, and **"SHOW"** are associated with specific functions. These buttons are configured to execute their respective functions when clicked, ensuring smooth user interaction.

---

### Database Operations
- SQL queries are utilized to insert data into MySQL database tables (e.g., `canteen`, `Order`, `BILL`, `ADMIN`).
- The `cursor.execute()` method is used to execute these SQL queries.
- Changes are committed to the database using `db.commit()` to ensure data integrity.

---

### Data Retrieval
The system includes functions for retrieving data from the database, such as:
- Fetching course enrollments.
- Displaying student details.

---

### Result Display
The `show_label` element is used to display:
- Success messages.
- Notifications to the user.

The system seamlessly integrates with **phpMyAdmin** for database management, ensuring efficient and reliable backend operations.

## Installation
1. Clone this repository to your local machine:
   
   ```
   git clone https://github.com/your-username/canteen-management-system.git
   ```

2. Ensure you have **XAMPP** or **MAMP** installed for running the PHP application with a local server.

3. Place the project folder in the **htdocs** (for XAMPP) or **www** (for MAMP) directory.

4. Start the **Apache** and **MySQL** servers using the XAMPP or MAMP control panel.

5. Open your browser and navigate to `http://localhost/canteen-management-system/main.php` to view the application.

## Usage
1. Open your browser and go to:

   ```
   [c++ Canteen-Management-System.cpp](http://localhost/canteen-management-system/main.php)
   ```


2. The home page will open. To add an order, click the **ADD ORDER** button.
3. A modal will appear where you can enter the **Your Name**, **Food Name**, and **Price**. Click **ADD** to submit the order.
4. The orders will be displayed in a table with options to **UPDATE** or **DELETE** an order.
5. To update an order, click the **UPDATE** button next to the respective row, modify the details, and click the **UPDATE** button.
6. To delete an order, click the **DELETE** button next to the respective row to remove it from the list.
7. You can also perform database operations such as adding, updating, and deleting records using the provided buttons.

## Notes
- Ensure that the `dbcon.php` file is correctly configured to connect to your MySQL database.
- The `canteen` table should exist in the `crud_operation` database with columns: `id`, `cust_name`, `food_name`, and `price`.
