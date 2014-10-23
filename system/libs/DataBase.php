<?php
/**
 * Description of DataBase
 *
 * @author Adem
 */
class DataBase extends PDO{
    //put your code here
    public function __construct($dsn, $user, $password) {
        
        parent::__construct($dsn, $user, $password);
        $this->query("SET NAMES UTF8");
        $this->query("SET CHARACTER SET UTF8");  
    }
    
    //Veritabanı SELECT işlemleri
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC){
        
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value){
            $sth->bindValue($key, $value);          
        }
            $sth->execute();
            return $sth->fetchAll($fetchMode);
        
    }
    
    //Veritabanı .... işlemleri
    public function affectedRows($sql, $array = array()){
        
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value){
            $sth->bindValue($key, $value);          
        }
            $sth->execute();
            return $sth->rowCount(); //etkilenen satırları geri döndürüyor
        
    }    
    
    //Veritabanı INSERT işlemleri
    public function insert($tableName, $data){
        $fieldKeys =  implode(",", array_keys($data)) ;
        $fieldValues = ":" . implode(", :", array_keys($data));
        
        $sql = "INSERT INTO $tableName($fieldKeys) VALUES ($fieldValues)";
        $sth = $this->prepare($sql);
        
        foreach ($data as $key => $value){
            $sth->bindValue(":$key", $value);
        }
        return $sth->execute();
    }
    
    
    //Veritabanı UPDATE işlemleri
    public function update($tableName, $data, $where){
        $updateKeys = NULL;
        foreach ($data as $key => $value){
            $updateKeys .= "$key=:$key,";
        }
        
        $updateKeys = rtrim($updateKeys, ",");
        $sql = "UPDATE $tableName SET $updateKeys WHERE $where";
        
        $sth = $this->prepare($sql);
        foreach ($data as $key => $value){
            $sth->bindValue(":$key", $value);
        }
        return $sth->execute();
    }
    
    public function delete($tableName, $where, $limit = 1){
        $this->exec("DELETE FROM $tableName  WHERE $where LIMIT $limit");
    }
}
