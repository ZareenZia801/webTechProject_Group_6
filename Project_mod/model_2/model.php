<?php   

require_once 'db_connect.php'; 

function addAccount($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into user_info (Username, Email, Amount, Comment )
VALUES (:username, :email, :amount, :comment)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
           ':username' => $data['username'],
            ':email' => $data['email'],
            ':amount' => $data['amount'],
            ':comment' => $data['comment'],
            
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
