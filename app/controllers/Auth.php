<?php
class Auth extends Controller {
    public function index()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            header('Location: '.BASEURL.'/dashboard/');
            exit;
        } else {
            $data['judul'] = 'Login Web CV Graha Baja';
            $this->view('auth/index',$data);
        }
    }

    public function register()
    {
        $data['judul'] = 'Sign Up';
        $this->view('templates/header', $data);
        $this->view('auth/register');
        $this->view('templates/footer');
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $remember = isset($_POST['remember']);
        $user = $this->model('Auth_model')->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];

            if ($remember) {
                $token = bin2hex(random_bytes(32));
                $this->model('Auth_model')->updateRememberToken($user['id'], $token);
                setcookie('remember_token', $token, time() + 604800, '/');
            } else {
                $this->model('Auth_model')->updateRememberToken($user['id'], '');
                setcookie('remember_token', '', time() - 3600, '/');
            }
            header('Location: '.BASEURL.'/dashboard');
        } else {
            Flasher::setFlash('Username / Password', 'salah','danger');
            header('Location: '.BASEURL.'/auth');
            exit;
        }
    }

    public function logout() {
        $this->model('Auth_model')->updateRememberToken($_SESSION['user_id'], '');
        unset($_SESSION['user_id']);
        setcookie('remember_token', '', time() - 3600, '/');
        header('Location: '.BASEURL.'/auth');
    }

    public function signup()
    {
        if($this->model('Auth_model')->signup($_POST)>0) {
            Flasher::setFlash('berhasil', 'register','success');
            header('Location: '.BASEURL.'/auth/register');
            exit;
        } else {
            Flasher::setFlash('gagal', 'register','danger');
            header('Location: '.BASEURL.'/auth/register');
            exit;
        }
    }

}