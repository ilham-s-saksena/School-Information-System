# PKBM Harbang Website

This repository contains the source code for the PKBM Harbang website, built with Laravel 10. The website serves as an online platform for the educational services provided by PKBM Harbang. It also includes an API for the mobile application associated with the website.

## Preview
[PKBM Harapan Bangsa School Information System](https://pkbmharbang.com).

## Features

- **User Login:** Users can log in to access the website's features.
- **User Registration:** User only can registered by Admin.
- **Student Payment Management:** Admin can create, update, and delete Students Payment.
- **API Integration:** The website provides an API for mobile applications to interact with the platform.
- **Responsive Design:** The website is designed to be responsive and accessible on various devices.

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/ilham-s-saksena/School-Information-System.git
   cd School-Information-System
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Copy the .env file and set up your environment variables:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure your database and other environment settings in the .env file.**

5. **Run migrations:**
   ```bash
   php artisan migrate
   ```

6. **Serve the application:**
   ```bash
   php artisan serve
   ```

## API Documentation

The API documentation for the mobile application is not shared, you can see on this project self.

## Additional Information

For more details about this project, you can check the LinkedIn post [here](https://www.linkedin.com/posts/ilham-sidik-saksena_dengan-gembira-saya-membagikan-proyek-school-activity-7172806843725963264-WJ-v?utm_source=share&utm_medium=member_desktop).

## Contributing

If you would like to contribute to this project, please fork the repository and create a pull request with your changes. All contributions are welcome and appreciated.

---

Feel free to modify this template to better fit your needs.
