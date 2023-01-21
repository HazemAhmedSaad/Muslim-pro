
<?php
class dbController
{
    public $dbhost = "localhost";
    public $dbuser = "root";
    public $dbpass = "";
    public $dbname = "sw";
    public $connection;

    public function openConnection()
    {
        $this->connection = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        if ($this->connection->connect_error) {
            echo "Connection failed: " . $this->connection->connect_error;
        }
        return $this->connection;
    }

    public function closeConnection()
    {
        $this->connection->close();
    }


    //get all the data from the database
    public function get($query)
    {
        $this->connection = $this->openConnection();
        try {
            $result = $this->connection->query($query)->fetch_all(MYSQLI_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        $this->closeConnection($this->connection);
        return $result;
    }

    function create($query)
    {
        $this->connection = $this->openConnection();
        try {
            $result = $this->connection->query($query);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        $this->closeConnection($this->connection);
        return $result;
    }

    function update($query)
    {
        $this->connection = $this->openConnection();
        try {
            $result = $this->connection->query($query);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        $this->closeConnection($this->connection);
        return $result;
    }
    function delete($query)
    {
        $this->connection = $this->openConnection();
        try {
            $result = $this->connection->query($query);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        $this->closeConnection($this->connection);
        return $result;
    }
}
?>