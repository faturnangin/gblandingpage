<?php
class Home_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
        public function getHeader()
        {
            $query = "SELECT headline, deck, bg FROM header LIMIT 1";
            $this->db->query($query);
            $header = $this->db->single();
            return $header;
        }

        public function editHeader($data)
        {
            $oldimg = $data['oldimg'];
            $headline = $data['headline'];
            $deck = $data['deck'];
            $dir = 'img/';
            if ($_FILES['newimg']['error'] === 4) {
                $bg = $oldimg;
            } else {
                $oldimg = substr($oldimg, 1);
                unlink($oldimg);
                $bg = $this->upload($dir);
            }
            $query = "UPDATE header SET
            headline = :headline,
            deck = :deck,
            bg = :bg
            WHERE id = 1";
            $this->db->query($query);
            $this->db->bind('headline', $headline);
            $this->db->bind('deck', $deck);
            $this->db->bind('bg',$bg);
            $this->db->execute();
            return $this->db->rowCount();
        }
    
        public function upload($dir)
        {
            $picname = $_FILES['newimg']['name'];
            $picsize = $_FILES['newimg']['size'];
            $error = $_FILES['newimg']['error'];
            $tmpName = $_FILES['newimg']['tmp_name'];
            $ext = pathinfo($picname, PATHINFO_EXTENSION);
            $newpicname = uniqid() . '.' . $ext;
            $newdir = $dir . $newpicname;
            move_uploaded_file($tmpName, $newdir);
            return '/'.$newdir;
        }

        public function getKeyFeatures() {
            $this->db->query('SELECT * FROM keyfeatures order by id ASC');
            return $this->db->resultSet();
        }

        public function addKeyFeatures($data)
        {
            $nilai = $data['nilai'];
            $keterangan = $data['keterangan'];
            $dir = 'img/keyfeatures/';
            $img = $this->upload($dir);
            $query = "INSERT INTO keyfeatures VALUES ('0', :nilai, :keterangan, :img)";
            $this->db->query($query);
            $this->db->bind('nilai', $nilai);
            $this->db->bind('keterangan', $keterangan);
            $this->db->bind('img', $img);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function unlinkPicById($id,$table)
        {
            $query = "SELECT * FROM $table WHERE id = $id";
            $this->db->query($query);
            $data = $this->db->single();
            $dir = $data['img'];
            $dir = substr($dir, 1);
            unlink($dir);
        }

        public function deleteKeyFeatures($id)
        {
            $table = 'keyfeatures';
            $this->unlinkPicById($id,$table);
            $query = "DELETE FROM keyfeatures WHERE id = :id";
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function editKeyFeatures($data)
        {
            $id = $data['id'];
            $nilai = $data['nilai'];
            $keterangan = $data['keterangan'];
            $oldimg = $data['oldimg'];
            $dir = 'img/keyfeatures/';
            if ($_FILES['newimg']['error'] === 4) {
                $img = $oldimg;
            } else {
                $oldimg = substr($oldimg, 1);
                unlink($oldimg);
                $img = $this->upload($dir);
            }
            $query = "UPDATE keyfeatures SET nilai = :nilai, keterangan = :keterangan, img = :img WHERE id = $id";
            $this->db->query($query);
            $this->db->bind('nilai', $nilai);
            $this->db->bind('keterangan', $keterangan);
            $this->db->bind('img', $img);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function getServices() {
            $this->db->query('SELECT * FROM services');
            return $this->db->resultSet();
        }

        public function addService($data)
        {
            $service = $data['service'];
            $dir = 'img/services/';
            $img = $this->upload($dir);
            $query = "INSERT INTO services VALUES ('0', :service, :img)";
            $this->db->query($query);
            $this->db->bind('service', $service);
            $this->db->bind('img', $img);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function deleteService($id)
        {
            $table = 'services';
            $this->unlinkPicById($id,$table);
            $query = "DELETE FROM services WHERE id = :id";
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function editService($data)
        {
            $id = $data['id'];
            $service = $data['service'];
            $oldimg = $data['oldimg'];
            $dir = 'img/services/';
            if ($_FILES['newimg']['error'] === 4) {
                $img = $oldimg;
            } else {
                $oldimg = substr($oldimg, 1);
                unlink($oldimg);
                $img = $this->upload($dir);
            }
            $query = "UPDATE services SET service = :service, img = :img WHERE id = $id";
            $this->db->query($query);
            $this->db->bind('service', $service);
            $this->db->bind('img', $img);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function getAbout()
        {
            $query = "SELECT content, img FROM about LIMIT 1";
            $this->db->query($query);
            $about = $this->db->single();
            return $about;
        }

        public function editAbout($data)
        {
            $oldimg = $data['oldimg'];
            $content = $data['content'];
            $dir = 'img/';
            if ($_FILES['newimg']['error'] === 4) {
                $img = $oldimg;
            } else {
                $oldimg = substr($oldimg, 1);
                unlink($oldimg);
                $img = $this->upload($dir);
            }
            $query = "UPDATE about SET
            content = :content,
            img = :img
            WHERE id = 1";
            $this->db->query($query);
            $this->db->bind('content', $content);
            $this->db->bind('img',$img);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function getPortfolio()
        {
            $this->db->query('SELECT * FROM portfolio');
            return $this->db->resultSet();
        }

        public function addPortfolio($data)
        {
            $title = $data['title'];
            $location = $data['location'];
            $dir = 'img/portfolio/';
            $img = $this->upload($dir);
            $query = "INSERT INTO portfolio VALUES ('0', :title, :location, :img)";
            $this->db->query($query);
            $this->db->bind('title', $title);
            $this->db->bind('location', $location);
            $this->db->bind('img', $img);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function deleteportfolio($id)
        {
            $table = 'portfolio';
            $this->unlinkPicById($id,$table);
            $query = "DELETE FROM portfolio WHERE id = :id";
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function editPortfolio($data)
        {
            $id = $data['id'];
            $title = $data['title'];
            $location = $data['location'];
            $oldimg = $data['oldimg'];
            $dir = 'img/portfolio/';
            if ($_FILES['newimg']['error'] === 4) {
                $img = $oldimg;
            } else {
                $oldimg = substr($oldimg, 1);
                unlink($oldimg);
                $img = $this->upload($dir);
            }
            $query = "UPDATE portfolio SET title = :title, location = :location, img = :img WHERE id = $id";
            $this->db->query($query);
            $this->db->bind('title', $title);
            $this->db->bind('location', $location);
            $this->db->bind('img', $img);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function getContacts()
        {
            $query = "SELECT adress, email, phone, maps FROM contacts LIMIT 1";
            $this->db->query($query);
            $contacts = $this->db->single();
            return $contacts;
        }

        public function editContacts($data)
        {
            $adress = $data['adress'];
            $email = $data['email'];
            $phone = $data['phone'];
            $maps = $data['maps'];
            $query = "UPDATE contacts SET
            adress = :adress,
            email = :email,
            phone = :phone,
            maps = :maps
            WHERE id = 1";
            $this->db->query($query);
            $this->db->bind('adress', $adress);
            $this->db->bind('email', $email);
            $this->db->bind('phone',$phone);
            $this->db->bind('maps',$maps);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function editAboutPage($data)
        {
            $about = $data['about'];
            $parentDir = dirname(__DIR__);
            $views = $parentDir.'\views';
            if (file_put_contents($views.'\Home\about.html', $_POST['about'])){
                return 1;
            } else {
                return 0;
            }
        }

        public function editServicesPage1($data)
        {
            $about = $data['about'];
            $parentDir = dirname(__DIR__);
            $views = $parentDir.'\views';
            if (file_put_contents($views.'\Home\services1.html', $_POST['about'])){
                return 1;
            } else {
                return 0;
            }
        }

        public function editServicesPage2($data)
        {
            $about = $data['about'];
            $parentDir = dirname(__DIR__);
            $views = $parentDir.'\views';
            if (file_put_contents($views.'\Home\services2.html', $_POST['about'])){
                return 1;
            } else {
                return 0;
            }
        }
        
        public function getAllPortfolio()
        {
            $this->db->query('SELECT * FROM allportfolio');
            return $this->db->resultSet();
        }

        public function addAllPortfolio($data)
        {
            $name = $data['name'];
            $category = $data['category'];
            $client = $data['client'];
            $location = $data['location'];
            $date = $data['date'];
            $dir = 'img/allportfolio/';
            $img = $this->upload($dir);
            $query = "INSERT INTO allportfolio VALUES ('0', :name, :category, :client, :location, :date, :img)";
            $this->db->query($query);
            $this->db->bind('name', $name);
            $this->db->bind('category', $category);
            $this->db->bind('client', $client);
            $this->db->bind('location', $location);
            $this->db->bind('date', $date);
            $this->db->bind('img', $img);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function deleteAllPortfolio($id)
        {
            $table = 'allportfolio';
            $this->unlinkPicById($id,$table);
            $query = "DELETE FROM allportfolio WHERE id = :id";
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function editAllPortfolio($data)
        {
            $id = $data['id'];
            $name = $data['name'];
            $category = $data['category'];
            $client = $data['client'];
            $location = $data['location'];
            $date = $data['date'];
            $oldimg = $data['oldimg'];
            $dir = 'img/allportfolio/';
            if ($_FILES['newimg']['error'] === 4) {
                $img = $oldimg;
            } else {
                $oldimg = substr($oldimg, 1);
                unlink($oldimg);
                $img = $this->upload($dir);
            }
            $query = "UPDATE allportfolio SET name = :name, category = :category, client = :client, location = :location, date = :date, img = :img WHERE id = $id";
            $this->db->query($query);
            $this->db->bind('name', $name);
            $this->db->bind('category', $category);
            $this->db->bind('client', $client);
            $this->db->bind('location', $location);
            $this->db->bind('date', $date);
            $this->db->bind('img', $img);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function getLinks()
        {
            $this->db->query('SELECT * FROM links');
            return $this->db->resultSet();
        }

        public function addLink($data)
        {
            $name = $data['name'];
            $link = $data['link'];
            $dir = 'img/links/';
            $img = $this->upload($dir);
            $query = "INSERT INTO links VALUES ('0', :name, :link, :img)";
            $this->db->query($query);
            $this->db->bind('name', $name);
            $this->db->bind('link', $link);
            $this->db->bind('img', $img);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function deleteLink($id)
        {
            $table = 'links';
            $this->unlinkPicById($id,$table);
            $query = "DELETE FROM links WHERE id = :id";
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function editLink($data)
        {
            $id = $data['id'];
            $name = $data['name'];
            $link = $data['link'];
            $oldimg = $data['oldimg'];
            $dir = 'img/links/';
            if ($_FILES['newimg']['error'] === 4) {
                $img = $oldimg;
            } else {
                $oldimg = substr($oldimg, 1);
                unlink($oldimg);
                $img = $this->upload($dir);
            }
            $query = "UPDATE links SET name = :name, link = :link, img = :img WHERE id = $id";
            $this->db->query($query);
            $this->db->bind('name', $name);
            $this->db->bind('link', $link);
            $this->db->bind('img', $img);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function getUsers()
        {
            $query = "SELECT * FROM users WHERE id = 3";
            $this->db->query($query);
            $user = $this->db->single();
            return $user;
        }

        public function changeUserProfile($data)
        {
            $username = $data['username'];
            $password = password_hash($data['password'], PASSWORD_BCRYPT);
            $oldimg = $data['oldimg'];
            $dir = 'img/users/';
            if ($_FILES['newimg']['error'] === 4) {
                $img = $oldimg;
            } else {
                $oldimg = substr($oldimg, 1);
                unlink($oldimg);
                $img = $this->upload($dir);
            }
            $query = "UPDATE users SET username = :username, password = :password, img = :img WHERE id = 3";
            $this->db->query($query);
            $this->db->bind('username', $username);
            $this->db->bind('password', $password);
            $this->db->bind('img', $img);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }
