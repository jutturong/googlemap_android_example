    <!DOCTYPE html>
    <html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?=$title?></title>


        <?=$this->load->view("import_")?>


      <script type="text/javascript">
           function format1()
           {
              //  return '<span style="color:red;"></span>'
              // return '<span style=color:red></span>';
           }
      </script>


        <script type="text/javascript">

              var toolbar= [


                       {
                        text: ' เรียกดูประวัติผู้ป่วย',
                        iconCls: 'icon-large-chart',

                        handler:function(){
                             //alert('t');
                               //openpt('เรียกดูประวัติผู้ป่วย');
                               var  row=$('#dg1').datagrid('getSelected');
                               if(row)
                               {
                                    //------ clar form ------------------
                                      $('#HN').textbox('setValue','');
                                      $('#DN').textbox('setValue','');
                                      $('#othnumber').textbox('setValue','');
                                       $('#CN').textbox('setValue','');
                                       //   $seriesnumber=trim($this->input->get_post("seriesnumber"));  //บัตรประชนชน  //6
                                       $('#seriesnumber').textbox('setValue','');

                                        //$firstname=trim($this->input->get_post("firstname"));  //ชื่อ  //7
                                          $('#firstname').textbox('setValue','');
                                        //$lastname=trim($this->input->get_post("lastname"));  //นามสกุล  //8
                                         $('#lastname').textbox('setValue','');

                                        //$birthdate=trim($this->input->get_post("birthdate"));  //วัน/เดือน/ปี เกิด :  09/14/2016 08:45:29      //10
                                          $('#birthdate').textbox('setValue','');

           //$address=trim($this->input->get_post("address"));  //ที่อยู่ :     //11
           $('#address').textbox('setValue','');

           //  $nationality=trim($this->input->get_post("nationality")); //สัญชาติ :    //12
            $('#nationality').textbox('setValue','');

            // $race=trim($this->input->get_post("race")); //เชื้อชาติ :    //13
            $('#race').textbox('setValue','');

             // $religion=trim($this->input->get_post("religion")); //ศาสนา :    //14
            $('#religion').textbox('setValue','');

            // $namefather=trim($this->input->get_post('namefather')); //ชื่อบิดา    //15
           $('#namefather').textbox('setValue','');

           //  $fatherlastname=trim($this->input->get_post("fatherlastname")); //บิดา - นามสกุล :   //16
          $('#fatherlastname').textbox('setValue','');

            //  $career=trim($this->input->get_post("career")); //อาชีพ :   //17
           $('#career').textbox('setValue','');

           //   $birthdatefahter=trim($this->input->get_post("birthdatefahter"));  //วัน/เดือน/ปี เกิด : บิดา
               $('#birthdatefahter').textbox('setValue','');

             //    $age1=trim($this->input->get_post("age1")); //อายุบิดา   //19
              $('#age1').textbox('setValue','');

            //  $disease=trim($this->input->get_post("disease"));  //โรคประจำตัวบิดา :    //20
            //echo "<br>";
              $('#disease').textbox('setValue','');


           //   $mothername=trim($this->input->get_post("mothername"));  //ชื่อมารดา    //21
            //echo "<br>";
              $('#mothername').textbox('setValue','');

           //  $motherlastname=trim($this->input->get_post("motherlastname"));  // - นามสกุล   //22
            //echo "<br>";
             $('#motherlastname').textbox('setValue','');

          //   $mothercareer =trim($this->input->get_post("mothercareer")); //อาชีพ : มารดา  //23
            //echo "<br>";
               $('#mothercareer').textbox('setValue','');

           //   $birthdatemother=trim($this->input->get_post('birthdatemother')); // //วัน/เดือน/ปี เกิด : มารดา
            //echo "<br>";
               $('#birthdatemother').textbox('setValue','');


                 //   $age2=trim($this->input->get_post("age2")); //อายุมารดา    //25
               $('#age2').textbox('setValue','');


            //  $diseasemother=trim($this->input->get_post("diseasemother"));  //โรคประจำตัวมารดา :    //26
            $('#diseasemother').textbox('setValue','');


              // $spousename=trim($this->input->get_post("spousename"));  //ชื่อ สามี/ภรรยา - นามสกุล :    //27
            $('#spousename').textbox('setValue','');

             // $spouselastname=trim($this->input->get_post("spouselastname"));   //ชื่อ  นามสกุล :    //28
               $('#spouselastname').textbox('setValue','');

            //  $benefits=trim($this->input->get_post('benefits'));  //สวัสดิการการรักษา   //29
              $('#benefits').textbox('setValue','');

           //   $otherbenefits=trim($this->input->get_post("otherbenefits"));  //สวัสดิการการรักษา  อื่นๆ    //30
              $('#otherbenefits').textbox('setValue','');

             // $numberbenefits=trim($this->input->get_post("numberbenefits"));    //หมายเลข :   //31
               $('#numberbenefits').textbox('setValue','');

             //  $evertreat=trim($this->input->get_post('evertreat'));     // เคยได้รับการรักษามาก่อน :   1=ไม่ทราบ   2=ไม่เคย  3=เคย ระบุ      //32
              $('#evertreat').textbox('setValue','');

             //  $otherevertreat=trim($this->input->get_post("otherevertreat"));   //เคย ระบุ    //33
               $('#otherevertreat').textbox('setValue','');

               //$treatmentfacility=trim($this->input->get_post('treatmentfacility'));   // สถานที่ที่ได้รับการรักษามาก่อน :     //34
               $('#treatmentfacility').textbox('setValue','');

             //  $doctor=trim($this->input->get_post("doctor"));  // แพทย์เจ้าของคนไข้ :      //35
                $('#doctor').textbox('setValue','');


                                     //------ clar form ------------------
                                     id=row.id_history_patient;

                                     // alert(id);
                                       //  //openpt('เรียกดูประวัติผู้ป่วย');
                                       //-------------------------------------------------
                                       /*
                                                                                function openpt(title) //ฟอร์มบันทึก ประวัติผู้ป่วย
                                                   {
                                                       $(function()
                                                       {
                                                             //alert('t');
                                                             $("#dia1").dialog({
                                                                // title:"เพิ่มข้อมูลประวัติของผู้ป่วย",
                                                                 title: title ,
                                                                 width:600,
                                                                 height:550,
                                                                 closed:false,
                                                                 cache:false,

                                                                 modal:true,

                                                             });
                                                       });
                                                   }
                                        */
                                       //-----------------------------------------------------
                                       $("#dia1_view").dialog({
                                                                 title:"เรียกดูประวัติของผู้ป่วย",
                                                               //  title: title ,
                                                                 width:600,
                                                                 height:550,
                                                                 closed:false,
                                                                 cache:false,

                                                                 modal:true,

                                                             });


                                                             //------------ แสดงการบันทึกข้อมูล-------------------
                                                             if( id > 0 )
                                                             {


                                                                   /*
                                                                   var  url='<?=base_url()?>index.php/welcome/call_history_patient/' + id;
                                                                   $.post(url,{ id_history_patient:id },function(data)
                                                                      {
                                                                             //alert(data);
                                                                              $.each(data,function(index,key)
                                                                                {

                                                                                        var  HN=key.HN;
                                                                                        // alert( HN );
                                                                                        //    fr_view_patient
                                                                                       //HN_view
                                                                                       $('#HN_view').textbox('setValue',HN);
                                                                                     //  var  DN=key.DN

                                                                                });


                                                                      },'json');
                                                                  */
                                                                   //  alert(id);
                                                                    view_patient(id);

                                                             }


                               }
                        }

                    }
                    ,
                    {
                        text:' Diagnosis ',
                        iconCls:' icon-print  ',
                        handler:function(data)
                        {
                            //alert('t');
                               var  row=   $('#dg1').datagrid('getSelected');    //productid
                                if( row )
                                {
                                      var  id=row.id_history_patient;
                                      var  	firstname=row.firstname;
                                      var    lastname=row.lastname;
                                     //  alert(id);
                                      // $('#diag1').window('open');
                                    //  showpopup1();
                                     //  showpopup1();
                                      // id="id_history_patient"

                                       $('#id_history_patient_diag').textbox('setValue','');

                                      $('#diag1').window('open');  //file-> fr_diagnosis.php
                                      $('#id_history_patient_diag').textbox('setValue',id);
                                      $('#name_lastname_diag').textbox('setValue',firstname+'  '+lastname);


                                       $('#grid_diagnosis').datagrid(  {   url:'<?=base_url()?>index.php/welcome/json_tb2/' +   id   }  );

                                     // btnclr();

                                 }
                        }
                    },

                    {
                        text:' Treatment ',
                       iconCls:'icon-add',
                       handler:function(data)
                        {
                            //alert('t');
                            var  row=   $('#dg1').datagrid('getSelected');    //productid
                            if( row )
                             {
                                    //alert(row);
                                    var  id=row.id_history_patient;
                                    var   firstname=row.firstname;
                                    var    lastname=row.lastname;

                                     var  br=row.birthdate;
                                      //alert(birthdate);
                                       var ex1=br.split("-");
                                       //alert(ex1[0]);

                                       var  d=new Date();
                                       var  n=d.getFullYear();
                                      // alert(n);

                                      // alert(ex1[1]);  //ระบุเดือน เกิด

                                       //-------------- clear textbox-----------
                                       $('#age1_fr1').textbox('setValue', '' ); //อายุเป็นเดือน
                                       $('#age2_fr1').textbox('setValue','' );

                                       //--------- คำนวณอายุ-------------------
                                       if(  n >=  ex1[0]   &&  ex1[0] > 0  )
                                       {
                                            var  calage= n - ex1[0];
                                           // alert(  calage );

                                           //----------- fr1------------------------------------------
                                        //   $('#age1_fr1').textbox('setValue',calage);
                                       //    $('#age2_fr1').textbox('setValue',calage);

                                                // $('#y_fr1').textbox('setValue',ex1[0]); //ของเดิมคือส่ง ปีเกิด
                                                 $('#y_fr1').textbox('setValue',ex1[1]); //ของเดิมคือส่ง เดือน

                                            //<input class="easyui-textbox"  id="y_fr1"   name="y_fr1"  style="width:50px;height: 30px;"  readonly="true"  />



                                           //------------ fr4-----------------------------------------
                                          // $('#age1_fr4').textbox('setValue',calage);
                                         //  $('#age2_fr4').textbox('setValue',calage);   91  5122
                                          //<input class="easyui-textbox"  id="y_fr4"   name="y_fr4"  style="width:50px;height: 30px;"  readonly="true"  />   5192
                                             $('#y_fr4').textbox('setValue',ex1[0]);  //5198

                                           //-------------fr6-----------------------------------------
                                           // $('#age1_fr6').textbox('setValue',calage);
                                          //  <input class="easyui-textbox"  id="y_fr6"   name="y_fr6"  style="width:50px;height: 30px;"  readonly="true"  />  4428
                                          //121
                                          //4432
                                           $('#y_fr6').textbox('setValue',ex1[0]);  //4432
                                           $('#y_fr6_2').textbox('setValue',ex1[0]);  //4432
                                           $('#y_fr6_3').textbox('setValue',ex1[0]);  //4432

                                            //-------------fr7-----------------------------------------
                                         //   $('#age1_fr7').textbox('setValue',calage);
                                         //   $('#age2_fr7').textbox('setValue',calage);
                                             //<input class="easyui-textbox"  id="y_fr7"   name="y_fr7"  style="width:50px;height: 30px;"  readonly="true"  />  //3575
                                             $('#y_fr7').textbox('setValue',ex1[0]);   //3575

                                              //-------------fr8-----------------------------------------
                                          //  $('#age1_fr8').textbox('setValue',calage);
                                          //  $('#age2_fr8').textbox('setValue',calage);
                                            $('#y_fr8').textbox('setValue',ex1[0]);   //3575
                                             //<input class="easyui-textbox"  id="y_fr8"   name="y_fr8"  style="width:50px;height: 30px;"  readonly="true"  />  //3575

                                             //-------------fr9-----------------------------------------
                                        //    $('#age1_fr9').textbox('setValue',calage);
                                         //   $('#age1_fr9_2').textbox('setValue',calage);
                                       //     $('#age2_fr9_2').textbox('setValue',calage);
                                               $('#y_fr9').textbox('setValue',ex1[0]);   //3575
                                             //<input class="easyui-textbox"  id="y_fr9"   name="y_fr9"  style="width:50px;height: 30px;"  readonly="true"  />  //3575
                                               $('#y_fr9_2').textbox('setValue',ex1[0]);   //3575
                                             //<input class="easyui-textbox"  id="y_fr9_2"   name="y_fr9_2"  style="width:50px;height: 30px;"  readonly="true"  />

                                             //-------------fr10-----------------------------------------
                                         //    $('#age1_fr10_1').textbox('setValue',calage);
                                         //    $('#age1_fr10_2').textbox('setValue',calage);
                                         //age1_fr10_1
                                          $('#y_fr10_1').textbox('setValue',ex1[0]);   //3575
                                          //<input class="easyui-textbox"  id="y_fr10_1"   name="y_fr10_1"  style="width:50px;height: 30px;"  readonly="true"  />

                                          //<input class="easyui-textbox"  id="id_history_patient_fr10_2"   name="id_history_patient_fr10_2"  style="width:30px;height: 30px;"  readonly="true"  />
                                          $('#y_fr10_2').textbox('setValue',ex1[0]);
                                         //<input class="easyui-textbox"  id="y_fr10_1"   name="y_fr10_1"  style="width:50px;height: 30px;"  readonly="true"  />


                                          $('#y_fr10_3').textbox('setValue',ex1[0]);
                                         //<input class="easyui-textbox"  id="y_fr10_3"   name="y_fr10_3"  style="width:50px;height: 30px;"  readonly="true"  />


                                           // id="id_history_patient_fr10_4"
                                          $('#y_fr10_4').textbox('setValue',ex1[0]);
                                         //<input class="easyui-textbox"  id="y_fr10_4"   name="y_fr10_4"  style="width:50px;height: 30px;"  readonly="true"  />


                                           //id="id_history_patient_fr10_5"
                                           $('#y_fr10_5').textbox('setValue',ex1[0]);
                                        //<input class="easyui-textbox"  id="y_fr10_5"   name="y_fr10_5"  style="width:50px;height: 30px;"  readonly="true"  />


                                        // id="id_history_patient_fr10_6"
                                         $('#y_fr10_6').textbox('setValue',ex1[0]);
                                        //<input class="easyui-textbox"  id="y_fr10_6"   name="y_fr10_6"  style="width:50px;height: 30px;"  readonly="true"  />





                                            //-------------fr1-----------------------------------------
                                            // $('#age1_fr11_1').textbox('setValue',calage);
                                            // $('#age1_fr11_2').textbox('setValue',calage);


                                         //id="id_history_patient_fr11_1"
                                         $('#y_fr11_1').textbox('setValue',ex1[0]);
                                         //<input class="easyui-textbox"  id="y_fr11_1"   name="y_fr11_1"  style="width:50px;height: 30px;"  readonly="true"  />


                                          $('#y_fr11_2').textbox('setValue',ex1[0]);
                                         //<input class="easyui-textbox"  id="y_fr11_2"   name="y_fr11_2"  style="width:50px;height: 30px;"  readonly="true"  />



                                       }

                                  //-----1. Pre-surgical orthopedics therapy (PSOT)---------
                                      $('#id_history_patient').textbox('setValue',id);
                                      $('#name_lastname').textbox('setValue',firstname+'  '+lastname);



                                 //--------6. Interceptive orthodontic treatment -------------
                                      $('#id_history_patient_fr4').textbox('setValue',id);
                                      $('#name_lastname_fr4').textbox('setValue',firstname+'  '+lastname);

                                     $('#id_history_patient_fr6').textbox('setValue',id);
                                      $('#name_lastname_fr6').textbox('setValue',firstname+'  '+lastname);


                                      $('#id_history_patient_fr6_2').textbox('setValue',id);
                                      $('#name_lastname_fr6_2').textbox('setValue',firstname+'  '+lastname);


                                      $('#id_history_patient_fr6_3').textbox('setValue',id);
                                      $('#name_lastname_fr6_3').textbox('setValue',firstname+'  '+lastname);

                                             //-------- 7. Growth modification t -------------
                                      $('#id_history_patient_fr7').textbox('setValue',id);
                                      $('#name_lastname_fr7').textbox('setValue',firstname+'  '+lastname);

                                     $('#id_history_patient_fr7').textbox('setValue',id);
                                      $('#name_lastname_fr7').textbox('setValue',firstname+'  '+lastname);

                                      //--------8. Corrective Orthodontic Treatment -----------
                                      $('#id_history_patient_fr8').textbox('setValue',id);
                                      $('#name_lastname_fr8').textbox('setValue',firstname+'  '+lastname);

                                     $('#id_history_patient_fr8').textbox('setValue',id);
                                      $('#name_lastname_fr8').textbox('setValue',firstname+'  '+lastname);

                                                //--------9. Orthognathic surgery -----------
                                      $('#id_history_patient_fr9').textbox('setValue',id);
                                      $('#name_lastname_fr9').textbox('setValue',firstname+'  '+lastname);

                                     $('#id_history_patient_fr9').textbox('setValue',id);
                                      $('#name_lastname_fr9').textbox('setValue',firstname+'  '+lastname);

                                      //--------9. Orthognathic surgery ---Distraction--------
                                      $('#id_history_patient_fr9_2').textbox('setValue',id);
                                      $('#name_lastname_fr9_2').textbox('setValue',firstname+'  '+lastname);

                                     $('#id_history_patient_fr9_2').textbox('setValue',id);
                                      $('#name_lastname_fr9_2').textbox('setValue',firstname+'  '+lastname);

                                      //-------------10. Other surgery ----------------------------------
                                       $('#id_history_patient_fr10_1').textbox('setValue',id);
                                      $('#name_lastname_fr10_1').textbox('setValue',firstname+'  '+lastname);

                                     $('#id_history_patient_fr10_1').textbox('setValue',id);
                                      $('#name_lastname_fr10_1').textbox('setValue',firstname+'  '+lastname);
                                      //----------
                                      $('#id_history_patient_fr10_2').textbox('setValue',id);
                                      $('#name_lastname_fr10_2').textbox('setValue',firstname+'  '+lastname);

                                     $('#id_history_patient_fr10_2').textbox('setValue',id);
                                      $('#name_lastname_fr10_2').textbox('setValue',firstname+'  '+lastname);
                                      //-----------
                                      $('#id_history_patient_fr10_3').textbox('setValue',id);
                                      $('#name_lastname_fr10_3').textbox('setValue',firstname+'  '+lastname);

                                     $('#id_history_patient_fr10_3').textbox('setValue',id);
                                      $('#name_lastname_fr10_3').textbox('setValue',firstname+'  '+lastname);
                                      //---------------
                                      $('#id_history_patient_fr10_4').textbox('setValue',id);
                                      $('#name_lastname_fr10_4').textbox('setValue',firstname+'  '+lastname);

                                     $('#id_history_patient_fr10_4').textbox('setValue',id);
                                      $('#name_lastname_fr10_4').textbox('setValue',firstname+'  '+lastname);
                                      //-----------------
                                      $('#id_history_patient_fr10_5').textbox('setValue',id);
                                      $('#name_lastname_fr10_5').textbox('setValue',firstname+'  '+lastname);

                                     $('#id_history_patient_fr10_5').textbox('setValue',id);
                                      $('#name_lastname_fr10_5').textbox('setValue',firstname+'  '+lastname);
                                      //-------------------
                                      $('#id_history_patient_fr10_6').textbox('setValue',id);
                                      $('#name_lastname_fr10_6').textbox('setValue',firstname+'  '+lastname);

                                     $('#id_history_patient_fr10_6').textbox('setValue',id);
                                      $('#name_lastname_fr10_6').textbox('setValue',firstname+'  '+lastname);





                                         //--------11. Other dental procedure -------
                                      $('#id_history_patient_fr11_1').textbox('setValue',id);
                                      $('#name_lastname_fr11_1').textbox('setValue',firstname+'  '+lastname);

                                     $('#id_history_patient_fr11_1').textbox('setValue',id);
                                      $('#name_lastname_fr11_1').textbox('setValue',firstname+'  '+lastname);

                                        //--------11. Other dental procedure  Prosthodontic Treatment-------
                                      $('#id_history_patient_fr11_2').textbox('setValue',id);
                                      $('#name_lastname_fr11_2').textbox('setValue',firstname+'  '+lastname);

                                     $('#id_history_patient_fr11_2').textbox('setValue',id);
                                      $('#name_lastname_fr11_2').textbox('setValue',firstname+'  '+lastname);

                                      //-------------- วัน-เดือน-ปี เกิด-------------------



                                   //  showpopup2(id);

                                      $('#diag3').dialog('open');
                                      $('#id_main').textbox('setValue',id);
                                     // $('#dg_view_fr1').datagrid('reload');
                                     $('#dg_view_fr1').datagrid({  url:'<?=base_url()?>index.php/welcome/showjson_fr1/' + id  });
                                     $('#dg_view_fr4').datagrid({  url:'<?=base_url()?>index.php/welcome/showjson_fr4/' + id  });
                                     $('#dg_view_fr6').datagrid({  url:'<?=base_url()?>index.php/welcome/showjson_fr6/' + id  });
                                     $('#dg_view_fr7').datagrid({  url:'<?=base_url()?>index.php/welcome/showjson_fr7/' + id  });
                                     $('#dg_view_fr8').datagrid({  url:'<?=base_url()?>index.php/welcome/showjson_fr8/' + id  });
                                     $('#dg_view_fr9_1').datagrid({  url:'<?=base_url()?>index.php/welcome/showjson_fr9/' + id  });
                                    $('#dg_view_fr9_2').datagrid({  url:'<?=base_url()?>index.php/welcome/showjson_fr9_2/' + id  });
                                   $('#dg_view_fr10_1').datagrid({  url:'<?=base_url()?>index.php/welcome/showjson_fr10_1/' + id  });


                                   //-------------- checkbox treatment------------------
                                   var  url='<?=base_url()?>index.php/welcome/check_treatment';
                                   var  f =  "id_history_patient";


                                 /*
                                  // $tb="tb_psot";
                                  // "id_history_patient"
                                   $.post('<?=base_url()?>index.php/welcome/check_treatment_fr1',{  id:id  },function(data)
                                     {
                                           $.each(data,function(i,k)
                                            {
                                                  //alert(i + ""  + k);
                                                  var  num=k;
                                                  if( k > 0 )
                                                  {
                                                       //$('#ck_fr1').attr('checked',true);
                                                       $('#ck_fr1').linkbutton({ iconCls:'icon-ok' });
                                                       // data-options="iconCls:'icon-large-picture'  "
                                                  }
                                                  else{
                                                       $('#ck_fr1').linkbutton({ iconCls:'icon-large-picture' });
                                                  }
                                            });
                                     },'json');
                                 */





                                 //   var   tb9="tb_corrective";
                                 //    var  tb10="tb_othersurgery";

                                    /*
                                     #http://127.0.0.1/dental/index.php/welcome/check_treatment
                 $tb=$this->input->get_post("tb");
              $id=$this->input->get_post("id");
              $f=$this->input->get_post("f");
                                     */

                                      var url='<?=base_url()?>index.php/welcome/check_treatment';

                                      //---------------1---------------------
                                     $.post(url,{ tb:'tb_psot' ,  id:id   , f:'id_history_patient'  },function(data)
                                      {

                                           $.each(data,function(i,k)
                                            {
                                                  //alert(i + ""  + k);
                                                  var  num=k;
                                                  if( k > 0 )
                                                  {
                                                       //$('#ck_fr1').attr('checked',true);
                                                       $('#ck_fr1').linkbutton({ iconCls:'icon-ok' });
                                                       // data-options="iconCls:'icon-large-picture'  "
                                                  }
                                                  else{
                                                       $('#ck_fr1').linkbutton({ iconCls:'icon-large-picture' });
                                                  }

                                              });

                                      } ,'json');


                                       //  var   tb4="tb_interceptive";
                                      //-----------------4---------------------------
                                      //  $tbj1="tb_interceptive";
                                       $.post(url,{ tb:'tb_interceptive' ,  id:id   , f:'id_history_patient'  },function(data)
                                      {
                                           $.each(data,function(i,k)
                                            {
                                                  //alert(i + ""  + k);
                                                  var  num=k;
                                                  if( k > 0 )
                                                  {
                                                       //$('#ck_fr1').attr('checked',true);
                                                       $('#ck_fr4').linkbutton({ iconCls:'icon-ok' });
                                                       // data-options="iconCls:'icon-large-picture'  "
                                                  }
                                                  else{
                                                       $('#ck_fr4').linkbutton({ iconCls:'icon-large-picture' });
                                                  }

                                              });
                                      } ,'json');


                                    //  var tb6="tb_othersurgery";  //$tb="tb_othersurgery";
                                    //    $tb="tb_bonegraft";
                                    //-----------------5---------------------------
                                     //  $.post(url,{ tb:'tb_interceptive' ,  id:id   , f:'id_history_patient'  },function(data)
                                       $.post(url,{ tb:'tb_bonegraft' ,  id:id   , f:'id_history_patient'  },function(data)
                                      {

                                           $.each(data,function(i,k)
                                            {
                                                  //alert(i + ""  + k);
                                                  var  num=k;
                                                  if( k > 0 )
                                                  {
                                                       //$('#ck_fr1').attr('checked',true);
                                                       $('#ck_fr5').linkbutton({ iconCls:'icon-ok' });
                                                       // data-options="iconCls:'icon-large-picture'  "
                                                  }
                                                  else{
                                                       $('#ck_fr5').linkbutton({ iconCls:'icon-large-picture' });
                                                  }

                                              });

                                      } ,'json');


                                     //   //   var  tb7="tb_growth";
                                    //-----------------6---------------------------
                                       $.post(url,{ tb:'tb_growth' ,  id:id   , f:'id_history_patient'  },function(data)
                                      {

                                           $.each(data,function(i,k)
                                            {
                                                  //alert(i + ""  + k);
                                                  var  num=k;
                                                  if( k > 0 )
                                                  {
                                                       //$('#ck_fr1').attr('checked',true);
                                                       $('#ck_fr6').linkbutton({ iconCls:'icon-ok' });
                                                       // data-options="iconCls:'icon-large-picture'  "
                                                  }
                                                  else{
                                                       $('#ck_fr6').linkbutton({ iconCls:'icon-large-picture' });
                                                  }

                                              });

                                      } ,'json');


                                   //   $tb="tb_growth";   //7. Growth modification
                                    //-----------------7--------------------------
                                       $.post(url,{ tb:'tb_growth' ,  id:id   , f:'id_history_patient'  },function(data)
                                      {

                                           $.each(data,function(i,k)
                                            {
                                                  //alert(i + ""  + k);
                                                  var  num=k;
                                                  if( k > 0 )
                                                  {
                                                       //$('#ck_fr1').attr('checked',true);
                                                       $('#ck_fr7').linkbutton({ iconCls:'icon-ok' });
                                                       // data-options="iconCls:'icon-large-picture'  "
                                                  }
                                                  else{
                                                       $('#ck_fr7').linkbutton({ iconCls:'icon-large-picture' });
                                                  }

                                              });

                                      } ,'json');

                                    //   var   tb8="tb_corrective";
                                    //    $tb="tb_orthognathic";
                                    //-----------------7--------------------------
                                     //  $.post(url,{ tb:'tb_corrective' ,  id:id   , f:'id_history_patient'  },function(data)
                                           $.post(url,{ tb:'tb_orthognathic' ,  id:id   , f:'id_history_patient'  },function(data)
                                      {

                                           $.each(data,function(i,k)
                                            {
                                                  //alert(i + ""  + k);
                                                  var  num=k;
                                                  if( k > 0 )
                                                  {
                                                       //$('#ck_fr1').attr('checked',true);
                                                       $('#ck_fr8').linkbutton({ iconCls:'icon-ok' });
                                                       // data-options="iconCls:'icon-large-picture'  "
                                                  }
                                                  else{
                                                       $('#ck_fr8').linkbutton({ iconCls:'icon-large-picture' });
                                                  }

                                              });

                                      } ,'json');


                                 //-------------9   $tb="tb_othersurgery";
                                 // $tb="tb_othersurgery";
                                     $.post(url,{ tb:'tb_othersurgery' ,  id:id   , f:'id_history_patient'  },function(data)
                                      {

                                           $.each(data,function(i,k)
                                            {
                                                  //alert(i + ""  + k);
                                                  var  num=k;
                                                  if( k > 0 )
                                                  {
                                                       //$('#ck_fr1').attr('checked',true);
                                                       $('#ck_fr9').linkbutton({ iconCls:'icon-ok' });
                                                       // data-options="iconCls:'icon-large-picture'  "
                                                  }
                                                  else{
                                                       $('#ck_fr9').linkbutton({ iconCls:'icon-large-picture' });
                                                  }

                                              });

                                      } ,'json');


                                  //------------10.1 $tb="tb_dentalprocedure";
                                  // $tb="tb_dentalprocedure";
                                 //  $.post(url,{ tb:'tb_dentalprocedure' ,  id:id   , f:'id_history_patient'  },function(data)
                                    $.post(url,{ tb:'tb_dentalprocedure' ,  id:id   , f:'id_history_patient'  },function(data)
                                      {

                                           $.each(data,function(i,k)
                                            {
                                                  //alert(i + ""  + k);
                                                  var  num=k;
                                                  if( k > 0 )
                                                  {
                                                       //$('#ck_fr1').attr('checked',true);
                                                       $('#ck_fr10').linkbutton({ iconCls:'icon-ok' });
                                                       // data-options="iconCls:'icon-large-picture'  "
                                                  }
                                                  else{
                                                       $('#ck_fr10').linkbutton({ iconCls:'icon-large-picture' });
                                                  }

                                              });

                                      } ,'json');
                                  //-------------10.2  $tb="tb_prosthodontic";
                                  //$tb="tb_prosthodontic";
                                  /*
                                               $.post(url,{ tb:'tb_prosthodontic' ,  id:id   , f:'id_history_patient'  },function(data)
                                      {

                                           $.each(data,function(i,k)
                                            {
                                                  //alert(i + ""  + k);
                                                  var  num=k;
                                                  if( k > 0 )
                                                  {
                                                       //$('#ck_fr1').attr('checked',true);
                                                       $('#ck_fr10').linkbutton({ iconCls:'icon-ok' });
                                                       // data-options="iconCls:'icon-large-picture'  "
                                                  }
                                                  else{
                                                       $('#ck_fr10').linkbutton({ iconCls:'icon-large-picture' });
                                                  }

                                              });

                                      } ,'json');
                                   */

                                      //-------------- diagnosis ให้ปรากฏ ที่ form 5--------------------
                                      //result_analysis_fr6
                                      var url_diag='<?=base_url()?>index.php/welcome/fr_diagnosis';

                                      $.post(url_diag,{  id: id },function(data)
                                      {
                                           //alert(data);
                                              $.each(data,function(i,k)
                                                {
                                                      // alert(k.result_analysis);
                                                      $('#result_analysis_fr6').textbox('setValue',k.result_analysis);


                                                       $('#result_analysis_fr6_2').textbox('setValue',k.result_analysis);


                                                        $('#result_analysis_fr6_3').textbox('setValue',k.result_analysis);


                                                });
                                      },'json');

                                     //  $('#result_analysis_fr6').textbox('setValue','test');




                               }

                        }

                    },



                    /*
                    {
                           text:' เพิ่มประวัติผู้ป่วย ',
                           iconCls:' icon-man ',
                           handler:function(){
                                 //alert('t');
                                 openpt('เพิ่มประวัติผุ้ป่วย');
                           }
                    },
                    */


/*
                    {
                        text:' แก้ไขประวัติผู้ป่วย ',
                        iconCls:'icon-edit',
                        handler:function()
                        {
                            var  row =  $('#dg1').datagrid('getSelected');
                            if( row )
                            {
                                  //alert('t');
                            }
                        }
                    },
  */


                    {
                        text:'Reload',
                        iconCls:'icon-reload',
                        handler:function()
                        {
                           // $('#dg1').datagrid('reload');
                              $('#dg1').datagrid({url:'<?=base_url()?>index.php/welcome/json_tb1/'});
                        }
                    }
                    ,
                    {
                        text:'Delete',
                        iconCls:'icon-remove',
                        handler:function(){
                            //alert('t');
                            var  row=$('#dg1').datagrid('getSelected');
                            if( row )
                            {
                                //alert('t');
                                var  id=row.id_history_patient;
                                //alert(id);
                                if( id > 0 )
                                {

                                         $.messager.confirm("ต้องการลบข้อมูล","คุณต้องการลบข้อมูลหรือไม่", function(r)
                                            {


                                    var  url="<?=base_url()?>index.php/welcome/delete_tb1/" +  id ;
                                      $.post(url,function(result){
                                           // alert(result);
                                            if( result == 1  )
                                            {
                                                //dia1
                                                //dg1
                                                   //$('#dg1').datagrid('reload');
                                                   $('#dg1').datagrid('reload');
                                                $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลสำเร็จ');

                                            }
                                            else if( result == 0 )
                                            {
                                                  //$('#dg1').datagrid('reload');
                                                  $('#dg1').datagrid('reload');
                                                 $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลผิดพลาด');

                                            }
                                      });



                                            });

                                }
                            }
                        }
                    }
                    ,

                    {
                         text:'Export Excel',
                         iconCls:'icon-large-picture',
                         handler:function()
                         {
                                // var  link1=$('#txt_main').textbox('getValue');
                              //   alert(link1);
                               var  id_doctor=$('#link_export').textbox('getValue');

                               //http://127.0.0.1/dental/index.php/welcome/checklogin#

                                // window.open(url,{ doctor:link_export });
                              //  open(   url , { doctor: doctor });
                                //fr_export
                                // http://127.0.0.1/dental/index.php/welcome/json_patient_ex
                               //var   url='<?=base_url()?>index.php/welcome/json_patient_ex/'  + doctor ;

                              // window.open(url);



                              if(  id_doctor > 0 )
                              {
                                  //alert(id_doctor);
                                   url='<?=base_url()?>index.php/welcome/json_patient_ex/'  + id_doctor ;
                                   window.open(url);
                              }


                         }

                    }


                                 ]
        </script>


        <!--  js for search HN -->
        <script type="text/javascript">
            /*
             $(function()
             {
                //alert("t");
                 $("#HN_main").combogrid({
                     panelWidth:500,
                     url: '<?=base_url()?>index.php/welcome/callHN',
                     idField:'HN',
                     textField:'HN',
                     mode:'remote',
                     fitColumns:true,
                     columns:[[
			{field:'HN',title:'HN',width:60},
			{field:'Name',title:'ชื่อ',width:60},
                                                {field:'Surname',title:'นามสกุล',width:60},
		   ]]
                 });
                   $("#HN_main").combogrid({
                       onSelect:function(index,row)
                       {
                            //alert(row.Name);
                             $("#Name").textbox(
                                     {
                                         value : row.Name,
                                          iconCls:"icon-man",
                                           iconAlign:"right",
                                           readonly:"true",
                                     })
                             $("#Surname").textbox(
                                     {
                                         value : row.Surname,
                                         iconCls:"icon-man",
                                          iconAlign:"right",
                                           readonly:"true",
                                     })
                              $("#BirthDate").textbox(
                                      {
                                          value : row.BirthDate,
                                          iconCls:"icon-man",
                                            iconAlign:"right",
                                             readonly:"true",
                                     })
                        }
                   });

             });
             */
        </script>
        <!--  js for search HN -->




        <script type="text/javascript">
            function openpt(title) //ฟอร์มบันทึก ประวัติผู้ป่วย
            {
                $(function()
                {
                      //----- clear form --------



                      $("#dia1").dialog({
                         // title:"เพิ่มข้อมูลประวัติของผู้ป่วย",
                          title: title ,
                          width:600,
                          height:550,
                          closed:false,
                          cache:false,

                          modal:true,

                      });
                });
            }



        </script>


        <script type="text/javascript">
        function  showpopup1() //สำหรับแสดง  dialog1
        {
            $(function(){
                //$.messager.alert('Info','','info');
                    $('#diag1').window('open');  //file-> fr_diagnosis.php

            });
        }
        function  showpopup2() //สำหรับแสดง dialog2  ที่เพิ่มมาใหม่
        {
            $(function(){
                  // $('#diag2').window('open');
                    $('#diag3').dialog('open');
            });
        }

        </script>

         <script type="text/javascript">
            //-- คำนวณอายุของบิดา --
             $(function(){
                 $('#calYear1').bind('click',function(){

                       var  strdate=$('#birthdatefahter').datebox('getValue')
                       var  date1=strdate.split(" ");
                        //alert( date1[0]  );
                          var  bdyear=date1[0].split("/");
                        //   alert( bdyear[2] );  //ปีเกิดปัจจุบัน
                        var   d=new Date();
                        var  curyear=d.getFullYear();
                       // alert( curyear  ); //ปี พศ ปัจจุบัน
                       if(   curyear  >=  bdyear[2]   )
                       {
                             var  c= curyear  -  bdyear[2];
                             //alert( showAge );
                             $('#age1').textbox('setValue',c);
                       }


                 });
             });


                   //-- คำนวณอายุของมารดา --
             $(function(){
                 $('#calYear2').bind('click',function(){

                       var  strdate=$('#birthdatemother').datebox('getValue')
                       var  date1=strdate.split(" ");
                        //alert( date1[0]  );
                          var  bdyear=date1[0].split("/");
                        //   alert( bdyear[2] );  //ปีเกิดปัจจุบัน
                        var   d=new Date();
                        var  curyear=d.getFullYear();
                       // alert( curyear  ); //ปี พศ ปัจจุบัน
                       if(   curyear  >=  bdyear[2]   )
                       {
                             var  c= curyear  -  bdyear[2];
                             //alert( showAge );
                             $('#age2').textbox('setValue',c);
                       }


                 });
             });


             //-----ระบุการรักษามาก่อน


         </script>

         <script type="text/javascript" >
              //evertreat3
              //เคยได้รับการรักษามาก่อน : v
              $(function(){
                       $('#evertreat1').bind('click',function(){
                            //alert('t');
                            $('#otherevertreat').textbox('readonly',true);
                            $('#otherevertreat').textbox('setValue',"");
                      });

                          $('#evertreat2').bind('click',function(){
                            //alert('t');
                            $('#otherevertreat').textbox('readonly',true);
                            $('#otherevertreat').textbox('setValue',"");
                      });

                      $('#evertreat3').bind('click',function(){
                            //alert('t');
                            $('#otherevertreat').textbox('readonly',false);
                           // $('#otherevertreat').textbox('setValue',"ระบุ  เคยได้รับการรักษามาก่อน ");
                      });

              });
         </script>

        <script type="text/javascript" >
            //ระดับพัฒนาการผู้ป่วย :
            $(function(){
                  /*
                   developmentallevel1

otherdevelopmentallevel
                   */

                     $('#developmentallevel1').bind('click',function()
                     {
                           //alert('1');
                           $('#otherdevelopmentallevel').textbox('setValue','');
                           $('#otherdevelopmentallevel').textbox('readonly',true);
                     });

                     $('#developmentallevel2').bind('click',function()
                     {
                           //alert('2');
                           $('#otherdevelopmentallevel').textbox('readonly',false);
                           //ระดับพัฒนาการผู้ป่วย :
                           $('#otherdevelopmentallevel').textbox('setValue','ระบุระดับพัฒนาการผู้ป่วย');
                     });


            });
         </script>


    </head>
    <body>


  <div style="margin:10px 0;"></div>
  <div class="easyui-panel" title="<?=$title?>" style="width:1300px;padding:30px 70px 50px 70px">



   <!-- Begin Frame--->
  <div style="padding:20px;background:#fafafa;width:1200px;border:1px solid #ccc">



	<div style="margin:10px 0;"></div>
	<div class="easyui-tabs" style="width:1200px;height:700px">
		<!-- <div title="<?=$title_fr1?>" style="padding:10px"> -->
                                   <div title="dental record" style="padding:10px">




                   <a href="#"  onclick="  $('#dia_search').dialog('open');  $('#txt_id').textbox('setValue','');   "  class="easyui-linkbutton" data-options="iconCls:'icon-large-picture',size:'large' " style="width:100px"> ค้นหา </a>

                   <a href="javascript:void(0)" class="easyui-linkbutton"  data-options="  iconCls:'icon-man' , onClick:function(){   openpt('เพิ่มประวัติผุ้ป่วย');    }  "   style="width:140px;height: 45px; "  >เพิ่มประวัติผู้ป่วย</a>

                   <!--
                   ค้นหาจากโดย : <?php echo nbs(2); ?>
                   <input id="cmb_search" name="cmb_search" class="easyui-combobox" data-options="
                                 valueField: 'label',
		 textField: 'value',
                                 data:[{
                                              label:'1',
                                              value:'1.รายชื่อ'
                                           },
                                           {
                                              label:'2',
                                              value:'2.เลขบัตรประชาชน'
                                           },
                                           {
                                              label:'3',
                                              value:'3.จังหวัด'
                                           },
                                           {
                                               label:'4',
                                               value:'4.DN'
                                           },
                                           {
                                               label:'5',
                                               value:'5.Ortho No.'
                                           },
                                           {
                                               label:'6',
                                               value:'6.HN'
                                           },
                                           {
                                                label:'7',
                                                value:'7.CN Series'
                                           },
                                           {
                                                label:'8',
                                                value:'8.Diagnosis'
                                           },
                                           {
                                                label:'9',
                                                value:'9.แพทย์เจ้าของไข้'
                                           },
                                           {
                                                label:'10',
                                                value:'10.Treatment'
                                           }
                                         ],
                                onSelect:function()
                                {
                                     //$.messager.alert('Info','test','info');
                                     //$('#diag1').window('open');
                                     $('#dia_search').window('open');
                                }

                          ">
                   -->

                   <?=$this->load->view("main_search")?>
                   <?=$this->load->view('popup2')?>

                    <?=$this->load->view('popup3')?>

                   <?=$this->load->view("treatment/1")?>  <!-- popup ท้งหมด -->
                    <?=$this->load->view("fr_diagnosis")?>

                   <!--   Diagnose of neural abnormalities   -->

                   <!--
                   <select class="easyui-combobox" id="cmb_search"  name="cmb_search"   style="width:200px;">
                            <option value="1">1.รายชื่อ</option>
                            <option value="2">2.เลขบัตรประชาชน</option>
                            <option value="3">3.จังหวัด</option>
                            <option value="4">4.DN</option>
                            <option value="5">5.Ortho No.</option>
                            <option value="6">6.HN</option>
                            <option value="7">7.CN Series</option>
                            <option value="8">8.Diagnosis</option>
                            <option value="9">9.แพทย์เจ้าของไข้</option>
                            <option value="10">10.Treatment</option>
                   </select>
                        -->

                   <div style="margin:20px 0 10px 0;"></div>
                  <div class="easyui-tabs" style="width:1200px;height:500px">







                         <div title=" Main System   (หน้าหลักโปรแกรม)  " style="padding:10px">
                             <table id="dg1"  name="dg1" class="easyui-datagrid" title="แสดงประวัติผู้ป่วย" style="width:1100px;height:300px"
            data-options="
                                  singleSelect:true,
                                  collapsible:true,
                                  url:'<?=base_url()?>index.php/welcome/json_tb1/',
                                  method:'post',
                                  rownumbers:true,
                                  singleSelect:true,
                                  columns:[[
                                        { field:'firstname',title:'ชื่อ'  },
                                        { field:'lastname',title:'นามสกุล' },
                                        { field:'HN',title:'HN' ,align:'center' },
                                        { field:'DN' , title:'DN' , align:'center' },
                                        { field:'sex', title:'เพศ', align:'center'   },
                                        { field:'othnumber',   title:'Ortho No',   align:'center' },
                                        { field:'CN',   title:'เลข สปสช. ',   align:'center' },
                                   //     { field:'CN',   title:'CN No',   align:'center' },
                                        { field:'seriesnumber',   title:'เลขบัตรประชาชน ',   align:'center' },
                                    //    { field:'doctor',   title:'แพทย์เจ้าของคนไข้',   align:'left' },
                                        { field:'doctor_detail',   title:'แพทย์เจ้าของคนไข้',   align:'left' },
                                        { field:'tel',   title:'เบอร์โทรศัพท์',   align:'left' },
                                        { field:'address',   title:'ที่อยู่',   align:'left' , formatter:format1() },



                                  ]],
                                  toolbar:toolbar ,
                                  ">

            <!--
        <thead>
            <tr>
                <th data-options="field:'itemid',width:80">ลำดับที่</th>
                <th data-options="field:'productid',width:100">ชื่อ-นามสกุล</th>
                <th data-options="field:'listprice',width:100,align:'right'">เลขบัตรประชาชน</th>
                <th data-options="field:'unitcost',width:100,align:'right'">วัน/เดือน/ปี เกิด</th>
                <th data-options="field:'attr1',width:250">ที่อยู่</th>
                <th data-options="field:'status',width:60,align:'center'">DN</th>
                 <th data-options="field:'status',width:150,align:'center'">Other No.</th>
                 <th data-options="field:'status',width:60,align:'center'">CN series.</th>





            </tr>
        </thead>
           -->

    </table>

              <div class="easyui-panel">
                    <div class="easyui-pagination" data-options="total:114"></div>
              </div>


     <!--
    <div style="padding:20px 0;">
        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-add'" onclick="openpt('เพิ่มประวัติผุ้ป่วย')">เพิ่มประวัติผุ้ป่วย</a>
        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-print'" onclick="openpt('เรียกดูประวัติผุ้ป่วย')">เรียกประวัติผุ้ป่วย</a>
    </div>
      -->

    <div id="dia1" class="easyui-window" title="" data-options="modal:true,closed:true,iconCls:'icon-man'" style="width:500px;height:200px;padding:10px;">
    <div style="margin:10px 0 10px 0;"></div>
    <div class="easyui-tabs" style="width:600px;height:500px">
        <div title="ประวัติทั่วไป" style="padding:10px">


            <form id="fr_add_patient" method="post"  enctype="multipart/form-data"  novalidate="novalidate">
            <table cellpadding="5">

                 <tr>
                    <td>HN   :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="HN"  id="HN" data-options="required:false" style="max-width: 90px  " ></input>

                    DN   :
                    <input class="easyui-textbox" type="text" name="DN" id="DN"  style="max-width: 90px  " ></input>

                    Ortho No :
                    <input class="easyui-textbox" type="text" name="othnumber"  id="othnumber"  style="max-width: 90px  " ></input>




                    </td>



                 </tr>

                 <tr>
                     <td>
                              เลข สปสช. :
                     </td>
                     <td>
                         <input class="easyui-textbox" type="text" name="CN" id="CN"  style="max-width: 90px  "></input>
                     </td>
                 </tr>



                 <tr>
                     <td>
                         เลขบัตรประชาชน :
                     </td>
                     <td>
                         <input  class="easyui-textbox"  style="width: 200px;height: 30px;"  id="seriesnumber" name="seriesnumber"    />
                     </td>

                 </tr>


                <tr>
                    <td>ชื่อ - นามสกุล :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="firstname" id="firstname"    style="width:100px;height: 30px;"  ></input>

                        <input class="easyui-textbox" type="text" name="lastname" id="lastname"   style="width:200px;height: 30px;" ></input>
                    </td>
                </tr>

                <tr>
                    <td>เพศ :</td>
                    <td>
                            <input  type="radio"  value="1"  name="sex"  id="sex_m_view" /> ชาย
                           <input type="radio"   name="sex" value="2"   id="sex_w_view"> หญิง
                    </td>
                </tr>

                <tr>
                    <td>รูปถ่าย :</td>
                    <td><input name="file1" id="file1"   class="f1 easyui-filebox"></input></td>
                </tr>

                 <tr>
                    <td>วัน/เดือน/ปี เกิด :</td>
                    <td><input class="easyui-datetimebox"  style="width:200px" id="birthdate" name="birthdate" ></td>
                </tr>

                <tr>
                    <td> เบอร์โทรศัพท์ :</td>
                    <td> <input   class="easyui-textbox"   name="tel"  style="width:150px;  height: 30px;"   ></td>
                </tr>

                <tr>
                    <td>ที่อยู่ :</td>
                    <td><input class="easyui-textbox" type="text" name="address" id="address"  ></input></td>
                </tr>

                <tr>
                    <td>
                       สัญชาติ :
                    </td>
                    <td>
                       <input class="easyui-textbox" type="text" name="nationality"  id="nationality" ></input>

                    </td>

                </tr>

                <tr>
                    <td>
                       เชื้อชาติ :
                    </td>
                    <td>
                       <input class="easyui-textbox" type="text" name="race"  id="race" ></input>

                    </td>

                </tr>


                 <tr>
                    <td>ศาสนา :</td>
                    <td><input class="easyui-textbox" type="text" name="religion" id="religion"  ></input></td>
                </tr>


               <tr>
                    <td>ชื่อบิดา - นามสกุล :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="namefather"  id="namefather" style="width:150px;height: 30px;"  />
                        <input class="easyui-textbox" type="text" name="fatherlastname" id="fatherlastname"  style="width:200px;height: 30px;"  />

                    </td>



                </tr>


                <tr>
                    <td>อาชีพ :</td>
                    <td><input class="easyui-textbox" type="text" name="career"  id="career"  ></input></td>
                </tr>


                <tr>
                    <td>วัน/เดือน/ปี เกิด :</td>
                    <td>
                        <input class="easyui-datetimebox"  style="width:200px"  id="birthdatefahter"  name="birthdatefahter">

