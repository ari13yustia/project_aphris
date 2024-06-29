<?php

namespace App\Helpers;
use App\Models\User;
use App\Models\Inventory\HeadInitialBalances;
use App\Models\Inventory\HeadGoodsReceipt;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Helper
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    static function redirect_to($email){

        if($email == 'admin@gmail.com'){
            $redirectTo = '/office/dashboard/employee';
        }else{
            $redirectTo = 'employee';
        }

        return $redirectTo;
    }

    static function generate_menus($url_now,$user_id){

        $func = sprintf('public._generate_menus(%s)', implode(',', array($user_id)));
        $menus = DB::select('SELECT * FROM '.$func);

        // $url_path = parse_url($url_now)['path'];

        $html_menus ='';
        for ($i=0; $i < count($menus); $i++) {
            $sub_menu = json_decode($menus[$i]->sub_menu, TRUE);

            if (!$sub_menu){
                $html_menus .= '<li class="nav-item">
                                    <a href="'.url('/').$menus[$i]->url.'" class="nav-link '.((url('/').$menus[$i]->url == url('/').$url_now)?"active":"").'">
                                        <i class="'.$menus[$i]->icon.' me-2"></i>'.$menus[$i]->title.'
                                    </a>
                                </li>';
            }


            if ($sub_menu) {
                $found_val = array_search($url_now, array_column($sub_menu, 'url'));
                // echo $found_val;
                $html_menus .= '<li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link '.(($found_val!='')?"active":"").'">
                                        <i class="'.$menus[$i]->icon.' me-2"></i><p>'.$menus[$i]->title.'</p>
                                        <i class="fas fa-angle-left right"></i>
                                    </a>';
                for ($i_sub=0; $i_sub < count($sub_menu); $i_sub++) {
                    $html_menus .= '<ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="'.$sub_menu[$i_sub]['url'].'"
                                                class="nav-link '.((url('/').$sub_menu[$i_sub]['url'] == url('/').$url_now)?"active":"").'">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>'.$sub_menu[$i_sub]['title'].'</p>
                                            </a>
                                        </li>
                                    </ul>';
                }
                $html_menus .=  '</li>';
            }
        }
// exit;
        return $html_menus;
    }

    static function  generate_paging($page_data=array(),$tp=0)
    {
        $func_name = "pageLoad";
        if (isset($page_data['load_func_name']))
        {
            if ($page_data['load_func_name'])
                $func_name = $page_data['load_func_name'];
        }

        $limit = $page_data['limit'];
        $limit = $limit?$limit:1;
        $count = ceil($page_data['count_row'] / $limit) ;
        $last_row = $limit*$page_data['current'];
        if ($last_row > $page_data['count_row'])
            $last_row = $page_data['count_row'];
        $page_result = '<div class="d-md-flex align-items-center text-center justify-content-between">';
        $page_result .= '<span class="text-muted me-3">
                            Showing '.(($limit*($page_data['current']-1))+1)
                                .' to '.$last_row.' of '.$page_data['count_row'].' rows
                        </span>';

        if($tp){
        $page_result .= '   <div class="col-sm-4" style="left:10%;right:0;width:10%">
                                <input type="number" value="'.$page_data['current'].'" min="0" max="'.$last_row.'" class="form-control" placeholder="Page..." value="" onkeydown="if (event.keyCode == 13) '.$func_name.'(this.value)">
                            </div>
                        ';
        }

        $page_result .= '<ul class="pagination mb-0 justify-content-center mt-4 mt-sm-0"><li class="page-item prev '.($page_data['current']==1?'active':'').'" title="First"><a class="page-link" href="javascript:void(0)" '.($page_data['current']==1?'':'onclick="'.$func_name.'(1)"').'>&lt;&lt;</a></li>';

        $paging_show = 2;
        $page_start = $page_data['current'] - $paging_show;
        $page_start = $page_start<1?1:$page_start;
        //$page_end = $count;
        $page_end = $page_data['current'] + $paging_show;
        $page_end = $count > $page_end ? $page_end : $count;
        $page_end = $count > 1 ? $page_end : 1;

        //
        if ($page_start > 1)
        {
            $page_result .= '<li class="page-item active"><a class="page-link" href="javascript:void(0)" >...</a></li>';
        }
        // before current
        for($i=$page_start; $i<=$page_end; $i++)
        {
            $page_result .= '<li '.($page_data['current']==$i?'class="page-item active"':'class="page-item"').'>'
                            .'<a class="page-link" href="javascript:void(0)" '.($page_data['current']==$i?'':'onclick="'.$func_name.'('.$i.')"').'>'.$i.'</a>'
                            .'</li>';
        }
        // after current
        if ($page_end < $count)
        {
            $page_result .= '<li class="page-item active"><a class="page-link" href="javascript:void(0)" >...</a></li>';
        }

        $page_result .= '<li class="page-item next '.($page_data['current']==$page_end?'active':'').'" title="Last"><a class="page-link" href="javascript:void(0)" onclick="'.$func_name.'('.$count.')"> &gt;&gt; </a></li></ul>';
        $page_result .= '</div>';
        return $page_result;
    }

    static function resp_success($msg='',$data=array())
    {
        $result = array();

        $result['message']            = $msg;
        $result['error']              = '';
        $result['data']               = $data;

        echo json_encode($result);exit;
    }

    static function resp_error($err)
    {
        $result = array();

        $result['message']            = '';
        $result['error']              = $err;

         echo json_encode($result);exit;
    }

    static function num_to_text($text='0')
    {
        $result = str_replace(",", "", $text);
        $result = $result?$result:'0';
        return $result;
    }


    static function get_sql_date($date)
    {
        $return_value = 'NULL';
        if ($date !='')
        {
            $date = null;
            $date = date('d-m-Y',strtotime($date));
            if (strlen($date) > 10)
            {
                list($date, $time) = explode(' ', $date);
            }
            else
            {
                $date = $date;
                $time = '00:00:00';
            }
            // echo num2month($dt[1],2).'__'.$dt[1].'__'.$dt[0];
            list($day, $month, $year) = preg_split("/[\/.-]/", $date);
            if (strlen($year)==2)
                list($year, $month, $day) = preg_split("/[\/.-]/", $date);

            $day = strlen($day)==1?'0'.$day:$day;
            $month = strlen($month)==1?'0'.$month:$month;
            $return_value = "$year$month$day";

        }
        return $return_value;
    }
}
