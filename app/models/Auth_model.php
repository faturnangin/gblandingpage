<?php
class Auth_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserByUsername($username) {
        $query = "SELECT * FROM users WHERE username = :username";
        $this->db->query($query);
        $this->db->bind('username', $username);
        return $this->db->single();
    }

    public function updateRememberToken($id, $token) {
        $query = "UPDATE users SET remember_token = :token WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('token', $token);
        $this->db->bind('id', $id);
        $this->db->execute();
        // return $this->db->rowCount();
    }

    public function checkAuthCookie($token) {
        $query = "SELECT * FROM users WHERE remember_token = '$token'";
        $this->db->query($query);
        $users = $this->db->single();
        return $users['id'];
    } 

    public function isUserLoggedIn() {
    
        // cek apakah session user_id sudah di-set atau belum
        if (isset($_SESSION['user_id'])) {
            return true;
        }
    
        // cek apakah cookie token remember di-set atau belum
        if (isset($_COOKIE['remember_token'])) {
            // jika cookie token remember di-set, lakukan proses autentikasi dengan cookie
            $token = $_COOKIE['remember_token'];
            $user_id = $this->checkAuthCookie($token);
                
            // jika autentikasi berhasil, set session user_id
            if ($user_id !== false) {
                $_SESSION['user_id'] = $user_id;
                return true;
            }
        }
    
        // jika tidak ditemukan session user_id atau cookie token remember, kembalikan false
        return false;
    }
    

    public function signup($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        $query = "INSERT INTO users VALUES ('0', :username, :password, '')";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }

}

