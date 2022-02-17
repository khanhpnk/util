<?php

/*
Class User						Table users
public $age						vachar (age)
Active Record style ORMs map an object to a database row.
- This makes developing very fast
- when your table schema changes (age to yearOfBirth) you need to modify your code.
- Mapping a class directly to a database table is not a very secure.
*/
class User extends Database
{
    public $firstname;
    public $lastname;
    public $age;
}