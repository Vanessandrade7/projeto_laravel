# Laravel Product Management System

A simple Laravel application to manage products.

## Features

- **List all products**: View all the products in the database.
- **View Product Details**: Click on a product to view its specific details.
- **Add New Products**: Add new products to the database.
- **Edit Existing Products**: Update the details of existing products.

## Installation

### Requirements

- PHP >= 7.3
- Composer
- MySQL (or another database system supported by Laravel)

### Steps

1. **Clone this repository**:
    ```bash
    git clone [repository_url]
    ```

2. **Navigate to the project directory**:
    ```bash
    cd path_to_project_directory
    ```

3. **Install dependencies**:
    ```bash
    composer install
    ```

4. **Setup Environment Variables**:
   Copy the `.env.example` to `.env` and adjust the environment variables, especially the database configurations.
    ```bash
    cp .env.example .env
    ```

5. **Generate Application Key**:
    ```bash
    php artisan key:generate
    ```

6. **Run Database Migrations**:
   Ensure your database connection in `.env` is properly configured, then:
    ```bash
    php artisan migrate
    ```

## Usage

1. **Start the Laravel development server**:
    ```bash
    php artisan serve
    ```

2. **Access the Application**:
   Open your browser and navigate to `http://127.0.0.1:8000`.

3. **Enjoy the Product Management System**: Navigate and explore the features provided by the application.

## Technologies Used

- **Laravel**: The PHP framework used for backend.
- **Bootstrap**: Front-end framework for designing the layout.

## License

This project is licensed under the MIT License. See the `LICENSE` file for more details.
