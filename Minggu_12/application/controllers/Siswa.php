<?php
class Siswa extends CI_Controller
{
    public function index()
    {
        $data['siswa'] = $this->Model_siswa->getData()->result();

        $this->load->view('templates/header');
        $this->load->view('siswa', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $logo = $_FILES['logo'];

        if ($logo = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('logo')) {
                echo "Upload Gagal";
                die();
            } else {
                $logo = $this->upload->data('file_name');
            }
        }

        $data = [
            'nama'  => $nama,
            'alamat' => $alamat,
            'logo' => $logo
        ];

        $this->Model_siswa->addData($data, 'sekolah');
        redirect('Siswa/index');
    }

    public function delete($id)
    {
        $where = [
            'id' => $id
        ];

        $this->Model_siswa->deleteData($where, 'sekolah');
        redirect('Siswa/index');
    }

    public function edit($id)
    {
        $where = ["id" => $id];
        $data['siswa'] = $this->Model_siswa->getDataById($where, 'sekolah')->result();

        $this->load->view('templates/header');
        $this->load->view('edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $logo = $_FILES['logo'];

        if ($logo = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('logo')) {
                echo "Upload Gagal";
                die();
            } else {
                $logo = $this->upload->data('file_name');
            }
        }

        $data = [
            'nama'  => $nama,
            'alamat' => $alamat,
            'logo' => $logo
        ];

        $where = ['id' => $id];

        $this->Model_siswa->updateData($where, $data, 'sekolah');
        redirect('Siswa/index');
    }

    public function pdf($id)
    {
        $this->load->library('pdfgenerator');
        $where = ["id" => $id];
        $data['siswa'] = $this->Model_siswa->getDataById($where, 'sekolah')->result();

        $html = $this->load->view('table_report', $data, true);
        $filename = 'data siswa' . time();
        $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
    }
}
