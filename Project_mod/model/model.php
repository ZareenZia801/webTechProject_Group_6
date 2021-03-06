<?php 

require_once 'db_connect.php';

function signTeacher($username,$password)
{

    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Username ='$username' and Password = '$password' ";
    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}



function showAllTeacher()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `user_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function getAllTeacherCount_Department($dep)
{
    $conn = db_conn();
    $selectQuery = "SELECT COUNT(1) as TOTAL FROM `user_info` WHERE Department LIKE '$dep%' ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows[0]['TOTAL'];
}

function showAllTeacherWithPagination_Department($page, $number_of_rows, $dep)
{
    $offset = ($page-1) * $number_of_rows;

    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Department LIKE '$dep%' LIMIT $number_of_rows OFFSET $offset";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showTeacher($username)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` where  Username = ?";

    try 
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]);
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchTeacher($user_name)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Username LIKE '%$user_name%'";

    
    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addTeacher($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into user_info (Name, Email, Username, Password, Gender, Current_Institution, Department, DOB, image)
VALUES (:name, :email, :username, :password, :gender, :ins, :dep, :dob, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':gender' => $data['gender'],
            ':ins' => $data['ins'],
            ':dep' => $data['dep'],
            ':dob' => $data['dob'],
            ':image' => $data['image']
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateFile($username, $filename)
{
    $conn = db_conn();
    $fileUpdateQuery = "UPDATE user_info set image = ? where Username = ?";
    try
    {
        $stmt = $conn->prepare($fileUpdateQuery);
        $stmt->execute([$filename, $username]);


    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateTeacher($username, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Name = ?, Email = ?, Current_Institution = ?, Department = ? where Username = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$data['name'], $data['email'], $data['ins'],$data['dep'], $username]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;   
    return true;
}



function deleteTeacher($id)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM `user_info` WHERE `ID` = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function changePass($username, $password)
{
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Password = ? where Username = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$password, $username]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;   
    return true;
}