<!--
                        <a href="javascript:void()"  class="easyui-linkbutton" data-options=" iconCls:'icon-man' "  id="calYear1"  name="calYear1">คำนวณอายุ</a>
                        <input class="easyui-textbox"  id="age1"  name="age1"  style="width:50px; height: 30px;"  > ปี
    -->


                    </td>



                </tr>


                 <tr>
                    <td>โรคประจำตัว :</td>
                    <td><input class="easyui-textbox" type="text" name="disease" id="disease"  ></input></td>
                </tr>



                <tr>
                    <td>ชื่อมารดา - นามสกุล </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="mothername"  id="mothername"  style="width: 150px;height: 30px;" ></input>
                        <input class="easyui-textbox" type="text" name="motherlastname"  id="motherlastname"  style="width: 200px;height: 30px;"    ></input>

                    </td>



                </tr>



                <tr>
                    <td>อาชีพ :</td>
                    <td><input class="easyui-textbox" type="text" name="mothercareer" id="mothercareer"   ></input></td>
                </tr>

                 <tr>
                    <td>วัน/เดือน/ปี เกิด :</td>
                    <td>
                        <input class="easyui-datetimebox"  style="width:200px"  name="birthdatemother"  id="birthdatemother" />

                        <!--
                        <a href="javascript:void()"  class="easyui-linkbutton" data-options=" iconCls:'icon-man' "  id="calYear2" name="calYear2" >คำนวณอายุ</a>
                        <input class="easyui-textbox"  style="width:50px; height: 30px;" readonly="true"  id="age2" name="age2" > ปี
                        -->

                    </td>
                </tr>



                 <tr>
                    <td>โรคประจำตัว :</td>
                    <td><input class="easyui-textbox" type="text" name="diseasemother" id="diseasemother"   ></input></td>
                </tr>


                <tr>
                    <td>
                        ชื่อ สามี/ภรรยา  - นามสกุล :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="spousename"  id="spousename"  style="width:100px;height: 30px;"  ></input>
                        <input class="easyui-textbox" type="text"   name="spouselastname"  id="spouselastname"    style="width:100px;height: 30px;"   ></input>
                    </td>
                </tr>






                  <tr>
                    <td>สวัสดิการการรักษา :</td>
                    <td>
                        <select class="easyui-combobox"  id="benefits"  name="benefits"  data-options="
                                onSelect:function(rec){
                                   if( $('#benefits').combobox('getValue') == 5 )
                                   {
                                        $('#otherbenefits').textbox('clear');
                                        $('#otherbenefits').textbox('setValue','ระบุสวัสดิการการรักษา');
                                        $('#otherbenefits').textbox('readonly',false);
                                   }
                                   else
                                   {
                                         $('#otherbenefits').textbox('setValue','');
                                      //   $('#otherbenefits').textbox('readonly',false);
                                   }
                                }
                                ">
                            <option value="0">เลือกสวัสดิการรักษา</option>
                            <option value="1">ประกันสังคม</option>
                            <option value="2">บัตรทอง</option>
                            <option value="3">จ่ายตรงข้าราชการ</option>
                            <option value="4">เงินสด</option>
                            <option value="5">อื่นๆ </option>

                        </select>

                        <input class="easyui-textbox"  style="width: 200px;height: 30px;"    id="otherbenefits" name="otherbenefits"  readonly="true"   />

                    </td>
                </tr>


                <tr>
                      <td>หมายเลข :</td>
                      <td> <input class="easyui-textbox"  style="width:200px;height: 30px;"   id="numberbenefits"  name="numberbenefits"     />  </td>
                </tr>


             <tr>
            <td>
               เคยได้รับการรักษามาก่อน :
            </td>
            <td>
                <input type="radio" name="evertreat"  id="evertreat1" value="1"    /> ไม่ทราบ
                <input type="radio" name="evertreat"  id="evertreat2"  value="2"   /> ไม่เคย
                <input type="radio" name="evertreat"  id="evertreat3"   value="3" /> เคย ระบุ : <input class="easyui-textbox"  name="otherevertreat"   id="otherevertreat"   style="width:150px;height: 30px;"   />


            </td>
           </tr>


           <tr>
               <td>
                   สถานที่ที่ได้รับการรักษามาก่อน :
               </td>
               <td>
                   <input class="easyui-textbox" type="text" name="treatmentfacility"   id="treatmentfacility" style="width:170px;height: 30px;"    />
               </td>
           </tr>


           <tr>
               <td>
                   ทันตแพทย์เจ้าของคนไข้ :
               </td>
               <td>
                    <!--
                   <input class="easyui-textbox" type="text" name="doctor" id="doctor"  style="width:200px;height:40px;" ></input>
                 -->

                 <select name="doctor" id="doctor"  class="easyui-combobox"  style="width:200px;">
                          <option  > เลือกทันตแพทย์ผู้ทำการรักษา </option>
                          <option value="1">อ.ชุติมาพร</option>
                          <option value="2">อ.มนเทียร</option>
                          <option value="3">อ.พูนศักดิ์</option>
                          <option value="4">อ.ทัศนีย์</option>
                          <option value="5">อ.อมรรัตน์</option>
                          <option value="6">อ.เอกสิทธิ์</option>
                          <option value="7">อ.ณัฐวีร์</option>
                          <option value="8">อ.สมศักดิ์</option>
                          <option value="9">อ.สุปราณี</option>
                          <option value="10">อ.ธิติวัฒน์</option>
               </select>


               </td>
           </tr>


               <tr>
                   <td>ระดับพัฒนาการผู้ป่วย :  </td>
                   <td>
                       <input type="radio" name="developmentallevel" value="1"  id="developmentallevel1"   class="easyui-validatebox" > ปกติ <input type="radio" name="developmentallevel"   id="developmentallevel2"   value="2"  class="easyui-validatebox" required="true" > ไม่ปกติ   <?=nbs(5)?>คำอธิบายเพิ่มเติม <input class="easyui-textbox"  id="otherdevelopmentallevel"  name="otherdevelopmentallevel"  style="width: 150px;height: 30px;"  readonly="true" />
                   </td>
               </tr>

               <tr>
                   <td colspan="2">
                      <?=nbs(50)?>
          <a href="javascript:void(0)" class="easyui-linkbutton"
           iconCls="icon-save"
           style="width:120px;height:40px;"
            onClick="
               $('#fr_add_patient').form('submit',{
                   url:'<?=base_url()?>index.php/welcome/insert_patient/',
                   success:function(data)
                   {
                          //alert(data);

                          if( data == '1' )
                          {
                                    $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ');
                                    $('#dia1').dialog('close');
                                    $('#dg1').datagrid('reload');
                          }else if( data == '0' )
                          {
                                   $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลล้มเหลว');
                          }


                   }
               });

              "  >  Save/Update </a>
                       <a href="javascript:void(0)"  class="easyui-linkbutton"  style=" width:100px;height: 40px;  "  iconCls="icon-cancel"  onclick="  $('#dia1').dialog('close');   "  > Close </a>

                   </td>
               </tr>

            </table>

                 </form>




        </div>
        <div title="ประวัติการตั้งครรภ์" style="padding:10px">



    <div style="margin:20px 0;"></div>

    <table cellpadding="5">
        <tr>
            <td>
                1. ยาที่ใช้ในระยะครรภ์ 3 เดือน ยาสตรีปรับประจำเดือน ไม่รวมวิตามิน :
                <input type="Radio" name="tab2_1" value="1"  class="easyui-validatebox" required="true"> ใช่ ระบุ <input class="easyui-textbox"   style="width: 50px;height: 30px;"  />
                <br>
               <!-- <input type="Radio" name="tab2_1" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่  -->
                <input  type="radio"    name="tab2_1" />  จำไม่ได้
               <input  type="radio"   name="tab2_1" />   ไม่ใช่

            </td>
        </tr>

          <tr>
            <td>
                2. สูบบุหรี่หรืออยู่ใกล้ชิดผู้สูบบุหร่ีในระยะครรภ์ 3 เดือนแรก : <input type="Radio" name="tab2_2" value="1"  class="easyui-validatebox" required="true"> ใช่ ระบุ <input class="easyui-textbox" type="text" name="subject"   style="width:50px"> มวลต่อวัน

                <!-- <input type="Radio" name="tab2_2" value="1"  class="easyui-validatebox" required="true" checked="true"/> ไม่ -->

                <br>
                    <input  type="radio"  name="tab2_2"  />  จำไม่ได้


                    <input  type="radio"  name="tab2_2"  />    ไม่ใช่





            </td>
        </tr>

                  <tr>
            <td>
                3. ดื่มเครื่องดื่มแอลกอฮอล์ในระยะตั้งครรภ์ 3 เดือนแรก : <input type="Radio" name="tab2_3" value="1"  class="easyui-validatebox" required="true"> ใช่  ระบุ <input class="easyui-textbox" type="text" name="subject"   style="width:50px"></input>  ซีซีต่อวัน

                <br>

              <!--  <input type="Radio" name="tab2_3" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่  -->


              <input  type="radio"  name="tab2_3"  /> จำไม่ได้


            <input  type="radio"  name="tab2_3"  />  ไม่ใช่





            </td>
        </tr>

        <tr>
            <td colspan="2"  align="center">
                <a href="javascript:void(0)"  class="easyui-linkbutton"  style=" width:120px;height: 40px;  "  iconCls="icon-save"   > Save/Update </a>
                <a href="javascript:void(0)"  class="easyui-linkbutton"  style=" width:100px;height: 40px;  "  iconCls="icon-cancel"  onclick="  $('#dia1').dialog('close');   "  > Close </a>
            </td>
        </tr>

    </table>



        </div>


        <div title="ประวัติการคลอด" data-options="closable:false" style="padding:10px">
            <table cellpadding="5">
                <tr>
                    <td>
                        อายุครรภ์ :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>



                    </td>
                </tr>

                <tr>
                    <td>
                        วิธีคลอด :
                    </td>
                    <td>

                        <!--
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                          -->

                          <input type="radio"  name="tab3_1"  > ธรรมชาติ
                          <input type="radio"   name="tab3_1" > ผ่าตัด
                          <input type="radio"   name="tab3_1"  > อื่นๆ
                          <input class="easyui-textbox"  style="width:200px;height: 30px;"   />

                    </td>
                </tr>

                <tr>
                    <td>
                        น้ำหนักแรกคลอด :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                </tr>

                <tr>
                    <td>
                        ส่วนสูงแรกคลอด :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                </tr>

                <tr>
                    <td>
                        ปัญหาแรกคลอด :
                    </td>
                    <td>
                        <input type="radio"  name="tab3_2"   /> ไม่มี  <input type="radio"  name="tab3_2"   /> มี
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                </tr>


         <tr>
            <td colspan="2"  align="center">
                <a href="javascript:void(0)"  class="easyui-linkbutton"  style=" width:120px;height: 40px;  "  iconCls="icon-save"   > Save/Update </a>
                <a href="javascript:void(0)"  class="easyui-linkbutton"  style=" width:100px;height: 40px;  "  iconCls="icon-cancel"  onclick="  $('#dia1').dialog('close');   "  > Close </a>
            </td>
        </tr>

                <!--
                 <tr>
                    <td>
                        อื่นๆ :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                </tr>
                -->

            </table>
        </div>


           <div title="ประวัติครอบครัว" data-options="iconCls:'icon-save',closable:false" style="padding:10px">
                <table cellpadding="5">

                <tr>
                    <td>บิดามารดาเป็นปากแหว่งเพดานโหว่หรือไม่ : <input type="Radio" name="tab4_1" value="1"  class="easyui-validatebox" required="true"> ใช่ <input type="Radio" name="tab4_1" value="1"  class="easyui-validatebox" required="true" > ไม่</td>

                </tr>

                <tr>
                    <td>ญาติที่เกี่ยวพันทางสายเลือดมีภาวะปากแหว่งเพดานโหว่หรือไม่ : </td>
                    <td> <input type="Radio" name="tab4_2" value="1"  class="easyui-validatebox" required="true"> ไม่มี <input type="Radio" name="tab4_2" value="1"  class="easyui-validatebox" required="true" > มี  <?=nbs(2)?>  เกี่ยวข้องเป็น <input class="easyui-textbox"  style="width: 200px;height: 30px;"  /> </td>  </td>
                </tr>

                <!--
                <tr>
                     <td>ระดับพัฒนาการผู้ป่วย : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ปกติ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่ปกติ</td>
                </tr>
                -->

                <tr>
                    <td>อายุบิดาในขณะที่มีบุตร :</td>
                    <td><input class="easyui-textbox" style="width:70px;height: 30px;"></td>
                </tr>

                            <tr>
                    <td>อายุมารดาในขณะที่มีบุตร :</td>
                    <td><input class="easyui-textbox" style="width:70px;height: 30px;"></td>
                </tr>

                <!--
                <tr>
                     <td></td>
                    <td><input type="submit" value="Submit"></input></td>

                </tr>
                -->

                <tr>
            <td colspan="2"  align="center">
                <a href="javascript:void(0)"  class="easyui-linkbutton"  style=" width:120px;height: 40px;  "  iconCls="icon-save"   > Save/Update </a>
                <a href="javascript:void(0)"  class="easyui-linkbutton"  style=" width:100px;height: 40px;  "  iconCls="icon-cancel"  onclick="  $('#dia1').dialog('close');   "  > Close </a>
            </td>
        </tr>

            </table>
        </div>




    </div>








    </div>



      </div>











                   </div>
                   <!--  tab all program -->


	</div>




	</div>








