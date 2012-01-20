<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-1-20
 * Time: 上午9:09
 * To change this template use File | Settings | File Templates.
 */


class Home extends CI_Controller
{
    private $data = array();

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _set_title()
    {
        $this->data['title'] = 'ciblog';
    }

    private function _get_posts($cate = '')
    {
        $query = ( ! $cate) ? ($this->db->get('posts')) : ($this->db->get_where('posts', array('cate_id'=>$cate)));
        foreach ($query->result() as $row) {
            $this->data['posts'][] = $row;
        }
    }

    function index()
    {
        $query = $this->db->get('cate');
        foreach ($query->result() as $row) {
            $this->data['cates'][] = $row->cate_name;
        }

        $this->_set_title();
        $this->_get_posts(1);

        $this->load->view('index_view', $this->data);
    }
}
