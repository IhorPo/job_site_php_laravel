# Job Market - Laravel Project

Welcome to Job Market, a web application for job searching and recruiting. This Laravel project allows users to search for job listings, create accounts, and post their own job listings. This README file provides an overview of the project, its features, and how to set it up.

## Features

- **Job Listings**: Users can view a list of available job postings on the main page. Each job listing includes details such as title, location, tags, company information, and a job description.

- **Search Functionality**: The main page features a search bar that allows users to search for specific job listings by title, location, or tags.

- **User Registration**: To post new job listings, users must create an account. Registration requires providing a name, email, password, and password confirmation.

- **User Authentication**: Registered users can log in using their email and password. Upon successful login, a confirmation message will appear for 5 seconds.

- **Job Posting**: Logged-in users can post new job listings. Job listings can include a title, location, tags (for sorting), company email, company site, company logo (with the option for a default image if none is provided), and a detailed job description.

- **Edit and Delete Listings**: Users who have posted job listings can edit or delete their own listings. When a user is deleted from the database, their associated job listings are also removed.

- **Tag Sorting**: Users can click on tags to sort the job listings by the selected tag.

## Installation

To run the Job Market project locally, follow these steps:

1. Clone the repository to your local machine:

   ```bash
   git clone https://github.com/yourusername/job-market.git
2. Navigate to the project directory:
    ```bash
    cd job-market
3. Install Composer dependencies:
    ```bash
    composer install
4. Create a MySQL database for the project.
5. Copy the .env.example file to .env and configure your database connection by setting the DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD variables in the .env file.
6. Generate an application key:
    ```bash
    php artisan key:generate
7. Migrate the database:
    ```bash
    php artisan migrate
8. Start the development server:
    ```bash
    php artisan serve
9. Access the application in your web browser at http://localhost:8000.

## Usage
- Visit the main page to browse job listings.
- Register an account to post new job listings.
- Log in to access additional features such as editing and deleting your own job listings.
- Use the search bar to find specific job listings.
- Click on tags to filter job listings by category.

## Future Enhancements

1. **User Profiles**: Allow users to personalize profiles with pictures, contact info, and bios.

2. **Resume Upload**: Streamline applications with resume uploads and parsing.

3. **User-Recruiter Messaging**: Enable real-time communication between users and recruiters.

## What the app looks like
![alt text](https://github.com/IhorPo/job_site_php_laravel/blob/master/screenshots/Screenshot_1.png)
![alt text](https://github.com/IhorPo/job_site_php_laravel/blob/master/screenshots/Screenshot_2.png)
![alt text](https://github.com/IhorPo/job_site_php_laravel/blob/master/screenshots/Screenshot_3.png)
![alt text](https://github.com/IhorPo/job_site_php_laravel/blob/master/screenshots/Screenshot_4.png)
![alt text](https://github.com/IhorPo/job_site_php_laravel/blob/master/screenshots/Screenshot_5.png)
![alt text](https://github.com/IhorPo/job_site_php_laravel/blob/master/screenshots/Screenshot_6.png)
![alt text](https://github.com/IhorPo/job_site_php_laravel/blob/master/screenshots/Screenshot_7.png)
![alt text](https://github.com/IhorPo/job_site_php_laravel/blob/master/screenshots/Screenshot_8.png)
