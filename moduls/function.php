<?php
class ketnoi
{
    private $run = null;
    private $conn = null;
    public function connect()
    {
        $maychu = 'localhost';
        $taikhoan = 'root';
        $pass = '';
        $data = 'chotot';
        $this->conn = mysqli_connect($maychu, $taikhoan, $pass, $data) or die('Lỗi kết nối');
        mysqli_select_db($this->conn, $data);
    }
    public function disconnect()
    {
        if ($this->conn) {
            mysqli_close($this->conn);
        }
    }
    public function run($sql)
    {
        if ($this->conn) {
            $this->run = mysqli_query($this->conn, $sql);
        }
    }
    public function row()
    {
        if ($this->run) {
            $row = mysqli_num_rows($this->run);
        }
        else{
            $row=0;
        }
        return $row;
    }
    public function dong(){
        if($this->run){
            $dong=mysqli_fetch_array($this->run);
        }
        else{
            $dong=0;
        }
        return $dong;
    }
}
