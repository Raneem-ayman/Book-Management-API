<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Library API

This is the API documentation for the Library project.

## Installation

To install and set up the project, follow these steps:

1. **Clone the repository**:
    ```bash
    git clone <repository-url>
    cd <repository-directory>
    ```

2. **Install dependencies**:
    ```bash
    composer install
    ```

3. **Create a `.env` file**:
    ```bash
    cp .env.example .env
    ```

4. **Run the database migrations**:
    ```bash
    php artisan migrate
    ```

5. **Serve the application**:
    ```bash
    php artisan serve
    ```

## API Endpoints

### GET /api/books

Retrieves a list of all books.

**Request**:
```http
GET /api/books 
Host: localhost:8000
Accept: application/json

Response:
[
    {
        "id": 1,
        "title": "Book Title",
        "author": "Author Name",
        "isbn": "1234567890123",
        "created_at": "2024-07-06T12:34:56.000000Z",
        "updated_at": "2024-07-06T12:34:56.000000Z"
    },
    ...
]
```
### GET /api/books/{id}

 Retrieves a single book by its ID.

**Request**:
```http
GET /api/books/{id}
Host: localhost:8000
Accept: application/json

**Response**:
{
    "id": 1,
    "title": "Book Title",
    "author": "Author Name",
    "isbn": "1234567890123",
    "created_at": "2024-07-06T12:34:56.000000Z",
    "updated_at": "2024-07-06T12:34:56.000000Z"
}
```
### POST /api/books
Create a new book
**Request**:
```http
POST /api/books 
Host: localhost:8000
Accept: application/json
Content-Type: application/json

{
    "title": "New Book Title",
    "author": "New Author Name",
    "isbn": "1234567890124"
}

**Response(Success)**:
{
    "id": 2,
    "title": "New Book Title",
    "author": "New Author Name",
    "isbn": "1234567890124",
    "created_at": "2024-07-06T12:34:56.000000Z",
    "updated_at": "2024-07-06T12:34:56.000000Z"
}

**Response (Validation Error)**:
{
    "result": "failed",
    "code": 400,
    "timestamp": "2024-07-06T12:34:56Z",
    "errors": {
        "title": [
            "The title field is required."
        ],
        "author": [
            "The author field is required."
        ],
        "isbn": [
            "The isbn has already been taken."
        ]
    }
}
```
### Error Handling
All errors will return JSON responses with the following structure:

**Validation Error**:
```http
{
    "result": "failed",
    "code": 400,
    "timestamp": "2024-07-06T12:34:56Z",
    "errors": {
        "field_name": [
            "Error message."
        ]
    }
}
```
**Not Found**:
```http
{
    "result": "failed",
    "code": 404,
    "timestamp": "2024-07-06T12:34:56Z",
    "message": "Not found."
}

```