</div>
  <!-- End Frame--->
























 </div>







  <script type="text/javascript" >
     function  view_patient(id)
     {

                                                                            var  url='<?=base_url()?>index.php/welcome/call_history_patient/' + id;
                                                                   $.post(url,{ id_history_patient:id },function(data)
                                                                      {
                                                                             //alert(data);
                                                                              $.each(data,function(index,key)
                                                                                {

                                                                                        var  HN=key.HN;
                                                                                        // alert( HN );
                                                                                        //    fr_view_patient
                                                                                       //HN_view
                                                                                       $('#HN_view').textbox('setValue',HN);
                                                                                     //  var  DN=key.DN

                                                                                       $('#DN_view').textbox('setValue',key.DN);
                                                                                       //key.	othnumber;
                                                                                       $('#othnumber_view').textbox('setValue',key.othnumber);
                                                                                       $('#CN_view').textbox('setValue',key.CN);

                                                                                       $('#seriesnumber_view').textbox('setValue',key.seriesnumber);
                                                                                        $('#firstname_view').textbox('setValue',key.firstname);
                                                                                        $('#lastname_view').textbox('setValue',key.lastname);


                                                                                         //alert( key.sex);


                                                                                          var  sex = key.sex;


                                                                                          if(  sex == 1  )
                                                                                          {
                                                                                                  //sex_w_view
                                                                                                   //alert(sex);
                                                                                                   //sex_m_view
                                                                                               // $('#sex_m_view').attr('checked',true);
                                                                                                $('#txt_sex_view').textbox('setValue','ชาย');
                                                                                          }else if( sex == 2 )
                                                                                          {
                                                                                              // alert(sex);
                                                                                               //  $('#sex_w_view').attr('checked',true);
                                                                                                 $('#txt_sex_view').textbox('setValue','หญิง');
                                                                                          }


                                                                                          //file1
                                                                                          var  file1= key.filename;
                                                                                          //alert( file1 );

                                                                                          if( file1 !=  ''  )
                                                                                          {
                                                                                             // $('#file1').attr('')
                                                                                             //  $('#img_view').attr('src','<?=base_url()?>upload/632244.jpg');
                                                                                                $('#img_view').attr('src','<?=base_url()?>upload/' +  file1  );
                                                                                          }

                                                                                           //id_history_patient_view

                                                                                           $('#id_history_patient_view').textbox('setValue',key.id_history_patient);

                                                                                           $('#birthdate_view').textbox('setValue',key.birthdate);

                                                                                           // alert( key.tel  );
                                                                                        $('#tel_view').textbox('setValue',key.tel);

                                                                                        $('#address_view').textbox('setValue',key.address);

                                                                                        $('#nationality_view').textbox('setValue',key.nationality);

                                                                                        $('#race_view').textbox('setValue',key.race);

                                                                                        $('#religion_view').textbox('setValue',key.religion);

                                                                                        $('#namefather_view').textbox('setValue',key.namefather);

                                                                                        $('#fatherlastname_view').textbox('setValue',key.fatherlastname);

                                                                                        $('#career_view').textbox('setValue',key.career);

                                                                                        $('#birthdatefahter_view').textbox('setValue',key.birthdatefahter);

                                                                                        $('#disease_view').textbox('setValue',key.disease);

                                                                                     //   $('#disease_view').textbox('setValue',key.disease);

                                                                                        $('#mothername_view').textbox('setValue',key.mothername);

                                                                                        $('#motherlastname_view').textbox('setValue',key.motherlastname);

                                                                                        $('#mothercareer_view').textbox('setValue',key.mothercareer);

                                                                                        $('#birthdatemother_view').textbox('setValue',key.birthdatemother);

                                                                                        $('#diseasemother_view').textbox('setValue',key.diseasemother);

                                                                                        //$('#diseasemother_view').textbox('setValue',key.diseasemother);

                                                                                        $('#spousename_view').textbox('setValue',key.spousename);

                                                                                        $('#spouselastname_view').textbox('setValue',key.spouselastname);


                                                                                      //  $('#otherbenefits')

                                                                                      $('#otherbenefits_view').textbox('setValue',key.otherbenefits);

                                                                                     // $('#numberbenefits')

                                                                                        $('#numberbenefits_view').textbox('setValue',key.numberbenefits);

                                                                                        $('#treatmentfacility_view').textbox('setValue',key.treatmentfacility);

                                                                                        $('#otherdevelopmentallevel_view').textbox('setValue',key.otherdevelopmentallevel);


                                                                                      //เคยได้รับการรักษามาก่อน
                                                                                        var  evertreat=key.evertreat;
                                                                                        if(  evertreat == 1  )
                                                                                        {
                                                                                            $('#evertreat1_view').attr('checked',true);
                                                                                        }
                                                                                        else if( evertreat == 2 )
                                                                                        {
                                                                                            //evertreat2
                                                                                             $('#evertreat2_view').attr('checked',true);
                                                                                        }
                                                                                         else if( evertreat == 3 )
                                                                                         {
                                                                                             $('#evertreat3_view').attr('checked',true);
                                                                                         }

                                                                                       //  alert(key.otherevertreat);
                                                                                         //otherevertreat
                                                                                       //  $('#otherevertreat')
                                                                                       var  otherevertreat=key.otherevertreat;
                                                                                       $('#otherevertreat_view').textbox('setValue',otherevertreat);

                                                                                       //ระดับพัฒนาการผู้ป่วย :
                                                                                       var  developmentallevel=key.developmentallevel;
                                                                                     //  alert(developmentallevel);
                                                                                       if(  developmentallevel == 1  )
                                                                                       {
                                                                                            $('#developmentallevel_view').attr('checked',true);
                                                                                       }
                                                                                       else if(  developmentallevel == 2   )
                                                                                       {
                                                                                             //$('#developmentallevel_text').attr('checked',true);
                                                                                             $('#developmentallevel_view').attr('checked',true);
                                                                                       }

                                                                                        var  otherdevelopmentallevel=key.otherdevelopmentallevel;
                                                                                       // alert( otherdevelopmentallevel );
                                                                                        $('#otherdevelopmentallevel_view').textbox('setValue', otherdevelopmentallevel );

                                                                                        var  doctor=key.doctor;
                                                                                        $('#doctor_view').textbox('setValue',doctor);


                                                                                });


                                                                      },'json');

     }
  </script>

