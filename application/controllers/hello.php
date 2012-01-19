<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: sinux
 * Date: 12-1-16
 * Time: 下午10:16
 * To change this template use File | Settings | File Templates.
 */
 
class Hello extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function index(){
        $data = array(
            'title' => 'Foo',
            'body' => 'Bar'
        );
        $this->load->view('hello_view', $data);
    }

    public function test(){
        $arr['cate_name'] = 'php';
        $sql = 'insert into cate (cate_name) values ('.$this->db->escape($arr['cate_name']).')';

        $this->db->query($sql);

        $query = $this->db->get('cate');
        foreach($query->result() as $row){
            $cate['cate_name'][] = $row->cate_name;
            $cate['cate_id'][] = $row->cate_id;
        }

        $this->load->view('test_view', $cate);
    }
}