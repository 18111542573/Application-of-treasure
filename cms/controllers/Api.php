<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Api
 * 手助数据接口类
 */
class Api extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_App','m_app');
        $this->load->model('M_Recommend','m_recommend');
        $this->load->model('M_History','m_history');
        $this->load->model('M_AppCategory','m_app_category');
        $this->load->model('M_Advert','m_advert');
        $this->load->model('M_Resource','m_resource');
        $this->load->model('M_Search','m_search');
        $this->load->model('M_Info','m_info');
        $this->load->model('M_Counter','m_counter');
    }

    public function main()
    {
        $this->output->ok_json();
    }

    public function time()
    {
        $this->output->ok_json();
    }

    /**
     * 获取推荐
     */
    public function recommend()
    {
        $id = intval($this->input->get('id'));
        $start = intval($this->input->post('start'));
        $row = intval($this->input->post('row'));
        $type = intval($this->input->post('type'));
        if ($id < 1) {
            $id = 32;
        }
        if ($row < 1) {
            $row = 4;
        }
        if ($start < 0) {
            $start = 0;
        }
        $info = $this->m_recommend->getRecommendInfoById($id);
        if (!is_array($info) || sizeof($info) < 1) {
            $this->output->error_json(-1, '没有指定的推荐位');
        }
        $error = 0;
        $list = array();
        if ($info['operate_type'] == 2) {
            if ($info['auto_type'] == 1) {
                $order_by = 'app_update_time desc';
            }
            if ($info['auto_type'] == 2) {
                $order_by = 'app_down desc';
            }
//            $list = $this->m_app->getAppList(array(), $row, $start, $order_by);
            $list = $this->db->select('app.app_id,app.app_title,app.app_logo,app.app_desc,history.history_file,history.history_update_time')->from('app')->join('history', 'app.app_id = history.app_id')
                ->where("DATEDIFF(now(),FROM_UNIXTIME(m_history.history_update_time, '%Y-%m-%d %H:%i:%S')) < 4 and m_history.history_type = ".$type)->order_by("{$order_by} desc")->limit($row, $start)->get()->result_array();
            $total = sizeof($list);

            if (is_array($list) && sizeof($list) > 0) {
                foreach ($list as $k => $v) {
                    $history = $this->m_history->getHistoryNew($v['app_id']);
                    $category = $this->m_app_category->getCategoryInfoById($v['last_cate_id']);

                    if (is_array($v) && sizeof($v) > 0 && is_array($history) && sizeof($history) > 0 && is_array($category) && sizeof($category) > 0) {
                        $list[$k] = array_merge($v, $history, $category, $info);
                        $list[$k]['app_recomment'] = $v['app_grade'];
                        $list[$k]['app_grade'] = $v['app_recomment'];
                        $list[$k]['app_logo'] = image_url($v['app_logo']);
                    }
                }
            }
        } else {
            $ids = explode(',', $info['area_ids']);
            if (!is_array($ids) || sizeof($ids) < 1) {
                $this->output->error_json(-1, '推荐位应用列表为空');
            }
            $total = sizeof($ids);

            if ($row > 0 && sizeof($ids) > $row) {
                $ids = array_slice($ids, $start, $row);
            }
            foreach ($ids as $id) {
                $app = $this->m_app->getAppInfoById($id);
                if (!is_array($app) || sizeof($app) < 1) {
                    $error++;
                    continue;
                }

                $tmp_grade = $app['app_grade'];
                $tmp_recomment = $app['app_recomment'];
                $app['app_recomment'] = $tmp_grade;
                $app['app_grade'] = $tmp_recomment;
                $app['app_logo'] = image_url($app['app_logo']);
                $history = $this->m_history->getHistoryNew($id,"history_id desc",$type);
                $category = $this->m_app_category->getCategoryInfoById($app['last_cate_id']);
                if (is_array($history) && sizeof($history) > 0 && is_array($category) && sizeof($category) > 0) {
                    $list[] = array_merge($app, $history, $category, $info);
                }
            }
        }
        if (sizeof($list) < 1) {
            $this->output->error_json(-1, '推荐位应用列表没有数据');
        }
        $this->output->ok_json($list, array('end_position' => $start + $row, 'total_size' => $total - $error));
    }

    /**
     * 获取广告
     */
    public function advert()
    {
        $ad_id = intval($this->input->post('id'));
        if ($ad_id < 1) {
            $ad_id = 31;
        }

        $ads = array();

        $ad = $this->m_advert->getAdInfoById($ad_id);
        if (!is_array($ad) || sizeof($ad) < 1) {
            $this->output->error_json(-1, '没有指定的广告位');
        }

        $images = array();
        $alts = array();
        $links = array();
        if (!empty($ad['ad_images'])) {
            $images = explode('|', $ad['ad_images']);
        }
        if (!empty($ad['ad_alts'])) {
            $alts = explode('|', $ad['ad_alts']);
        }
        if (!empty($ad['ad_links'])) {
            $links = explode('|', $ad['ad_links']);
        }
        if (!is_array($images) || sizeof($images) < 1) {
            $this->output->error_json(-1, '广告位应用列表为空');
        }
        foreach ($images as $key => $img) {
            $ads[$key]['image'] = image_url($img);
            $ads[$key]['alt'] = isset($alts[$key]) ? $alts[$key] : '';
            $ads[$key]['link'] = isset($links[$key]) ? $links[$key] : '';
        }
        $this->output->ok_json($ads);
    }

    /**
     * 获取分类列表
     */
    public function category_list()
    {
        $all = $this->m_app_category->getCategoryAll(array('cat_show'=>1));
        if (!is_array($all) || sizeof($all) < 1) {
            $this->output->error_json(-1, '没有分类');
        }
        $all2 = array();
        foreach ($all as &$value) {
            if (empty($value['cate_logo'])) {
                if ($value['parent_id'] == 1) {
                    $value['cate_logo'] = image_url('/templates/cates/default.png');
                } else if ($value['parent_id'] == 2) {
                    $value['cate_logo'] = image_url('/templates/cates/default.png');
                }
            } else {
                $value['cate_logo'] = image_url($value['cate_logo']);
            }

//            $count = $this->m_app->getAppCount(array('last_cate_id' => $value['cate_id']));
//            if ($count > 0) {
                $all2[] = $value;
//            }
        }

//        $all2[] = array(
//            'cate_id' => -1,
//            'parent_id' => 1,
//            'cname' => '应用',
//            'cname_py' => 'soft',
//            'ctitle' => '',
//            'ckey' => '',
//            'cdesc' => '',
//            'corder' => 0,
//            'cat_show' => 1,
//            'cate_logo' => image_url('/templates/cates/soft.png'),
//        );
//        $all2[] = array(
//            'cate_id' => -2,
//            'parent_id' => 2,
//            'cname' => '游戏',
//            'cname_py' => 'game',
//            'ctitle' => '',
//            'ckey' => '',
//            'cdesc' => '',
//            'corder' => 0,
//            'cat_show' => 1,
//            'cate_logo' => image_url('/templates/cates/game.png'),
//        );
        $this->output->ok_json($all2);
    }

    /**
     * 获取更新的APP
     */
    public function updateApp(){
        $type = intval($this->input->post_get('type'));
        $row = intval($this->input->post_get('row'));
        if ($row < 1) {
            $row = 10;
        }
        $start = intval($this->input->post_get('start'));
        if ($start < 0) {
            $start = 0;
        }
        $count = $this->db->select("count(*) cnt")->from('app')->join('history', 'app.app_id = history.app_id')
            ->where("DATEDIFF(now(),FROM_UNIXTIME(m_history.history_update_time, '%Y-%m-%d %H:%i:%S')) < 4 and m_history.history_type = ".$type)->order_by("history_update_time desc")->get()->row_array();

        $list = $this->db->select('app.app_id,app.app_title,app.app_logo,app.app_desc,history.history_file,history.history_update_time')->from('app')->join('history', 'app.app_id = history.app_id')
            ->where("DATEDIFF(now(),FROM_UNIXTIME(m_history.history_update_time, '%Y-%m-%d %H:%i:%S')) < 4 and m_history.history_type = ".$type)->order_by("history_update_time desc")->limit($row, $start)->get()->result_array();
        $total = !empty($count['cnt']) ? $count['cnt'] : 0;
        if (!is_array($list) || sizeof($list) < 1) {
            $this->output->error_json(-1, '没有更新数据');
        }
        $this->output->ok_json($list, array('end_position' => $start + $row, 'total_size' => intval($total)));
    }

    /**
     * 获取最新的APP
     */
    public function NewestApp(){
        $type = intval($this->input->post_get('type'));
        $row = intval($this->input->post_get('row'));
        if ($row < 1) {
            $row = 20;
        }
        $start = intval($this->input->post_get('start'));
        if ($start < 0) {
            $start = 0;
        }
        $list = $this->db->select('app.app_id,app.app_title,app.app_logo,app.app_desc')->from('app')->join('history', 'app.app_id = history.app_id')
            ->where("m_history.history_type = ".$type)->order_by("app.create_time desc")->limit($row, $start)->get()->result_array();
        $total = !empty($list) ? count($list) : 0;
        if (!is_array($list) || sizeof($list) < 1) {
            $this->output->error_json(-1, '没有最新新数据');
        }
        $this->output->ok_json($list, array('end_position' => $start + $row, 'total_size' => $total));
    }

    /**
     * 获取分类排行
     */
    public function category_rank()
    {
        $row = intval($this->input->post_get('row'));
        if ($row < 1) {
            $row = 10;
        }
        $start = intval($this->input->post_get('start'));
        if ($start < 0) {
            $start = 0;
        }
        $parent_id = intval($this->input->post_get('parent_id'));
        $cate_id = intval($this->input->post_get('cate_id'));
        $type = intval($this->input->post_get('type'));
        $order = $this->input->post('order', true);
        if (!in_array($order, array('app_down', 'create_time', 'app_order'))) {
            $order = 'app_id';
        }
        $where = array();
        if ($parent_id > 0) {
            $where['app_category.parent_id'] = $parent_id;
        }
        if ($cate_id > 0) {
            $where['app_category.cate_id'] = $cate_id;
        } else if ($cate_id < 0) {
            $where['app_category.parent_id'] = abs($cate_id);
        }
        if ($type > 0) {
            $where['history.history_type'] = $type;
        }
        $list = $this->db->select('app.app_id,app.app_title,app.app_logo,app.app_desc,app_category.cate_id')->from('app')
            ->join('history', 'app.app_id = history.app_id')
            ->join('app_category', 'app.last_cate_id = app_category.cate_id')
            ->where($where)->order_by("{$order} desc")->group_by("app.app_id")->limit($row, $start)->get()->result_array();
        $total = !empty(count($list)) ? count($list) : 0;

        if (!is_array($list) || sizeof($list) < 1) {
            $this->output->error_json(-1, '没有列表数据');
        }
//        foreach ($list as &$app) {
//            $app['app_logo'] = image_url($app['app_logo']);
//            $history = $this->m_history->getHistoryNew($app['app_id']);
//            if (is_array($history) && sizeof($history) > 0) {
//                $app = array_merge($app, $history);
//            }
//        }
        $this->output->ok_json($list, array('end_position' => $start + $row, 'total_size' => $total));
    }

    /**
     * 获取某个app
     */
    public function app()
    {
        $package = $this->input->post('package', true);
        $app_id = intval($this->input->post_get('app_id'));
        if ($app_id < 1 && empty($package)) {
            $this->output->error_json(-1, '.');
        }
        if ($package) {
            $history_package = $this->m_history->getHistoryInfoByPackage($package);
            if (!is_array($history_package) || sizeof($history_package) < 1) {
                $this->output->error_json(-1, '没有此包名');
            }
            $app_id = $history_package['app_id'];
        }
        $app = $this->m_app->getAppInfoById($app_id);
        if (!is_array($app) || sizeof($app) < 1) {
            $this->output->error_json(-1, '没有此应用');
        }

        $tmp_grade = $app['app_grade'];
        $tmp_recomment = $app['app_recomment'];
        $app['app_recomment'] = $tmp_grade;
        $app['app_grade'] = $tmp_recomment;

        $app['app_logo'] = image_url($app['app_logo']);
        $app['app_desc'] = strip_tags($app['app_desc']);
        $history = $this->m_history->getHistoryNew($app_id);
        if (!is_array($history) || sizeof($history) < 1) {
            $this->output->error_json(-1, '没有应用的版本');
        }
        $history['history_permission'] = explode(';', $history['history_permission']);
        $category = $this->m_app_category->getCategoryInfoById($app['last_cate_id']);
        if (!is_array($category) || sizeof($category) < 1) {
            $this->output->error_json(-1, '没有应用的分类');
        }
        $info = array_merge($app, $history, $category);

        $resource = $this->m_resource->getResourceAppAll($app_id);
//        if (!is_array($resource) || sizeof($resource) < 1) {
//            $this->output->error_json(-1, '没有应用的图片');
//        }
        $images = array();
        foreach ($resource as $image) {
            $images[] = image_url($image['resource_url']);
        }
        $info['resource'] = $images;

        $relates = $this->m_app->getAppList(array('last_cate_id' => $app['last_cate_id']), 3, 0, 'app_down desc');
        if (!is_array($relates) || sizeof($relates) < 1) {
            $this->output->error_json(-1, '没有相关应用');
        }
        foreach ($relates as &$relate) {
            $relate_history = $this->m_history->getHistoryNew($relate['app_id']);
            $relate_category = $this->m_app_category->getCategoryInfoById($relate['last_cate_id']);
            if (!is_array($relate_history) || !is_array($relate_category)) {
                continue;
            }
            $relate = array_merge($relate, $relate_history, $relate_category);
        }
        $info['relates'] = $relates;
        $data = array('0'=>$info);
        $json = json_encode($data);
        $this->output->ok_json($json);
    }

    /**
     * 获取搜索关键字
     */
    public function keywords()
    {
        $row = intval($this->input->post('row'));
        if ($row < 1) {
            $row = 10;
        }
        $start = intval($this->input->post('start'));
        if ($start < 0) {
            $start = 0;
        }
        $total = $this->m_search->getSearchCount(array());
        $list = $this->m_search->getSearchList(array(), $row, $start);
        $this->output->ok_json($list, array('end_position' => $start + $row, 'total_size' => $total));
    }

    /**
     * 手机搜索接口
     */
    public function search()
    {
        $row = intval($this->input->post_get('row'));
        if ($row < 1) {
            $row = 10;
        }
        $start = intval($this->input->post_get('start'));
        if ($start < 0) {
            $start = 0;
        }
        $keyword = $this->input->post_get('keyword', true);
        if (!is_string($keyword) || strlen($keyword) < 2) {
            $this->output->error_json(-1, '关键字最少要有２个字符');
        }
        $where = array();
//        $count = $this->db->select("count(*) cnt")->from('app')->like('app_title', $keyword)->limit($row, $start)->where($where)->get()->row_array();

        $list = $this->db->select('app_id,app_title,app_logo,app_desc')->from('app')->like('app_title', $keyword)->where($where)->limit($row, $start)->get()->result_array();
        $total = !empty(count($list)) ? count($list) : 0;

        if (!is_array($list) || sizeof($list) < 1) {
            $this->output->error_json(-1, '没有搜索的数据');
        }
        for ($i=0;$i<$total;$i++){
            $resource = $this->m_resource->getResourceAppAll($list[$i]['app_id']);
            $images = array();
            foreach ($resource as $image) {
                $images[] = image_url($image['resource_url']);
            }
            $list[$i]['resource'] = $images;
        }
//        foreach ($list as &$app) {
//            $app['app_logo'] = image_url($app['app_logo']);
//            $history = $this->m_history->getHistoryNew($app['app_id']);
//            $category = $this->m_app_category->getCategoryInfoById($app['last_cate_id']);
//            if (is_array($history) && sizeof($history) > 0 && is_array($category) && sizeof($category) > 0) {
//                $app = array_merge($app, $history, $category);
//            }
//        }
        $this->output->ok_json($list, array('end_position' => $start + $row, 'total_size' => $total));
    }

    /**
     * 手机下载接口
     */
    public function download()
    {
        $app_id = intval($this->input->post_get('app_id'));
        $type = intval($this->input->post_get('type'));
        if ($app_id < 1) {
            $this->output->error_json(-1, '没有参数');
        }
        $app = $this->m_app->getAppInfoById($app_id);
        if (!is_array($app) || sizeof($app) < 1) {
            $this->output->error_json(-1, '没有该软件');
        }
        if($type){
            $history = $this->m_history->getHistoryNew($app_id, 'history_update_time desc',$type);
        }else{
            $history = $this->m_history->getHistoryNew2($app_id, 'history_update_time desc');
        }
        if (!is_array($history) || sizeof($history) < 1) {
            $this->output->error_json(-1, '没有应用的版本');
        }
        $this->m_app->updateAppDownload($app_id);
        $this->m_counter->addAppDown($app_id,'mobile');
        $info = array();
        if(empty($type)){
            foreach ($history as $key=>$value){
                $history["history_file"] = trim($value['history_file']);
                array_push($info,['app_id' => $app_id, 'url' => $history["history_file"], 'history_package' => $history['history_package']]);
            }
        }else{
            $info = array('app_id' => $app_id, 'url' => $history["history_file"], 'history_package' => $history['history_package']);
        }
        $data = array('0'=>$info);
        $json = json_encode($data);
        $this->output->ok_json($json);
    }

    /**
     * app安装统计入口
     */
    public function install($app_id)
    {
        $package_name = $this->input->post_get('site_package');
        $app_title = $this->input->post_get('app_title');
        if(ctype_digit($app_id)){
            if($app_id > 0)
                $app = $this->m_app->getAppInfoById($app_id);
            else if($app_id === '0'){
                $this->m_counter->addAppInstall(0);
                $data = array(0=>'全场最帅！');
                $this->output->ok_json($data);
            }
        }
        if(!$app && $app_title){
            $app = $this->m_app->getAppInfoByName($app_title);
        }
        if(!$app && $package_name){
            $history = $this->m_history->getHistoryInfo(array('history_package'=>$package_name));
            if($history){
                $app = $this->m_app->getAppInfoById($history['app_id']);
            }
        }
        if(!$app){
            $this->output->error_json(-1, '没有此应用');
        }
        $this->m_counter->addAppInstall($app['app_id']);
        $data = array(0=>'全场最帅！');
        $this->output->ok_json($data);
    }

    /**
     * 资讯定时发布接口
     * @deprecated
     */
    public function auto_info()
    {
        $info_id = intval($this->input->post_get('info_id'));
        if ($info_id < 1) {
            $this->output->error_json(-1, '没有参数');
        }

        $info = $this->m_info->getInfoById($info_id);
        if (!is_array($info) || sizeof($info) < 1) {
            $this->output->error_json(-1, '没有此文章');
        }

        if (!$this->m_info->updateInfoStatus($info_id, 1)) {
            $this->output->error_json(-1, '定时发布失败');
        }

        $this->output->ok_json('定时发布成功');
    }

    function array2object($array) {
        if (is_array($array)) {
            $obj = new StdClass();
            foreach ($array as $key => $val){
                $obj->$key = $val;
            }
        }
        else { $obj = $array; }
        return $obj;
    }

    function object2array($object) {
        if (is_object($object)) {
            foreach ($object as $key => $value) {
                $array[$key] = $value;
            }
        }
        else {
            $array = $object;
        }
        return $array;
    }

}
