# College Predictor

A web-based tool designed to help students predict college admissions based on exam scores and other criteria. This tool provides a user-friendly interface for students to input their information and view potential college options, making the college selection process easier and more informed.

## Features

- **User Registration and Login**: Users can create accounts, log in, and save their preferences.
- **College Prediction**: Based on inputs such as exam scores (e.g., JEE), users receive a list of potential colleges where they may qualify.
- **Responsive Design**: A mobile-friendly and responsive layout for ease of use on various devices.
- **Secure Connections**: User data is handled securely, with proper session handling in PHP.

## Project Structure

The project includes the following main components:

- **HTML Files**: These provide the basic structure and pages of the web application.
  - `Home.html`: Landing page for the tool.
  - `FAQ.html`: Frequently asked questions about the tool.
  - `wp p1.html`, `doubletick.html`, etc.: Supporting pages.
  
- **PHP Files**: Backend logic and database handling.
  - `db_connect_1.php`: Connects the application to the database.
  - `predictor.php`: Main script for predicting colleges based on input.
  - `registration.php` & `registrationaction.php`: Handles user registration.
  - `login.php` & `loginaction.php`: Manages user login sessions.
  - `logout.php`: Ends the user session.
  
- **JavaScript and CSS**: Provides client-side functionality and styling.
  - `signup.js`: Manages user interaction during signup.
  - `wpcst.css` & other CSS files: Responsible for styling and responsive design.

- **Images and Assets**: Used for branding and enhancing the UI.
  - Images like `jee.jpg`, `newbg.jpeg`, and `clg.png.jpg` for visual appeal.

## Requirements

- **Web Server**: Apache or similar with PHP support.
- **Database**: MySQL or compatible for storing user data and college information.
- **Browser Compatibility**: Optimized for recent versions of Chrome, Firefox, Safari, and Edge.

 
