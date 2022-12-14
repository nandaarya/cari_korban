include '..\connection.php';

class Auth extends Connection
{
    protected $conn;
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function login($username, $password)
    {
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $bind = $this->conn->query($sql);
        $obj = $bind->fetch_object();
        return $obj;
    }
}