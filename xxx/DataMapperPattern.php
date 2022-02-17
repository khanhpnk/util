<?php
/*
Class User						UserMapper
public $age
The UserMapper fetches the data from the database which can be of any type and binds it to the User class.
Data Mapper results in writing more code but in long term, it is easier to maintain and modify.

- If the column name for first_name changes all we have to do is to modify it in the UsersMapper class.
- We can as-well perform validation in the Mapper class to make it more secure.
*/
class Users
{
    public $firstName;
    public $lastName;
    public $age;
};

class UsersMapper
{
    public static function findById($id)
    {
        // we retrieve the result from database via query
        $query = "SELECT * FROM users WHERE id = $id";
        // we create an instance of the User entity
        // and map it to its members
        $user = new Users();
        $user->firstname = $databaseResult['first_name'];
        $user->lastName = $databaseResult['last_name'];
        $user->age = $databaseResult['age'];
        return $user;

//        $name = explode('-', $name);
//        $user->firstName = $name[0];
//        $user->lastName = $name[1];
    }
}