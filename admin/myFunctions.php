<?php
function LoadDataList(){
    include 'conn-2.php';
    $data_list="";
    $label_list="";
    $sql="SELECT category, count(*) as num_blogs from blogs group by category";
    $result = $conn->query($sql);

        if($result->num_rows > 0)
        {
            $count = 0;
            while($row = $result->fetch_assoc()){
                if($count==0)
                {
                    /* $label_list="'".$row["geography"]."'"; */
                    $data_list="'".$row["num_blogs"]."'";
                }
                else
                {
                   /*  $label_list=$label_list.",'".$row["geography"]."'"; */
                    $data_list=$data_list.",'".$row["num_blogs"]."'";  
                }
                $count++;   
        }
        echo $data_list;
        }

        $conn->close();
}

function LoadLabelList(){
    include 'conn-2.php';
    $data_list="";
    $label_list="";
    $sql="SELECT category, count(*) as num_blogs from blogs group by category";
    $result = $conn->query($sql);

        if($result->num_rows > 0)
        {
            $count = 0;
            while($row = $result->fetch_assoc()){
                if($count==0)
                {
                     $label_list="'".$row["category"]."'"; 
                    /* $data_list="'".$row["total_Balance"]."'"; */
                }
                else
                {
                    $label_list=$label_list.",'".$row["category"]."'"; 
                   /*  $data_list=$data_list.",'".$row["total_Balance"]."'"; */
                    
                }
                $count++;
            
        }
        echo $label_list;
        }

            $conn->close();
}

function GetTotalEmployees(){
    include 'conn-2.php';
    $sql = "SELECT FORMAT(COUNT(*),0) as no_blogs FROM blogs";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        $count = 0;
        while($row =$result->fetch_assoc()){
            echo $row["no_blogs"];
        }
    }
}

 function GetTotalDepartments(){
    include 'conn-2.php';
    $sql = "SELECT FORMAT(COUNT(*),0) as total_certificates FROM certificates";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        $count = 0;
        while($row =$result->fetch_assoc()){
            echo $row["total_certificates"];
        }
    }
}

function GetTotalLeaves(){
    include 'conn-2.php';
    $sql = "SELECT FORMAT(COUNT(*),0) as total_departments FROM employee_leave";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        $count = 0;
        while($row =$result->fetch_assoc()){
            echo $row["total_departments"];
        }
    }
}

function GetAverageSalary(){
    include 'conn-2.php';
    $sql = "SELECT avg(NetSalary) as AverageSalary FROM employee_salary";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        $count = 0;
        while($row =$result->fetch_assoc()){
            echo $row["AverageSalary"];
        }
    }
}


function Test(){
    $value = 50;
    echo $value;
}


?>