<!----  แสดงประวัติผู้ป่วย  หลังการบันทึก -->
    <div id="dia1_view" class="easyui-window" title="" data-options="modal:true,closed:true,iconCls:'icon-man'" style="width:500px;height:200px;padding:10px;">
    <div style="margin:10px 0 10px 0;"></div>
    <div class="easyui-tabs" style="width:600px;height:500px">
        <div title="ประวัติทั่วไป" style="padding:10px">


            <form id="fr_view_patient" method="post"  enctype="multipart/form-data"  novalidate="novalidate">
            <table cellpadding="5">

                 <tr>
                    <td>
                          <input class="easyui-textbox" type="text" name="id_history_patient_view"  id="id_history_patient_view"  data-options="required:false" style="width: 40px  "  readonly="true" ></input>
                    </td>
                 </tr>


                 <tr>
                    <td>HN   :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="HN_view"  id="HN_view" data-options="required:false" style="max-width: 90px  "  readonly="true" ></input>

                    DN   :
                    <input class="easyui-textbox" type="text" name="DN_view" id="DN_view"  style="max-width: 90px  "  readonly="true" ></input>

                    Ortho No :
                    <input class="easyui-textbox" type="text" name="othnumber_view"  id="othnumber_view"  style="max-width: 90px  " readonly="true" ></input>




                    </td>



                 </tr>

                 <tr>
                     <td>
                              เลข สปสช. :
                     </td>
                     <td>
                         <input class="easyui-textbox" type="text" name="CN_view" id="CN_view"  style="max-width: 90px  "></input>
                     </td>
                 </tr>



                 <tr>
                     <td>
                         เลขบัตรประชาชน :
                     </td>
                     <td>
                         <input  class="easyui-textbox"  style="width: 200px;height: 30px;"  id="seriesnumber_view" name="seriesnumber_view"    />
                     </td>

                 </tr>


                <tr>
                    <td>ชื่อ - นามสกุล :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="firstname_view" id="firstname_view"    style="width:100px;height: 30px;"  ></input>

                        <input class="easyui-textbox" type="text" name="lastname_view" id="lastname_view"   style="width:200px;height: 30px;" ></input>
                    </td>
                </tr>

                <tr>
                    <td>เพศ :</td>
                    <td>
                        <!--
                        <input  type="radio"  value="1"  name="sex_view"  id="sex_m_view"  checked="false" /> ชาย
                           <input type="radio"   name="sex_view" value="2"   id="sex_w_view"  checked="false"  > หญิง
                           -->
                           <input class="easyui-textbox"  id="txt_sex_view"   style="width:100px;height: 40px;align:'center'  "  readonly="true"  />
                    </td>
                </tr>

                <tr>
                    <td>รูปถ่าย :</td>
                    <td>

                        <!--
                        <input name="file1" id="file1"   class="f1 easyui-filebox"></input>
                        <br>
                         -->

                        <input type="image"   id="img_view"  width="350"  height="350"   />

                    </td>
                </tr>

                 <tr>
                    <td>วัน/เดือน/ปี เกิด :</td>
                    <td>

                        <input class="easyui-textbox"  style="width:200px" id="birthdate_view" name="birthdate_view"    >

                    </td>
                </tr>

                <tr>
                    <td> เบอร์โทรศัพท์ :</td>
                    <td> <input   class="easyui-textbox"   name="tel_view"  id="tel_view" style="width:150px;  height: 30px;"    ></td>
                </tr>

                <tr>
                    <td>ที่อยู่ :</td>
                    <td><input class="easyui-textbox" type="text" name="address_view" id="address_view"  style="width: 300px;height: 30px;"   ></input></td>
                </tr>

                <tr>
                    <td>
                       สัญชาติ :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="nationality_view"  id="nationality_view"  style="width:100px;height: 30px;"  readonly="true" ></input>

                    </td>

                </tr>

                <tr>
                    <td>
                       เชื้อชาติ :
                    </td>
                    <td>
                        <input class="easyui-textbox"  name="race_view"  id="race_view" style="width:100px;height: 30px;"   readonly="true" ></input>

                    </td>

                </tr>


                 <tr>
                    <td>ศาสนา :</td>
                    <td><input class="easyui-textbox"  name="religion_view" id="religion_view"  style="width:100px;height: 30px;"   readonly="true" ></input></td>
                </tr>


               <tr>
                    <td>ชื่อบิดา - นามสกุล :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="namefather_view"  id="namefather_view" style="width:150px;height: 30px;"  readonly="true"  />
                        <input class="easyui-textbox" type="text" name="fatherlastname_view" id="fatherlastname_view"  style="width:200px;height: 30px;"  readonly="true" />

                    </td>



                </tr>


                <tr>
                    <td>อาชีพ :</td>
                    <td><input class="easyui-textbox" type="text" name="career_view"  id="career_view"  readonly="true"  style="width: 200px;height: 30px;"  ></input></td>
                </tr>


                <tr>
                    <td>วัน/เดือน/ปี เกิด :</td>
                    <td>


                        <input class="easyui-textbox"    id="birthdatefahter_view"  name="birthdatefahter_view"  style="width: 100px;height: 30px;"  readonly="true"  >

                        <!--
                        <a href="javascript:void()"  class="easyui-linkbutton" data-options=" iconCls:'icon-man' "  id="calYear1"  name="calYear1">คำนวณอายุ</a>
                        <input class="easyui-textbox"  id="age1"  name="age1"  style="width:50px; height: 30px;"  > ปี
                        -->

                    </td>



                </tr>


                 <tr>
                    <td>โรคประจำตัว :</td>
                    <td><input class="easyui-textbox"  name="disease_view" id="disease_view" readonly="true"  ></input></td>
                </tr>



                <tr>
                    <td>ชื่อมารดา - นามสกุล </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="mothername_view"  id="mothername_view"  readonly="true"  style="width: 150px;height: 30px;" ></input>
                        <input class="easyui-textbox" type="text" name="motherlastname_view"  id="motherlastname_view"  style="width: 200px;height: 30px;"    ></input>

                    </td>



                </tr>



                <tr>
                    <td>อาชีพ :</td>
                    <td><input class="easyui-textbox" type="text" name="mothercareer_view" id="mothercareer_view"   ></input></td>
                </tr>

                 <tr>
                    <td>วัน/เดือน/ปี เกิด :</td>
                    <td>

                        <!--
                        <input class="easyui-textbox"  style="width:200px"  name="birthdatemother"  id="birthdatemother" />
                        -->


                         <input class="easyui-textbox"  style="width:200px"  name="birthdatemother_view"  id="birthdatemother_view" />


                       <!--
                        <a href="javascript:void()"  class="easyui-linkbutton" data-options=" iconCls:'icon-man' "  id="calYear2" name="calYear2" >คำนวณอายุ</a>
                        -->

                     <!--   <input class="easyui-textbox"  style="width:50px; height: 30px;" readonly="true"  id="age2" name="age2" > ปี  -->

                    </td>
                </tr>



                 <tr>
                    <td>โรคประจำตัว :</td>
                    <td><input class="easyui-textbox" type="text" name="diseasemother_view" id="diseasemother_view"   ></input></td>
                </tr>


                <tr>
                    <td>
                        ชื่อ สามี/ภรรยา  - นามสกุล :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="spousename_view"  id="spousename_view"  style="width:100px;height: 30px;"  ></input>
                        <input class="easyui-textbox" type="text"   name="spouselastname_view"  id="spouselastname_view"    style="width:100px;height: 30px;"   ></input>
                    </td>
                </tr>






                  <tr>
                    <td>สวัสดิการการรักษา :</td>
                    <td>
                        <select class="easyui-combobox"  id="benefits"  name="benefits"  data-options="
                                onSelect:function(rec){
                                   if( $('#benefits').combobox('getValue') == 5 )
                                   {
                                        $('#otherbenefits').textbox('clear');
                                        $('#otherbenefits').textbox('setValue','ระบุสวัสดิการการรักษา');
                                        $('#otherbenefits').textbox('readonly',false);
                                   }
                                   else
                                   {
                                         $('#otherbenefits').textbox('setValue','');
                                      //   $('#otherbenefits').textbox('readonly',false);
                                   }
                                }
                                ">
                            <option  >เลือกสวัสดิการการรักษา</option>
                            <option value="1">ประกันสังคม</option>
                            <option value="2">บัตรทอง</option>
                            <option value="3">จ่ายตรงข้าราชการ</option>
                            <option value="4">เงินสด</option>
                            <option value="5">อื่นๆ </option>

                        </select>

                        <input class="easyui-textbox"  style="width: 200px;height: 30px;"    id="otherbenefits_view" name="otherbenefits_view"  readonly="true"   />

                    </td>
                </tr>


                <tr>
                      <td>หมายเลข :</td>
                      <td> <input class="easyui-textbox"  style="width:200px;height: 30px;"   id="numberbenefits_view"  name="numberbenefits_view"     />  </td>
                </tr>


             <tr>
            <td>
               เคยได้รับการรักษามาก่อน :
            </td>
            <td>
                <input type="radio" name="evertreat_view"  id="evertreat1_view" value="1"    /> ไม่ทราบ
                <input type="radio" name="evertreat_view"  id="evertreat2_view"  value="2"   /> ไม่เคย
                <input type="radio" name="evertreat_view"  id="evertreat3_view"   value="3" /> เคย ระบุ : <input class="easyui-textbox"  name="otherevertreat_view"   id="otherevertreat_view"   style="width:150px;height: 30px;"   />


            </td>
           </tr>


           <tr>
               <td>
                   สถานที่ที่ได้รับการรักษามาก่อน :
               </td>
               <td>
                   <input class="easyui-textbox" type="text" name="treatmentfacility_view"   id="treatmentfacility_view" style="width:170px;height: 30px;"    />
               </td>
           </tr>


           <tr>
               <td>
                   แพทย์เจ้าของคนไข้ :
               </td>
               <td>


                   <input class="easyui-textbox" type="text" name="doctor_view" id="doctor_view"  id="doctor"   ></input>


               </td>
           </tr>


               <tr>
                   <td>ระดับพัฒนาการผู้ป่วย :  </td>
                   <td>
                       <input type="radio" name="developmentallevel_view" value="1"  id="developmentallevel1_view"   class="easyui-validatebox" >
                       ปกติ
                     <!--  <input type="radio" name="developmentallevel_text"   id="developmentallevel2_view"   value="2"  class="easyui-validatebox" required="true" > -->
                       <input type="radio" name="developmentallevel_view"   id="developmentallevel2_view"   value="2"  class="easyui-validatebox" required="true" >
                       ไม่ปกติ   <?=nbs(5)?>คำอธิบายเพิ่มเติม
                       <input class="easyui-textbox"  id="otherdevelopmentallevel_view"  name="otherdevelopmentallevel_view"  style="width: 150px;height: 30px;"   />
                   </td>
               </tr>

               <tr>
                   <td colspan="2">
                      <?=nbs(50)?>

                   <!--
          <a href="javascript:void(0)" class="easyui-linkbutton"
           iconCls="icon-man"
           style="width:100px;height:40px;"
            onClick="
               $('#fr_add_patient').form('submit',{
                   url:'<?=base_url()?>index.php/welcome/insert_patient/',
                   success:function(data)
                   {
                          //alert(data);

                          if( data == '1' )
                          {
                                    $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ');
                                    $('#dia1').dialog('close');
                                    $('#dg1').datagrid('reload');
                          }else if( data == '0' )
                          {
                                   $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลล้มเหลว');
                          }


                   }
               });

              "  >  บันทึกข้อมูล </a>
                       <a href="javascript:void(0)"  class="easyui-linkbutton"  style=" width:100px;height: 40px;  "  iconCls="icon-remove"  onclick="  $('#dia1').dialog('close');   "  > ปิด (Close) </a>
                       -->


                       <a href="javascript:void(0)"  class="easyui-linkbutton"
                              data-options="
                            onClick:function(){

                                $('#fr_view_patient').form('submit',{
                                        url:'<?=base_url()?>index.php/welcome/update_patient',
                                        success:function(data)
                                        {
                                             //alert(data);
                                              if( data == 1 )
                                              {
                                                     $.messager.alert('สถานะในการรปรับปรุงข้อมูล','ปรับปรุงข้อมูลสำเร็จ');
                                                     $('#dg1').datagrid('reload');
                                                     $('#dia1_view').window('close');
                                              }
                                              else{
                                                   $.messager.alert('สถานะในการรปรับปรุงข้อมูล','ปรับปรุงข้อมูลล้มเหลว');
                                                   $('#dg1').datagrid('reload');
                                              }


                                        }
                                });


                            }
                              "
                       style="width: 100px;height: 40px;"   iconCls='icon-edit'    >แก้ไข</a>
                       <a href="javascript:void(0)" class="easyui-linkbutton"  style="width:120px;height:40px;"  iconCls="icon-cancel"  onClick=" $('#dia1_view').window('close'); "  >ปิด (Close)</a>

                   </td>
               </tr>

            </table>

                 </form>




        </div>
        <div title="ประวัติการตั้งครรภ์" style="padding:10px">



    <div style="margin:20px 0;"></div>

    <table cellpadding="5">
        <tr>
            <td>
                ยาที่ใช้ในระยะครรภ์ 3 เดือน ยาสตรีปรับประจำเดือน ไม่รวมวิตามิน : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ใช่ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่
            <?=nbs(5)?>
            ไม่ทราบ
            <input  type="radio"  />
            จำไม่ได้
              <input  type="radio"  />

            </td>
        </tr>

          <tr>
            <td>
                สูบบุหรี่ในระยะครรภ์ 3 เดือนแรก : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ใช่ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่
               <?=nbs(3)?>  <input class="easyui-textbox" type="text" name="subject" data-options="required:true"  style="width:50px"></input> มวลต่อวัน


                  <?=nbs(5)?>
            ไม่ทราบ
            <input  type="radio"  />
            จำไม่ได้
              <input  type="radio"  />



            </td>
        </tr>

                  <tr>
            <td>
                ดื่มเครื่องดื่มแอลกอฮอล์ในระยะตั้งครรภ์ 3 เดือนแรก : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ใช่ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่
               <?=nbs(3)?>  <input class="easyui-textbox" type="text" name="subject" data-options="required:true"  style="width:50px"></input> ซีซีต่อวัน


                  <?=nbs(5)?>
            ไม่ทราบ
            <input  type="radio"  />
            จำไม่ได้
              <input  type="radio"  />



            </td>
        </tr>

    </table>



        </div>


        <div title="ประวัติการคลอด" data-options="closable:false" style="padding:10px">
            <table cellpadding="5">
                <tr>
                    <td>
                        อายุครรภ์ :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>



                    </td>
                </tr>

                <tr>
                    <td>
                        วิธีคลอด :
                    </td>
                    <td>

                        <!--
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                          -->

                          <input type="radio"> ธรรมชาติ
                          <input type="radio"> ผ่าตัด
                          <input type="radio"> อื่นๆ
                          <input class="easyui-textbox"  style="width:200px;height: 30px;"   />

                    </td>
                </tr>

                <tr>
                    <td>
                        น้ำหนักแรกคลอด :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                </tr>

                <tr>
                    <td>
                        ส่วนสูงแรกคลอด :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                </tr>

                <tr>
                    <td>
                        ปัญหาแรกคลอด :
                    </td>
                    <td>
                        <input type="radio" /> ไม่มี  <input type="radio" /> มี
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                </tr>

                <!--
                 <tr>
                    <td>
                        อื่นๆ :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                </tr>
                -->

            </table>
        </div>


           <div title="ประวัติครอบครัว" data-options="iconCls:'icon-save',closable:false" style="padding:10px">
                <table cellpadding="5">

                <tr>
                    <td>บิดามารดาเป็นปากแหว่งเพดานโหว่หรือไม่ : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ใช่ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="false"> ไม่</td>

                </tr>

                <tr>
                    <td>ญาติที่เกี่ยวพันทางสายเลือดมีภาวะปากแหว่งเพดานโหว่หรือไม่ : </td>
                    <td> <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ไม่มี <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" > มี  <?=nbs(2)?>  เกี่ยวข้องเป็น <input class="easyui-textbox"  style="width: 200px;height: 30px;"  /> </td>  </td>
                </tr>

                <!--
                <tr>
                     <td>ระดับพัฒนาการผู้ป่วย : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ปกติ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่ปกติ</td>
                </tr>
                -->

                <tr>
                    <td>อายุบิดาในขณะที่มีบุตร :</td>
                    <td><input class="easyui-textbox" style="width:70px;height: 30px;"></td>
                </tr>

                            <tr>
                    <td>อายุมารดาในขณะที่มีบุตร :</td>
                    <td><input class="easyui-textbox" style="width:70px;height: 30px;"></td>
                </tr>

                <tr>
                     <td></td>
                    <td><input type="submit" value="Submit"></input></td>

                </tr>

            </table>
        </div>




    </div>








    </div>
<!----  แสดงประวัติผู้ป่วย --->

<!--   <form  id="fr_export"  method="post"  enctype="multipart/form-data"  novalidate="novalidate"  > -->
      <input  class="easyui-textbox"    readonly=true    id="link_export"  name="link_export"   style="width:20px;height:30jpx;"   />
<!--   </form> -->


    </body>
    </html>
