# Todo API

This is a simple todo API that allows you to create, read, update, and delete todos.

## Getting Started

To get started, you will need to install the following dependencies:

```
 composer install
```
Once you have installed the dependencies, you can start the API by running the following command:

```
php artisan serve
```
## The API will be running on port 8000. You can test it by making requests to the following endpoints:

+ GET /todos 
+ GET /todos/:id
+ POST /todos
+ PUT /todos/:id
+ DELETE /todos/:id

For example, to get all the todos, you would make a GET request to http://localhost:8000/todos.

# CRUD Operations
The API supports all the CRUD operations:

Create: You can create a new todo by making a POST request to the /todos endpoint. The request body should contain the following JSON data:
```
{
  "title": "My first todo",
  "description": "My first todo description"
}
```
***Read: You can get all the todos by making a GET request to the /todos endpoint. You can also get a specific todo by making a GET request to the /todos/:id endpoint, where :id is the ID of the todo.***

***Update: You can update a todo by making a PUT request to the /todos/:id endpoint, where :id is the ID of the todo. The request body should contain the updated data for the todo.***

***Delete: You can delete a todo by making a DELETE request to the /todos/:id endpoint, where :id is the ID of the todo.***
