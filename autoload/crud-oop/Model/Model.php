<?php

require_once __DIR__ . '/../DB/Connection.php';

class Model extends Connection{

    public function create($data, $table){
        $value = array_values($data);
        $key =  array_keys($data);
        $key = implode(",", $key);
        $value = implode("','", $value);
        
        $query = "INSERT INTO $table ($key) VALUES ('$value')";
        echo $query;
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function index($table){
        $query = "SELECT * FROM $table";
        $result = mysqli_query($this->db, $query);
  
        return $this->convert_data($result);
    }

    public function convert_data($datas){
        while($row = mysqli_fetch_assoc($datas)){
            $data [] = $row;
        }

        return $data;
    }

    public function find($id, $table){
        $query = "SELECT * FROM $table WHERE id = $id";
        $result = mysqli_query($this->db, $query);
        
        return $this->convert_data($result);
    }

    public function update($id, $datas, $table){
        $key  = array_keys($datas);
        $value = array_values($datas);

        $query = "UPDATE $table SET";

        for($i = 0; $i < count($key); $i++ ){
            $query .= $key[$i] . " = " . $value[$i] . "'";
            if($i != count($key) -1 ) {
                $query .= ",";
            }
        }
        $query .= "WHERE id = $id";
        $result =  mysqli_query($this->db, $query);
        return $result;
    }

    public function delete($id, $table){
        $query = "DELETE FROM $table WHERE id = $id";
        $result =  mysqli_query($this->db, $query);
        return $result;
    }
}