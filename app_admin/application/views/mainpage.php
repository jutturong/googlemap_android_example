<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?=$title?></title>


        <?=$this->load->view("import_")?>
        
        <script type="text/javascript">
           $(function(){
               //----------- progressbar-------------
               var win=$.messager.progress({
                     title:'Progress Loading',
                     msg:'Loading',
                   
               });
               setTimeout(function(){
                    $.messager.progress('close');
               },3000);
               //----------- progressbar-------------
               
                //  txt_id_patient
                                   $('#txt_id_patient').textbox('setValue','');
                                   $('#txt_name').textbox('setValue','');
                                    $('#txt_lastname').textbox('setValue',''); 
                                    $('#txt_id_card').textbox('setValue',''); 
                                    $('#txt_telephone').textbox('setValue','');
                                    //txt_id_sex
                                    $('#txt_id_sex').textbox('setValue','');
                                   
                                    $('#id_sex_m').attr('checked',false);
                                    $('#id_sex_w').attr('checked',false);
                                   
                                      $('#txt_birthdate').textbox('setValue', '' );
                                     $('#txt_address').textbox('setValue', '' );
                                     
                                    // $('#txt_province_id').textbox('setValue', '' );
                                     //cmb_province_id
                                     $('#cmb_province_id').textbox('setValue', '' );
                                     
                                     
                                      $('#txt_diagnosis').textbox('setValue', '' );
                                      $('#txt_detail_diagnosis').textbox('setValue', '' );
                                       $('#txt_informative_name').textbox('setValue', '' );
                                      $('#txt_informative_lastname').textbox('setValue', '' );      
                                      $('#txt_informative_tel').textbox('setValue','' );
                                      
                                      $('#dg_main1').datagrid('reload'); 
           });
        </script>
        
        <script type="text/javascript">
           $(function(){
                 $('#dg_main1').datagrid({
                     title:'ระบบฐานข้อมูลแจ้งเกิดเด็กปากแหว่งเพดานโหว่',
                     iconCls:'icon-large-picture',
                     url:'<?=base_url()?>index.php/welcome/json_main1',
                     rownumbers:true,
                     singleSelect:true,
                     columns:[[
                         { field:'name', title:'ชื่อผู้ป่วย' ,align:'left' , editor:'text' ,  },
                         { field:'lastname',title:'นามสกุลผู้ป่วย',align:'left' },
                         { field:'id_card',title:'เลขบัตรประชาชน',align:'left' },
                         { field:'telephone',title:'เบอร์โทรศัพท์',align:'left' },
                         { field:'sex_content',title:'เพศ',align:'left' },
                         { field:'birthdate',title:'วัน-เดือน-ปี เกิด',align:'left' },
                         { field:'address',title:'ที่อยู่ปัจจุบัน(ตามทะเบียนบ้าน)',align:'left' },
                          //  { field:'province_id',title:'จังหวัดเกิด',align:'left' },
                         { field:'PROVINCE_NAME',title:'จังหวัดเกิด',align:'left' },
                         { field:'diagnosis',title:'ภาวะโลกร่วม',align:'left' },
                         { field:'detail_diagnosis',title:'ภาวะโลกร่วม อื่นๆ',align:'left' },
                         { field:'info_name',title:'ชื่อผู้ให้ข้อมูล',align:'left' },
                         { field:'informative_lastname',title:'นามสกุลผู้ให้ข้อมูล',align:'left' },
                         { field:'informative_tel',title:'เบอร์โทรศัพท์ผู้ให้ข้อมูล',align:'left' },
                          //
                          
                     ]],
                         
                       
                         /*
                         toolbar:[
                     {  text:'Reload',iconCls:'icon-reload' , handler:function(){  $('#dg_main1').datagrid('reload'); } }
                         ]
                         */
                
                          toolbar:'#tb'
                 });
               
           });
        </script>

    </head>  
    
    <body>
       
        <div class="easyui-datagrid"  id="dg_main1"   >
        </div>    
            
            
            <div  id="tb" style="padding: 3px;">
                <span>
                 <a href="<?=base_url()?>index.php/welcome"  class="easyui-linkbutton"  iconCls="icon-man"  style="width:100px;height: 40px;"  >Logout</a>   
                 <a   href="#"   onclick=" $('#dg_main1').datagrid('reload');  "  style=" width:100px;height:40px; "  class="easyui-linkbutton"  iconCls="icon-reload" > Reload  </a> 
                 <a   href="#"   onclick="
                    
                    $(function(){
                        
                         var  row=$('#dg_main1').datagrid('getSelected');
                             if ( row )
                             {
                                    //  txt_id_patient
                                    $('#txt_id_patient').textbox('setValue',row.id_patient);
                                     //alert('t');
                                    $('#txt_name').textbox('setValue',row.name);
                                    $('#txt_lastname').textbox('setValue',row.lastname); 
                                    $('#txt_id_card').textbox('setValue',row.id_card); 
                                    $('#txt_telephone').textbox('setValue',row.telephone);
                                    
                                    //txt_id_sex
                                    //   $('#txt_id_sex').textbox('setValue','');
                                    $('#txt_id_sex').textbox('setValue',row.id_sex);
                                  /*
                                      $('#r_id_sex_m').attr('checked',false);
                                    $('#r_id_sex_w').attr('checked',false);
                                   */
                                    //alert(row.id_sex);
                                     if( row.id_sex == 1 )
                                     {
                                          $('#id_sex_m').attr('checked', 'checked' );
                                         // alert(row.id_sex);
                                     }
                                     else if( row.id_sex == 2 )
                                     {
                                          $('#id_sex_w').attr('checked', 'checked' );
                                         // alert(row.id_sex);
                                          //r_id_sex_m
                                     }
                                    //  r_id_sex
                                    
                                    
                                    var  strdate=row.birthdate;
                                    var  ex1=strdate.split('-');
                                     var  conv_date=  ex1[1]    +  '/'  +  ex1[2]    + '/'  + ex1[0]
                                    $('#txt_birthdate').textbox('setValue',conv_date );
                                     $('#txt_address').textbox('setValue',row.address );
                                     
                                     
                                   // $('#txt_province_id').textbox('setValue',row.PROVINCE_NAME );
                                    $('#cmb_province_id').combobox('setValue',row.province_id);
                                    
                                    $('#txt_diagnosis').textbox('setValue',row.diagnosis);
                                    $('#txt_detail_diagnosis').textbox('setValue',row.detail_diagnosis );
                                    $('#txt_informative_name').textbox('setValue',row.info_name );
                                    $('#txt_informative_lastname').textbox('setValue',row.informative_lastname );
                                    $('#txt_informative_tel').textbox('setValue',row.informative_tel );
                               
                             }
                        
                    });

                             "  class="easyui-linkbutton"  style=" width:100px;height:40px; "   iconCls="icon-man" > View  </a> 
                             
                  <a   href="#"   onclick="
                              var  row=$('#dg_main1').datagrid('getSelected');
                              if(row)
                              {
                                     $.messager.prompt('ระบุรหัสผ่าน','กรุณาระบุรหัสผ่าน',function(r){
                                                 var   sess_us='<?=$this->session->userdata("sess_ps")?>';
                                                  if(r    ==  sess_us    )
                                                    {
                                                          // alert(sess_us);    
                                                          var  id=row.id_patient;
                                                          //alert(id);
                                                          //http://kkucleft.kku.ac.th/app_admin/index.php/welcome/del_main1
                                                          var  url ='<?=base_url()?>index.php/welcome/del_main1';
                                                          $.post(url,{ id:id },function(data){
                                                                 // alert(data);
                                                                  if( data == 1)
                                                                        {
                                                                             //----------- progressbar-------------
                                                                                var win=$.messager.progress({
                                                                                      title:'สถานะการลบข้อมูล',
                                                                                      msg:'ลบข้อมูลสำเร็จ',

                                                                                });
                                                                                setTimeout(function(){
                                                                                     $.messager.progress('close');
                                                                                },3000);
                                                                              //----------- progressbar-------------
                                                                             $('#dg_main1').datagrid('reload'); 
                                                                        }
                                                                        else{
                                                                            $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลล้มเหลว');
                                                                             $('#dg_main1').datagrid('reload'); 
                                                                        }
                                                                
                                                          },'json');
                                                          
                                                    }
                                                   else{
                                                      $.messager.alert('รหัสผ่านไม่ถูกต้อง','กรุณาระบุรหัสผ่านใหม่');
                                                   }
                                     });
                              }
                             "  class="easyui-linkbutton"  style=" width:100px;height:40px; "   iconCls="icon-cancel" > Delete  </a>            
                             
                </span>             
                  
                
                 <form id="fr_main1"   method="post"  enctype="multipart/form-data"  novalidate="novalidate" >
                             
                     <div style="padding:3px;"  >  
                         <span>ID :</span>
                        <input class="easyui-textbox"  name="txt_id_patient"  id="txt_id_patient"   readonly="true"   style="   width :50px;height:30px;" />
                     </div>
                     
                <div style="padding:3px;"  >         
                <span>  ชื่อผู้ป่วย - นามสกุลผู้ป่วย :</span> 
                <input class="easyui-textbox"  name="txt_name"  id="txt_name"  style="   width :150px;height:30px;" />
                -
                <input class="easyui-textbox"  name="txt_lastname"  id="txt_lastname"  style="  width :200px;height:30px;" />
                </div>
                     
                <div style="padding:3px;"  >         
                <span>  เลขบัตรประชาชน :</span> 
                <input class="easyui-textbox"  name="txt_id_card"  id="txt_id_card"  style=" width :100px;height:30px;" />
                 <span>  เบอร์โทรศัพท์ :</span> 
                 
                <input class="easyui-textbox"  name="txt_telephone"  id="txt_telephone"  style=" width :150px;height:30px;" />
                 <span>  เพศ :</span> 
                 
                 
                <input class="easyui-textbox"  name="txt_id_sex"  id="txt_id_sex"  style=" width :30px;  height:30px; " /> 
                
                
                <input  type="radio"    name="r_id_sex"    id="id_sex_m"  value="1"  /> ชาย
                
                 <input  type="radio"    name="r_id_sex"    id="id_sex_w"  value="2"  /> หญิง
                
                
                </div>
                     
                     
                <div style="padding:3px;"  >   
                           <span>  วัน-เดือน-ปี เกิด :</span> 
                           <input class="easyui-datebox"  name="txt_birthdate"  id="txt_birthdate"  style=" width :150px;  height:30px; "   />
                           
                </div>
                     
               
                <div style="padding:3px;"  >   
                           <span>  ที่อยู่ปัจจุบัน(ตามทะเบียนบ้าน) :</span> 
                           <input class="easyui-textbox"  name="txt_address"  id="txt_address"  style=" width :300px;  height:50px; "  multiline="true"  />
                           
                </div>
                     
                         <div style="padding:3px;"  >   
                           <span>  จังหวัดเกิด :</span> 
                           <!--
                           <input class="easyui-textbox"  name="txt_province_id"  id="txt_province_id"  style=" width :200px;  height:40px; "  multiline="true"  />
                           -->
                           
                           <input class="easyui-combobox"  name="cmb_province_id"  id="cmb_province_id"   data-options="  
                                  url:'<?=base_url()?>index.php/welcome/json_province',
                                  valueField:'PROVINCE_CODE',
                                  textField:'PROVINCE_NAME',
                                  "    style=" width :150px;  height:40px; "  />
                           
                </div>    
                     
                 
                     
               <div style="padding:3px;"  >   
                           <span>  ภาวะโรคร่วม :</span> 
                           <input class="easyui-textbox"  name="txt_diagnosis"  id="txt_diagnosis"  style=" width :400px;  height:40px; "  multiline="true"  />
                           
                </div>  
                     
                            <div style="padding:3px;"  >   
                           <span>  ระบุภาวะโรคร่วม อื่นๆ  :</span> 
                           <input class="easyui-textbox"  name="txt_detail_diagnosis"  id="txt_detail_diagnosis"  style=" width :400px;  height:40px; "  multiline="true"  />
                           
                </div>  
                 
            
       
                <div style="padding:3px;"  >   
                           <span>  ชื่อผู้ให้ข้อมูล  :</span> 
                           <input class="easyui-textbox"  name="txt_informative_name"  id="txt_informative_name"  style=" width :150px;  height:40px; "   />
                           
                </div>
                
                <div style="padding:3px;"  >   
                           <span>  นามสกุลผู้ให้ข้อมูล  :</span> 
                           <input class="easyui-textbox"  name="txt_informative_lastname"  id="txt_informative_lastname"  style=" width :200px;  height:40px; "   />
                           
                </div>
                     
                <div style="padding:3px;"  >   
                           <span>  เบอร์โทรศัพท์ผู้ให้ข้อมูล  :</span> 
                           <input class="easyui-textbox"  name="txt_informative_tel"  id="txt_informative_tel"  style=" width :200px;  height:40px; "   />
                           
                </div>
                
                     
                <div style="padding:3px;"  >   
                    
                    
                    <a  class="easyui-linkbutton"    href="javascript:void(0)"  onclick=" 
                        
                        $.messager.prompt('ระบุรหัสผ่าน','กรุณาระบุรหัสผ่าน',function(r){
                            
                              var   sess_us='<?=$this->session->userdata("sess_ps")?>';
                                  //alert(sess_us);         
                                       if(r ==  sess_us    )
                                           {
                                               
                            $('#fr_main1').form('submit',{
                                  url: '<?=base_url()?>index.php/welcome/update_patient',
                                  success:function(data)
                                   {
                                        if( data == 1)
                                        {
                                             //----------- progressbar-------------
                                                var win=$.messager.progress({
                                                      title:'สถานะการปรับปรุงข้อมูล',
                                                      msg:'ปรับปรุงข้อมูลสำเร็จ',

                                                });
                                                setTimeout(function(){
                                                     $.messager.progress('close');
                                                },3000);
                                              //----------- progressbar-------------
                                             $('#dg_main1').datagrid('reload'); 
                                        }
                                        else{
                                            $.messager.alert('สถานะการปรับปรุงข้อมูล','ปรับปรุงข้อมูลล้มเหลว');
                                             $('#dg_main1').datagrid('reload'); 
                                        }
                                       
                                   }
                                
                            });
                            

                                            }
                                             else{
                                                      $.messager.alert('รหัสผ่านไม่ถูกต้อง','กรุณาระบุรหัสผ่านใหม่');
                                                   }

                        });
                        
                        
                       
                               
                            
                        
                        "  iconCls="icon-edit"  style="width:100px;height:40px;"  >Update</a>
                        
                        
                    <a  class="easyui-linkbutton"    href="javascript:void(0)"  onclick=" 
                        
                                   //  txt_id_patient
                                   $('#txt_id_patient').textbox('setValue','');
                                   $('#txt_name').textbox('setValue','');
                                    $('#txt_lastname').textbox('setValue',''); 
                                    $('#txt_id_card').textbox('setValue',''); 
                                    $('#txt_telephone').textbox('setValue','');
                                    //txt_id_sex
                                    $('#txt_id_sex').textbox('setValue','');
                                   
                                    $('#id_sex_m').attr('checked',false);
                                    $('#id_sex_w').attr('checked',false);
                                   
                                      $('#txt_birthdate').textbox('setValue', '' );
                                     $('#txt_address').textbox('setValue', '' );
                                     
                                    // $('#txt_province_id').textbox('setValue', '' );
                                     //cmb_province_id
                                     $('#cmb_province_id').textbox('setValue', '' );
                                     
                                     
                                      $('#txt_diagnosis').textbox('setValue', '' );
                                      $('#txt_detail_diagnosis').textbox('setValue', '' );
                                       $('#txt_informative_name').textbox('setValue', '' );
                                      $('#txt_informative_lastname').textbox('setValue', '' );      
                                      $('#txt_informative_tel').textbox('setValue','' );
                                      
                        "  iconCls="icon-remove"  style="width:100px;height:40px;"  >Clear</a> 
                </div>   
                     
                 </form>
                
                
                
            </div>
            
            
       
    </body>
    
</html>    