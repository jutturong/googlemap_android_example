<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    //$this->load->library('encrypt');

  //  var  $title=" ศูนย์ตะวันฉาย มหาวิทยาลัยขอนแก่น | TAWANCHAI KhoenKean University Version 1.0 "; //The Entrar-shadow Website form | w3layouts
    //  title:'ระบบฐานข้อมูลแจ้งเกิดเด็กปากแหว่งเพดานโหว่',
    var  $title=" ระบบฐานข้อมูลแจ้งเกิดเด็กปากแหว่งเพดานโหว่ "; //The Entrar-shadow Website form | w3layouts
  //  var  $title_fr1=" ระบบการติดตามการรักษา version 1.0 ";

  function __construct()
        {

            parent::__construct();
            //$this->load->library('encrypt');

        }


  public function index()
	{
		//$this->load->view('welcome_message');
      
      $sess_data=array(
                          "sess_us"=>"",
                          "sess_ps"=>"",
                        );
      $this->session->unset_userdata( $sess_data );
    
          $this->session->userdata("sess_us");
          $this->session->userdata("sess_ps");
        
                $data['title']= $this->title;
                $this->load->view('login',$data);
	}
        public  function checklogin()
        {
            //echo "testing page";
             $data['title']= $this->title;
            
            // $this->load->view('home',$data);
             //$this->load->view('mainpage',$data);
            
             
             
             $user= trim( $this->input->get_post("us") );
            //echo "<br>";
             $pass=trim($this->input->get_post("ps"));
            //echo "<br>";
            
            
            
              if(  $user=="admin"  &&  $pass == "1111111189"  )
              {
                    $sess_data=array(
                          "sess_us"=>$user,
                          "sess_ps"=> $pass,
                        );
                    
                    $this->session->set_userdata($sess_data);
                       $sess_us=$this->session->userdata("sess_us");
                    //echo "<br>";
                      $sess_ps=$this->session->userdata("sess_ps");
                    //echo "<br>";
                
                    
                    $this->load->view('mainpage',$data);
                    
              }
              else {
                           //  $this->load->view('login',$data);
                  
                                $sess_data=array(
                                  "sess_us"=>"",
                                  "sess_ps"=>"",
                                );
                                 $this->session->unset_userdata( $sess_data );

                                $this->session->userdata("sess_us");
                                $this->session->userdata("sess_ps");
                
                           redirect("welcome/index");
              }
             
            
           
         
        }
        //http://127.0.0.1/app_admin/index.php/welcome/json_main1
        //http://kkucleft.kku.ac.th/app_admin/index.php/welcome/json_main1
        public function json_main1()
        {
            
          $user=$this->session->userdata("sess_us");
          $pass=$this->session->userdata("sess_ps");
          if(  $user=="admin"  &&  $pass == "1111111189"  )
          {   

             //FROM `tb_patientcleft` 
            //SELECT * FROM `province` 
             //PROVINCE_CODE
            
             $tb="tb_patientcleft";
             $tb1="province";
             $tb2="tb_sex";
             
             
             $this->db->join($tb1,  $tb.".province_id=".$tb1.".PROVINCE_CODE" );
             $this->db->join($tb2,  $tb.".id_sex=".$tb2.".id_sex"   );
             
             
             $q=$this->db->get($tb);
             foreach($q->result() as $row )
             {
                 $rows[]=$row;
             }
             echo json_encode($rows);
             
          }
          else
          {
                    redirect("welcome/index");
          }
            
             
             
        }
        //http://kkucleft.kku.ac.th/app_admin/index.php/welcome/json_province
        public function json_province()
        {
          $user=$this->session->userdata("sess_us");
          $pass=$this->session->userdata("sess_ps");
          if(  $user=="admin"  &&  $pass == "1111111189"  )
          {   
              
              
              
              
          
             $tb="province";
             $q=$this->db->get($tb);
             foreach($q->result() as $row)
             {
                 $rows[]=$row;
                 
             }
             echo json_encode($rows);
             
          }
          
           else
          {
                    redirect("welcome/index");
          }
          
          
        }
        //http://kkucleft.kku.ac.th/app_admin/index.php/welcome/update_patient
        function   update_patient()
        {
           
            
          $user=$this->session->userdata("sess_us");
          $pass=$this->session->userdata("sess_ps");
          if(  $user=="admin"  &&  $pass == "1111111189"  )
          {  
            
            
            
              //echo "T";
               $id_patient=trim($this->input->get_post("txt_id_patient"));
              //echo "<br>";
               $name=trim($this->input->get_post("txt_name"));
              //echo "<br>";
              //  $('#txt_lastname').textbox('setValue',row.lastname); 
                $lastname=trim($this->input->get_post("txt_lastname"));
              //echo "<br>";
              //txt_id_card
                $id_card=trim($this->input->get_post("txt_id_card"));
              //echo "<br>";
              //txt_telephone
                $telephone=trim($this->input->get_post("txt_telephone"));
             // echo "<br>";
              //r_id_sex
                $r_id_sex=trim($this->input->get_post("r_id_sex"));
              //echo "<br>";
              //txt_birthdate
               $birthdate=trim($this->input->get_post("txt_birthdate"));
             
              if(   !empty($birthdate)    )
              {
                   $ex=explode("/" , $birthdate );
                   $conv_birthdate =  $ex[2]."-".$ex[0]."-".$ex[1]; 
                   //echo "<br>";
              }
              //txt_address
               $address=trim($this->input->get_post("txt_address"));
             //echo "<br>";
              //cmb_province_id
               $province_id=trim($this->input->get_post("cmb_province_id"));
              //echo "<br>";
              //txt_diagnosis
                $diagnosis=trim($this->input->get_post("txt_diagnosis"));
              //echo "<br>";
              //txt_detail_diagnosis
              $detail_diagnosis=trim($this->input->get_post("txt_detail_diagnosis"));
              //echo "<br>";
              //txt_informative_name
              $informative_name=trim($this->input->get_post("txt_informative_name"));
              // echo "<br>";
              //txt_informative_lastname
               $informative_lastname=trim($this->input->get_post("txt_informative_lastname"));
               //echo "<br>";
               //name="txt_informative_tel" 
                $informative_tel=trim($this->input->get_post("txt_informative_tel"));
                 //echo "<br>";
               
               
                $tb="tb_patientcleft";
                $data=array(
                     "name" => $name,
                    "lastname" =>$lastname,
                    "id_card" =>$id_card,
                    "telephone"=>$telephone,
                    "id_sex"=>$r_id_sex,
                    "birthdate"=>$conv_birthdate,
                    "address"=>$address,
                    "province_id"=>$province_id,
                    "diagnosis"=>$diagnosis,
                    "detail_diagnosis"=>$detail_diagnosis,
                    "informative_name"=>$informative_name,
                    "informative_lastname"=>$informative_lastname,
                    "informative_tel"=>$informative_tel,
                    
                );
                $this->db->where("id_patient",$id_patient);
                $ck=$this->db->update($tb,$data);
                if( $ck )
                {
                    echo 1;
                }else
                {
                    echo 0;
                }
                
                }
          
           else
          {
                    redirect("welcome/index");
          }
          
          
          
              
        }
        
        //http://kkucleft.kku.ac.th/app_admin/index.php/welcome/del_main1
        public function del_main1()
        {
          $user=$this->session->userdata("sess_us");
          $pass=$this->session->userdata("sess_ps");
          if(  $user=="admin"  &&  $pass == "1111111189"  )
          {  

               $id=trim($this->input->get_post("id"));
               if( $id > 0    &&  $id != "" )
               {
                        $tb="tb_patientcleft";
                        //echo $id;
                        $this->db->where("id_patient",$id);
                        $ck=$this->db->delete($tb);
                        if( $ck )
                        {
                            echo 1;
                        }
                        else{
                            echo 0;
                        }
                      
               }
               
               
               
          }
          else
          {
                    redirect("welcome/index");
          }
          
        }
        
        //http://kkucleft.kku.ac.th/app_admin/index.php/welcome/insertPatient
        //public  String urlinsert="http://kkucleft.kku.ac.th/app_admin/index.php/welcome/insertPatient";
        public  function insertPatient()
        {
            
              //echo "test function";
              $name=trim($this->input->get_post("name"));
              $lastname=trim($this->input->get_post("lastname"));
              $id_card=trim($this->input->get_post("id_card"));
              $telephone=trim($this->input->get_post("telephone"));
          
              $id_sex=trim($this->input->get_post("id_sex"));
              if( $id_sex == "ชาย"  ) 
              {
                        $id_va_sex=1;

              }
              elseif( $id_sex == "หญิง"  )
              {
                        $id_va_sex=2;
              }
             else
             {
                        $id_va_sex=1;
             }
        
              // $birthdate=$_POST["birthdate"];  // receive   16/5/2558 
               $birthdate =trim($this->input->get_post("birthdate"));
                if(  strlen($birthdate) > 0   )  // format 2015-05-04
                {
                            $arrbth=explode("/", $birthdate );  
                            $y=$arrbth[2];
                            $yconv= $y - 543;
                            $conv_dmy= $yconv."-".$arrbth[1]."-".$arrbth[0];
                 }
           
             $address =trim($this->input->get_post("address"));
             $province_id =trim($this->input->get_post("province_id"));
                if(  strlen($province_id) > 0  )
                    {
                        $arrprov=explode("-", $province_id );
                       // $id_prov=$arrprov[0]; // old code
                         $id_prov=$arrprov[1]; 
                    }
                    
          $diagnosis =trim($this->input->get_post("diagnosis"));
          // $detail_diagnosis=$_POST["detail_diagnosis"];
          $detail_diagnosis=trim($this->input->get_post("detail_diagnosis"));
          /*
               $informative_name=$_POST["informative_name"];
        $informative_lastname=$_POST["informative_lastname"];
        $informative_tel=$_POST["informative_tel"];
           */
          $informative_name=trim($this->input->get_post("informative_name"));
          $informative_lastname=trim($this->input->get_post("informative_lastname"));
          //
          $informative_tel=trim($this->input->get_post("informative_tel"));  
        
          $tb="tb_patientcleft";
       
          
          $data=array(
               "name"=>$name,
               "lastname"=>$lastname,
              "id_card"=>$id_card,
               "telephone"=>$telephone,
                "id_sex"=>$id_va_sex,
              "birthdate"=>$conv_dmy,
               "address"=>$address,
               "province_id"=>$id_prov,
               "diagnosis"=>$diagnosis,
               "detail_diagnosis"=>$detail_diagnosis,
                "info_name"=>$informative_name,
               "informative_lastname"=>$informative_lastname,
                "informative_tel"=>$informative_tel,
          );
           
           
        
          $query=$this->db->insert($tb,$data);
    if(    $query   )    
    {
                   $flag['code']=1;
    }
    else{
        
                    $flag['code']=0;
    }
           echo  json_encode($flag);
 
        }
        
        
        #---------------- json android backend  list  จะทำการดู backoffice หลังจากการลงทะเบียนไปแล้ว--------------------------------
       //http://kkucleft.kku.ac.th/app_admin/index.php/welcome/json_backend1
        public function json_backend1()
        {
            
        

             //FROM `tb_patientcleft` 
            //SELECT * FROM `province` 
             //PROVINCE_CODE
            
             $tb="tb_patientcleft";
             $tb1="province";
             $tb2="tb_sex";
             
             /*
             $this->db->join($tb1, $tb1.".PROVINCE_CODE=".$tb.".province_id" ,"right");
             $this->db->join($tb2, $tb2.".id_sex=".$tb.".id_sex" ,"right");
             */
             
             $this->db->join($tb2,  $tb.".id_sex=".$tb2.".id_sex"   );
             $this->db->join($tb1,  $tb.".province_id=".$tb1.".PROVINCE_CODE" );
            
             
             
             $q=$this->db->get($tb);
             foreach($q->result() as $row )
             {
                 $rows[]=$row;
             }
             echo json_encode($rows);
  
             
        } 

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
