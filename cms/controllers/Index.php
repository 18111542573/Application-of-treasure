<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Index
 * 网站控制类
 */
class Index extends MY_Controller {

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
//        $this->template->display('index.html');
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
        $this->template->display('search.php');
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
        $this->template->display('list_soft.php');
//        $this->template->display('appMark.html');
    }

    public function softs2($cate_id=0, $page=0, $order=0)
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
//        $this->template->display('list_soft.php');
        $this->template->display('appMark.html');
    }


    /**
     * 游戏列表页面
     * @param int $cate_id
     * @param int $page
     * @param int $order
     */
    public function games($cate_id=0, $page=0, $order=0)
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

        $this->template->display('list_game.php');
    }

    /**
     * 资讯列表页面
     * @param int $last_cate_id
     * @param int $page
     */
    public function infos($last_cate_id=0, $page=0)
    {
        if($last_cate_id <= 0)
            $last_cate_id = intval($this->input->get('last_cate_id'));
        if($page <= 0)
            $page = intval($this->input->get('page'));
        if($page <=0)
            $page = 1;
        $this->template->assign('page', $page);
        $this->template->assign('last_cate_id', $last_cate_id);

        $this->template->display('list_info.php');
//        $this->template->display('hot.html');
    }

    public function infos2($last_cate_id=0, $page=0)
    {
        if($last_cate_id <= 0)
            $last_cate_id = intval($this->input->get('last_cate_id'));
        if($page <= 0)
            $page = intval($this->input->get('page'));
        if($page <=0)
            $page = 1;
        $this->template->assign('page', $page);
        $this->template->assign('last_cate_id', $last_cate_id);

//        $this->template->display('list_info.php');
        $this->template->display('hot.html');
    }

    /**
     * 推荐列表页面
     * @param int $id
     * @param int $page
     */
    public function recommends($id=0, $page=0)
    {
        if($id <= 0)
            $id = intval($this->input->get('id'));
        if($page <= 0)
            $page = intval($this->input->get('page'));
        if($page <=0)
            $page = 1;
        $this->template->assign('id', $id);
        $this->template->assign('page', $page);
        $this->template->display('list_recommend.php');
    }

    /**
     * 搜索页面
     */
    public function page_search()
    {
        $this->template->assign('show_num', 1);
        $this->template->display('page_search.php');
    }

    /**
     * 专题列表页面
     */
    public function specials()
    {
        $this->template->display('list_special.php');
    }

    /**
     * 排序列表页面
     * @param int $id
     * @param int $page
     */
    public function ranks($id=0, $page=0)
    {
        if(!$id)
            $id=intval($this->input->get('id'));
        if(!$page)
            $page = intval($this->input->get('page'));
        if($page <= 0)
            $page = 1;

        $this->template->assign('area_id',$id);
        $this->template->assign('page', $page);
        $this->template->assign('id',$id);
        $this->template->assign('show_sort_id',1);
        $this->template->display('list_rank.php');
    }

    /**
     * 流行列表页面
     */
    public function populars()
    {
        $this->template->display('list_popular.php');
    }

    /**
     * 分类列表页面
     * @param int $cate_id
     * @param int $page
     */
    public function categories($cate_id = 0 , $page = 0)
    {
        if(!$cate_id)
            $cate_id = intval($this->input->get('cate_id'));
        if(!$page)
            $page = intval($this->input->get('page'));
        if($page <= 0)
            $page = 1;
        $this->template->assign('page', $page);
        $this->template->assign('show_sort_id',1);
        $this->template->assign('id', $cate_id);
        $this->template->display('list_category.php');
    }

    /**
     * 装机必备列表页面
     * @param int $necessary_type
     * @param int $page
     */
    public function necessaries($necessary_type = 0, $page =0)
    {
        if(!$necessary_type)
            $necessary_type = intval($this->input->get('necessary_type'));
        $necessary_type = $necessary_type ? $necessary_type :1;
        if(!$page)
            $page = intval($this->input->get('page'));
        if($page <= 0 )
            $page = 1;
        $this->template->assign('page', $page );
        $this->template->assign('necessary_type', $necessary_type);
        $this->template->display('list_necessary.php');
    }

    /**
     * APP详情页面
     * @param int $app_id
     */
    public function app($app_id=0)
    {
        if(!$app_id)
            $app_id = intval($this->input->get('app_id'));
        if (!$app_id) {
            redirect('/');
        }
        $app = $this->m_app->getAppInfoById($app_id);
        if (!is_array($app) || sizeof($app) < 1) {
            redirect('/');
        }
        $history = $this->m_history->getHistoryNew($app_id,'history_update_time desc');
        if (!is_array($history) || sizeof($history) < 1) {
            redirect('/');
        }
        $category = $this->m_app_category->getCategoryInfoById($app['last_cate_id']);
        if (!is_array($category) || sizeof($category) < 1) {
            redirect('/');
        }
        $this->m_app->updateAppVisitor($app_id);
        $app = array_merge($app, $history);
        $nlink = $this->m_nlink->getNlinkAll();
        if (is_array($nlink) && sizeof($nlink) > 0) {
            foreach ($nlink as $value) {
                $replace = '<a target="_blank" href="'.$value['nlink_url'].'" title="'.$value['nlink_txt'].'">'.$value['nlink_txt'].'</a>';
                $app['app_desc'] = str_replace($value['nlink_txt'], $replace, $app['app_desc']);
            }
        }
        $comment_count = $this->m_comment->getAppCommentCountById($app_id);

        $site_name = !empty($this->_site['site_name']) ? $this->_site['site_name'] : '';
        $site_url  = !empty($this->_site['site_url'])  ? $this->_site['site_url']  : '';
        $cate_type = $category['parent_id'] == 2 ? '游戏' : '软件';
        if (!empty($category['app_ctitle'])) {
            $category['app_ctitle'] = str_ireplace('{site_name}',       $site_name,             $category['app_ctitle']);
            $category['app_ctitle'] = str_ireplace('{site_url}',        $site_url,              $category['app_ctitle']);
            $category['app_ctitle'] = str_ireplace('{cate_name}',       $category['cname'],     $category['app_ctitle']);
            $category['app_ctitle'] = str_ireplace('{cate_name_py}',    $category['cname_py'],  $category['app_ctitle']);
            $category['app_ctitle'] = str_ireplace('{cate_type}',       $cate_type,             $category['app_ctitle']);
            $category['app_ctitle'] = str_ireplace('{app_name}',        $app['app_title'],      $category['app_ctitle']);
            $category['app_ctitle'] = str_ireplace('{app_tags}',        $app['app_tags'],       $category['app_ctitle']);
            $category['app_ctitle'] = str_ireplace('{app_company}',     $app['app_tags'],       $category['app_ctitle']);
            $app['app_stitle'] = $category['app_ctitle'];
        }
        if (!empty($category['app_ckey'])) {
            $category['app_ckey'] = str_ireplace('{site_name}',         $site_name,             $category['app_ckey']);
            $category['app_ckey'] = str_ireplace('{site_url}',          $site_url,              $category['app_ckey']);
            $category['app_ckey'] = str_ireplace('{cate_name}',         $category['cname'],     $category['app_ckey']);
            $category['app_ckey'] = str_ireplace('{cate_name_py}',      $category['cname_py'],  $category['app_ckey']);
            $category['app_ckey'] = str_ireplace('{cate_type}',         $cate_type,             $category['app_ckey']);
            $category['app_ckey'] = str_ireplace('{app_name}',          $app['app_title'],      $category['app_ckey']);
            $category['app_ckey'] = str_ireplace('{app_tags}',          $app['app_tags'],       $category['app_ckey']);
            $category['app_ckey'] = str_ireplace('{app_company}',       $app['app_tags'],       $category['app_ckey']);
            $app['app_seokey'] = $category['app_ckey'];
        }
        if (!empty($category['app_cdesc'])) {
            $category['app_cdesc'] = str_ireplace('{site_name}',         $site_name,             $category['app_cdesc']);
            $category['app_cdesc'] = str_ireplace('{site_url}',          $site_url,              $category['app_cdesc']);
            $category['app_cdesc'] = str_ireplace('{cate_name}',         $category['cname'],     $category['app_cdesc']);
            $category['app_cdesc'] = str_ireplace('{cate_name_py}',      $category['cname_py'],  $category['app_cdesc']);
            $category['app_cdesc'] = str_ireplace('{cate_type}',         $cate_type,             $category['app_cdesc']);
            $category['app_cdesc'] = str_ireplace('{app_name}',          $app['app_title'],      $category['app_cdesc']);
            $category['app_cdesc'] = str_ireplace('{app_tags}',          $app['app_tags'],       $category['app_cdesc']);
            $category['app_cdesc'] = str_ireplace('{app_company}',       $app['app_tags'],       $category['app_cdesc']);
            $app['app_seodesc'] = $category['app_cdesc'];
        }

        $local = $this->db->select('*')->from('image_local')->where(array('app_id'=>$app_id))->get()->row_array();
        if(is_array($local)&&sizeof($local)>0){ 
            $app['app_logo'] = '/uploads/local/'.$local['date'].'/'.$app_id.'/'.basename($app['app_logo']);   
        }
        $this->m_counter->addAppView($app_id);
        $this->template->assign('comment_count', $comment_count);
        $this->template->assign('comment_code', $this->_site['comment_code']);
        $this->template->assign('app_id', $app_id);
        $this->template->assign('app', $app);
        $this->template->display('content_app.php');
//        $this->template->display('detail.html');
    }

    /**
     * 资讯详情页面
     * @param int $info_id
     */
    public function info($info_id=0)
    {
        if(!$info_id)
            $info_id = intval($this->input->get('info_id'));
        if (!$info_id) {
            redirect('/');
        }
        $info = $this->m_info->getInfoById($info_id);
        $info_prev = $this->m_info->getInfoOne(array('info_update_time >'=>$info['info_update_time']),'info_order, info_update_time');//上一篇
        $info_next = $this->m_info->getInfoOne(array('info_update_time <'=>$info['info_update_time']),'info_order desc, info_update_time desc');//下一篇
        if (!is_array($info) || sizeof($info) < 1) {
            redirect('/');
        }
        $this->m_info->updateInfoVisitor($info_id);
        $nlink = $this->m_nlink->getNlinkAll();
        if (is_array($nlink) && sizeof($nlink) > 0) {
            foreach ($nlink as $value) {
                $replace = '<a target="_blank" href="'.$value['nlink_url'].'" title="'.$value['nlink_txt'].'">'.$value['nlink_txt'].'</a>';
                $info['info_body'] = str_replace($value['nlink_txt'], $replace, $info['info_body']);
            }
        }

        $this->template->assign('info_id', $info_id);
        $this->template->assign('comment_code', $this->_site['comment_code']);
        $this->template->assign('last_cate_id', $info['last_cate_id']);
        $this->template->assign('info', $info);
        $this->template->assign('info_prev', $info_prev);
        $this->template->assign('info_next', $info_next);
        $this->template->display('content_info.php');
    }

    /**
     * 专题详情页面
     * @param int $special_id
     * @param int $page
     */
    public function special($special_id=0, $page=0)
    {
        if(!$special_id)
            $special_id = intval($this->input->get('special_id'));
        if(!$page)
            $page = intval($this->input->get('page'));
        if($page <= 0)
            $page = 1;
        if (!$special_id) {
            redirect('/');
        }
        $special = $this->m_special->getSpecialInfoById($special_id);
        if (!is_array($special) || sizeof($special) < 1) {
            redirect('/');
        }
        $this->template->assign('page', $page);
        $this->template->assign('special_id', $special_id);
        $this->template->assign('special', $special);
        $this->template->display('content_special.php');
    }

    /**
     * 链接二维码
     * @param int $app_id
     */
    public function qrcode($app_id=0)
    {
        $this->load->library('qrcode');

        $url = $this->input->get('url', true);
        $url = $url ? urldecode($url) : false;

        if(!$app_id)
            $app_id = intval($this->input->get('app_id'));
        if ($app_id > 0) {
            $url = site_url(array('c'=>'index', 'm'=>'download', 'app_id' => $app_id));
        }

        if ($url) {
            $this->qrcode->png($url);
        }
    }

    /**
     * 本地下载
     * @param int $app_id
     */
    public function download($app_id=0,$type=1)
    {
        if(!$app_id)
            $app_id = intval($this->input->get('app_id'));
        if ($app_id < 1) {
            redirect('/');
        }
        $app = $this->m_app->getAppInfoById($app_id);
        if (!is_array($app) || sizeof($app) < 1) {
            redirect('/');
        }
        $type = $this->input->get('type');
        $history = $this->m_history->getHistoryNew($app_id,'history_update_time desc',$type);
        if (!is_array($history) || sizeof($history) < 1) {
            redirect('/');
        }
        $this->m_app->updateAppDownload($app_id);
        $this->m_counter->addAppDown($app_id);

        $upload_file = '/';
        if($history["history_file"]) {
            if (substr(trim($history["history_file"]), 0, 1) == '/') {
                $upload_file = 'http://' . $this->input->server('HTTP_HOST') . $history["history_file"];
            } else if (substr(trim($history["history_file"]), 0, 4) == 'http') {
                $upload_file = $history["history_file"];
            } else {
                $upload_file = 'http://' . $this->input->server('HTTP_HOST') . '/uploads/apk/' . $history["history_file"];
            }
        }
        redirect($upload_file);
    }

    /**
     * 安全水印
     */
    public function xcode()
    {
        $this->load->library('MY_String', NULL, 'string');
        $this->load->library('image');

        $randval = $this->string->rand_string(4, 1);
        $this->session->set_userdata('xcode', $randval);
        $this->image->buildImageVerify($randval, 60, 32);
    }

    /**
     * 网站地图
     */
    public function map()
    {
        $this->template->display('site_map.php');
    }

    /**
     * 高速下载，下载手助
     */
    public function high_speed_download(){
        if(!$this->_site['site_apk']){
            redirect('https://www.711cms.com/static/uploads/assistant_apk/711CMS.apk');
        }
        $this->m_counter->addSiteApkDonw();
        $apk = trim($this->_site['site_apk']);
        if (substr($apk, 0, 1) == '/') {
            $upload_file = 'http://' . $this->input->server('HTTP_HOST') . $apk;
        } else if (substr($apk, 0, 4) == 'http') {
            $upload_file = $apk;
        }
        redirect($upload_file);
    }

    public function test(){
        //设置编码格式
        header("Content-type: text/html; charset=utf-8");
        //用mysqli来连接数据库（服务器，用户名，密码，数据库名字）
        $mysqli=new mysqli("207.246.66.86","root","root","amz_order");

        $mysqli -> set_charset('utf8');

        if(mysqli_connect_errno()){
            echo "连接数据库失败：".mysqli_connect_error();
            $mysqli=null;
            exit;
        }
//        echo "连接数据库成功！<br/>";
        date_default_timezone_set('PRC');
        $params = array(
            'AWSAccessKeyId' => "AKIAJRURWBJ4W2V27XOQ",
            'Action' => "ListOrders",
            'SellerId' => "A33KX83Y04Q5NZ",
            'SignatureMethod' => "HmacSHA256",
            'SignatureVersion' => "2",
            'Timestamp'=> gmdate("Y-m-d\TH:i:s\Z", time()),
            'Version'=> "2013-09-01",
            'CreatedAfter'=> gmdate("Y-m-d\TH:i:s\Z", strtotime("-2 day")),
            'CreatedBefore'=> gmdate("Y-m-d\TH:i:s\Z", strtotime("-1 day")),
            'MarketplaceId.Id.1' => "ATVPDKIKX0DER",
        );

        $url_parts = array();
        foreach(array_keys($params) as $key)
            $url_parts[] = $key . "=" . str_replace('%7E', '~', rawurlencode($params[$key]));

        sort($url_parts);

        $url_string = implode("&", $url_parts);
        $string_to_sign = "GET\nmws.amazonservices.com\n/Orders/2013-09-01\n" . $url_string;

        $signature = hash_hmac("sha256", $string_to_sign, "N/IAiBhdOyGbENLqNdXX4XMdaiUPqpwiALETuKRo", TRUE);

        $signature = urlencode(base64_encode($signature));

        $url = "https://mws.amazonservices.com/Orders/2013-09-01" . '?' . $url_string . "&Signature=" . $signature;
        $ch = curl_init();
        $header[] = "Content-type: text/xml";
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $response = curl_exec($ch);
        $parsed_xml = simplexml_load_string($response);
        print_r($response);
        $parsed_json = json_decode(json_encode($parsed_xml),true);
        $data = $parsed_json['ListOrdersResult']['Orders']['Order'];
        $sql = '';
        for($i = 0;$i<count($data);$i++){
            $LatestShipDate=$data[$i]['LatestShipDate'];
            $OrderType=$data[$i]['OrderType'];
            $PurchaseDate=$data[$i]['PurchaseDate'];
            $AmazonOrderId=$data[$i]['AmazonOrderId'];
            $BuyerEmail=$data[$i]['BuyerEmail'];
            $IsReplacementOrder=$data[$i]['IsReplacementOrder'];
            $LastUpdateDate=$data[$i]['LastUpdateDate'];
            $NumberOfItemsShipped=$data[$i]['NumberOfItemsShipped'];
            $ShipServiceLevel=$data[$i]['ShipServiceLevel'];
            $OrderStatus=$data[$i]['OrderStatus'];
            $SalesChannel=$data[$i]['SalesChannel'];
            $IsBusinessOrder=$data[$i]['IsBusinessOrder'];
            $NumberOfItemsUnshipped=$data[$i]['NumberOfItemsUnshipped'];
            $PaymentMethodDetail=$data[$i]['PaymentMethodDetails']['PaymentMethodDetail'];
            $BuyerName=$data[$i]['BuyerName'];
            $CurrencyCode=$data[$i]['OrderTotal']['CurrencyCode'];
            $Amount=$data[$i]['OrderTotal']['Amount'];
            $IsPremiumOrder=$data[$i]['IsPremiumOrder'];
            $EarliestShipDate=$data[$i]['EarliestShipDate'];
            $MarketplaceId=$data[$i]['MarketplaceId'];
            $FulfillmentChannel=$data[$i]['FulfillmentChannel'];
            $PaymentMethod=$data[$i]['PaymentMethod'];
            $City=$data[$i]['ShippingAddress']['City'];
            $PostalCode=$data[$i]['ShippingAddress']['PostalCode'];
            $StateOrRegion=$data[$i]['ShippingAddress']['StateOrRegion'];
            $CountryCode=$data[$i]['ShippingAddress']['CountryCode'];
            $Name=$data[$i]['ShippingAddress']['Name'];
            $AddressLine1=$data[$i]['ShippingAddress']['AddressLine1'];
            $AddressLine2=$data[$i]['ShippingAddress']['AddressLine1'];
            $IsPrime=$data[$i]['IsPrime'];
            $ShipmentServiceLevelCategory=$data[$i]['ShipmentServiceLevelCategory'];
            $SellerOrderId=$data[$i]['SellerOrderId'];
            $CreatedBefore=$parsed_json['ListOrdersResult']['CreatedBefore'];
            $RequestId=$parsed_json['ResponseMetadata']['RequestId'];
            $sql = "insert into amz_order VALUE (
                    '$LatestShipDate',
                    '$OrderType',
                    '$PurchaseDate',
                    '$AmazonOrderId',
                    '$BuyerEmail',
                    '$IsReplacementOrder',
                    '$LastUpdateDate',
                    '$NumberOfItemsShipped',
                    '$ShipServiceLevel',
                    '$OrderStatus',
                    '$SalesChannel',
                    '$IsBusinessOrder',
                    '$NumberOfItemsUnshipped',
                    '$PaymentMethodDetail',
                    '$BuyerName',
                    '$CurrencyCode',
                    '$Amount',
                    '$IsPremiumOrder',
                    '$EarliestShipDate',
                    '$MarketplaceId',
                    '$FulfillmentChannel',
                    '$PaymentMethod',
                    '$City',
                    '$PostalCode',
                    '$StateOrRegion',
                    '$CountryCode',
                    '$Name',
                    '$AddressLine1',
                    '$AddressLine2',
                    '$IsPrime',
                    '$ShipmentServiceLevelCategory',
                    '$SellerOrderId',
                    '$CreatedBefore',
                    '$RequestId')";
                    $mysqli->query($sql);
        }
//        echo "插入成功成功！<br/>";
        $mysqli->close();
    }

    function insert($table, $array){
        $keys = join(",",array_keys($array));
        $vals = "'".join("','",array_values($array))."'";
        $sql = "insert {$table}({$keys})values({$vals})";

        mysql_query($sql);
        return mysql_insert_id();
    }

}
