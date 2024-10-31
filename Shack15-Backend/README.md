# SHACK15 Metrics Dashboard - Backend

This is the backend API for the SHACK15 Metrics Dashboard, built with Laravel and connected to a PostgreSQL database. It provides data endpoints for community metrics, such as total members, monthly active members, and event statistics, used to populate the frontend dashboard.

## Project Structure

-   Laravel: PHP framework for backend logic, routing, and API development.
-   PostgreSQL: Database to store and retrieve community metrics.

## Features

-   Metrics API: Exposes endpoints to fetch metrics such as total members, monthly active members, recent event attendance, and engagement rates.
-   Dummy Data Simulation: Pre-populated data in PostgreSQL for testing and demonstration purposes.
-   CORS Support: Configured to allow connections from the frontend application.
-   Secure API: Routes limited to essential, non-sensitive data.

## Installation and Setup

### Prerequisites

-   PHP 8.1+
-   Composer
-   PostgreSQL: Ensure a PostgreSQL instance is running locally or remotely.

### Steps

1. **Clone the repository**:

    ```bash
    git clone https://github.com/Casmir293/Shack15/tree/main/Shack15-Backend
    cd Shack15-Backend

    ```

2. **Install dependencies**:

    ```bash
    composer install

    ```

3. **Set up environment**:

-   Duplicate the .env.example file and rename it to .env.
-   Set your database credentials and other necessary environment variables.

4. **Set Up Database**: Create the database in PostgreSQL and run migrations and seeders:

    ```bash
    php artisan migrate --seed
    ```

5. **Run the development server**:

    ```bash
    php artisan serve
    ```

6. **Configure CORS**:

    ```bash
    'paths' => ['api/*'],
    'allowed_origins' => ['https://frontend-url.com'],
    ```

## Endpoints

All API routes are prefixed with /api and include:

GET `/api/metrics`: Retrieves all community metrics, including total members, monthly active members, event attendance, and engagement rate.

## Deployment

The backend can be hosted on a subdomain, such as https://shack15.casmir.dev. Namecheap or similar services can manage the subdomain, pointing it to your server. Make sure to update your .env APP_URL and set up HTTPS for secure access.
