<?php
class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['header'] = $this->model('Home_model')->getHeader();
        $data['keyfeatures'] = $this->model('Home_model')->getKeyFeatures();
        $data['services'] = $this->model('Home_model')->getServices();
        $data['about'] = $this->model('Home_model')->getAbout();
        $data['portfolio'] = $this->model('Home_model')->getPortfolio();
        $data['contacts'] = $this->model('Home_model')->getContacts();
        $this->view('Home/index',$data);
    }

    public function about()
    {
        $data['judul'] = 'Home';
        $this->view('Home/about',$data);
    }

    public function portfolio()
    {
        $data['judul'] = 'portfolio';
        $data['allportfolio'] = $this->model('Home_model')->getAllPortfolio();
        $this->view('Home/portfolio',$data);
    }

    public function links()
    {
        $data['judul'] = 'links';
        $data['links'] = $this->model('Home_model')->getLinks();
        $this->view('Home/links',$data);
    }

    public function services()
    {
        $data['judul'] = 'services';
        $this->view('Home/services',$data);
    }
    
}