<?php
class HomeModel
{
    public $db;
    function __construct()
    {
        $this->db = new Database(); // Kiểm tra đối tượng Database này có khởi tạo đúng không
    }

    public function getData()
    {
        try {
            $sql = "SELECT * FROM users";
            $stmt = $this->db->pdo->query($sql); // Kiểm tra xem câu truy vấn có chạy thành công không
            return $stmt->fetchAll(); // Trả về dữ liệu nếu thành công
        } catch (Exception $e) {
            // Nếu có lỗi kết nối hoặc câu truy vấn, in ra lỗi
            echo "Error: " . $e->getMessage();
            return []; // Trả về mảng rỗng nếu có lỗi
        }
    }
}
