<?php

namespace Admin\Controller;
use Tools\AdminController;


class GoodsController extends AdminController{
    function showlist(){
        $goods = new \Model\GoodsModel();
      
       $info = $goods ->order('goods_id desc') -> select();
   
       $count = $goods -> count(); 
       $pagesize = 7;
       $pageObj = new \Tools\Page($count,$pagesize);
       $sql = "select * from sw_goods order by goods_id desc ".$pageObj -> limit;
       $info = $goods -> query($sql);
       $pagelist = $pageObj -> fpage(array(3,4,5,6,7,8));
       
       $this -> assign('pagelist',$pagelist);
        $this ->assign('info',$info);
        $this -> display();
    }
    
    function tianjia(){
        $goods = new \Model\GoodsModel();
        if(!empty($_POST)){
           if($_FILES['goods_pic']['error']==0){
               $cfg = array(
                   'rootPath' => './uploads/',
               );
               $up = new \Think\Upload($cfg);
               $z = $up -> uploadOne($_FILES['goods_pic']);
               $bigpath = $cfg['rootPath'].$z['savepath'].$z['savename'];
               $_POST['goods_big_img'] = ltrim($bigpath,'./');
              
               //做缩略图
               $im = new \Think\Image();
               $im -> open($bigpath);
               $im -> thumb(125,125,6);
               $smallpath = $up -> rootPath.$z['savepath']."small_".$z['savename'];
               $im ->save($smallpath);
               $_POST['goods_small_img'] = $smallpath;
               
                $zz = $goods -> add($_POST);
              if($zz){
                   $this -> redirect("showlist",array(),2,"数据添加成功");
              }else{
                   $this -> redirect("tianjia",array(),2,"数据添加失败");
              }
           }  
        }else{
             $this -> display();
        }
    }
    
    function upd($goods_id){
        $goods = new \Model\GoodsModel();
        if(empty($_POST)){
            $res = $goods -> select($goods_id);
            $this -> assign('info',$res);
            $this -> display();
        }else{
            $z = $goods -> save($_POST);
           if($z){
               $this -> redirect('showlist',array(),2,"数据修改成功");
           }else{
               $this -> redirect('upd',array('goods_id'=>$goods_id),2,"数据修改失败");
           }
        }
    }
    
    function del($goods_id){
         $goods = new \Model\GoodsModel();
        if(!empty($_GET)){
            $z = $goods -> delete($goods_id);
            if($z){
               $this -> redirect("showlist",array(),0,"删除成功");
            }else{
                $this -> redirect("del",array('goods_id'=>$goods_id),1,"删除失败");
            }
        }else{ 
             $res = $goods -> find($goods_id);
             $this -> assign("info",$res);
            $this -> display();
        }
    }
    
   
    
    function sel(){
        $goods = new \Model\GoodsModel();
        
        //分页
        $count = $goods -> count(); 
       $pagesize = 7;
       $pageObj = new \Tools\Page($count,$pagesize);
        
       $consel = $_POST['s_product_mark'];
         
        $sql = "select * from sw_goods where goods_name like '%$consel%' ";
        $z = $goods -> query($sql);
  
        $this -> assign("info",$z);
        $this -> display("showlist");
        
    }
}

