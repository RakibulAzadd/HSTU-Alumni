# HSTU Alumni Association

## 🚀 Project Overview
The **HSTU Alumni Association** is a web-based platform designed to connect and engage the alumni of **Hajee Mohammad Danesh Science and Technology University (HSTU)**. It provides a seamless way for alumni to stay in touch, share opportunities, and contribute to their alma mater.

## 🛠️ Technologies Used
- **PHP** - Backend development
- **MySQL** - Database management
- **Bootstrap 5** - Frontend UI design
- **HTML** - Structuring web pages
- **CSS** - Styling the application
- **JavaScript** - Interactive functionalities

## 📌 Features
- **User Authentication** (Alumni, Admin, University Staff)
- **Alumni Directory** (Search & Connect with Alumni)
- **Event Management** (Reunions, Webinars, Meetups)
- **Job & Internship Board**
- **Discussion Forum**
- **Donation & Fundraising System**
- **Newsletter & Announcements**

## 🔧 Installation Steps
1. Clone the repository:
   ```sh
   git clone https://github.com/RakibulAzadd/HSTU-Alumni.git
   ```
2. Navigate to the project directory:
   ```sh
   cd hstu-alumni-association
   ```
3. Move the project to the XAMPP `htdocs` directory:
   ```sh
   mv hstu-alumni-association /c/xampp/htdocs/
   ```
4. Start Apache and MySQL from XAMPP control panel.
5. Import the database:
   - Open **phpMyAdmin** in the browser.
   - Create a new database **hstu_alumni**.
   - Import `hstu_alumni.sql` from the `database` folder.
6. Configure database connection in `config.php`:
   ```php
   $conn = new mysqli("localhost", "root", "", "hstu_alumni");
   ```
7. Run the project in your browser:
   ```
   http://localhost/hstu-alumni-association/
   ```

## 📸 Screenshots
![Dashboard Screenshot](ScreenShot/Dashboard.png)

## 🎯 Future Enhancements
- Implement **LinkedIn API** for professional networking.
- Add **Mobile App Integration**.
- Introduce **AI-based Job Recommendations**.

## 🤝 Contributing
Contributions are welcome! Feel free to fork this repository and submit pull requests.

## 📜 License
This project is open-source and available under the **HSTU**.

## 📩 Contact
For any inquiries, reach out at **alumni.hstu@example.com**.

## LIVE View
[Demo](http://hstualumni2024.infinityfreeapp.com/)
