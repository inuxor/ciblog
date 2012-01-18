<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: sinux
 * Date: 12-1-16
 * Time: 下午10:16
 * To change this template use File | Settings | File Templates.
 */
 
class Hello extends CI_Controller{
    public function index(){
        $data = array(
            'title' => 'Foo',
            'body' => 'Bar'
        );
        $this->load->view('hello_view', $data);
    }

    public function test(){
        $arr = array(
            'one' = 1,
            'two' = 2
        );
        $this->load->view('test_view', $arr);
    }
}