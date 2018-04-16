<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/3/29 0029
 * Time: 上午 9:36
 */
class home extends MY_Controller
{
    /**
     * Index constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_App','m_app');
        $this->load->model('M_History','m_history');
        $this->load->model('M_Info','m_info');
        $this->load->model('M_Nlink','m_nlink');
        $this->load->model('M_Comment','m_comment');
        $this->load->model('M_Special','m_special');
        $this->load->model('M_AppCategory','m_app_category');
        $this->load->model('M_Necessary','m_necessary');
        $this->load->model('M_Recommend','m_recommend');
        $this->load->model('M_Counter','m_counter');

        if ($this->ua->is_mobile())
        {
            $template_name = $this->_site['wap_template'];
        } else {
            $template_name = $this->_site['template'];
        }

        $template_path = TEMPLATEPATH.$template_name.'/';

        $this->template->caching                = false;
        $this->template->template_name          = $template_name;
        $this->template->template_dir           = array($template_path);
        $this->template->joined_template_dir    = $template_path;

        $app_id = intval($this->input->get("app_id"));
        if($app_id > 0){
            $appid_info = $this->m_app->getAppInfoById($app_id);
            if($appid_info){
                $app_type_id = '';
                $category_info = $this->m_app_category->getCategoryInfoById($appid_info['last_cate_id']);
                if($category_info['parent_id'] == 1){
                    $app_type_id = 'list_soft';
                }
                if($category_info['parent_id'] == 2){
                    $app_type_id = 'list_game';
                }

                $this->template->assign('app_type_id', $app_type_id);
            }
        }else{
            $app_type_id = 'list';
            $this->template->assign('app_type_id', $app_type_id);
        }
        $this->template->assign('current_page', $this->router->method);
        $this->template->assign('setting', $this->_site);
        $this->template->assign('tpl_path', "/templates/{$template_name}/");
    }

    /**
     * 首页
     */
    public function main()
    {
        $this->template->display('index.php');
    }

    /**
     * 搜索结果页面
     * @param string $keywords
     */
    public function search($keywords='')
    {
        $keywords = urldecode($keywords);
        if(!$keywords)
            $keywords = $this->input->get('keywords', true);
        if (!$keywords) {
            redirect('/');
        }
        $this->template->assign('keywords', $keywords);
        $this->template->assign('show_sort_id', 1);
        $this->template->display('search.html');
    }

    /**
     * 软件列表页面
     * @param $cate_id
     * @param int $page
     * @param int $order
     */
    public function softs($cate_id=0, $page=0, $order=0)
    {
        if(!$cate_id)
            $cate_id = intval($this->input->get('cate_id'));
        if(!$page)
            $page = intval($this->input->get('page'));
        if(!$order)
            $order = intval($this->input->get('order'));
        $this->template->assign('page', $page);
        $this->template->assign('cate_id', $cate_id);
        $order_by = array('app.app_update_time desc','app.app_down desc','app.app_grade desc');
        $this->template->assign('order', $order);
        $this->template->assign('order_by', $order_by[$order]);
        $this->template->assign('show_sort_id',1);
        $this->template->display('appMark.html');
    }

}