<?php
class Dashboard extends Controller {
    public function index()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            $data['title'] = 'Dashboard - Indeks';
            $this->view('dashboard/index',$data);
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function beranda()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            $data['title'] = 'Dashboard -Beranda';
            $data['header'] = $this->model('Home_model')->getHeader();
            $data['keyfeatures'] = $this->model('Home_model')->getKeyFeatures();
            $data['services'] = $this->model('Home_model')->getServices();
            $data['about'] = $this->model('Home_model')->getAbout();
            $data['portfolio'] = $this->model('Home_model')->getPortfolio();
            $data['contacts'] = $this->model('Home_model')->getContacts();
            $this->view('dashboard/beranda',$data);
            $this->view('templates/modal',$data);
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function about()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            $data['title'] = 'Dashboard -Tentang';
            $data['about'] = $this->model('Home_model')->getAbout();
            $this->view('dashboard/about',$data);
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function services()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            $data['title'] = 'Dashboard -Layanan';
            $this->view('dashboard/services',$data);
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function portfolio()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            $data['title'] = 'Dashboard - Portofolio';
            $data['allportfolio'] = $this->model('Home_model')->getAllPortfolio();
            $data['services'] = $this->model('Home_model')->getServices();
            $this->view('dashboard/portfolio',$data);
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function links()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            $data['title'] = 'Dashboard - Link';
            $data['links'] = $this->model('Home_model')->getLinks();
            $this->view('dashboard/links',$data);
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function userprofile()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            $data['title'] = 'Dashboard - Akun';
            $data['user'] = $this->model('Home_model')->getUsers();
            $this->view('dashboard/userprofile',$data);
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function editheader()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->editHeader($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah diubah','success');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function addkeyfeatures()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->addKeyFeatures($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah tambahkan','success');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function deletekeyfeatures($id)
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->deleteKeyFeatures($id)>0) {
                Flasher::setFlash('Berhasil!', 'data telah dihapus','success');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function editkeyfeatures()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->editKeyFeatures($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah diedit','success');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function addservice()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->addService($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah tambahkan','success');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function deleteservice($id)
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->deleteService($id)>0) {
                Flasher::setFlash('Berhasil!', 'data telah dihapus','success');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function editservice()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->editService($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah diedit','success');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function editabout()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->editAbout($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah diubah','success');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function addportfolio()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->addPortfolio($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah tambahkan','success');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function deleteportfolio($id)
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->deleteportfolio($id)>0) {
                Flasher::setFlash('Berhasil!', 'data telah dihapus','success');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function editportfolio()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->editPortfolio($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah diubah','success');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function editcontacts()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->editContacts($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah diubah','success');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/beranda');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function editaboutpage()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->editAboutPage($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah diubah','success');
                header('Location: '.BASEURL.'/dashboard/about');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/about');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function editservicespage1()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->editServicesPage1($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah diubah','success');
                header('Location: '.BASEURL.'/dashboard/services');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/services');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function editservicespage2()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->editServicesPage2($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah diubah','success');
                header('Location: '.BASEURL.'/dashboard/services');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/services');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function addallportfolio()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->addAllPortfolio($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah tambahkan','success');
                header('Location: '.BASEURL.'/dashboard/portfolio');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/portfolio');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function deleteallportfolio($id)
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->deleteAllPortfolio($id)>0) {
                Flasher::setFlash('Berhasil!', 'data telah dihapus','success');
                header('Location: '.BASEURL.'/dashboard/portfolio');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/portfolio');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function editallportfolio()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->editAllPortfolio($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah diubah','success');
                header('Location: '.BASEURL.'/dashboard/portfolio');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/portfolio');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function addlink()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->addLink($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah tambahkan','success');
                header('Location: '.BASEURL.'/dashboard/links');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/links');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function deletelink($id)
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->deleteLink($id)>0) {
                Flasher::setFlash('Berhasil!', 'data telah dihapus','success');
                header('Location: '.BASEURL.'/dashboard/links');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/links');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function editlink()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->editLink($_POST)>0) {
                Flasher::setFlash('Berhasil!', 'data telah diubah','success');
                header('Location: '.BASEURL.'/dashboard/links');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/links');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

    public function changeuserprofile()
    {
        if($this->model('Auth_model')->isUserLoggedIn()) {
            if($this->model('Home_model')->changeUserProfile($_POST)>0) {
                header('Location: '.BASEURL.'/auth/logout');
                Flasher::setFlash('Berhasil!', 'data telah diubah','success');
                exit;
            } else {
                Flasher::setFlash('Gagal!', 'tidak ada perubahan data','danger');
                header('Location: '.BASEURL.'/dashboard/userprofile');
                exit;
            }
        } else {
            header('Location: '.BASEURL.'/auth/');
            exit;
        }
    }

}