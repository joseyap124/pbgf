<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilihan_model extends CI_Model
{
    private $_table = "coba";
    public $id;
    public $nama;
    public $gender;
    public $jurusan;
    public $angkatan;
    public $image = "default.jpg";

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'gender',
            'label' => 'gender',
            'rules' => 'gender'],
            
            ['field' => 'jurusan',
            'label' => 'jurusan',
            'rules' => 'required'],

            ['field' => 'angkatan',
            'label' => 'angkatan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama = $post["nama"];
        $this->gender = $post["gender"];
        $this->jurusan = $post["jurusan"];
        $this->angkatan = $post["angkatan"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->gender = $post["gender"];
        $this->jurusan = $post["jurusan"];
        $this->angkatan = $post["angkatan"];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}