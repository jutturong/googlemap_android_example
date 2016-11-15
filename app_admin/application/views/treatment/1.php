
<script type="text/javascript" >
    $(function(){
      //dg_psot
      $('#dg_psot').datagrid({
           field:'procedure',
           options:{
             data:[{ text:'P' }]
           }

      });





    });
</script>



<!--   วัน/เดือน/ปี ที่เริ่มทำการรักษา   ----------------->
<script type="text/javascript">
            //-- คำนวณอายุของบิดา --

             $(function(){
                 $('#cal1_fr1').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date_fr1').datebox('getValue')
                       var  date1=strdate.split(" ");
                       var  last1 = date1[0];
                       var  last2 = last1.split("/");
                       var  last3= last2[2];
                      // alert(last3);
                      var   Y= $('#y_fr1').textbox('getValue');

                      /*
                      var  d=new Date();
                      var  y=d.getFullYear("Y");
                      var  m=d.getMonth();
                     */

                        //alert(y);
                       // alert(m);

                      //  $('#y_fr1').textbox('setValue',ex1[1]); //ของเดิมคือส่ง เดือน  เกิด

                    //  if( last3 > 0 )  //ของเดิม คือ check ปี

                      var   y1= $('#y_fr1').textbox('getValue') ;  //คำนวณอายุเดือน
                     var  cal_y1  =   last2[0] -  y1;


                    //  if(   last2[0]   > 0 )
                      $('#age1_fr1').textbox('setValue', '' ); //อายุเป็นเดือน
                        if(   cal_y1    > 0 )
                      {
                          //   var  ans1=last3 - Y;  //ของเดิม


                             // alert(y1);


                        // alert( cal_y1 );

                              // $('#age1_fr1').textbox('setValue',ans1); //ของเดิม อายุเป็นปี
                              $('#age1_fr1').textbox('setValue', cal_y1 ); //อายุเป็นเดือน


                      }


                 });
             });


</script>

 <script type="text/javascript">
            //-- วัน/เดือน/ปี ที่สิ้นสุดการรักษา --
             $(function(){
                 $('#cal2_fr1').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date2_fr1').datebox('getValue')
                       var  date1=strdate.split(" ");
                       var  last1 = date1[0];
                       var  last2 = last1.split("/");
                       var  last3= last2[2];
                      // alert(last3);
                      var   Y= $('#y_fr1').textbox('getValue');

                      /*
                     var  d=new Date();
                      var  y=d.getFullYear("Y");
                      var  m=d.getMonth();
        */

                    //  if( last3 > 0 ) // ของเดิมที่เป็นปี
                      // alert( last2[1]  );

                           var   y1= $('#y_fr1').textbox('getValue') ;  //คำนวณอายุเดือน
                           var  cal_y1  =   last2[0] -  y1;

                     //  if(   last2[0]   > 0 )
                       $('#age2_fr1').textbox('setValue','');
                        if(  cal_y1  > 0 )
                      {
                           //  var  ans1=last3 - Y;
                            //alert(ans1);
                            //  $('#age2_fr1').textbox('setValue',c);
                             // $('#age1_fr1').textbox('setValue',ans1);
                          //   $('#age2_fr1').textbox('setValue',ans1);   //คำนวณอายุเป็นปี ของเดิม

                           //    var   y1= m  - $('#y_fr1').textbox('getValue') ;  //คำนวณอายุเดือน
                           //    var  cal_y1  =   last2[1] -  y1;
                           //    $('#age2_fr1').textbox('setValue',cal_y1);

                                // alert( last2[1]  );

                             //    var   y1= m  - $('#y_fr1').textbox('getValue') ;  //คำนวณอายุเดือน


                                    $('#age2_fr1').textbox('setValue',cal_y1);

                      }


                 });
             });

</script>

<script type="text/javascript">
            //-- คำนวณอายุของบิดา --
             $(function(){
                 $('#cal1_fr4').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date_fr4').datebox('getValue')
                       var  date1=strdate.split(" ");
                       var  last1 = date1[0];
                       var  last2 = last1.split("/");
                       var  last3= last2[2];
                      // alert(last3);
                      var   Y= $('#y_fr4').textbox('getValue');

                      if( last3 > 0 )
                      {
                             var  ans1=last3 - Y;
                            //alert(ans1);
                            //  $('#age2_fr1').textbox('setValue',c);
                             // $('#age1_fr1').textbox('setValue',ans1);
                            // $('#age2_fr1').textbox('setValue',ans1);
                            $('#age1_fr4').textbox('setValue',ans1);


                      }

                 });
             });

</script>

 <script type="text/javascript">
            //-- วัน/เดือน/ปี ที่สิ้นสุดการรักษา --
             $(function(){
                 $('#cal2_fr4').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date2_fr4').datebox('getValue')
                       var  date1=strdate.split(" ");
                      var  last1 = date1[0];
                       var  last2 = last1.split("/");
                       var  last3= last2[2];
                      // alert(last3);
                      var   Y= $('#y_fr4').textbox('getValue');

                      if( last3 > 0 )
                      {
                             var  ans1=last3 - Y;
                            //alert(ans1);
                            //  $('#age2_fr1').textbox('setValue',c);
                             // $('#age1_fr1').textbox('setValue',ans1);
                            // $('#age2_fr1').textbox('setValue',ans1);
                           // $('#age1_fr4').textbox('setValue',ans1);
                            $('#age2_fr4').textbox('setValue',ans1);
                      }


                 });
             });

</script>


<script type="text/javascript">
            //-- คำนวณอายุของบิดา --
             $(function(){
                 $('#cal1_fr6').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date_fr6').datebox('getValue')
                       var  date1=strdate.split(" ");
                       var  last1 = date1[0];
                       var  last2 = last1.split("/");
                       var  last3= last2[2];
                      // alert(last3);
                      var   Y= $('#y_fr6').textbox('getValue');

                      if( last3 > 0 )
                      {
                             var  ans1=last3 - Y;
                            //alert(ans1);
                            //  $('#age2_fr1').textbox('setValue',c);
                             // $('#age1_fr1').textbox('setValue',ans1);
                            // $('#age2_fr1').textbox('setValue',ans1);
                           // $('#age1_fr4').textbox('setValue',ans1);
                            $('#age1_fr6').textbox('setValue',ans1);
                      }


                 });
             });

</script>

<!---------------7. Growth modification----------------->
<script type="text/javascript">
            //-- คำนวณอายุของบิดา --
             $(function(){
                 $('#cal1_fr7').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date_fr7').datebox('getValue')
                       var  date1=strdate.split(" ");
                        var  last1 = date1[0];
                       var  last2 = last1.split("/");
                       var  last3= last2[2];
                      // alert(last3);
                      var   Y= $('#y_fr7').textbox('getValue');

                      if( last3 > 0 )
                      {
                             var  ans1=last3 - Y;
                            //alert(ans1);
                            //  $('#age2_fr1').textbox('setValue',c);
                             // $('#age1_fr1').textbox('setValue',ans1);
                            // $('#age2_fr1').textbox('setValue',ans1);
                           // $('#age1_fr4').textbox('setValue',ans1);
                            $('#age1_fr7').textbox('setValue',ans1);
                            // $('#age1_fr7').textbox('setValue',calage);
                      }


                 });
             });

</script>

 <script type="text/javascript">
            //-- วัน/เดือน/ปี ที่สิ้นสุดการรักษา --
             $(function(){
                 $('#cal2_fr7').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date2_fr7').datebox('getValue')
                       var  date1=strdate.split(" ");
                        var  last1 = date1[0];
                       var  last2 = last1.split("/");
                       var  last3= last2[2];
                      // alert(last3);
                      var   Y= $('#y_fr7').textbox('getValue');

                      if( last3 > 0 )
                      {
                             var  ans1=last3 - Y;
                            //alert(ans1);
                            //  $('#age2_fr1').textbox('setValue',c);
                             // $('#age1_fr1').textbox('setValue',ans1);
                            // $('#age2_fr1').textbox('setValue',ans1);
                           // $('#age1_fr4').textbox('setValue',ans1);
                           // $('#age1_fr7').textbox('setValue',ans1);
                                $('#age2_fr7').textbox('setValue',ans1);
                            // $('#age1_fr7').textbox('setValue',calage);
                      }


                 });
             });

</script>




<!--   คำนวณอายุ  daiag 1   ----------------->

<script type="text/javascript">
     $(function(){
           // $("#procedure1_fr1")
          //procedure2_fr1
          //procedure3_fr1
          //procedure4_fr1
          //procedure5_fr1
          //otherprocedure_fr1

          //   else if(    $('#completed_left').is(":checked")    )

          /*
          if(   $('#procedure1_fr1').is(':checked')  )
          {
                  alert('t');
          }
          */

         $('#procedure1_fr1').bind('click',function(){
                 //alert('t');
                 $('#otherprocedure_fr1').textbox('readonly',true);
         });

                 $('#procedure2_fr1').bind('click',function(){
                 //alert('t');
                 $('#otherprocedure_fr1').textbox('readonly',true);
                  $('#otherprocedure_fr1').textbox('setValue',"");
         });

                       $('#procedure3_fr1').bind('click',function(){
                 //alert('t');
                 $('#otherprocedure_fr1').textbox('readonly',true);
                   $('#otherprocedure_fr1').textbox('setValue',"");
         });


                                $('#procedure4_fr1').bind('click',function(){
                //alert('t');
                 $('#otherprocedure_fr1').textbox('readonly',true);
                   $('#otherprocedure_fr1').textbox('setValue',"");
         });


                                         $('#procedure5_fr1').bind('click',function(){
                // alert('t');
                 $('#otherprocedure_fr1').textbox('readonly',false);
                 $('#otherprocedure_fr1').textbox('setValue',"ระบุ");
         });


     });
</script>


<!--------------8. Corrective Orthodontic Treatment ----------------->
<!--   วัน/เดือน/ปี ที่เริ่มทำการรักษา   ----------------->
<script type="text/javascript">
            //-- คำนวณอายุของบิดา --
             $(function(){
                 $('#cal1_fr8').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date_fr8').datebox('getValue')
                       var  date1=strdate.split(" ");

                        var  last1 = date1[0];
                       var  last2 = last1.split("/");
                       var  last3= last2[2];
                      // alert(last3);
                      var   Y= $('#y_fr8').textbox('getValue');

                      if( last3 > 0 )
                      {
                             var  ans1=last3 - Y;
                            //alert(ans1);
                            //  $('#age2_fr1').textbox('setValue',c);
                             // $('#age1_fr1').textbox('setValue',ans1);
                            // $('#age2_fr1').textbox('setValue',ans1);
                           // $('#age1_fr4').textbox('setValue',ans1);
                           // $('#age1_fr7').textbox('setValue',ans1);
                                $('#age1_fr8').textbox('setValue',ans1);
                            // $('#age1_fr7').textbox('setValue',calage);
                      }



                 });
             });

</script>

 <script type="text/javascript">
            //-- วัน/เดือน/ปี ที่สิ้นสุดการรักษา --
             $(function(){
                 $('#cal2_fr8').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date2_fr8').datebox('getValue')
                       var  date1=strdate.split(" ");

                                 var  last1 = date1[0];
                       var  last2 = last1.split("/");
                       var  last3= last2[2];
                      // alert(last3);
                      var   Y= $('#y_fr8').textbox('getValue');

                      if( last3 > 0 )
                      {
                             var  ans1=last3 - Y;
                            //alert(ans1);
                            //  $('#age2_fr1').textbox('setValue',c);
                             // $('#age1_fr1').textbox('setValue',ans1);
                            // $('#age2_fr1').textbox('setValue',ans1);
                           // $('#age1_fr4').textbox('setValue',ans1);
                           // $('#age1_fr7').textbox('setValue',ans1);
                                $('#age2_fr8').textbox('setValue',ans1);
                            // $('#age1_fr7').textbox('setValue',calage);
                      }


                 });
             });

</script>

<!--------------9. Orthognathic surgery ----------------->
<script type="text/javascript">
            //-- คำนวณอายุของบิดา --
             $(function(){
                 $('#cal1_fr9').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date_fr9').datebox('getValue')
                       var  date1=strdate.split(" ");


                        var  last1 = date1[0];
                       var  last2 = last1.split("/");
                       var  last3= last2[2];
                      // alert(last3);
                      var   Y= $('#y_fr9').textbox('getValue');

                      if( last3 > 0 )
                      {
                             var  ans1=last3 - Y;
                            //alert(ans1);
                            //  $('#age2_fr1').textbox('setValue',c);
                             // $('#age1_fr1').textbox('setValue',ans1);
                            // $('#age2_fr1').textbox('setValue',ans1);
                           // $('#age1_fr4').textbox('setValue',ans1);
                           // $('#age1_fr7').textbox('setValue',ans1);
                                $('#age1_fr9').textbox('setValue',ans1);
                            // $('#age1_fr7').textbox('setValue',calage);
                      }

                 });
             });

</script>

<script type="text/javascript">
            //-- คำนวณอายุของบิดา --
             $(function(){
                 $('#cal1_fr9_2').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date_fr9_2').datebox('getValue')
                       var  date1=strdate.split(" ");


                        var  last1 = date1[0];
                       var  last2 = last1.split("/");
                       var  last3= last2[2];
                      // alert(last3);
                      var   Y= $('#y_fr9').textbox('getValue');

                      if( last3 > 0 )
                      {
                             var  ans1=last3 - Y;
                            //alert(ans1);
                            //  $('#age2_fr1').textbox('setValue',c);
                             // $('#age1_fr1').textbox('setValue',ans1);
                            // $('#age2_fr1').textbox('setValue',ans1);
                           // $('#age1_fr4').textbox('setValue',ans1);
                           // $('#age1_fr7').textbox('setValue',ans1);
                                $('#age1_fr9_2').textbox('setValue',ans1);
                            // $('#age1_fr7').textbox('setValue',calage);
                      }


                 });
             });

</script>
 <script type="text/javascript">
            //-- วัน/เดือน/ปี ที่สิ้นสุดการรักษา --
             $(function(){
                 $('#cal2_fr9_2').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date2_fr9_2').datebox('getValue')
                       var  date1=strdate.split(" ");

            var  last1 = date1[0];
                       var  last2 = last1.split("/");
                       var  last3= last2[2];
                      // alert(last3);
                      var   Y= $('#y_fr9_2').textbox('getValue');

                      if( last3 > 0 )
                      {
                             var  ans1=last3 - Y;
                            //alert(ans1);
                            //  $('#age2_fr1').textbox('setValue',c);
                             // $('#age1_fr1').textbox('setValue',ans1);
                            // $('#age2_fr1').textbox('setValue',ans1);
                           // $('#age1_fr4').textbox('setValue',ans1);
                           // $('#age1_fr7').textbox('setValue',ans1);
                                $('#age2_fr9_2').textbox('setValue',ans1);
                            // $('#age1_fr7').textbox('setValue',calage);
                      }


                 });
             });

</script>
<!-- --------------------  	10. Other surgery  1 ------------------------->
<script type="text/javascript">
            //-- คำนวณอายุของบิดา --
             $(function(){
                 $('#cal1_fr10_1').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date_fr10_1').datebox('getValue')
                       var  date1=strdate.split(" ");
                       var  last1 = date1[0];
                       var  last2 = last1.split("/");
                       var  last3= last2[2];
                      // alert(last3);
                      var   Y= $('#y_fr10_1').textbox('getValue');

                      if( last3 > 0 )
                      {
                             var  ans1=last3 - Y;
                            //alert(ans1);
                            //  $('#age2_fr1').textbox('setValue',c);
                             // $('#age1_fr1').textbox('setValue',ans1);
                            // $('#age2_fr1').textbox('setValue',ans1);
                           // $('#age1_fr4').textbox('setValue',ans1);
                           // $('#age1_fr7').textbox('setValue',ans1);
                                $('#age1_fr10_1').textbox('setValue',ans1);
                            // $('#age1_fr7').textbox('setValue',calage);
                      }



                 });
             });

</script>


<!--------------11. Other dental procedure ----------------->
<script type="text/javascript">
            //-- คำนวณอายุของบิดา --
             $(function(){
                 $('#cal1_fr11_1').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date_fr11_1').datebox('getValue')
                       var  date1=strdate.split(" ");
                       var  last1 = date1[0];
                       var  last2 = last1.split("/");
                       var  last3= last2[2];
                      // alert(last3);
                      var   Y= $('#y_fr11_1').textbox('getValue');

                      if( last3 > 0 )
                      {
                             var  ans1=last3 - Y;
                            //alert(ans1);
                            //  $('#age2_fr1').textbox('setValue',c);
                             // $('#age1_fr1').textbox('setValue',ans1);
                            // $('#age2_fr1').textbox('setValue',ans1);
                           // $('#age1_fr4').textbox('setValue',ans1);
                           // $('#age1_fr7').textbox('setValue',ans1);
                                $('#age1_fr11_1').textbox('setValue',ans1);
                            // $('#age1_fr7').textbox('setValue',calage);
                      }



                 });
             });

</script>

<!--------------11. Other dental procedure   Prosthondontic ----------------->
<script type="text/javascript">
            //-- คำนวณอายุของบิดา --
             $(function(){
                 $('#cal1_fr11_2').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date_fr11_2').datebox('getValue')
                       var  date1=strdate.split(" ");
                                             var  last1 = date1[0];
                       var  last2 = last1.split("/");
                       var  last3= last2[2];
                      // alert(last3);
                      var   Y= $('#y_fr11_2').textbox('getValue');

                      if( last3 > 0 )
                      {
                             var  ans1=last3 - Y;
                            //alert(ans1);
                            //  $('#age2_fr1').textbox('setValue',c);
                             // $('#age1_fr1').textbox('setValue',ans1);
                            // $('#age2_fr1').textbox('setValue',ans1);
                           // $('#age1_fr4').textbox('setValue',ans1);
                           // $('#age1_fr7').textbox('setValue',ans1);
                                $('#age1_fr11_2').textbox('setValue',ans1);
                            // $('#age1_fr7').textbox('setValue',calage);
                      }


                 });
             });

</script>






<div id="dia10"  title="9. Other surgery " style="width:800px;height: 650px;padding: 5px;" class="easyui-dialog"     data-options="
     closed:true,
     buttons:[
     //{  text:'Save', iconCls:'icon-save'   },
     {  text:'Close', iconCls:'icon-cancel',handler:function(){  $('#dia10').dialog('close');  } }
     ]
     ">

      <div class="easyui-tabs" >
                <div title="Vestibuloplasty" style="padding:10px">

               <!---------------------    javascript ------------------->

                    <div class="easyui-panel"  style="padding: 5px;">
                        <a href="javascript:void(0)"  iconCls="icon-print"
                           onclick="
                                $('#dia_fr10_1').dialog('open');
                                $('#dg_fr10_1').datagrid('reload');
                                //  url:'<?=base_url()?>index.php/welcome/json_tr10/1/'  +      $('#id_history_patient_fr10_1').textbox('getValue')  ,
                                 $('#dg_fr10_1').datagrid({  url:'<?=base_url()?>index.php/welcome/json_tr10/1/'  +      $('#id_history_patient_fr10_1').textbox('getValue')  });
                           "
                           class="easyui-linkbutton"  style="width: 100px;height: 40px;" >ดูข้อมูล</a>
                    </div>

                    <div class="easyui-dialog"  id="dia_fr10_1"  closed="true"
                         data-options="
                            buttons:[
                               { text:'ปิด (Close)',iconCls:'icon-cancel' , handler:function(){ $('#dia_fr10_1').dialog('close');  } }
                            ]
                         "
                         style="width: 500px;height: 400px;"  title="Vestibuloplasty"    >
                        <div class="easyui-datagrid"  id="dg_fr10_1"
                              data-options="
                                 url:'<?=base_url()?>index.php/welcome/json_tr10/1/'  +      $('#id_history_patient_fr10_1').textbox('getValue')  ,
                                 singleSelect:true,
                                 rownumbers:true,
                                 columns:[[
                                    { field:'doctor' , title:'ทันตแพทย์ผู้ทำการรักษา', align:'center',   },
                                    { field:'begin_date' , title:'วัน/เดือน/ปี ที่ทำ', align:'center',   },
                                    { field:'tool' , title:'เครื่องมือที่ใช้', align:'center',   },
                                     { field:'dentalcast' , title:'Dental Casts', align:'center',   },
                                 ]],
                                 toolbar:[
                                    {  text:'View/Update', iconCls:'icon-man'  ,handler:function()
                                        {
                                                 var  row=$('#dg_fr10_1').datagrid('getSelected');

                                                 var  id=row.id_othersurgery;
                                                // $('#id_othersurger').textbox('setValue',id);
                                                // alert(id);

                                                 var  url='<?=base_url()?>index.php/welcome/edit_json_tr10/1';
                                                 $.post(url,{ id:id },function(data)
                                                     {
                                                             // alert(data);
                                                             $.each(data,function(i,k)
                                                                {
                                                                      var  doctor=k.doctor;
                                                                       //alert( doctor );
                                                                      $('#doctor_fr10_1').textbox('setValue',doctor);


                                                                      //$('#date_fr10_1').datetimebox('setValue',k.begin_date);
                                                                    var begin_date=k.begin_date;
                                                                    if(    begin_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=begin_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date_fr10_1').textbox('setValue',conv_1);
                                                                    }




                                                                      $('#tool_tr10_1').textbox('setValue',k.tool);

                                                                      var  dentalcast=k.dentalcast;

                                                                      if( dentalcast == 1 )
                                                                      {
                                                                           $('#dentalcast1_fr10_1').attr('checked',true);
                                                                       }
                                                                      else    if( dentalcast == 2 )
                                                                      {
                                                                           $('#dentalcast2_fr10_1').attr('checked',true);
                                                                       }



                                                                });
                                                     },'json');


                                        }
                                    },
                                   { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_fr10_1').datagrid('reload'); } },
                                    {  text:'Delete', iconCls:'icon-cancel', handler:function()
                                        {
                                              var  row=$('#dg_fr10_1').datagrid('getSelected');
                                              if( row )
                                               {
                                                    $.messager.confirm('ลบข้อมูล','คุณต้องการลบข้อมูล', function(r)
                                                     {
                                                           if(r)
                                                           {
                                                                   id = row.id_othersurgery;
                                                                   var  url='<?=base_url()?>index.php/welcome/del_fr10/' + id;
                                                                   //alert(url);
                                                                   $.post(url,function(){
                                                                          $('#dg_fr10_1').datagrid('reload');
                                                                   });
                                                           }
                                                     } );
                                               }
                                         }
                                     },
                                     {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr10_1').datagrid('getSelected');
                                                       var  file1=row.filename1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                       //  window.open(url);
                                                        if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr10_1').datagrid('getSelected');
                                                       var  file1=row.filename2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr10_1').datagrid('getSelected');
                                                       var  file1=row.filename3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },
                                 ]
                              "
                             ></div>
                    </div>
         <!---------------------    javascript ------------------->

     <!-------------------- begin ---------------------->
     <form id="fr10_1"  method="post" enctype="multipart/form-data" novalidate="novalidate">
     <div style="padding: 10px 5px;">

         <input class="easyui-textbox" type="hidden"  id="id_history_patient_fr10_1"   name="id_history_patient_fr10_1"  style="width:30px;height: 30px;"  readonly="true"  />
         <input class="easyui-textbox"   type="hidden"  id="y_fr10_1"   name="y_fr10_1"  style="width:50px;height: 30px;"  readonly="true"  />
          <input class="easyui-textbox"  type="hidden"  id="id_othersurger"   name="id_othersurger"  style="width:50px;height: 30px;"  readonly="true"  />



                <label>
                    ชื่อ - นามสกุล :

                        <input class="easyui-textbox"  id="name_lastname_fr10_1"  name="name_lastname_fr10_1"  style="width:200px;height: 30px;" readonly="true"  />

                </label>
            </div>


    <div style="padding: 10px 5px"  >

        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox"   id="doctor_fr10_1"   name="doctor_fr10_1"   data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div>

     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datetimebox" id="date_fr10_1" name="date_fr10_1"    style="widht:200px;height: 30px;"  />


            <a href="javascript:void(0)" id="cal1_fr10_1"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>


            <label>อายุ </label>
            <input class="easyui-textbox"  id="age1_fr10_1"  readonly="true" style="width: 50px;height: 40px;"    />
            <label>ปี </label>


        </label>
    </div>


        <div style="padding: 10px 5px"  >
        <label>
            เครื่องมือที่ใช้  : <input class="easyui-textbox"   name="tool_tr10_1"    prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
        </label>
    </div>

             <tr>
                    <td>Complication :</td>
                    <td>

                        <!--
                        <input class="easyui-textbox"  id="complication_fr10" name="complication_fr10" ></input>
                        -->
                         <input type="radio"  id="complication_fr10_y"  name="complication_fr10"  value="1" />มี
                        <input class="easyui-textbox"  id="other_complication_fr10_y" name="other_complication_fr10_y"  style="width: 100;height: 30px;"  multiple=true    />
                        <input type="radio"  id="complication_fr10_n"  name="complication_fr10"  value="2" />ไม่มี


                    </td>
    </tr>


     <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ก่อนการรักษา (Before) :  <input class="easyui-filebox"     name="fileupload1_fr10_1"   id="fileupload1_fr10_1"     data-options=" prompt:'  เลือกรูปถ่าย,x-ray ก่อนการรักษา '   "  style="width:250px;height: 40px;"   />

        </label>
    </div>

         <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ระหว่างการรักษา (During) :  <input class="easyui-filebox"     name="fileupload2_fr10_1"   id="fileupload2_fr10_1"     data-options=" prompt:'  เลือกรูปถ่าย,x-ray ก่อนการรักษา '   "  style="width:250px;height: 40px;"   />

        </label>
    </div>

             <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray หลังการรักษา (After) : <input class="easyui-filebox"     name="fileupload3_fr10_1"   id="fileupload3_fr10_1"     data-options=" prompt:'  เลือกรูปถ่าย,x-ray ก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

  <div style="padding: 10px 5px;">
        <label>
            Dental Casts :
        </label>
            <input  type="radio"  name="dentalcast_fr10_1"  id="dentalcast1_fr10_1"  value="1"  > Yes  <input  type="radio"   name="dentalcast_fr10_1"  id="dentalcast2_fr10_1"  value="2"> No

    </div>

         <div style="padding: 10px 5px;">
             <label>
                 <?=nbs(100)?>
                 <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 120px;height: 40px;"  iconCls="icon-save"  onclick="
                    $('#fr10_1').form('submit',{
                        url:'<?=base_url()?>index.php/welcome/insert_fr10_1',
                        success:function(data)
                            {
                                  // alert(data);
                                  if( data == 1 )
                                  {
                                          // $('#dia_fr10_1').dialog('open');
                                           $('#dg_fr10_1').datagrid('reload');
                                           $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลแล้ว');
                                   }
                                   else{

                                        //   $('#dia_fr10_1').dialog('open');
                                           $('#dg_fr10_1').datagrid('reload');
                                           $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                                   }
                            }
                    });
                    "   >Save/Update</a>
             </label>
         </div>

     </form>
      <!-------------------- end ---------------------->


                </div>
               <div title="Frenectomy" style="padding:10px">
      <!--  javascript ------------------------------------>
                    <div class="easyui-panel"  style="padding: 5px;">
                        <a href="javascript:void(0)"  iconCls="icon-print"
                           onclick="
                                $('#dia_fr10_2').dialog('open');
                                $('#dg_fr10_2').datagrid('reload');
                                $('#dg_fr10_2').datagrid({   url:'<?=base_url()?>index.php/welcome/json_tr10/2/' +   $('#id_history_patient_fr10_2').textbox('getValue')   });
                           "
                           class="easyui-linkbutton"  style="width: 100px;height: 40px;" >ดูข้อมูล</a>
                    </div>

                    <div class="easyui-dialog"  id="dia_fr10_2"  closed="true"
                         data-options="
                            buttons:[
                               { text:'ปิด (Close)',iconCls:'icon-cancel' , handler:function(){ $('#dia_fr10_2').dialog('close');  } }
                            ]
                         "
                         style="width: 500px;height: 400px;"  title="Frenectomy"    >
                        <div class="easyui-datagrid"  id="dg_fr10_2"
                              data-options="
                                 url:'<?=base_url()?>index.php/welcome/json_tr10/2/' +   $('#id_history_patient_fr10_2').textbox('getValue') ,
                                 singleSelect:true,
                                 rownumbers:true,
                                 columns:[[
                                    { field:'doctor' , title:'ทันตแพทย์ผู้ทำการรักษา', align:'center',   },
                                    { field:'begin_date' , title:'วัน/เดือน/ปี ที่ทำ', align:'center',   },
                                    { field:'tool' , title:'เครื่องมือที่ใช้', align:'center',   },
                                     { field:'dentalcast' , title:'Dental Casts', align:'center',   },
                                 ]],
                                 toolbar:[

                                 {  text:'View/Update', iconCls:'icon-man'  ,handler:function()
                                        {
                                                 var  row=$('#dg_fr10_2').datagrid('getSelected');

                                                 var  id=row.id_othersurgery;
                                                // $('#id_othersurger').textbox('setValue',id);
                                                // alert(id);

                                                 var  url='<?=base_url()?>index.php/welcome/edit_json_tr10/2';
                                                 $.post(url,{ id:id },function(data)
                                                     {
                                                             // alert(data);
                                                             $.each(data,function(i,k)
                                                                {
                                                                      var  doctor=k.doctor;
                                                                       //alert( doctor );
                                                                      $('#doctor_fr10_2').textbox('setValue',doctor);


                                                                      //$('#date_fr10_2').datetimebox('setValue',k.begin_date);
                                                                    var begin_date=k.begin_date;
                                                                    if(    begin_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=begin_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date_fr10_2').datetimebox('setValue',conv_1);
                                                                    }




                                                                      $('#tool_tr10_2').textbox('setValue',k.tool);

                                                                      var  dentalcast=k.dentalcast;

                                                                      if( dentalcast == 1 )
                                                                      {
                                                                           $('#dentalcast1_fr10_2').attr('checked',true);
                                                                       }
                                                                      else    if( dentalcast == 2 )
                                                                      {
                                                                           $('#dentalcast2_fr10_2').attr('checked',true);
                                                                       }
                                                                });
                                                     },'json');
                                              }

                                        }
                                        ,
                                   { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_fr10_2').datagrid('reload'); } },
                                    {  text:'Delete', iconCls:'icon-cancel', handler:function()
                                        {
                                              var  row=$('#dg_fr10_2').datagrid('getSelected');
                                              if( row )
                                               {
                                                    $.messager.confirm('ลบข้อมูล','คุณต้องการลบข้อมูล', function(r)
                                                     {
                                                           if(r)
                                                           {
                                                                   id = row.id_othersurgery;
                                                                   var  url='<?=base_url()?>index.php/welcome/del_fr10/' + id;
                                                                   //alert(url);
                                                                   $.post(url,function(){
                                                                          $('#dg_fr10_2').datagrid('reload');
                                                                   });
                                                           }
                                                     } );
                                               }
                                         }
                                     },
                                     {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr10_2').datagrid('getSelected');
                                                       var  file1=row.filename1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                       // window.open(url);
                                                          if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr10_2').datagrid('getSelected');
                                                       var  file1=row.filename2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                       //window.open(url);
                                                          if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr10_2').datagrid('getSelected');
                                                       var  file1=row.filename3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                       //window.open(url);
                                                          if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },
                                 ]
                              "
                             ></div>
                    </div>
       <!--  javascript ------------------------------------>





                         <!-------------------- begin ---------------------->
                         <form id="fr10_2"  method="post" enctype="multipart/form-data">
                              <div style="padding: 10px 5px;">

                            <input class="easyui-textbox"  id="id_history_patient_fr10_2"   name="id_history_patient_fr10_2"  style="width:30px;height: 30px;"  readonly="true"  />
                            <input class="easyui-textbox"  id="y_fr10_2"   name="y_fr10_2"  style="width:50px;height: 30px;"  readonly="true"  />

                <label>
                    ชื่อ - นามสกุล :

                         <!--  <input class="easyui-textbox"  id="id_history_patient_fr10_2"   name="id_history_patient_fr10_2"  style="width:30px;height: 30px;"  readonly="true"  /> -->
                        <input class="easyui-textbox"  id="name_lastname_fr10_2"  name="name_lastname_fr10_2"  style="width:200px;height: 30px;" readonly="true"  />

                </label>
            </div>


    <div style="padding: 10px 5px"  >

        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox"  name="doctor_fr10_2"  data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div>
     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datetimebox" id="date_fr10_2" name="date_fr10_2"  style="widht:200px;height: 30px;"  />
        </label>
    </div>

        <div style="padding: 10px 5px"  >
        <label>
            เครื่องมือที่ใช้  : <input class="easyui-textbox"   name="tool_tr10_2"   prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
        </label>
    </div>

                 <tr>
                    <td>Complication :</td>
                    <td>

                        <!--
                        <input class="easyui-textbox"  id="complication_fr10_2" name="complication_fr10_2" ></input>
                      -->

                       <input type="radio"  id="complication_fr10_2_y"  name="complication_fr10_2"  value="1" />มี
                        <input class="easyui-textbox"  id="other_complication_fr10_2_y" name="other_complication_fr10_2_y"  style="width: 100;height: 30px;"  multiple=true    />
                        <input type="radio"  id="complication_fr10_2_n"  name="complication_fr10_2"  value="2" />ไม่มี



                    </td>
    </tr>

      <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ก่อนการรักษา (Before) :  <input class="easyui-filebox"     name="fileupload1_fr10_2"   id="fileupload1_fr10_2"     data-options=" prompt:'  เลือกรูปถ่าย,x-ray ก่อนการรักษา '   "  style="width:250px;height: 40px;"   />

        </label>
    </div>

         <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ระหว่างการรักษา (During) :  <input class="easyui-filebox"     name="fileupload2_fr10_2"   id="fileupload2_fr10_2"     data-options=" prompt:'  เลือกรูปถ่าย,x-ray ก่อนการรักษา '   "  style="width:250px;height: 40px;"   />

        </label>
    </div>

             <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray หลังการรักษา (After) : <input class="easyui-filebox"     name="fileupload3_fr10_2"   id="fileupload3_fr10_2"     data-options=" prompt:'  เลือกรูปถ่าย,x-ray ก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

                          <div style="padding: 10px 5px;">
        <label>
            Dental Casts :
        </label>
            <input  type="radio"  name="dentalcast_fr10_2"  id="dentalcast1_fr10_2"  value="1"  > Yes  <input  type="radio"   name="dentalcast_fr10_2"  id="dentalcast2_fr10_2"  value="2"> No

    </div>

               <div style="padding: 10px 5px;">
             <label>
                 <?=nbs(100)?>
                 <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 120px;height: 40px;"  iconCls="icon-save"  onclick="
                    $('#fr10_2').form('submit',{
                        url:'<?=base_url()?>index.php/welcome/insert_fr10_2',
                        success:function(data)
                            {
                                   //alert(data);

                                   if( data == 1 )
                                  {
                                        //   $('#dia_fr10_2').dialog('open');
                                           $('#dg_fr10_2').datagrid('reload');
                                           $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลแล้ว');
                                   }
                                   else{

                                          // $('#dia_fr10_2').dialog('open');
                                           $('#dg_fr10_2').datagrid('reload');
                                           $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                                   }

                            }
                    });
                    "   >Save/Update</a>
             </label>
         </div>

</form>

      <!-------------------- end ---------------------->
                </div>
                 <div title="Gingivectomy" style="padding:10px">

    <!--  javascript ------------------------------------>
                    <div class="easyui-panel"  style="padding: 5px;">
                        <a href="javascript:void(0)"  iconCls="icon-print"
                           onclick="
                                $('#dia_fr10_3').dialog('open');
                                $('#dg_fr10_3').datagrid('reload');
                                 $('#dg_fr10_3').datagrid({    url:'<?=base_url()?>index.php/welcome/json_tr10/3/'  +  $('#id_history_patient_fr10_3').textbox('getValue')  });
                           "
                           class="easyui-linkbutton"  style="width: 100px;height: 40px;" >ดูข้อมูล</a>
                    </div>

                    <div class="easyui-dialog"  id="dia_fr10_3"  closed="true"
                         data-options="
                            buttons:[
                               { text:'ปิด (Close)',iconCls:'icon-cancel' , handler:function(){ $('#dia_fr10_3').dialog('close');  } }
                            ]
                         "
                         style="width: 500px;height: 400px;"  title="Gingivectomy"    >
                        <div class="easyui-datagrid"  id="dg_fr10_3"
                              data-options="
                                 url:'<?=base_url()?>index.php/welcome/json_tr10/3/'  +  $('#id_history_patient_fr10_3').textbox('getValue') ,
                                 singleSelect:true,
                                 rownumbers:true,
                                 columns:[[
                                    { field:'doctor' , title:'ทันตแพทย์ผู้ทำการรักษา', align:'center',   },
                                    { field:'begin_date' , title:'วัน/เดือน/ปี ที่ทำ', align:'center',   },
                                    { field:'tool' , title:'เครื่องมือที่ใช้', align:'center',   },
                                     { field:'dentalcast' , title:'Dental Casts', align:'center',   },
                                 ]],
                                 toolbar:[
                                  //-------------------- begin ----------------------
                                 {  text:'View/Update', iconCls:'icon-man'  ,handler:function()
                                        {
                                                 var  row=$('#dg_fr10_3').datagrid('getSelected');

                                                 var  id=row.id_othersurgery;
                                                // $('#id_othersurger').textbox('setValue',id);
                                                // alert(id);

                                                 var  url='<?=base_url()?>index.php/welcome/edit_json_tr10/3';
                                                 $.post(url,{ id:id },function(data)
                                                     {
                                                             // alert(data);
                                                             $.each(data,function(i,k)
                                                                {
                                                                      var  doctor=k.doctor;
                                                                       //alert( doctor );
                                                                      $('#doctor_fr10_3').textbox('setValue',doctor);


                                                                      //$('#date_fr10_3').datetimebox('setValue',k.begin_date);
                                                                    var begin_date=k.begin_date;
                                                                    if(    begin_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=begin_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date_fr10_3').datetimebox('setValue',conv_1);
                                                                    }




                                                                      $('#tool_tr10_3').textbox('setValue',k.tool);

                                                                      var  dentalcast=k.dentalcast;

                                                                      if( dentalcast == 1 )
                                                                      {
                                                                           $('#dentalcast1_fr10_3').attr('checked',true);
                                                                       }
                                                                      else    if( dentalcast == 2 )
                                                                      {
                                                                           $('#dentalcast2_fr10_3').attr('checked',true);
                                                                       }
                                                                });
                                                     },'json');
                                              }

                                        },
                                  //-------------------- end-------------------------
                                   { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_fr10_3').datagrid('reload'); } },
                                    {  text:'Delete', iconCls:'icon-cancel', handler:function()
                                        {
                                              var  row=$('#dg_fr10_3').datagrid('getSelected');
                                              if( row )
                                               {
                                                    $.messager.confirm('ลบข้อมูล','คุณต้องการลบข้อมูล', function(r)
                                                     {
                                                           if(r)
                                                           {
                                                                   id = row.id_othersurgery;
                                                                   var  url='<?=base_url()?>index.php/welcome/del_fr10/' + id;
                                                                   //alert(url);
                                                                   $.post(url,function(){
                                                                          $('#dg_fr10_3').datagrid('reload');
                                                                   });
                                                           }
                                                     } );
                                               }
                                         }
                                     },
                                     {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr10_3').datagrid('getSelected');
                                                       var  file1=row.filename1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr10_3').datagrid('getSelected');
                                                       var  file1=row.filename2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr10_3').datagrid('getSelected');
                                                       var  file1=row.filename3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                     //  window.open(url);
                                                        if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },
                                 ]
                              "
                             ></div>
                    </div>
       <!--  javascript ------------------------------------>

       <!-------------------- begin ---------------------->
       <form id="fr10_3"  method="post" enctype="multipart/form-data">
             <div style="padding: 10px 5px;">

                 <input class="easyui-textbox"  id="id_history_patient_fr10_3"   name="id_history_patient_fr10_3"  style="width:30px;height: 30px;"  readonly="true"  />
                 <input class="easyui-textbox"  id="y_fr10_3"   name="y_fr10_3"  style="width:50px;height: 30px;"  readonly="true"  />


                <label>
                    ชื่อ - นามสกุล :
                        <!-- <input class="easyui-textbox"  id="id_history_patient_fr10_3"   name="id_history_patient_fr10_3"  style="width:30px;height: 30px;"  readonly="true"  /> -->
                        <input class="easyui-textbox"  id="name_lastname_fr10_3"  name="name_lastname_fr10_3"  style="width:200px;height: 30px;" readonly="true"  />

                </label>
            </div>


    <div style="padding: 10px 5px"  >

        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox"  name="doctor_fr10_3"  data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div>
     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datetimebox" id="date_fr10_3" name="date_fr10_3"  style="widht:200px;height: 30px;"  />
        </label>
    </div>

        <div style="padding: 10px 5px"  >
        <label>
            เครื่องมือที่ใช้  : <input class="easyui-textbox"   name="tool_tr10_3"  prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
        </label>
    </div>


      <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ก่อนการรักษา (Before) :  <input class="easyui-filebox"     name="fileupload1_fr10_3"   id="fileupload1_fr10_3"     data-options=" prompt:'  เลือกรูปถ่าย,x-ray ก่อนการรักษา '   "  style="width:250px;height: 40px;"   />

        </label>
    </div>

         <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ระหว่างการรักษา (During) :  <input class="easyui-filebox"     name="fileupload2_fr10_3"   id="fileupload2_fr10_3"     data-options=" prompt:'  เลือกรูปถ่าย,x-ray ก่อนการรักษา '   "  style="width:250px;height: 40px;"   />

        </label>
    </div>

             <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray หลังการรักษา (After) : <input class="easyui-filebox"     name="fileupload3_fr10_3"   id="fileupload3_fr10_3"     data-options=" prompt:'  เลือกรูปถ่าย,x-ray ก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

         <div style="padding: 10px 5px;">
        <label>
            Dental Casts :
        </label>
            <input  type="radio"  name="dentalcast_fr10_3"  id="dentalcast1_fr10_3"  value="1"  > Yes  <input  type="radio"   name="dentalcast_fr10_3"  id="dentalcast2_fr10_3"  value="2"> No

    </div>


                          <div style="padding: 10px 5px;">
             <label>
                 <?=nbs(100)?>
                 <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 120px;height: 40px;"  iconCls="icon-save"  onclick="
                    $('#fr10_3').form('submit',{
                        url:'<?=base_url()?>index.php/welcome/insert_fr10_3',
                        success:function(data)
                            {
                                  //alert(data);
                                   // alert(data);
                                  if( data == 1 )
                                  {
                                        //   $('#dia_fr10_3').dialog('open');
                                           $('#dg_fr10_3').datagrid('reload');
                                           $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลแล้ว');
                                   }
                                   else{

                                        //   $('#dia_fr10_3').dialog('open');
                                           $('#dg_fr10_3').datagrid('reload');
                                           $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                                   }
                            }
                    });
                    "   >Save/Update</a>
             </label>
         </div>



       </form>
      <!-------------------- end ---------------------->
                </div>

              <div title="Torectomy" style="padding:10px">

 <!--  javascript ------------------------------------>
                    <div class="easyui-panel"  style="padding: 5px;">
                        <a href="javascript:void(0)"  iconCls="icon-print"
                           onclick="
                                $('#dia_fr10_4').dialog('open');
                                $('#dg_fr10_4').datagrid('reload');
                                   $('#dg_fr10_4').datagrid( {   url:'<?=base_url()?>index.php/welcome/json_tr10/4/'  + $('#id_history_patient_fr10_4').textbox('getValue')   });
                           "
                           class="easyui-linkbutton"  style="width: 100px;height: 40px;" >ดูข้อมูล</a>
                    </div>

                    <div class="easyui-dialog"  id="dia_fr10_4"  closed="true"
                         data-options="
                            buttons:[
                               { text:'ปิด (Close)',iconCls:'icon-cancel' , handler:function(){ $('#dia_fr10_4').dialog('close');  } }
                            ]
                         "
                         style="width: 500px;height: 400px;"  title="Torectomy"    >
                        <div class="easyui-datagrid"  id="dg_fr10_4"
                              data-options="
                                 url:'<?=base_url()?>index.php/welcome/json_tr10/4/'  + $('#id_history_patient_fr10_4').textbox('getValue') ,
                                 singleSelect:true,
                                 rownumbers:true,
                                 columns:[[
                                    { field:'doctor' , title:'ทันตแพทย์ผู้ทำการรักษา', align:'center',   },
                                    { field:'begin_date' , title:'วัน/เดือน/ปี ที่ทำ', align:'center',   },
                                    { field:'tool' , title:'เครื่องมือที่ใช้', align:'center',   },
                                     { field:'dentalcast' , title:'Dental Casts', align:'center',   },
                                 ]],
                                 toolbar:[
                                 //-------------------- begin ----------------------
                                 {  text:'View/Update', iconCls:'icon-man'  ,handler:function()
                                        {
                                                 var  row=$('#dg_fr10_4').datagrid('getSelected');

                                                 var  id=row.id_othersurgery;
                                                // $('#id_othersurger').textbox('setValue',id);
                                                // alert(id);

                                                 var  url='<?=base_url()?>index.php/welcome/edit_json_tr10/4';
                                                 $.post(url,{ id:id },function(data)
                                                     {
                                                             // alert(data);
                                                             $.each(data,function(i,k)
                                                                {
                                                                      var  doctor=k.doctor;
                                                                       //alert( doctor );
                                                                      $('#doctor_fr10_4').textbox('setValue',doctor);


                                                                      //$('#date_fr10_4').datetimebox('setValue',k.begin_date);
                                                                    var begin_date=k.begin_date;
                                                                    if(    begin_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=begin_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date_fr10_4').datetimebox('setValue',conv_1);
                                                                    }




                                                                      $('#tool_tr10_4').textbox('setValue',k.tool);

                                                                      var  dentalcast=k.dentalcast;

                                                                      if( dentalcast == 1 )
                                                                      {
                                                                           $('#dentalcast1_fr10_4').attr('checked',true);
                                                                       }
                                                                      else    if( dentalcast == 2 )
                                                                      {
                                                                           $('#dentalcast2_fr10_4').attr('checked',true);
                                                                       }
                                                                });
                                                     },'json');
                                              }

                                        },
                                  //-------------------- end-------------------------

                                   { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_fr10_4').datagrid('reload'); } },
                                    {  text:'Delete', iconCls:'icon-cancel', handler:function()
                                        {
                                              var  row=$('#dg_fr10_4').datagrid('getSelected');
                                              if( row )
                                               {
                                                    $.messager.confirm('ลบข้อมูล','คุณต้องการลบข้อมูล', function(r)
                                                     {
                                                           if(r)
                                                           {
                                                                   id = row.id_othersurgery;
                                                                   var  url='<?=base_url()?>index.php/welcome/del_fr10/' + id;
                                                                   //alert(url);
                                                                   $.post(url,function(){
                                                                          $('#dg_fr10_4').datagrid('reload');
                                                                   });
                                                           }
                                                     } );
                                               }
                                         }
                                     },
                                     {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr10_4').datagrid('getSelected');
                                                       var  file1=row.filename1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr10_4').datagrid('getSelected');
                                                       var  file1=row.filename2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                       //window.open(url);
                                                          if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr10_4').datagrid('getSelected');
                                                       var  file1=row.filename3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                       //window.open(url);
                                                          if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },
                                 ]
                              "
                             ></div>
                    </div>
       <!--  javascript ------------------------------------>

      <!-------------------- begin ---------------------->
      <form id="fr10_4"  method="post" enctype="multipart/form-data">
             <div style="padding: 10px 5px;">

                 <input class="easyui-textbox"  id="id_history_patient_fr10_4"   name="id_history_patient_fr10_4"  style="width:30px;height: 30px;"  readonly="true"  />
                 <input class="easyui-textbox"  id="y_fr10_4"   name="y_fr10_4"  style="width:50px;height: 30px;"  readonly="true"  />

                <label>
                    ชื่อ - นามสกุล :
                        <input class="easyui-textbox"  id="name_lastname_fr10_4"  name="name_lastname_fr10_4"  style="width:200px;height: 30px;" readonly="true"  />

                </label>
            </div>


    <div style="padding: 10px 5px"  >

        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox"  name="doctor_fr10_4"   data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div>
     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datetimebox" id="date_fr10_4" name="date_fr10_4"  style="widht:200px;height: 30px;"  />
        </label>
    </div>

        <div style="padding: 10px 5px"  >
        <label>
            เครื่องมือที่ใช้  : <input class="easyui-textbox"    name="tool_tr10_4"    prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
        </label>
    </div>


    <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ก่อนการรักษา (Before) :  <input class="easyui-filebox"     name="fileupload1_fr10_4"   id="fileupload1_fr10_4"     data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />

        </label>
    </div>

         <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ระหว่างการรักษา (During) :  <input class="easyui-filebox"     name="fileupload2_fr10_4"   id="fileupload2_fr10_4"     data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />

        </label>
    </div>

             <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray หลังการรักษา (After) : <input class="easyui-filebox"     name="fileupload3_fr10_4"   id="fileupload3_fr10_4"     data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>



        <div style="padding: 10px 5px;">
        <label>
            Dental Casts :
        </label>
            <input  type="radio"  name="dentalcast_fr10_4"  id="dentalcast1_fr10_4"  value="1"  > Yes  <input  type="radio"   name="dentalcast_fr10_4"  id="dentalcast2_fr10_4"  value="2"> No

    </div>


           <div style="padding: 10px 5px;">
             <label>
                 <?=nbs(100)?>
                 <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 120px;height: 40px;"  iconCls="icon-save"  onclick="
                    $('#fr10_4').form('submit',{
                        url:'<?=base_url()?>index.php/welcome/insert_fr10_4',
                        success:function(data)
                            {
                                 // alert(data);
                                 if( data == 1 )
                                  {
                                        //   $('#dia_fr10_4').dialog('open');
                                           $('#dg_fr10_4').datagrid('reload');
                                           $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลแล้ว');
                                   }
                                   else{

                                        //   $('#dia_fr10_4').dialog('open');
                                           $('#dg_fr10_4').datagrid('reload');
                                           $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                                   }
                            }
                    });
                    "   >Save/Update</a>
             </label>
         </div>

                               </form>
      <!-------------------- end ---------------------->
                </div>

                <div title="Oronasal fistula closure" style="padding:10px">
   <!--  javascript ------------------------------------>
                    <div class="easyui-panel"  style="padding: 5px;">
                        <a href="javascript:void(0)"  iconCls="icon-print"
                           onclick="
                                $('#dia_fr10_5').dialog('open');
                                $('#dg_fr10_5').datagrid('reload');
                                   $('#dg_fr10_5').datagrid({     url:'<?=base_url()?>index.php/welcome/json_tr10/5/' +   $('#id_history_patient_fr10_5').textbox('getValue')  });
                           "
                           class="easyui-linkbutton"  style="width: 100px;height: 40px;" >ดูข้อมูล</a>
                    </div>

                    <div class="easyui-dialog"  id="dia_fr10_5"  closed="true"
                         data-options="
                            buttons:[
                               { text:'ปิด (Close)',iconCls:'icon-cancel' , handler:function(){ $('#dia_fr10_5').dialog('close');  } }
                            ]
                         "
                         style="width: 500px;height: 400px;"  title="Oronasal fistula closure"    >
                        <div class="easyui-datagrid"  id="dg_fr10_5"
                              data-options="
                                 url:'<?=base_url()?>index.php/welcome/json_tr10/5/' +   $('#id_history_patient_fr10_5').textbox('getValue') ,
                                 singleSelect:true,
                                 rownumbers:true,
                                 columns:[[
                                    { field:'doctor' , title:'ทันตแพทย์ผู้ทำการรักษา', align:'center',   },
                                    { field:'begin_date' , title:'วัน/เดือน/ปี ที่ทำ', align:'center',   },
                                    { field:'tool' , title:'เครื่องมือที่ใช้', align:'center',   },
                                     { field:'dentalcast' , title:'Dental Casts', align:'center',   },
                                 ]],
                                 toolbar:[
                                 //-------------------- begin ----------------------
                                 {  text:'View/Update', iconCls:'icon-man'  ,handler:function()
                                        {
                                                 var  row=$('#dg_fr10_5').datagrid('getSelected');

                                                 var  id=row.id_othersurgery;
                                                // $('#id_othersurger').textbox('setValue',id);
                                                // alert(id);

                                                 var  url='<?=base_url()?>index.php/welcome/edit_json_tr10/5';
                                                 $.post(url,{ id:id },function(data)
                                                     {
                                                             // alert(data);
                                                             $.each(data,function(i,k)
                                                                {
                                                                      var  doctor=k.doctor;
                                                                       //alert( doctor );
                                                                      $('#doctor_fr10_5').textbox('setValue',doctor);


                                                                      //$('#date_fr10_5').datetimebox('setValue',k.begin_date);
                                                                    var begin_date=k.begin_date;
                                                                    if(    begin_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=begin_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date_fr10_5').datetimebox('setValue',conv_1);
                                                                    }




                                                                      $('#tool_tr10_5').textbox('setValue',k.tool);

                                                                      var  dentalcast=k.dentalcast;

                                                                      if( dentalcast == 1 )
                                                                      {
                                                                           $('#dentalcast1_fr10_5').attr('checked',true);
                                                                       }
                                                                      else    if( dentalcast == 2 )
                                                                      {
                                                                           $('#dentalcast2_fr10_5').attr('checked',true);
                                                                       }
                                                                });
                                                     },'json');
                                              }

                                        },
                                  //-------------------- end-------------------------

                                   { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_fr10_5').datagrid('reload'); } },
                                    {  text:'Delete', iconCls:'icon-cancel', handler:function()
                                        {
                                              var  row=$('#dg_fr10_5').datagrid('getSelected');
                                              if( row )
                                               {
                                                    $.messager.confirm('ลบข้อมูล','คุณต้องการลบข้อมูล', function(r)
                                                     {
                                                           if(r)
                                                           {
                                                                   id = row.id_othersurgery;
                                                                   var  url='<?=base_url()?>index.php/welcome/del_fr10/' + id;
                                                                   //alert(url);
                                                                   $.post(url,function(){
                                                                          $('#dg_fr10_5').datagrid('reload');
                                                                   });
                                                           }
                                                     } );
                                               }
                                         }
                                     },
                                     {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr10_5').datagrid('getSelected');
                                                       var  file1=row.filename1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr10_5').datagrid('getSelected');
                                                       var  file1=row.filename2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr10_5').datagrid('getSelected');
                                                       var  file1=row.filename3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                     //  window.open(url);
                                                        if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },
                                 ]
                              "
                             ></div>
                    </div>
       <!--  javascript ------------------------------------>

     <!-------------------- begin ---------------------->
     <form id="fr10_5"  method="post" enctype="multipart/form-data">
                  <div style="padding: 10px 5px;">

                       <input class="easyui-textbox"  id="id_history_patient_fr10_5"   name="id_history_patient_fr10_5"  style="width:30px;height: 30px;"  readonly="true"  />
                       <input class="easyui-textbox"  id="y_fr10_5"   name="y_fr10_5"  style="width:50px;height: 30px;"  readonly="true"  />

                <label>
                    ชื่อ - นามสกุล :
                        <input class="easyui-textbox"  id="name_lastname_fr10_5"  name="name_lastname_fr10_5"  style="width:200px;height: 30px;" readonly="true"  />

                </label>
            </div>


    <div style="padding: 10px 5px"  >

        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox" name="doctor_fr10_5"  data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div>
     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datetimebox" id="date_fr10_5" name="date_fr10_5"  style="widht:200px;height: 30px;"  />
        </label>
    </div>

        <div style="padding: 10px 5px"  >
        <label>
            เครื่องมือที่ใช้  : <input class="easyui-textbox"    name="tool_tr10_5"   prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
        </label>
    </div>


     <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ก่อนการรักษา (Before) :  <input class="easyui-filebox"     name="fileupload1_fr10_5"   id="fileupload1_fr10_5"     data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />

        </label>
    </div>

         <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ระหว่างการรักษา (During) :  <input class="easyui-filebox"     name="fileupload2_fr10_5"   id="fileupload2_fr10_5"     data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />

        </label>
    </div>

             <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray หลังการรักษา (After) : <input class="easyui-filebox"     name="fileupload3_fr10_5"   id="fileupload3_fr10_5"     data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>



        <div style="padding: 10px 5px;">
        <label>
            Dental Casts :
        </label>
            <input  type="radio"  name="dentalcast_fr10_5"  id="dentalcast1_fr10_5"  value="1"  > Yes  <input  type="radio"   name="dentalcast_fr10_5"  id="dentalcast2_fr10_5"  value="2"> No

    </div>

          <div style="padding: 10px 5px;">
             <label>
                 <?=nbs(100)?>
                 <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 120px;height: 40px;"  iconCls="icon-save"  onclick="
                    $('#fr10_5').form('submit',{
                        url:'<?=base_url()?>index.php/welcome/insert_fr10_5',
                        success:function(data)
                            {
                                  //alert(data);
                                    if( data == 1 )
                                  {
                                        //   $('#dia_fr10_5').dialog('open');
                                           $('#dg_fr10_5').datagrid('reload');
                                           $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลแล้ว');
                                   }
                                   else{

                                        //   $('#dia_fr10_5').dialog('open');
                                           $('#dg_fr10_5').datagrid('reload');
                                           $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                                   }
                            }
                    });
                    "   >Save/Update</a>
             </label>
         </div>

     </form>
      <!-------------------- end ---------------------->
                </div>

                <div title="อื่นๆ " style="padding:10px">
                    <!--  javascript ------------------------------------>
                    <div class="easyui-panel"  style="padding: 5px;">
                        <a href="javascript:void(0)"  iconCls="icon-print"
                           onclick="
                                $('#dia_fr10_6').dialog('open');
                                $('#dg_fr10_6').datagrid('reload');
                                   $('#dg_fr10_6').datagrid({   url:'<?=base_url()?>index.php/welcome/json_tr10/6/' +   $('#id_history_patient_fr10_6').textbox('getValue')  });
                           "
                           class="easyui-linkbutton"  style="width: 100px;height: 40px;" >ดูข้อมูล</a>
                    </div>

                    <div class="easyui-dialog"  id="dia_fr10_6"  closed="true"
                         data-options="
                            buttons:[
                               { text:'ปิด (Close)',iconCls:'icon-cancel' , handler:function(){ $('#dia_fr10_6').dialog('close');  } }
                            ]
                         "
                         style="width: 500px;height: 400px;"  title="อื่นๆ "    >
                        <div class="easyui-datagrid"  id="dg_fr10_6"
                              data-options="
                                 url:'<?=base_url()?>index.php/welcome/json_tr10/6/' +   $('#id_history_patient_fr10_6').textbox('getValue') ,
                                 singleSelect:true,
                                 rownumbers:true,
                                 columns:[[
                                    { field:'doctor' , title:'ทันตแพทย์ผู้ทำการรักษา', align:'center',   },
                                    { field:'begin_date' , title:'วัน/เดือน/ปี ที่ทำ', align:'center',   },
                                    { field:'tool' , title:'เครื่องมือที่ใช้', align:'center',   },
                                     { field:'dentalcast' , title:'Dental Casts', align:'center',   },
                                 ]],
                                 toolbar:[

                                  //-------------------- begin ----------------------
                                 {  text:'View/Update', iconCls:'icon-man'  ,handler:function()
                                        {
                                                 var  row=$('#dg_fr10_6').datagrid('getSelected');

                                                 var  id=row.id_othersurgery;
                                                // $('#id_othersurger').textbox('setValue',id);
                                                // alert(id);

                                                 var  url='<?=base_url()?>index.php/welcome/edit_json_tr10/6';
                                                 $.post(url,{ id:id },function(data)
                                                     {
                                                             // alert(data);
                                                             $.each(data,function(i,k)
                                                                {
                                                                      var  doctor=k.doctor;
                                                                       //alert( doctor );
                                                                      $('#doctor_fr10_6').textbox('setValue',doctor);


                                                                      //$('#date_fr10_6').datetimebox('setValue',k.begin_date);
                                                                    var begin_date=k.begin_date;
                                                                    if(    begin_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=begin_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date_fr10_6').datetimebox('setValue',conv_1);
                                                                    }




                                                                      $('#tool_tr10_6').textbox('setValue',k.tool);

                                                                      var  dentalcast=k.dentalcast;

                                                                      if( dentalcast == 1 )
                                                                      {
                                                                           $('#dentalcast1_fr10_6').attr('checked',true);
                                                                       }
                                                                      else    if( dentalcast == 2 )
                                                                      {
                                                                           $('#dentalcast2_fr10_6').attr('checked',true);
                                                                       }
                                                                });
                                                     },'json');
                                              }

                                        },
                                  //-------------------- end-------------------------

                                   { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_fr10_6').datagrid('reload'); } },
                                    {  text:'Delete', iconCls:'icon-cancel', handler:function()
                                        {
                                              var  row=$('#dg_fr10_6').datagrid('getSelected');
                                              if( row )
                                               {
                                                    $.messager.confirm('ลบข้อมูล','คุณต้องการลบข้อมูล', function(r)
                                                     {
                                                           if(r)
                                                           {
                                                                   id = row.id_othersurgery;
                                                                   var  url='<?=base_url()?>index.php/welcome/del_fr10/' + id;
                                                                   //alert(url);
                                                                   $.post(url,function(){
                                                                          $('#dg_fr10_6').datagrid('reload');
                                                                   });
                                                           }
                                                     } );
                                               }
                                         }
                                     },
                                     {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr10_6').datagrid('getSelected');
                                                       var  file1=row.filename1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr10_6').datagrid('getSelected');
                                                       var  file1=row.filename2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr10_6').datagrid('getSelected');
                                                       var  file1=row.filename3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                     //  window.open(url);
                                                        if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },
                                 ]
                              "
                             ></div>
                    </div>
       <!--  javascript ------------------------------------>
       <!-------------------- begin ---------------------->
       <form id="fr10_6"  method="post"   enctype="multipart/form-data"  >
                         <div style="padding: 10px 5px;">

                    <input class="easyui-textbox"  id="id_history_patient_fr10_6"   name="id_history_patient_fr10_6"  style="width:30px;height: 30px;"  readonly="true"  />
                    <input class="easyui-textbox"  id="y_fr10_6"   name="y_fr10_6"  style="width:50px;height: 30px;"  readonly="true"  />

                <label>
                    ชื่อ - นามสกุล :
                        <input class="easyui-textbox"  id="name_lastname_fr10_6"  name="name_lastname_fr10_6"  style="width:200px;height: 30px;" readonly="true"  />

                </label>
            </div>


       <div style="padding: 10px 5px"  >
           อื่นๆ : <input class="easyui-textbox"  name="other_fr11_6"  id="other_fr11_6"  style="width: 200px;height: 30px;"    />

       </div>


    <div style="padding: 10px 5px"  >

        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox" name="doctor_fr10_6"  data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div>
     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datetimebox" id="date_fr10_6" name="date_fr10_6"  style="widht:200px;height: 30px;"  />
        </label>
    </div>

        <div style="padding: 10px 5px"  >
        <label>
            เครื่องมือที่ใช้  : <input class="easyui-textbox"    name="tool_tr10_6"    prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
        </label>
    </div>


   <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ก่อนการรักษา (Before) :  <input class="easyui-filebox"     name="fileupload1_fr10_6"   id="fileupload1_fr10_6"     data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />

        </label>
    </div>

         <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ระหว่างการรักษา (During) :  <input class="easyui-filebox"     name="fileupload2_fr10_6"   id="fileupload2_fr10_6"     data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />

        </label>
    </div>

             <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray หลังการรักษา (After) : <input class="easyui-filebox"     name="fileupload3_fr10_6"   id="fileupload3_fr10_6"     data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>


       <div style="padding: 10px 5px;">
        <label>
            Dental Casts :
        </label>
            <input  type="radio"  name="dentalcast_fr10_6"  id="dentalcast1_fr10_6"  value="1"  > Yes  <input  type="radio"   name="dentalcast_fr10_6"  id="dentalcast2_fr10_6"  value="2"> No

    </div>

            <div style="padding: 10px 5px;">
             <label>
                 <?=nbs(100)?>
                 <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 120px;height: 40px;"  iconCls="icon-save"  onclick="
                    $('#fr10_6').form('submit',{
                        url:'<?=base_url()?>index.php/welcome/insert_fr10_6',
                        success:function(data)
                            {
                                   //alert(data);
                                    if( data == 1 )
                                  {
                                        //   $('#dia_fr10_6').dialog('open');
                                           $('#dg_fr10_6').datagrid('reload');
                                           $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลแล้ว');
                                   }
                                   else{

                                        //   $('#dia_fr10_6').dialog('open');
                                           $('#dg_fr10_6').datagrid('reload');
                                           $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                                   }
                            }
                    });
                    "   >๊Save/Update</a>
             </label>
         </div>


       </form>
      <!-------------------- end ---------------------->
                </div>

            </div>







</div>


<div id="dia9" title="8. Orthognathic surgery "    class="easyui-dialog" style="width:600px;height: 700px;left:10px;top: 10px;padding: 5px  5px  ;"  data-options="
     closed:true,

     ">





    <div class="easyui-tabs" style="width:700px;" >
        <div title=" Orthognathic surgery" style="padding:10px">

            <div class="easyui-panel" style="padding:3px;"  >
                <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width:100px;height: 40px;" iconCls="icon-print"  onclick="
                         $('#preview_fr9').dialog('open');
                         //$('#dg_fr9').datagrid('reload');
                         // #   http://127.0.0.1/dental/index.php/welcome/json_tr9
                           // $('#preview_fr9').datagrid('reload');
                           // #   http://127.0.0.1/dental/index.php/welcome/json_tr9
                          $('#dg_fr9').datagrid({
                              url:'<?=base_url()?>index.php/welcome/json_tr9/'  +  $('#id_history_patient_fr9').textbox('getValue')    ,
                       singleSelect:true,
                       rownumbers:true,
                       columns:[[
                           {  field:'doctor',  title: ' แพทย์ผู้ทำการรักษา ' ,align:'center' },

                           {  field:'begin_date',  title: ' วัน/เดือน/ปี ที่ทำการรักษา  ' ,align:'center' },
                           {  field:'goslon',  title: ' Classification of GOSLON  ' ,align:'center' },
                           {  field:'incisor',  title: ' Incisor classification of malocclusion  ' ,align:'center' },
                           {  field:'skeletal',  title: ' Skeletal classicfication  ' ,align:'center' },
                           {  field:'technic',  title: ' เทคนิคการผ่าตัด  Maxilla ' ,align:'center' },
                           {  field:'othertechnic',  title: ' Maxilla ระบุ ' ,align:'center' },
                            {  field:'mandible',  title: ' Mandible ' ,align:'center' },
                            {  field:'othermandible',  title: ' Mandible ระบุ ' ,align:'center' },
                            {  field:'tool',  title: ' ชนิดเครื่องมือ ' ,align:'center' },
                             {  field:'dentalcast',  title: ' Dental Casts ' ,align:'center' },

                       ]],
                       toolbar:[
                           {  text:'View/Update', iconCls:'icon-man', handler:function()
                                  {
                                          var row=$('#dg_fr9').datagrid('getSelected');
                                          var  id=row.id_orthognathic;
                                          $('#id_orthognathic').textbox('setValue',id);

                                          if( id > 0  &&  row )
                                          {
                                              var  url='<?=base_url()?>index.php/welcome/edit_json9/';
                                              $.post(url,{ id:id },function(data)
                                                    {
                                                           $.each(data,function(i,k)
                                                            {



                                                                 //  $('#doctor_fr9').textbox('setValue',k.doctor);


                                                                   // $('#date_fr9').datetimebox('setValue',k.begin_date);
                                                                    var begin_date=k.begin_date;
                                                                    if(    begin_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=begin_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date_fr9').textbox('setValue',conv_1);
                                                                    }


                                                                   $('#goslon_fr9').combobox('setValue',k.goslon);
                                                                   $('#incisor_fr9').combobox('setValue',k.incisor);
                                                                   var  skeletal=k.skeletal;
                                                                   if( skeletal == 1 )
                                                                   {
                                                                        $('#skeletal1_fr9').attr('checked',true);
                                                                   }
                                                                    else   if( skeletal == 2 )
                                                                   {
                                                                        $('#skeletal2_fr9').attr('checked',true);
                                                                   }
                                                                   else   if( skeletal == 3 )
                                                                   {
                                                                        $('#skeletal3_fr9').attr('checked',true);
                                                                   }

                                                                   var  technic=k.technic;
                                                                   if( technic ==1)
                                                                   {
                                                                         $('#maxilla_fr9').attr('checked',true);
                                                                   }

                                                                   $('#othertechnic_fr9').textbox('setValue',k.othertechnic);

                                                                   var mandible=k.mandible;

                                                                   if( mandible == 1 )
                                                                   {
                                                                         $('#mandible_fr9').attr('checked',true);
                                                                   }


                                                                 $('#othermandible_fr9').textbox('setValue',k.othermandible);

                                                                  $('#tool_fr9').textbox('setValue',k.tool);



                                                                 var  dentalcast=k.dentalcast;
                                                                 if( dentalcast == 1 )
                                                                 {
                                                                       $('#dentalcast1_fr9').attr('checked',true);
                                                                 }
                                                                 else if( dentalcast == 2 )
                                                                 {
                                                                      $('#dentalcast2_fr9').attr('checked',true);
                                                                 }

                                                            });

                                                    },'json');
                                          }
                                   }
                           },
                           {  text:'Reload',iconCls:'icon-reload', handler:function(){ $('#dg_fr9').datagrid('reload');  } },
                           {  text:'Delete',iconCls:'icon-remove',handler:function(){
                                   var row=$('#dg_fr9').datagrid('getSelected');
                                   if( row )
                                   {
                                        var  id=row.id_orthognathic;
                                        //alert(id);
                                           var  url='<?=base_url()?>index.php/welcome/del_fr9/' + id;
                                           $.messager.confirm('ลบข้อมูล','คุณแน่ใจว่าต้องการลบข้อมูล',function(r)
                                                {
                                                       if( r )
                                                       {
                                                               $.post(url,function(data)
                                                                  {
                                                                           //if( data == 1 )
                                                                          // {
                                                                                  //$.messager.alert('สถานะการลบข้อมูล','ข้อมูลถูกลบแล้ว');
                                                                                  $('#dg_fr9').datagrid('reload');
                                                                           //}
                                                                           //else{
                                                                              //   $.messager.alert('สถานะการลบข้อมูล','การข้อมูลถูกลบแล้ว');
                                                                          // }
                                                                  });
                                                       }
                                                });

                                   }

                           }
                          },
                           {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr9').datagrid('getSelected');
                                                       var  file1=row.file1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr9').datagrid('getSelected');
                                                       var  file1=row.file2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                     //  window.open(url);
                                                        if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr9').datagrid('getSelected');
                                                       var  file1=row.file3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                     //  window.open(url);
                                                        if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },
                       ]
                          });
                   "   >ดูข้อมูล</a>

                <div class="easyui-dialog"  closed="true" id="preview_fr9" title="Orthognathic surgery ( Main )"
                     data-options="
                     resizable:true,
                     buttons:[
                         { text:' ปิด (Close) '  ,iconCls:'icon-cancel',handler:function(){  $('#preview_fr9').dialog('close');  } },


                       ]

                     "
                     style="width:580px;height: 300px;" >


                    <div class="easyui-datagrid"   id="dg_fr9"  data-options="        "    ></div>

                </div>

            </div>




            <!---------------------- begin ------------------------------------------>
            <form id="fr9"  method="post" enctype="multipart/form-data">

                      <div style="padding: 10px 5px;">
                          <input class="easyui-textbox"  id="y_fr9"   name="y_fr9"  style="width:50px;height: 30px;"  readonly="true"  />
                          <input class="easyui-textbox"  id="id_history_patient_fr9"   name="id_history_patient_fr9"  style="width:30px;height: 30px;"  readonly="true"  />
                          <input class="easyui-textbox"  id="id_orthognathic"   name="id_orthognathic"  style="width:30px;height: 30px;"  readonly="true"  />



                <label>
                    ชื่อ - นามสกุล :
                        <input class="easyui-textbox"  id="name_lastname_fr9"  name="name_lastname_fr9"  style="width:200px;height: 30px;" readonly="true"  />

                </label>
            </div>



    <div style="padding: 10px 5px;">
        <label>
            แพทย์ผู้ทำการรักษา : <input class="easyui-textbox"   id="doctor_fr9"   name="doctor_fr9"    data-options=" prompt:'เลือกแพทย์ผู้ทำการรักษา '   "  style="width:200px;height: 40px;"      />
        </label>
    </div>
    <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่ทำการรักษา : <input class="easyui-datetimebox"  id="date_fr9"  name="date_fr9"  style="width:200px;height: 40px;"  />


            <a href="javascript:void(0)"  class="easyui-linkbutton"  id="cal1_fr9"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>


            <label>อายุ </label>
            <input class="easyui-textbox"  readonly="true"  id="age1_fr9" style="width: 50px;height: 40px;"    />
              <label>ปี </label>

        </label>
    </div>


    <!--
           <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่สิ้นสุดการรักษา : <input class="easyui-datebox" style="width:200px;height: 40px;"  />
        </label>
    </div>
    -->





    <div style="padding: 10px 5px;">
              Classification of GOSLON  :
                </td>
                <td>
                    <select class="easyui-combobox"  id="goslon_fr9"   name="goslon_fr9"   style="width:200px;height: 40px;"   >
                      <option  >เลือก Classification</option>
                       <option value="1">Group 1</option>
                        <option value="2">Group 2</option>
                        <option value="3">Group 3</option>
                        <option value="4">Group 4</option>
                        <option value="5">Group 5</option>
                </select>
    </div>

    <div style="padding: 10px 5px;">
        <label>
            Incisor classification of malocclusion :

            <!--
            <input class="easyui-combobox" data-options=" prompt:' Angle \'s classicfication '   "  style="width:200px;height: 40px;"   />
             -->

             <select class="easyui-combobox"  id="incisor_fr9"  name="incisor_fr9"   style="width:200px;height: 40px;"   >
                       <option value="1">I</option>
               <option value="2">II div 1</option>
                       <option value="3">II div 2</option>
               <option value="4">III</option>

                </select>

        </label>
    </div>

    <div style="padding: 10px 5px;">
        <label>
            Skeletal  classicfication :

            <!--
            <input class="easyui-combobox" data-options=" prompt:' Skeleton  classicfication '   "  style="width:200px;height: 40px;"   />
            -->



            <input type="radio"    name="skeletal_fr9"    id="skeletal1_fr9"    value="1"  />  I

                       <input type="radio"    name="skeletal_fr9"    id="skeletal2_fr9"  value="2"   />  II



                    <input type="radio"  name="skeletal_fr9"    id="skeletal3_fr9"   value="3"   />  III


            </label>
    </div>

      <div style="padding: 10px 5px;">
        <label>
            เทคนิคการผ่าตัด :

            <input type="radio"   name="technic_fr9"   id="maxilla_fr9"  value="1"  > Maxilla    ระบุ  : <input  class="easyui-textbox"     name="othertechnic_fr9"  id="othertechnic_fr9"   style="width: 100px;height: 30px;"   />

            <input type="radio"  name="mandible_fr9"  id="mandible_fr9" value="1"  > Mandible  ระบุ  : <input  class="easyui-textbox"  style="width: 100px;height: 30px;"  id="othermandible_fr9"  name="othermandible_fr9"  />


            <!--
            <input class="easyui-combobox" data-options=" prompt:'  เลือกเทคนิคการผ่าตัด '   "  style="width:200px;height: 40px;"   />
            -->



        </label>
    </div>

    <div style="padding: 10px 5px;">
        <label>
            ชนิดเครื่องมือ : <input class="easyui-textbox"   style="width: 200px;height: 30px;"   id="tool_fr9"  name="tool_fr9"   />
        </label>
    </div>

    <tr>
                    <td>Complication :</td>
                    <td>

                        <!--
                        <input class="easyui-textbox"  id="complication_fr9" name="complication_fr9" ></input>
                        -->

                         <input type="radio"  id="complication_fr9_y"  name="complication_fr9"  value="1" />มี
                        <input class="easyui-textbox"  id="other_complication_fr9_y" name="other_complication_fr9_y"  style="width: 100;height: 30px;"  multiple=true    />
                        <input type="radio"  id="complication_fr9_n"  name="complication_fr9"  value="2" />ไม่มี



                    </td>
    </tr>


    <div style="padding: 10px 5px;">
        <label>
            รูปถ่าย,x-ray ก่อนการรักษา (Before) : <input class="easyui-filebox"     name="fileupload1_fr9"   id="fileupload1_fr9"     data-options=" prompt:'  เลือกรูปถ่าย,x-ray ก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

        <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ระหว่างการรักษา (During) : <input class="easyui-filebox"     name="fileupload2_fr9"   id="fileupload2_fr9"    data-options=" prompt:'  เลือกรูปถ่าย,x-ray ระหว่างการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

        <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray หลังการรักษา (After) : <input class="easyui-filebox"     name="fileupload3_fr9"   id="fileupload3_fr9"     data-options=" prompt:'  เลือกรูปถ่าย,x-ray หลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

    <div style="padding: 10px 5px;">
        <label>
            Dental Casts : <input  type="radio"    id="dentalcast1_fr9"      name="dentalcast_fr9"   value="1"  /> Yes  <input  type="radio"     name="dentalcast_fr9"     id="dentalcast2_fr9"    value="2"   /> No
        </label>
    </div>




    <div style="padding: 10px 120px;">
        <a href="javascript:void(0)"  iconCls="icon-save"  style="width:120px;height: 40px"   class="easyui-linkbutton"  onclick="
                 //alert('t');
                 $('#fr9').form('submit',{
                     url:'<?=base_url()?>index.php/welcome/insert_fr9',
                     success:function(data)
                     {
                            //alert(data);
                            if( data == 1 )
                            {
                                //   $('#preview_fr9').dialog('open');
                                   $('#dg_fr9').datagrid('reload');
                                   $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลแล้ว');
                            }else
                            {
                                    $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                            }
                     }

                 });
           ">Save/Update</a>
          <a href="javascript:void(0)"  iconCls="icon-cancel"   style="width:90px;height: 40px"  onclick=" $('#dia9').dialog('close');  "  class="easyui-linkbutton">Close</a>
    </div>
    </form>
      <!---------------------- end ------------------------------------------>
        </div>

        <div title="Distraction" style="padding:10px">

            <div class="easyui-panel"  style="padding: 5px;">
                <a href="javascript:void(0)"   class="easyui-linkbutton"   iconCls="icon-print"   style="width: 100px;height: 40px;"  onclick="
                        $('#dia_fr9_b').dialog('open');
                       // $('#dg_fr9_2').datagrid('reload');
                          // url:'<?=base_url()?>index.php/welcome/json_tr9_2/'  +      $('#id_history_patient_fr9_2').textbox('getValue')  ,
                         $('#dg_fr9_2').datagrid({  url:'<?=base_url()?>index.php/welcome/json_tr9_2/'  +      $('#id_history_patient_fr9_2').textbox('getValue')   });
                   "  >ดูข้อมูล</a>
            </div>
            <div class="easyui-dialog"   id="dia_fr9_b"   data-options=" buttons:[ { text:'ปิด (Close)',iconCls:'icon-cancel',  handler:function(){ $('#dia_fr9_b').dialog('close');  }  } ]   "   style="width: 600px;height: 300px;"  closed="true"  title=" Distraction "   >
                <div class="easyui-datagrid"  id="dg_fr9_2"
                     data-options="
                     url:'<?=base_url()?>index.php/welcome/json_tr9_2/'  +      $('#id_history_patient_fr9_2').textbox('getValue')  ,
                      singleSelect:true,
                      rownumbers:true,
                      columns:[[
                       { field:'doctor',title:'แพทย์ผู้ทำการรักษา ' ,align:'center',  },
                       { field:'begin_date',title:'วัน/เดือน/ปี ที่ทำการรักษา' ,align:'center',  },
                       { field:'end_date',title:'วัน/เดือน/ปี ที่สิ้นสุดการรักษา' ,align:'center',  },
                       { field:'goslon',title:'Classification of GOSLON' ,align:'center',  },
                       { field:'incisor',title:'Incisor classification of malocclusion' ,align:'center',  },
                       { field:'skeletal',title:'Skeletal classicfication' ,align:'center',  },
                       { field:'technic',title:'เทคนิคการผ่าตัด' ,align:'center',  },
                       { field:'othertechnic',title:'Maxilla ระบุ' ,align:'center',  },
                       { field:'mandible',title:'Mandible' ,align:'center',  },
                       { field:'othermandible',title:'Mandible ระบุ' ,align:'center',  },
                       { field:'tool',title:'ชนิดเครื่องมือ' ,align:'center',  },
                       //{ field:'file1',title:'ชนิดเครื่องมือ' ,align:'center',  },

                      ]],
                     toolbar:[
                        { text:'View/Update', iconCls:'icon-man',  handler:function()
                             {
                                    var  row=$('#dg_fr9_2').datagrid('getSelected');
                                    var  id=row.id_distraction;
                                    $('#id_distraction').textbox('setValue',id);
                                          if( row && id>0 )
                                          {

                                               var  url='<?=base_url()?>index.php/welcome/edit_json9_2';
                                               $.post(url,{id:id},function(data)
                                                  {
                                                       $.each(data,function(i,k)
                                                         {
                                                                // var doctor=k.doctor;
                                                                // alert(doctor);
                                                                 $('#doctor_fr9_2').textbox('setValue',k.doctor);

                                                                 //$('#date_fr9_2').datetimebox('setValue',k.begin_date);
                                                                  var begin_date=k.begin_date;
                                                                    if(    begin_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=begin_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date_fr9_2').textbox('setValue',conv_1);
                                                                    }




                                                                 $('#date2_fr9_2').datetimebox('setValue',k.end_date);
                                                                 $('#goslon_fr9_2').combobox('setValue',k.goslon);
                                                                  var  incisor=k.incisor;
                                                                 $('#incisor_fr9_2').combobox('setValue',incisor);

                                                                 var  skeletal=k.skeletal;
                                                                 if(  skeletal = 1   )
                                                                 {
                                                                         $('#skeletal1_fr9_2').attr('checked',true);
                                                                 }
                                                                 else  if(  skeletal = 2   )
                                                                 {
                                                                         $('#skeletal2_fr9_2').attr('checked',true);
                                                                 }
                                                                  else  if(  skeletal = 3   )
                                                                 {
                                                                         $('#skeletal3_fr9_2').attr('checked',true);
                                                                 }

                                                                  var technic=k.technic;

                                                                  if( technic == 1 )
                                                                  {
                                                                         $('#technic_fr9_2').attr('checked',true);
                                                                  }

                                                                  $('#othertechnic_fr9_2').textbox('setValue',k.othertechnic);



                                                                  var  mandible=k.mandible;
                                                                  if( mandible == 1 )
                                                                  {
                                                                       $('#mandible_fr9_2').attr('checked',true);
                                                                  }


                                                                  $('#othermandible_fr9_2').textbox('setValue',k.othermandible);

                                                                   $('#tool_fr9_2').textbox('setValue',k.tool );




                                                         });


                                                  },'json');


                                          }


                             }
                        },
                       { text:'Reload',iconCls:'icon-reload',handler:function(){ $('#dg_fr9_2').datagrid('reload');   }  },
                        { text:'Delete',iconCls:'icon-remove',handler:function()
                            {
                                 var  row=$('#dg_fr9_2').datagrid('getSelected');
                                 if( row )
                                 {
                                      var  id=row.id_distraction;
                                       //  http://127.0.0.1/dental/index.php/welcome/del_fr9_2/
                                      var  url='<?=base_url()?>index.php/welcome/del_fr9_2/' + id;
                                   //   alert(url);
                                    //  alert( id );
                                        $.messager.confirm('ลบข้อมูล','คุณต้องการลบข้อมูล',function(r)
                                           {
                                                 if(r)
                                                 {
                                                      $.post(url,function(data){
                                                              $('#dg_fr9_2').datagrid('reload');
                                                      });
                                                 }
                                           });

                                 }

                            }
                         },
                          {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr9_2').datagrid('getSelected');
                                                       var  file1=row.file1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                       //window.open(url);
                                                          if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr9_2').datagrid('getSelected');
                                                       var  file1=row.file2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr9_2').datagrid('getSelected');
                                                       var  file1=row.file3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },

                     ]
                     "
                     ></div>

            </div>
            <!---------------------- begin ------------------------------------------>
             <form id="fr9_2"  method="post" enctype="multipart/form-data">
                                <div style="padding: 10px 5px;">
                        <input class="easyui-textbox"  id="id_history_patient_fr9_2"   name="id_history_patient_fr9_2"  style="width:30px;height: 30px;"  readonly="true"  />
                        <input class="easyui-textbox"  id="y_fr9_2"   name="y_fr9_2"  style="width:50px;height: 30px;"  readonly="true"  />
                         <input class="easyui-textbox"  id="id_distraction"   name="id_distraction"  style="width:50px;height: 30px;"  readonly="true"  />


                <label>
                    ชื่อ - นามสกุล :
                        <input class="easyui-textbox"  id="name_lastname_fr9_2"  name="name_lastname_fr9_2"  style="width:200px;height: 30px;" readonly="true"  />

                </label>
            </div>



    <div style="padding: 10px 5px;">
        <label>
            แพทย์ผู้ทำการรักษา : <input class="easyui-textbox" id="doctor_fr9_2"  name="doctor_fr9_2" data-options=" prompt:'เลือกแพทย์ผู้ทำการรักษา '   "  style="width:200px;height: 40px;"   />
        </label>
    </div>
    <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่ทำการรักษา : <input class="easyui-datetimebox" id="date_fr9_2"   name="date_fr9_2" style="width:200px;height: 40px;"  />


            <a href="javascript:void(0)"  class="easyui-linkbutton"  id="cal1_fr9_2"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>


            <label>อายุ </label>
             <input class="easyui-textbox"  id="age1_fr9_2"  readonly="true"  style="width: 50px;height: 40px;"    />
              <label>ปี </label>


        </label>
    </div>

             <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่สิ้นสุดการรักษา : <input class="easyui-datetimebox" id="date2_fr9_2"  name="date2_fr9_2"  style="width:200px;height: 40px;"  />


            <a href="javascript:void(0)"  class="easyui-linkbutton"  id="cal2_fr9_2"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>


            <label>อายุ </label>
            <input class="easyui-textbox"  id="age2_fr9_2"  readonly="true"  style="width: 50px;height: 40px;"    />
            <label>ปี </label>


        </label>
    </div>


    <!--
           <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่สิ้นสุดการรักษา : <input class="easyui-datebox" style="width:200px;height: 40px;"  />
        </label>
    </div>
    -->

    <div style="padding: 10px 5px;">
              Classification of GOSLON  :
                </td>
                <td>
                    <select class="easyui-combobox"  id="goslon_fr9_2"  name="goslon_fr9_2"   style="width:200px;height: 40px;"   >
                       <option > เลือก Classification </option>
                       <option value="1">Group 1</option>
                        <option value="2">Group 2</option>
                        <option value="3">Group 3</option>
                        <option value="4">Group 4</option>
                        <option value="5">Group 5</option>
                </select>
    </div>


    <div style="padding: 10px 5px;">
        <label>
            Incisor classification of malocclusion :

            <!--
            <input class="easyui-combobox" data-options=" prompt:' Angle \'s classicfication '   "  style="width:200px;height: 40px;"   />
           -->

           <select class="easyui-combobox"  id="incisor_fr9_2"   name="incisor_fr9_2"  style="width:200px;height: 40px;"   >
                       <option value="1">I</option>
               <option value="2">II div 1</option>
                       <option value="3">II div 2</option>
               <option value="4">III</option>

                </select>


        </label>
    </div>

    <div style="padding: 10px 5px;">
        <label>
            Skeletal  classicfication :
            <!--
            <input class="easyui-combobox" data-options=" prompt:' Skeleton  classicfication '   "  style="width:200px;height: 40px;"   />
            -->

            <input type="radio"   name="skeletal_fr9_2"    id="skeletal1_fr9_2"   value="1"   />  I

                       <input type="radio"   name="skeletal_fr9_2"     id="skeletal2_fr9_2"   value="2"  />  II



                    <input type="radio"  name="skeletal_fr9_2"     id="skeletal3_fr9_2"   value="3"   />  III

        </label>
    </div>

      <div style="padding: 10px 5px;">
        <label>
            เทคนิคการผ่าตัด :

            <input type="radio"  id="technic_fr9_2"  name="technic_fr9_2"  value="1"> Maxilla    ระบุ  : <input  class="easyui-textbox"  name="othertechnic_fr9_2"  style="width: 100px;height: 30px;"   />

            <input type="radio"  value="1"  name="mandible_fr9_2" > Mandible  ระบุ  : <input  class="easyui-textbox"  name="othermandible_fr9_2"  style="width: 100px;height: 30px;"   />


            <!--
            <input class="easyui-combobox" data-options=" prompt:'  เลือกเทคนิคการผ่าตัด '   "  style="width:200px;height: 40px;"   />
            -->



        </label>
    </div>

    <div style="padding: 10px 5px;">
        <label>
            ชนิดเครื่องมือ : <input class="easyui-textbox"  id="tool_fr9_2"  name="tool_fr9_2"  style="width: 200px;height: 30px;"   />
        </label>
    </div>



    <tr>
                    <td>Complication :</td>
                    <td>

                        <!--
                        <input class="easyui-textbox"  id="complication_fr9" name="complication_fr9_2" ></input>
                        -->

                          <input type="radio"  id="complication_fr9_y"  name="complication_fr9"  value="1" />มี
                        <input class="easyui-textbox"  id="other_complication_fr9_y" name="other_complication_fr9_y"  style="width: 100;height: 30px;"  multiple=true    />
                        <input type="radio"  id="complication_fr9_n"  name="complication_fr9"  value="2" />ไม่มี




                    </td>
    </tr>

    <div style="padding: 10px 5px;">
        <label>
            รูปถ่าย,x-ray ก่อนการรักษา (Before) : <input class="easyui-filebox"  id="fileupload1_fr9_2"  name="fileupload1_fr9_2"  data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

        <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ระหว่างการรักษา (During) : <input class="easyui-filebox"     id="fileupload2_fr9_2"  name="fileupload2_fr9_2"    data-options=" prompt:'  เลือกรูปถ่ายระหว่างการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

        <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray หลังการรักษา (After) : <input class="easyui-filebox"    id="fileupload3_fr9_2"  name="fileupload3_fr9_2"    data-options=" prompt:'  เลือกรูปถ่าย,x-ray หลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

    <div style="padding: 10px 120px;">
        <a href="javascript:void(0)"  iconCls="icon-save"  style="width:90px;height: 40px"   class="easyui-linkbutton"   onclick="
                //alert('t');
                $('#fr9_2').form('submit',{
                    url:'<?=base_url()?>index.php/welcome/insert_fr9_2/',
                    success:function(data)
                     {
                          // alert(data);
                          if( data == 1 )
                          {
                            $('#dia_fr9_b').dialog('open');
                            $('#dg_fr9_2').datagrid('reload');
                             $.messager.alert('สถานะการบันทึกข้อมูล','สำเร็จ');
                          }
                          else{

                              $.messager.alert('สถานะการบันทึกข้อมูล','ผิดพลาด');
                          }

                     }
                });

           "  >Save</a>
          <a href="javascript:void(0)"  iconCls="icon-cancel"   style="width:90px;height: 40px"  onclick=" $('#dia9').dialog('close');  "  class="easyui-linkbutton">Close</a>
    </div>
             </form>
      <!---------------------- end ------------------------------------------>

        </div>

    </div>



</div>



<div id="dia_treat1" class="easyui-window" title=" 5. Orthodonic preparation for bone graft surgery  " data-options="modal:true,closed:true" style="width:600px;height:600px;padding:5px;">



    <div style="padding: 10px 5px;">
        <label>
            แพทย์ผู้ทำการรักษา :  <input class="easyui-combobox"  style="width: 200px;height: 40px;"   />
        </label>
    </div>



        <div style="padding: 10px 5px;">
        <label>

            วัน/เดือน/ปี ที่เริ่มทำการรักษา  :  <input class="easyui-datebox"   style="width: 200px;height: 40px;"  />

            <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width: 50px;height: 30px;"    />


        </label>
    </div>

            <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่สิ้นสุดการรักษา  :  <input class="easyui-datebox"   style="width: 200px;height: 40px;"  />



            <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width: 50px;height: 30px;"    />


        </label>
    </div>





    <!--
    <div style="padding: 10px 5px;">
        <label>
            <?=nbs(30)?>
            Diagnosis :

            <input class="easyui-textbox"   style="width:300px;height: 30px;"  />


        </label>
    </div>
    -->




 <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ก่อนการรักษา (Before) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่าย,x-ray หลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

       <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ระหว่างการรักษา (During) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่าย,x-ray หลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>


       <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray หลังการรักษา (After) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่าย,x-ray หลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>


      <div style="padding: 10px 5px;">
        <label>
            Dental Casts : <input  type="radio"> Yes  <input  type="radio"> No
        </label>
    </div>



    <div  style="padding: 10px 100px;">
        <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 90px;height: 40px;"  data-options=" iconCls:'icon-save' "  >Save</a>
           <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 90px;height: 40px;" data-options=" iconCls:'icon-cancel'  "  onClick="  $('#dia_reat1').window('close');  "  >Close</a>
    </div>


</div>

<div id="dia_treat2_mo"  class="easyui-window"  title="2. Lip nasal and nasal floor repair "   style="width:700px;height: 550px;left:10px;top: 10px"
     data-options="
     iconCls:'icon-add' ,
     closed:true,

      "
     >


    <!--
    <div style="padding: 10px 5px;" >
        <label>
            แพทย์ผู้ทำการรักษา :
            <input class="easyui-textbox"  style="width:200px;height: 40px;"   data-options=" iconCls:'icon-man',  "   />
        </label>
    </div>

        <div style="padding: 10px 5px;" >
        <label>
           วัน/เดือน/ปี ที่เริ่มทำการรักษา :
            <input class="easyui-datebox"  style="width:150px;height: 40px;"    />
        </label>
    </div>

            <div style="padding: 10px 5px;" >
        <label>
           วัน/เดือน/ปี ที่สิ้นสุดการรักษา :
            <input class="easyui-datebox"  style="width:150px;height: 40px;"    />
        </label>
    </div>

    <div style="padding: 10px 5px;">
        <label>
            เทคนิคการผ่าตัด :
            <input class="easyui-textbox"   style="width:200px;height: 40px;"  />
        </label>
    </div>
    -->


    <!--
    <div style="padding: 10px 5px;">
        <label>
            Procedure :
            <input type="checkbox"  />  1.Strapping
                        <input type="checkbox"  />  2.Nasal Molding
                        <input type="checkbox"  />  3.Alveolar  Molding
                        <input type="checkbox"  /> 4. Simple Obturator
                        <br>
                        <input type="checkbox"  />  อื่นๆ
                        <input class="easyui-textbox"   data-options=" mutilne:true, "  style="width:300px;height: 50px"    />



        </label>

    </div>
    -->

    <!--
    <div style="padding: 10px 5px;">
        <label>
            รูปถ่ายก่อนการรักษา (Before) :
            <input class="easyui-filebox"   data-options=" prompt:' เลือกไฟล์ ' "  style="width:200px;height: 30px;"   />
        </label>
    </div>

            <div style="padding: 10px 5px;">
        <label>
            รูปถ่ายระหว่างการรักษา (During) :
            <input class="easyui-filebox"   data-options=" prompt:' เลือกไฟล์ ' "  style="width:200px;height: 30px;"   />
        </label>
    </div>


        <div style="padding: 10px 5px;">
        <label>
            รูปถ่ายหลังการรักษา (After) :
            <input class="easyui-filebox"   data-options=" prompt:' เลือกไฟล์ ' "  style="width:200px;height: 30px;"   />
        </label>
    </div>
    -->

    <div style="padding:10px  10px;">

        <a href="javascript:void(0)"  class="easyui-linkbutton"  data-options=" iconCls:'icon-reload'  "  onclick="  window.open('http://10.87.196.210/overlay/input_intervention.php?id_cronology=1917&&fk=e10adc3949ba59abbe56e057f20f883e');  "  style="height: 40px;width:80px;"  >เชื่อมโยง</a>

        <!--
        <a href="javascript:void(0)"  class="easyui-linkbutton"  data-options=" iconCls:'icon-save'  "  style="height: 40px;width:80px;"  >Save</a>
        <a href="javascript:void(0)"  class="easyui-linkbutton"  data-options=" iconCls:'icon-cancel' ,onClick:function(){  $('#dia_treat2_mo').window('close');  }  "    style="height: 40px;width:80px;"  >Close</a>
        -->


    </div>

</div>


<div id="dia_treat2" class="easyui-window" title=" Diagnose of congenital abnormalities " data-options="modal:true,closed:true" style="width:400px;height:200px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>


            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ผู้ตรวจ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>
                     <tr>
                    <td>Diagnosis :</td>
                    <td><input name="name1" id="name1"  class="easyui-textbox" ></input></td>
                </tr>

                <tr>
                    <td>รูปถ่าย ,x-ray :</td>
                    <td><input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%"></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                             <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>

                </tr>

            </table>
        </form>


</div>


<div id="dia_treat3" class="easyui-window" title="1. Pre-surgical orthopedics therapy (PSOT)" data-options="modal:true,closed:true"
     style="width:700px;height:480px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>


    <div class="easyui-panel"  style="padding: 5px;"  >
        <a href="javascript:void(0)"  class="easyui-linkbutton"   iconCls="icon-man"  style="width:100px;height: 40px;"
           onclick="
                    $('#dia_psot').dialog('open');
                    // buttons:[ { text:'Close', }  ]
                 //  var  row = $('#dg_psot').datagrid('getSelected');
                  var id=$('#id_history_patient').textbox('getValue');
                  //alert(id);

                    $('#dg_psot').datagrid({
                        url:'<?=base_url()?>index.php/welcome/json_fr1/' +    $('#id_history_patient').textbox('getValue')  ,
                        rownumbers:true,
                        singleSelect:true,
                        columns:[[
                                { field:'doctor',title:' ทันตแพทย์ผู้ทำการรักษา ' , align:'center' },
                                {  field:'joindoctor'  , title:'ทันตแพทย์ผู้ร่วมทำการรักษา' , align:'center'  },
                                {  field:'begin_date', title:'เริ่มทำการรักษา' ,  align:'center'    },
                                {  field:'end_date', title:'สิ้นสุดการรักษา' ,  align:'center'    },

                                {  field:'procedure' , title:'1.Strapping' ,  align:'center'    },
                                {  field:'nasal', title:'2.Nasal Molding ' ,  align:'center'    },
                                {  field:'alveolar', title:'3.Alveolar Molding' ,  align:'center'    },
                                {  field:'simple', title:'4.Simple Obturator' ,  align:'center'    },
                                {  field:'other_procedure', title:'.5.อื่นๆ' ,  align:'center'    },

                                {  field:'otherprocedure', title:' Procedurev อื่นๆ ระบุ ' ,  align:'center'    },
                              //  {  field:'otherprocedure', title:'Procedurev' ,  align:'center'    },
                              {  field:'end_date', title:'สิ้นสุดการรักษา' ,  align:'center'    },
                                {  field:'cast', title:'Dental Casts' ,  align:'center'    },

                        ]],
                         toolbar:[
                             {  text:'ดูข้อมูลส่วนบุคคคล' , iconCls:'icon-man', handler:function()
                                    {
                                            var  row=$('#dg_psot').datagrid('getSelected');
                                            if( row )
                                            {
                                                  //alert('t');
                                                  //var  id=row.id_history_patient;
                                                  var  id=row.id_psot;

                                                  //alert(id);
                                                  if( id > 0 )
                                                  {
                                                       $('#id_psot').textbox('setValue',id);

                                                      $.post('<?=base_url()?>index.php/welcome/edit_json1',{ id:id },function(data){

                                                             //alert(data);
                                                             $.each(data,function(i,key)
                                                             {


                                                                   // $('#dia_pso').dialog({ position:['center','center+100']  });

                                                                     //  $('#dia_treat3').dai

                                                                //     var  lastname=key.lastname;
                                                                //     var  firstname=key.firstname;

                                                                  //   $('#name_lastname').textbox('setValue', firstname  +  '  ' + key.lastname);

                                                                     var  doctor=key.doctor;
                                                                   //  alert(doctor);
                                                                     $('#doctor_fr1').textbox('setValue', doctor );

                                                                     /*
                                                                     $('#doctor_fr1').textbox({
                                                                         iconCls:'icon-ok',

                                                                     });
                                                                     */


                                                                     var  joindoctor=key.joindoctor;
                                                                     $('#joindoctor_fr1').textbox('setValue',joindoctor);



                                                                   //   var  begin_date=key.begin_date;
                                                                    //  $('#date_fr1').textbox('setValue', begin_date );
                                                                     var begin_date=key.begin_date;
                                                                    if(    begin_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=begin_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date_fr1').textbox('setValue',conv_1);
                                                                    }



                                                                      var  end_date=key.end_date;
                                                                     //  $('#date2_fr1').textbox('setValue', end_date  );
                                                                    //   var begin_date=k.begin_date;
                                                                    if(    end_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1= end_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date2_fr1').textbox('setValue',conv_1);
                                                                    }








                                                                       var  procedure=key.procedure;







                                                                      //alert(procedure);
                                                                      if( procedure == 1  )
                                                                      {
                                                                           $('#strapping').attr('checked',true);
                                                                       }

                                                                       var  nasal=key.nasal;
                                                                       //alert( nasal );
                                                                       if( nasal == 1 )
                                                                       {
                                                                           $('#nasal_fr1').attr('checked',true);
                                                                       }

                                                                       var  alveolar=key.alveolar;
                                                                     //  alert( alveolar );
                                                                       if( alveolar == 1 )
                                                                       {
                                                                            $('#alveolar').attr('checked',true);
                                                                       }

                                                                       var  simple=key.simple;
                                                                       //alert(  simple );
                                                                       if( simple ==1 )
                                                                       {
                                                                             $('#simple').attr('checked',true);
                                                                       }

                                                                       var  other_procedure=key.other_procedure;
                                                                       //alert( other_procedure);
                                                                       if(  other_procedure == 1 )
                                                                       {
                                                                            $('#other_procedure').attr('checked',true);
                                                                       }

                                                                      var  otherprocedure=key.otherprocedure;
                                                                     // alert( otherprocedure );
                                                                      $('#otherprocedure_fr1').textbox('setValue',otherprocedure);

                                                                      var   file1=key.file1;
                                                                      //alert(  file1  );
                                                                      var   file2=key.file2;
                                                                     // alert(  file2  );
                                                                      var   file3=key.file3;
                                                                      //alert(  file3  );


                                                                      var  cast=key.cast;
                                                                     // alert(cast);

                                                                     if( cast == 1 )
                                                                     {
                                                                           //$('#')
                                                                           $('#yes').attr('checked',true);
                                                                     }
                                                                     else if( cast == 2 )
                                                                     {
                                                                            $('#no').attr('checked',true);
                                                                     }



                                                             });

                                                      },'json');
                                                  }
                                            }
                                    }
                              },

                            { text:'Reload',iconCls:'icon-reload',handler:function(){   $('#dg_psot').datagrid('reload');   }   },

                            { text:'Delete' , iconCls:'icon-remove' ,handler:function()
                                {
                                     var  row=    $('#dg_psot').datagrid('getSelected');
                                       if( row )
                                       {
                                           var  id=row.id_psot;
                                           //alert( id );
                                           var  url='<?=base_url()?>index.php/welcome/del_tr1/'  + id ;
                                           $.post(url,function(data){
                                                  //alert(data);
                                                  if( data == 1 )
                                                  {
                                                       $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลสำเร็จ');
                                                       $('#dg_psot').datagrid('reload');
                                                  }
                                                  else if( data == 0 )
                                                  {
                                                       $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลผิดพลาด');
                                                      //$('#dg_psot').datagrid('reload');
                                                  }


                                             });

                                       }
                                 }
                             },

                              {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_psot').datagrid('getSelected');
                                                       var  file1=row.file1;

                                                         if( file1.length > 0 )
                                                         {
                                                                    var  url='<?=base_url()?>upload/' + file1;
                                                                    if( file1.length > 0 )
                                                                    {
                                                                       window.open(url);

                                                                   }
                                                         }


                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_psot').datagrid('getSelected');
                                                       var  file1=row.file2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                       if( file1.length > 0 )
                                                       {
                                                              window.open(url);
                                                       }

                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_psot').datagrid('getSelected');
                                                       var  file1=row.file3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }

                                        }
                                     },



                         ] ,

                    });


           "


           >แสดงข้อมูล</a>

        <div class="easyui-dialog"  id="dia_psot"  data-options=" closed:true ,buttons:[ {   text:'ปิด (Close)', iconCls:'icon-cancel', handler:function(){  $('#dia_psot').dialog('close');   }  }  ]"  title="  Pre-surgical orthopedics therapy (PSOT)  " style="width: 700px;height: 400px;" >
            <div class="easyui-datagrid"  id="dg_psot"  ></div>
        </div>


    </div>

            <form id="fr1"     method="post" enctype="multipart/form-data">
            <table>

                 <tr>
                    <td align="left">
                        <input  class="easyui-textbox"   id="id_history_patient"   name="id_history_patient"  style="width:30px;height: 30px;"  readonly="true"  />
                         <input class="easyui-textbox"    id="y_fr1"   name="y_fr1"  style="width:50px;height: 30px;"  readonly="true"  />
                         <input class="easyui-textbox"   id="id_psot"  style="width:30px;height: 30px;"  readonly="true"  />
                        ชื่อ - นามสกุล :
                    </td>
                    <td>

                        <input class="easyui-textbox"  id="name_lastname"  name="name_lastname"  style="width:200px;height: 30px;" readonly="true"  />
                    </td>
                </tr>

                <tr>
                    <td>ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td> <input name="doctor_fr1" id="doctor_fr1"    class="easyui-textbox"   style="width: 200px;height: 30px;"     /> </td>
                </tr>

                 <tr>
                    <td>ทันตแพทย์ผู้ร่วมทำการรักษา :</td>
                    <td>

                        <input class="easyui-textbox"   name="joindoctor_fr1"  id="joindoctor_fr1"    style="width:200px;height: 30px"   />

                    </td>
                </tr>


                <tr>
                    <td>วัน/เดือน/ปี ที่เริ่มทำการรักษา :</td>
                    <td>
                        <input name="date_fr1" id="date_fr1"


                               class="easyui-datetimebox"></input>

                       <a href="javascript:void(0)" class="easyui-linkbutton"  data-options=" iconCls:'icon-man'  ,  "

                          style="widht:80px;height: 30px;"   id="cal1_fr1"      />คำนวณอายุ</a>
                        <label>อายุ </label>
                        <input class="easyui-textbox"  id="age1_fr1"  name="age1_fr1"  readonly="true"


                               style="width: 50px;height: 30px;"   />
                         <label>เดือน</label>
                    </td>
                </tr>

                <tr>
                    <td>วัน/เดือน/ปี ที่สิ้นสุดการรักษา :</td>
                    <td>
                        <input    name="date2_fr1"   id="date2_fr1"   class="easyui-datetimebox"></input>

                       <a href="javascript:void(0)" class="easyui-linkbutton"  data-options=" iconCls:'icon-man'  ,  "   style="widht:80px;height: 30px;"    id="cal2_fr1"    />คำนวณอายุ</a>


                   <label>อายุ </label>
                        <input class="easyui-textbox"  style="width: 50px;height: 30px;"   readonly="true"  id="age2_fr1"  name="age2_fr1"    />
                        <label>เดือน</label>

                    </td>
                </tr>

                <tr>
                    <td>
                         Procedure :
                    </td>
                    <td>
                        <input type="checkbox"  name="strapping"  id="strapping"  value="1" />  1.Strapping
                        <input  type="checkbox"  name="nasal_fr1"   id="nasal_fr1"   value="1"  />  2.Nasal Molding
                        <input  type="checkbox"  name="alveolar"    id="alveolar"  value="1" />  3.Alveolar  Molding
                        <input  type="checkbox"  name="simple"   id="simple" value="1" /> 4. Simple Obturator
                        <br>
                        <input   type="checkbox" name="other_procedure"  id="other_procedure"  value="1" />  5.อื่นๆ
                        <input class="easyui-textbox"   name="otherprocedure_fr1"  id="otherprocedure_fr1"   data-options=" mutilne:true, "  style="width:300px;height: 20px"      />
                    </td>
                </tr>


                <tr>
                    <td>
                       รูปถ่าย,x-ray ก่อนการรักษา (Before) :
                    </td>
                    <td>
                        <input class="easyui-filebox"  id="file1_fr1"  name="file1_fr1"  />
                    </td>
                </tr>

                                <tr>
                    <td>
                       รูปถ่าย,x-ray ระหว่างการรักษา (During) :
                    </td>
                    <td>
                        <input class="easyui-filebox"   id="file2_fr1"  name="file2_fr1"  />
                    </td>
                </tr>

                                <tr>
                    <td>
                       รูปถ่าย,x-ray หลังการรักษา (After) :
                    </td>
                    <td>
                        <input class="easyui-filebox"    id="file3_fr1"  name="file3_fr1"    />
                    </td>
                </tr>


                <tr>
                    <td>
                         <label>
                         Dental Casts :
                        </label>

                    </td>
                    <td>

                        <input  type="radio"  name="cast"  id="yes"  value="1" > Yes  <input  type="radio"  name="cast"    id="no"  value="2" > No

                    </td>

                </tr>

               <!--
                     <tr>
                    <td>เครื่องมือที่ใช้ :</td>
                    <td>
                        <input name="name1" id="name1"  type="checkbox" ></input>NAM
                        <br>
                        <input name="name1" id="name1"  type="checkbox" ></input>Obturator

                              <select class="easyui-combobox" name="state" style="width:200px;">
                                      <option value="1">Mc-Neil-type approaches</option>
                                      <option value="2">T-traction</option>
                                       <option value="3">Pin-retainer plate</option>
                                      <option value="4">Transverse bar and screw</option>
                                      <option value="5">Passive plates with lip surgery</option>
                                       <option value="6">Zurich appliance</option>
                                       <option value="7">Growth stimulator</option>
                              </select>
                        <br>
                        <input name="name1" id="name1"  type="checkbox" ></input>Strapping

                    </td>
                </tr>

                <tr>
                    <td>รูปถ่าย :</td>
                    <td><input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%"></td>
                </tr>

                <tr>
                    <td>วันที่ถอดเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>
                -->

                <tr>
                    <td colspan="2" align="center" >

                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'"
                           onclick="
                                 $('#fr1').form('submit',{
                                       url:'<?=base_url()?>index.php/welcome/inst_tr1',
                                       success:function(data){
                                           //alert(data);

                                             if( data == 1 )
                                             {
                                                  $('#dg_psot').datagrid('reload');
                                                  $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ');
                                                //  $('#dia_psot').dialog('open');

                                             }
                                              else if( data==0)
                                              {
                                                    $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                                                    $('#dg_psot').datagrid('reload');
                                              }


                                       }

                                  });

                           "



                           style="width:120px;height: 40px;">Save/Update</a>
                           <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-cancel'"  style="width:100px;height: 40px;"  onclick="  $('#dia_treat3').dialog('close');  " >Close</a>
                         <!-- <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-man'"  onclick=" $('#dia_sub_dia_treat3').dialog('open');  "   style="width:100px;height: 40px;" >Preview</a> -->
                    </td>

                </tr>

            </table>
        </form>


</div>

<div class="easyui-dialog"  id="dia_sub_dia_treat3"  title=" จำนวนวันที่ทำการรักษา "   style="width:300px;height: 400px;top: 10px;left: 10px;"
     data-options="  modal:false,closed:true   "
     >

</div>


<div id="dia_treat4" class="easyui-window" title=" Feeding and neonatal care in children with cleft lip-palate " data-options="modal:true,closed:true" style="width:400px;height:200px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>



            <table>

                <tr>
                    <td>ผู้ที่ให้คำแนะนำ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                <tr>
                    <td>Diagnosis :</td>
                    <td><input name="name1" id="name1" class="easyui-textbox"></input></td>
                </tr>

                <!--
                <tr>
                    <td>เครื่องมือที่ใช้ :</td>
                    <td>
                        <input name="name1" id="name1"  type="checkbox" ></input>NAM
                        <br>
                        <input name="name1" id="name1"  type="checkbox" ></input>Obturator

                              <select class="easyui-combobox" name="state" style="width:200px;">
                                      <option value="1">Mc-Neil-type approaches</option>
                                      <option value="2">T-traction</option>
                                       <option value="3">Pin-retainer plate</option>
                                      <option value="4">Transverse bar and screw</option>
                                      <option value="5">Passive plates with lip surgery</option>
                                       <option value="6">Zurich appliance</option>
                                       <option value="7">Growth stimulator</option>
                              </select>
                        <br>
                        <input name="name1" id="name1"  type="checkbox" ></input>Strapping

                    </td>
                </tr>
                -->

                <!--
                <tr>
                    <td>รูปถ่าย :</td>
                    <td><input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%"></td>
                </tr>

                <tr>
                    <td>วันที่ถอดเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>
                -->

                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>

                        <input class="easyui-datebox"></input>

                        <!--<input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">-->

                    </td>
                </tr>


                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save/Update</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>

                </tr>

            </table>



</div>





<div id="dia_treat5" class="easyui-window" title=" MRI, CT scan " data-options="modal:true,closed:true" style="width:500px;height:250px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>


            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ผู้ให้การรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>
                        <!--<input name="name1" id="name1" class="easyui-textbox"></input>-->
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>

                <!--
                <tr>
                    <td>เครื่องมือที่ใช้ :</td>
                    <td>
                        <input name="name1" id="name1"  type="checkbox" ></input>NAM
                        <br>
                        <input name="name1" id="name1"  type="checkbox" ></input>Obturator

                              <select class="easyui-combobox" name="state" style="width:200px;">
                                      <option value="1">Mc-Neil-type approaches</option>
                                      <option value="2">T-traction</option>
                                       <option value="3">Pin-retainer plate</option>
                                      <option value="4">Transverse bar and screw</option>
                                      <option value="5">Passive plates with lip surgery</option>
                                       <option value="6">Zurich appliance</option>
                                       <option value="7">Growth stimulator</option>
                              </select>
                        <br>
                        <input name="name1" id="name1"  type="checkbox" ></input>Strapping

                    </td>
                </tr>
                -->

                <!--
                <tr>
                    <td>รูปถ่าย :</td>
                    <td><input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%"></td>
                </tr>

                <tr>
                    <td>วันที่ถอดเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>
                -->


                <tr>
                    <td>รูปภาพ MRI :</td>
                    <td>

                        <!--<input class="easyui-datebox"></input>-->

                       <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>

                 <tr>
                    <td>รูปภาพ CT scan :</td>
                    <td>

                        <!--<input class="easyui-datebox"></input>-->

                       <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>

               <tr>
                    <td>Diagnosis :</td>

                    <td>

                        <!--<input class="easyui-datebox"></input>-->

                     <!--  <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%"> -->
                        <input class="easyui-textbox" style="width:100%;height:32px">

                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>

                </tr>

            </table>
        </form>


</div>





<div id="dia_treat6" class="easyui-window" title=" 2. การผ่าตัดซ่อมแซมริมฝีปาก จมูก และพื้ันจมูก " data-options="modal:true,closed:true" style="width:500px;height:250px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>


            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>แพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>

                        <input class="easyui-datebox"></input>
                    </td>
                </tr>

                <tr>
                    <td>เทคนิคการผ่าตัด :</td>

                    <td>


                        <input class="easyui-textbox" style="width:100%;height:32px">

                    </td>
                </tr>

                <tr>
                    <td>รุปถ่ายก่อนการรักษา (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>

                       <tr>
                    <td>รุปถ่ายระหว่างการรักษา (During) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>

                     <tr>
                    <td>รุปถ่ายการรักษา (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>




                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>

                </tr>

            </table>
        </form>


</div>




<div id="dia_treat7" class="easyui-window" title=" 3. Palate repair  " data-options="modal:true,closed:true" style="width:600px;height:500px;padding:5px;">

    <!--<div style="margin:10px 0 0px 0;"></div>-->
    <div style="padding:10px  100px;"></div>

            <form id="ff"  method="post" enctype="multipart/form-data">


                <!--
                <tr>
                    <td>แพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                <tr>
                    <td>วัน/เดือน/ปี ที่เริ่มทำการรักษา  :</td>
                    <td>

                        <input class="easyui-datebox"></input>
                    </td>
                </tr>

                <tr>
                    <td>
                        วัน/เดือน/ปี ที่สิ้นสุดการรักษา :


                    </td>
                    <td>
                            <input class="easyui-datebox"></input>
                    </td>

                </tr>


                <tr>
                    <td>เทคนิคการผ่าตัด :</td>

                    <td>


                        <input class="easyui-textbox" style="width:100%;height:32px">

                    </td>
                </tr>

                <tr>
                    <td>รุปถ่ายก่อนการรักษา (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>

                       <tr>
                    <td>รุปถ่ายระหว่างการรักษา (During) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>

                     <tr>
                    <td>รุปถ่ายหลังการรักษา (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>
                -->


                   <div style="padding:10px  10px;">


                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-reload'"   onclick=" window.open('http://10.87.196.210/overlay/input_intervention.php?id_cronology=1917&&fk=e10adc3949ba59abbe56e057f20f883e'); " >เชื่อมโยง</a>
                        <!--
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove' , onClick:function(){ $('#dia_treat7').window('close');    }   ">Close</a>
                           -->
                 </div>



        </form>


</div>



<div id="dia_treat8" class="easyui-window" title=" Surgical reconstruction of velopharyngeal insufficiency " data-options="modal:true,closed:true" style="width:500px;height:200px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>


            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>แพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>

                <!--
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>

                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                -->

                <tr>
                    <td>เทคนิคที่ใช้ :</td>

                    <td>


                        <input class="easyui-textbox" style="width:100%;height:32px">

                    </td>
                </tr>


<!--
                <tr>
                    <td>รุปถ่าย (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>

                     <tr>
                    <td>รุปถ่าย (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>
 -->

 <tr>
     <td>วัน/เดือน/ปี ที่ทำ</td>
     <td>
          <input class="easyui-datetimebox" required style="width:200px">
     </td>
 </tr>


                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>

                </tr>

            </table>
        </form>


</div>


<div id="dia_treat9" class="easyui-window" title=" Correction of hearing problems " data-options="modal:true,closed:true" style="width:500px;height:200px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>


            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>แพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>

                        <input class="easyui-datebox"></input>
                    </td>
                </tr>

                 <!--
                <tr>
                    <td>เทคนิคที่ใช้ :</td>

                    <td>


                        <input class="easyui-textbox" style="width:100%;height:32px">

                    </td>
                </tr>
                -->

<!--
                <tr>
                    <td>รุปถ่าย (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>

                     <tr>
                    <td>รุปถ่าย (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>
 -->

 <tr>
     <td>วิธีการทดสอบ :</td>
     <td>
              <select class="easyui-combobox" name="state" style="width:200px;">
        <option value="1">Otoacoustic emission</option>
        <option value="2">Acoustic immittance audiometry</option>
         <option value="3">Auditory brainstem evoked response</option>
         <option value="4">Behavioral observation audiometry (BOA)</option>
         <option value="5">Visual reinforcement audiometry (VRA)</option>
         <option value="6">Conventional play audiometry (CPA)</option>
        </select>
     </td>
 </tr>


                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>

                </tr>

            </table>
        </form>


</div>




<div id="dia_treat10" class="easyui-window" title=" ดูแล ป้องกัน เสริมสร้างสุขภาพช่องปากในระยะฟันน้ำนม " data-options="modal:true,closed:true" style="width:500px;height:150px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>


            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ผู้ที่ให้คำแนะนำ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>

                        <input class="easyui-datebox"></input>
                    </td>
                </tr>

                 <!--
                <tr>
                    <td>เทคนิคที่ใช้ :</td>

                    <td>


                        <input class="easyui-textbox" style="width:100%;height:32px">

                    </td>
                </tr>
                -->

<!--
                <tr>
                    <td>รุปถ่าย (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>

                     <tr>
                    <td>รุปถ่าย (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>
 -->



                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>

                </tr>

            </table>
        </form>


</div>




<div id="dia_treat11" class="easyui-window" title=" แก้ไขการสบฟันระยะแรกเพื่อป้องกันและเตรียมการจัดฟันต่อไป รวมทั้งกระตุ้นการเจริญเติบโตขากรรไกรบนในกรณีที่จำเป็น " data-options="modal:true,closed:true" style="width:800px;height:150px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>


            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ผู้ที่ให้คำแนะนำ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>

                        <input class="easyui-datebox"></input>
                    </td>
                </tr>

                 <!--
                <tr>
                    <td>เทคนิคที่ใช้ :</td>

                    <td>


                        <input class="easyui-textbox" style="width:100%;height:32px">

                    </td>
                </tr>
                -->

<!--
                <tr>
                    <td>รุปถ่าย (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>

                     <tr>
                    <td>รุปถ่าย (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>
 -->



                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>

                </tr>

            </table>
        </form>


</div>


<div id="dia_treat12_7" class="easyui-window" title=" 6. Growth modification  " data-options="modal:true,closed:true" style="width:750px;height:650px;">


    <div class="easyui-panel" style="padding: 5px;" >
        <a href="javascript:void(0)"  class="easyui-linkbutton"   style="width: 100px;height: 40px;"  iconCls='icon-man'   onclick="
            $('#dia_fr7').dialog('open');
            $('#dg_fr7').datagrid({
                 url:'<?=base_url()?>index.php/welcome/json_tr7/' + $('#id_history_patient_fr7').textbox('getValue') ,
                singleSelect:true,
                rownumbers:true,
                columns:[[
                  //   { field:'firstname', title:'ชื่อ', align:'center',  },
                  //   {  field:'lastname',title:'นามสกลุ', align:'center',  },
                      {  field:'doctor',title:' ทันตแพทย์ผู้ทำการรักษา ', align:'center',  },

                ]],
                toolbar:[
                     { text:'View/Update' , iconCls:'icon-edit' , handler:function()
                            {
                                  var  row=$('#dg_fr7').datagrid('getSelected');
                                  var  id=row.id_growth;
                                  //alert(id);
                                    $('#id_growth').textbox('setValue',id);
                                    if( id > 0  &&  row )
                                    {
                                           var  url=  '<?=base_url()?>index.php/welcome/edit_jons7';
                                           $.post(url,{ id:id },function(data)
                                              {

                                                       $.each(data,function(i,k){
                                                       $('#doctor_fr7').textbox('setValue',k.doctor);



                                                       //$('#date_fr7').datetimebox('setValue',k.begin_date);
                                                                   var begin_date=k.begin_date;
                                                                    if(    begin_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=begin_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date_fr7').textbox('setValue',conv_1);
                                                                    }



                                                      // $('#date2_fr7').datetimebox('setValue',k.end_date);
                                                                var end_date=k.end_date;
                                                             if(    end_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=end_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date2_fr7').textbox('setValue',conv_1);
                                                                    }







                                                       var  goslon=k.goslon;

                                                        $('#goslon_fr7').combobox('setValue',goslon);

                                                        var  incisor=k.	incisor;

                                                        $('#Incisor_fr7').combobox('setValue',incisor);

                                                       var  skeletal=k.skeletal;

                                                           if(  skeletal == 1 )
                                                           {
                                                                 $('#skeletal1_fr7').attr('checked',true);
                                                           }
                                                           else   if(  skeletal == 2 )
                                                           {
                                                                 $('#skeletal2_fr7').attr('checked',true);
                                                           }
                                                               else   if(  skeletal == 3 )
                                                           {
                                                                 $('#skeletal3_fr7').attr('checked',true);
                                                           }


                                                     //facialmask

                                                      var  typetool=k.typetool;
                                                      //alert( typetool  );

                                                 if(   typetool == 1  )
                                                 {
                                                       $('#facialmask').attr('checked',true);
                                                 }



                                                    var   other_typetool=k.other_typetool;
                                                    $('#other_typetool_fr7').textbox('setValue',other_typetool);

                                                 if( k.appliance == 1)
                                                 {
                                                       $('#appliance_fr7').attr('checked',true);
                                                 }

                                                  var  other_appliance=k.other_appliance;

                                                   $('#other_appliance_fr7').textbox('setValue',other_appliance);


                                                  var  dentalcast=k.dentalcast;
                                                  //alert( dentalcast  );

                                                  if(  dentalcast == 1 )
                                                  {
                                                         $('#dentalcast1_fr7').attr('checked',true);
                                                   }
                                                   else   if(  dentalcast == 2 )
                                                  {
                                                         $('#dentalcast2_fr7').attr('checked',true);
                                                   }



                                                    });
                                              },'json')

                                    }

                            }
                    },
                     {  text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_fr7').datagrid('reload');  }  },
                     {  text:'Delete',iconCls:'icon-cancel', handler:function()
                            {
                                  var  row=$('#dg_fr7').datagrid('getSelected');
                                  if(row)
                                  {
                                        var  id=row.id_growth;
                                         //alert(id);
                                        var  url='<?=base_url()?>index.php/welcome/del_fr7/' +  id ;
                                        //  alert(url);

                                        $.messager.confirm('ต้องการลบข้อมูล','คุณแน่ใจว่าต้องการลบข้อมูล',function(r){
                                                  if( r )
                                                  {
                                                                        $.post(url,function(data)
                                                              {
                                                                    //alert(data);
                                                                     if( data == 1 )
                                                                     {
                                                                                $('#dg_fr7').datagrid('reload');
                                                                                $.messager.alert('สถานะการลบข้อมูล','Success');
                                                                     }else{
                                                                               $.messager.alert('สถานะการลบข้อมูล','ผิดพลาด');
                                                                     }

                                                               });



                                                  }

                                        });



                                  }

                            }
                     },

                      {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr7').datagrid('getSelected');
                                                       var  file1=row.filename1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr7').datagrid('getSelected');
                                                       var  file1=row.filename2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                         //window.open(url);
                                                       if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr7').datagrid('getSelected');
                                                       var  file1=row.filename3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                     //  window.open(url);
                                                        if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },


                ]
            });

           " >ดูข้อมูล</a>

    </div>

    <div class="easyui-dialog"  id="dia_fr7"   title="6. Growth modification "   data-options="  closed:true,buttons:[ { text:'ปิด (Close)' ,iconCls:'icon-cancel', handler:function(){ $('#dia_fr7').dialog('close'); }  }  ]   "  >
        <div class="easyui-datagrid"   id="dg_fr7"  ></div>
    </div>




            <form id="fr7"  method="post" enctype="multipart/form-data">
                <table >

                    <tr>
                    <td>

                              <input class="easyui-textbox"  id="id_history_patient_fr7"   name="id_history_patient_fr7"  style="width:30px;height: 30px;"  readonly="true"  />
                              <input class="easyui-textbox"  id="y_fr7"   name="y_fr7"  style="width:50px;height: 30px;"  readonly="true"  />
                               <input class="easyui-textbox"  id="id_growth"   name="id_growth"  style="width:50px;height: 30px;"  readonly="true"  />


                          ชื่อ - นามสกุล :
                    </td>
                    <td>

                        <input class="easyui-textbox"  id="name_lastname_fr7"  name="name_lastname_fr7"  style="width:200px;height: 30px;" readonly="true"  />
                    </td>
                </tr>


                <tr>
                    <td>ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td><input name="doctor_fr7" id="doctor_fr7" class="easyui-textbox"   style="width:200px;height: 30px;"></input></td>
                </tr>


                <tr>
                    <td>วัน/เดือน/ปี ที่เริ่มทำการรักษา :</td>
                    <td>

                        <input class="easyui-datetimebox"  id="date_fr7" name="date_fr7"   />

                                                  <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "   id="cal1_fr7" >คำนวณอายุ</a>


                                                <label>อายุ</label>
            <input class="easyui-textbox"   style="width: 50px;height: 40px;"  id="age1_fr7"  readonly="true"  name="age1_fr7"  />
             <label>ปี</label>

                    </td>
                </tr>



                    <tr>
                    <td>วัน/เดือน/ปี ที่สิ้นสุดการรักษา :</td>
                    <td>

                        <input class="easyui-datetimebox" id="date2_fr7"  name="date2_fr7"></input>


                          <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "      id="cal2_fr7"  id="cal2_fr7"  >คำนวณอายุ</a>


                      <label>อายุ</label>
                      <input class="easyui-textbox"   style="width: 50px;height: 40px;"  readonly="true"  id="age2_fr7"   name="age2_fr7"  />
            <label>ปี</label>

                    </td>
                </tr>

                <tr>
                    <td>
                <div style="padding: 10px 5px;">
              Classification of GOSLON  :
                </td>
                <td>
                    <select class="easyui-combobox"   style="width:200px;height: 40px;"   id="goslon_fr7"  name="goslon_fr7"  >
                      <option > เลือก Classification of GOSLON </option>
                       <option value="1">Group 1</option>
                        <option value="2">Group 2</option>
                        <option value="3">Group 3</option>
                        <option value="4">Group 4</option>
                        <option value="5">Group 5</option>
                </select>
    </div>
                    </td>
            </tr>


                   <tr>
                    <td>Incisor classification of malocclusion:</td>
                    <td>

                        <!--
                        <input name="name1" id="name1" class="easyui-combobox"></input>
                      -->

                      <select class="easyui-combobox"  id="Incisor_fr7"   name="Incisor_fr7"   style="width:200px;height: 40px;"   >

                        <option > เลือก Incisor classification </option>

                       <option value="1">I</option>
               <option value="2">II div 1</option>
                       <option value="3">II div 2</option>
               <option value="4">III</option>

                </select>


                    </td>
                </tr>

                  <tr>
                    <td>Skeletal  classification :</td>
                    <td>

                        <!--
                        <input name="name1" id="name1" class="easyui-combobox"></input>
                        -->

                        <input type="radio" name="skeletal_fr7"  value="1"  id="skeletal1_fr7"  />  I

                        <input type="radio"   name="skeletal_fr7"  value="2"   id="skeletal2_fr7" />  II



                        <input type="radio"  name="skeletal_fr7"  value="3"  id="skeletal3_fr7"   />  III


                    </td>
                </tr>

                 <tr>
                    <td>ชนิดของเครื่องมือ :</td>
                    <td>

                        <!--
                        <input name="name1" id="name1" class="easyui-combobox"></input>
                    -->

                    <input type="radio"  name="typetool_fr7"  value="1"  id="facialmask" > Facial mask  <?=nbs(3)?> ระบุ <input  class="easyui-textbox"  style="widht:100px;height: 40px"  name="other_typetool_fr7"  />
                    <input type="radio"  name="appliance_fr7"  value="1"  id="appliance"  > Functional appliance  <?=nbs(3)?>   ระบุ <input  class="easyui-textbox"  style="widht:100px;height: 40px"   name="other_appliance_fr7"  />


                    </td>
                </tr>




<!--
                <tr>
                    <td>รุปถ่าย (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>

                     <tr>
                    <td>รุปถ่าย (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>
 -->



  <tr>
     <td>
         รูปถ่าย,x-ray ก่อนการรักษา (Before) :
     </td>
     <td>
          <input class="easyui-filebox" name="fileupload1_fr7" data-options="prompt:'Choose another file...'" style="width:50%">
     </td>
 </tr>

   <tr>
     <td>
         รูปถ่าย,x-ray ระหว่างรักษา (During) :
     </td>
     <td>
          <input class="easyui-filebox" name="fileupload2_fr7" data-options="prompt:'Choose another file...'" style="width:50%">
     </td>
 </tr>

    <tr>
     <td>
         รูปถ่าย,x-ray หลังรักษา (After) :
     </td>
     <td>
          <input class="easyui-filebox" name="fileupload3_fr7" data-options="prompt:'Choose another file...'" style="width:50%">
     </td>
 </tr>


           <tr>
                    <td>
                         <label>
                         Dental Casts :
                        </label>

                    </td>
                    <td>

                        <input  type="radio"  name="dentalcast_fr7"  id="dentalcast1_fr7" value="1" > Yes  <input  type="radio"  name="dentalcast_fr7"   id="dentalcast2_fr7"  value="2"> No

                    </td>

                </tr>


                <tr>
                    <td colspan="2" align="center">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'" style="width: 120px;height: 40px;"
                           onclick="
                              $('#fr7').form('submit',{
                                   url:'<?=base_url()?>index.php/welcome/insert_fr7',
                                   success:function(data){
                                          //  alert(data);
                                          if( data == 1 )
                                          {
                                            //  $('#dia_fr7').dialog('open');
                                              //$('$dg_fr7').datagrid('reload');
                                               $('#dg_fr7').datagrid('reload');
                                              $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลแล้ว');

                                          }
                                          else
                                          {
                                              //  $('#dia_fr7').dialog('open');
                                              //$('$dg_fr7').datagrid('reload');
                                               $('#dg_fr7').datagrid('reload');
                                               $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                                          }
                                    }
                              });

                           "
                           >Save/Update</a>
                        <a href="javascript:void(0)" onclick=" $('#dia_treat12_7').window('close'); "  class="easyui-linkbutton" data-options="iconCls:'icon-cancel'"  style="width: 100px;height: 40px;">Close</a>
                    </td>

                </tr>

            </table>
        </form>


</div>

<div id="dia_treat12" class="easyui-window" title=" 7. Corrective Orthodontic Treatment  " data-options="modal:true,closed:true" style="width:600px;height:540px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>

    <div class="easyui-panel"  style="padding:5px;" >
        <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width:100px;height: 40px;"  iconCls="icon-print"
           onclick="
                 $('#dia_fr8').dialog('open');
                 //  url:'<?=base_url()?>index.php/welcome/json_tr8/' + $('#id_history_patient_fr8').textbox('getValue') ,
                 $('#dg_fr8').datagrid({ url:'<?=base_url()?>index.php/welcome/json_tr8/' + $('#id_history_patient_fr8').textbox('getValue') });
           "

           >ดูข้อมูล</a>
    </div>

    <div class="easyui-dialog"  id="dia_fr8"   title="7. Corrective Orthodontic Treatment "  data-options="
         closed:true,
         buttons:[ {  text:'ปิด (Close)',iconCls:'icon-cancel' , handler:function(){ $('#dia_fr8').dialog('close');  }     } ]
         "  style="width: 500px;height: 400px;"  >
        <div class="easyui-datagrid"  id="dg_fr8"  style="width: 480px;height: 400px;"
             data-options="
               url:'<?=base_url()?>index.php/welcome/json_tr8/' + $('#id_history_patient_fr8').textbox('getValue') ,
               singleSelect:true,
               rownumbers:true,
               columns:[[
               { title:'ทันตแพทย์ผู้ทำการรักษา',align:'center', field:'doctor' },
               { title:'วัน/เดือน/ปี ที่เริ่มทำการรักษา', align:'center', field:'begin_date'  },
               { title:'วัน/เดือน/ปี ที่สิ้นสุดการรักษา', align:'center', field:'end_date'  },
               { field:'goslon' , align:'center' ,title:'Classification of GOSLON' },
               { field:'incisor'  , align:'center' , title:'Incisor classification of malocclusion' },
                { field:'skeletal'  , align:'center' ,  title:'Skeletal classification of malocclusion' },
                { field:'tool' , align:'center'  , title:'ชนิดของเครื่องมือ'  },
                {  field:'dentalcast'  , align:'center'  , title:'Dental Casts'   },
               ]],
               toolbar:[
                   {  text:'View/Update',  iconCls:'icon-man' ,  handler:function()
                          {
                                   //alert('t');

                                    var  row=$('#dg_fr8').datagrid('getSelected');
                                    var   id=row.id_corrective;


                                    $('#id_corrective').textbox('setValue',id);

                                    var  url='<?=base_url()?>index.php/welcome/edit_json8';
                                    $.post(url,{ id:id },function(data)
                                       {



                                                /*
                                                doctor_fr8
                                                date_fr8
                                                date2_fr8
                                                goslon_fr8
                                                           incisor1
                                                                   incisor2
                                                                      incisor3
                                                                   incisor4
                                                            skeletal1_fr8
                                                                   skeletal2_fr8
                                                                    skeletal3_fr8
                                                tool_fr8
                                                dentalcast_fr8
                                                id_corrective
                                                */



                                             $.each(data,function(i,k)
                                              {
                                                     $('#doctor_fr8').textbox('setValue',k.doctor);


                                                    // $('#date_fr8').datetimebox('setValue',k.begin_date);
                                                                var begin_date=k.begin_date;
                                                                    if(    begin_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=begin_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date_fr8').textbox('setValue',conv_1);
                                                                    }




                                                   //  $('#date2_fr8').datetimebox('setValue',k.end_date);
                                                     var end_date=k.end_date;
                                                             if(    end_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=end_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date2_fr8').textbox('setValue',conv_1);
                                                                    }








                                                     $('#goslon_fr8').combobox('setValue',k.goslon);

                                                     var  incisor=k.incisor;
                                                     if(  incisor == 1 )
                                                     {
                                                          $('#incisor1').attr('checked',true);
                                                     }
                                                      else  if(  incisor == 2 )
                                                     {
                                                          $('#incisor2').attr('checked',true);
                                                     }
                                                          else  if(  incisor == 3 )
                                                     {
                                                          $('#incisor3').attr('checked',true);
                                                     }
                                                           else  if(  incisor == 4 )
                                                     {
                                                          $('#incisor4').attr('checked',true);
                                                     }

                                                     var skeletal=k.skeletal;
                                                     if(   skeletal  == 1  )
                                                     {
                                                           $('#skeletal1_fr8').attr('checked',true);
                                                     }
                                                     else    if(   skeletal  == 2  )
                                                     {
                                                           $('#skeletal2_fr8').attr('checked',true);
                                                     }
                                                      else    if(   skeletal  == 3  )
                                                     {
                                                           $('#skeletal3_fr8').attr('checked',true);
                                                     }

                                                     $('#tool_fr8').textbox('setValue',k.tool);




                                                      var  dentalcast=k.dentalcast;

                                                      if( dentalcast == 1 )
                                                      {
                                                               // id=dentalcast1_fr8
                                                               $('#dentalcast1_fr8').attr('checked',true);
                                                      }
                                                      else if( dentalcast == 2 )
                                                      {
                                                             $('#dentalcast2_fr8').attr('checked',true);
                                                      }


                                              });





                                       },'json');



                          }
                   },
                  { text:'Reload',iconCls:'icon-reload',handler:function(){ $('#dg_fr8').datagrid('reload');  } },
                  { text:'Delete',iconCls:'icon-cancel',handler:function(){
                               var  row=$('#dg_fr8').datagrid('getSelected');
                               if( row )
                               {
                                    id=row.id_corrective;
                                    //alert(id);
                                    var  url='<?=base_url()?>index.php/welcome/del_fr8/' + id;
                                    $.messager.confirm('ต้องการลบข้อมูล','คุณต้องการลบข้อมูล',function(r){
                                            if( r )
                                            {
                                                 $.post(url,function(){

                                                      //alert('t');
                                                       $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลสำเร็จ');
                                                       $('#dg_fr8').datagrid('reload');

                                                 });
                                            }
                                    });

                               }
                      }
                  },
                   {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr8').datagrid('getSelected');
                                                       var  file1=row.file1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                       // window.open(url);
                                                          if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr8').datagrid('getSelected');
                                                       var  file1=row.file2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                     // window.open(url);
                                                        if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr8').datagrid('getSelected');
                                                       var  file1=row.file3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                     //  window.open(url);
                                                        if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },



               ]
             "

             >

        </div>
    </div>

            <form id="fr8"  method="post" enctype="multipart/form-data">
            <table>

                <tr>
                    <td>
                          <input class="easyui-textbox"  id="id_history_patient_fr8"   name="id_history_patient_fr8"  style="width:30px;height: 30px;"  readonly="true"  />
                           <input class="easyui-textbox"  id="y_fr8"   name="y_fr8"  style="width:50px;height: 30px;"  readonly="true"  />

                          <input class="easyui-textbox"  id="id_corrective"   name="id_corrective"  style="width:50px;height: 30px;"  readonly="true"  />


                          ชื่อ - นามสกุล :
                    </td>
                    <td>
                      <!--   <input class="easyui-textbox"  id="id_history_patient_fr8"   name="id_history_patient_fr8"  style="width:30px;height: 30px;"  readonly="true"  /> -->
                        <input class="easyui-textbox"  id="name_lastname_fr8"  name="name_lastname_fr8"  style="width:200px;height: 30px;" readonly="true"  />
                    </td>
                </tr>


                <tr>
                    <td>ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td><input name="doctor_fr8" id="doctor_fr8" class="easyui-textbox"  ></input></td>
                </tr>


                <tr>
                    <td>วัน/เดือน/ปี ที่เริ่มทำการรักษา :</td>
                    <td>

                        <input class="easyui-datetimebox"  id="date_fr8" name="date_fr8" ></input>


                        <a href="javascript:void(0)"  id="cal1_fr8" name='cal1_fr8'  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>


                         <label>อายุ</label>
                         <input class="easyui-textbox"   id="age1_fr8" readonly="true"   name="age1_fr8"    style="width: 50px;height: 40px;"    />
                        <label>ปี</label>

                    </td>
                </tr>



                    <tr>
                    <td>วัน/เดือน/ปี ที่สิ้นสุดการรักษา :</td>
                    <td>





                        <input class="easyui-datetimebox"  id="date2_fr8"  name="date2_fr8"></input>


                        <a href="javascript:void(0)"  id="cal2_fr8"  name='cal2_fr8'  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>

                        <label>อายุ</label>
                        <input class="easyui-textbox"  id="age2_fr8"  readonly="true"  name="age2_fr8"  style="width: 50px;height: 40px;"    />
                        <label>ปี</label>


                    </td>
                </tr>

                <tr>
                    <td>
                <div style="padding: 10px 5px;">
              Classification of GOSLON  :
                </td>
                <td>
                    <select class="easyui-combobox"  id="goslon_fr8"  name="goslon_fr8"  style="width:200px;height: 40px;"   >
                       <option  > เลือก Classification </option>
                       <option value="1">Group 1</option>
                        <option value="2">Group 2</option>
                        <option value="3">Group 3</option>
                        <option value="4">Group 4</option>
                        <option value="5">Group 5</option>
                </select>
    </div>
                    </td>
            </tr>

                <tr>
                    <td>
      <div style="padding: 10px 5px;">
                    Incisor classification of malocclusion :
      </td>
      <td>
          <input type="radio" name="incisor_fr8"    id="incisor1"     value="1"  />  I

                    <input type="radio"   name="incisor_fr8"     id="incisor2"    value="2"    />  II div 1

                       <input type="radio"   name="incisor_fr8"     id="incisor3"    value="3"   />  II div 2

                    <input type="radio"   name="incisor_fr8"     id="incisor4"    value="4"    />  III
    </div>
                    </td>
            </tr>

                <tr>
                    <td>
          <div style="padding: 10px 5px;">
                    Skeletal  classification of malocclusion :
          </td>
          <td>
              <input type="radio" name="skeletal_fr8"   id="skeletal1_fr8"  value="1"   />  I
                    <input type="radio"   name="skeletal_fr8"   id="skeletal2_fr8"  value="2"  />  II
                    <input type="radio"  name="skeletal_fr8"   id="skeletal3_fr8"  value="3"  />  III
    </div>
                    </td>
               </tr>


                 <tr>
                    <td>ชนิดของเครื่องมือ :</td>
                    <td><input name="tool_fr8" id="tool_fr8" class="easyui-textbox"></input></td>
                </tr>




<!--
                <tr>
                    <td>รุปถ่าย (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>

                     <tr>
                    <td>รุปถ่าย (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>
 -->



  <tr>
     <td>
         รูปถ่าย,x-ray ก่อนการรักษา (Before) :
     </td>
     <td>
          <input class="easyui-filebox" name="fileupload1_fr8" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>

   <tr>
     <td>
         รูปถ่าย,x-ray ระหว่างรักษา (During) :
     </td>
     <td>
          <input class="easyui-filebox" name="fileupload2_fr8" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>

    <tr>
     <td>
         รูปถ่าย,x-ray หลังรักษา (After) :
     </td>
     <td>
          <input class="easyui-filebox" name="fileupload3_fr8" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>


          <tr>
                    <td>
                         <label>
                         Dental Casts :
                        </label>

                    </td>
                    <td>

                        <input  type="radio" name="dentalcast_fr8"  id="dentalcast1_fr8"  value="1" > Yes  <input  type="radio"  name="dentalcast_fr8"  id="dentalcast2_fr8" value="2"> No

                    </td>

                </tr>


                <tr>
                    <td colspan="2" align="center">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'"  style="width:120px;height: 40px;"
                           onclick="
                                $('#fr8').form('submit',{
                                    url:'<?=base_url()?>index.php/welcome/insert_fr8/',
                                    success:function(data)
                                     {
                                           //alert(data);
                                           if( data == 1)
                                           {
                                                  $.messager.alert('สถานะการเพิ่มข้อมูล','เพิ่มข้อมูลสำเร็จ');
                                                //  $('#dia_fr8').dialog('open');
                                                  $('#dg_fr8').datagrid('reload');
                                           }
                                           else
                                           {
                                                 $.messger.alert('สถานะการเพิ่มข้อมูล','เพิ่มข้อมูลผิดพลาด');
                                           }
                                     }

                                });
                           "

                           >Save/Update</a>
                        <a href="javascript:void(0)" onclick=" $('#dia_treat12').window('close'); "  class="easyui-linkbutton" data-options="iconCls:'icon-cancel'"  style="width: 100px;height: 40px;">Close</a>
                    </td>

                </tr>

            </table>
        </form>


</div>




<div id="dia_treat13" class="easyui-window" title=" ขยายขากรรไกรและจัดเรียงสันเหงือกเพื่อเตรียมสำหรับการปลูกถ่ายกระดูกที่บริเวณช่องโหว่ของสันเหงือก " data-options="modal:true,closed:true" style="width:750px;height:300px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>


            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                <tr>
                    <td>วัน/เดือน/ปี ที่เริ่มทำการรักษา :</td>
                    <td>

                        <input class="easyui-datebox"></input>
                    </td>
                </tr>

                <!--
                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>

                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                -->


                <tr>
                    <td>วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา :</td>
                    <td>

                        <input class="easyui-datebox"></input>
                    </td>
                </tr>


                 <tr>
                    <td>ชนิดของเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>

                     <tr>
                    <td>วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา :</td>
                    <td>

                        <input class="easyui-textbox"></input>
                    </td>
                </tr>



                <tr>
                    <td>รุปถ่าย ,x-ray (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>

                     <tr>
                    <td>รุปถ่าย ,x-ray (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>

<!--
 <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>

  <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>
 -->

                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>

                </tr>

            </table>
        </form>


</div>



<div id="dia_treat14" class="easyui-window" title=" ดูแล ป้องกัน เสริมสร้างสุขภาพช่องปากในระยะฟันผสม-ฟันแท้ระยะแรก " data-options="modal:true,closed:true" style="width:550px;height:200px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>


            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ผู้ที่ให้คำแนะนำ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>

                        <input class="easyui-datebox"></input>
                    </td>
                </tr>

                <!--
                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>

                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                -->







<!--
 <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>

  <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>
 -->

                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>

                </tr>

            </table>
        </form>


</div>




<div id="dia_treat15" class="easyui-window" title=" 5. Bone graft surgery   " data-options="modal:true,closed:true" style="width:600px;height:500px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>

    <div class="easyui-tabs"  >
        <div title="Record 1"  style="padding: 3px;">
     <!--------------------- begin -------------------------------------->

             <div class="easyui-panel" style="padding: 3px;">
        <a href="javascript:void(0)"  class="easyui-linkbutton"   style="width: 130px;height: 40px;"  iconCls="icon-man"
           onclick="
              // alert('t');

                    $('#dia_fr6').dialog('open');
                    var id =   $('#id_history_patient_fr6').textbox('getValue');
                  //  alert(id);
                   $('#dg_fr6').datagrid({
                        url:'<?=base_url()?>index.php/welcome/json_fr6/' + id  ,
                   singleSelect:true,
                   rownumbers:true,
                   columns:[[
                      // { field:'firstname', title:'ชื่อ', align:'center'  },
                      // {  field:'lastname', title:'นามสกุล', align:'center' },
                       { field:'doctor',  title:'แพทย์ผู้ทำการรักษา', align:'center' },
                       { field:'date1', title:'วัน/เดือน/ปี ที่่ทำการรักษา', align:'center' },
                        { title:'เทคนิคที่ใช้ :',  field:'technic',  },
                        {  title:'Dental Casts  ',  field:'dentalcast'  },
                   ]],
                   toolbar:[
                   { text:'เรียกดูข้อมูล/แก้ไข' ,iconCls:'icon-man' ,handler:function()
                        {
                               var   row= $('#dg_fr6').datagrid('getSelected');
                               var  id=row.id_bonegraft;
                              // alert(id);
                               $('#id_bonegraft').textbox('setValue',id);
                               if( row )
                               {
                                     var  url='<?=base_url()?>index.php/welcome/edit_json6';
                                     $.post(url,{ id:id },function(data)
                                       {
                                           //alert(data);
                                            $.each(data,function(i,k)
                                              {

                                                    //--------------------------------------------------------
                                                         $('#doctor_fr6').textbox('setValue',k.doctor);



                                                         var  doctor=k.doctor;
                                                         alert( doctor );

                                                        // $('#date_fr6').datetimebox('setValue',k.date1);
                                                         var begin_date=k.date1;
                                                         if(    begin_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=begin_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date_fr6').textbox('setValue',conv_1);
                                                                    }


                                                         $('#technic').textbox('setValue',k.technic);

                                                         var  dentalcast= k.dentalcast;

                                                         if(  dentalcast == 1 )
                                                         {
                                                                $('#dentalcast1_fr6').attr('checked',true);
                                                         }
                                                          else    if(  dentalcast == 2 )
                                                         {
                                                                $('#dentalcast2_fr6').attr('checked',true);
                                                         }



                                                         //dentalcast1_fr6

                                                         /*
                                                          $('#date2_fr4').datetimebox('setValue',k.end_date);
                                                          var  goslon=k.goslon;
                                                          //alert(goslon);
                                                           $('#goslon').combobox('setValue',goslon);
                                                           var 	incisor=k.incisor;

                                                           var   incisor=2;
                                                           // alert(incisor);
                                                           //incisor1
                                                                 if(  incisor == 1 )
                                                                 {
                                                                     $('#incisor1').attr('checked',true);
                                                                 }
                                                                 else if(   incisor == 2 )
                                                                 {
                                                                      $('#incisor2').attr('checked',true);
                                                                 }
                                                                  else if(   incisor  == 3)
                                                                 {
                                                                      $('#incisor3').attr('checked',true);
                                                                 }
                                                                  else if(  incisor  == 4)
                                                                 {
                                                                       $('#incisor4').attr('checked',true);
                                                                 }

                                                                 var  skeletal=k.skeleta;
                                                                 //alert( skeletal );
                                                                 //  skeletal1
                                                                 if(  skeletal == 1  )
                                                                 {
                                                                     $('#skeletal1').attr('checked',true);
                                                                 }
                                                                 else if( skeletal == 2 )
                                                                 {
                                                                     $('#skeletal2').attr('checked',true);
                                                                 }
                                                                 else if( skeletal == 3 )
                                                                 {
                                                                     $('#skeletal3').attr('checked',true);
                                                                 }

                                                               var  dentalcast=k.dentalcast;
                                                              // alert(dentalcast);
                                                               if(  dentalcast == 1 )
                                                               {
                                                                     $('#dental_cast_yes').attr('checked',true);
                                                               }
                                                              else  if(  dentalcast == 2 )
                                                               {
                                                                     $('#dental_cast_no').attr('checked',true);
                                                               }
                                                            */

                                                    //--------------------------------------------------------
                                              });
                                       },'json');
                               }



                        }
                    },
                   { text:'Reload',iconCls:'icon-reload',handler:function(){  $('#dg_fr6').datagrid('reload');  }  } ,
                   {  text:'Delete',iconCls:'icon-remove',handler:function()
                         {
                              var  rows=$('#dg_fr6').datagrid('getSelected');
                              if( rows )
                              {

                                     var  id=rows.id_bonegraft;
                                      //alert(id);
                                      $.messager.confirm('สถานะการลบข้อมูล',' คุณต้องการลบข้อมูลหรือไม่ ', function(r){
                                           if( r )
                                             {
                                                   //alert('t');
                                                   //alert(id);
                                                    var  url='<?=base_url()?>index.php/welcome/del_fr6/'   +  id;
                                                    $.post(url,function(data){
                                                            // alert(data);
                                                              if( data == 1 )
                                                              {
                                                                     $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลสำเร็จ');
                                                                     $('#dg_fr6').datagrid('reload');
                                                              }
                                                              else if( data == 0 )
                                                              {
                                                                     $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลล้มเหลว');
                                                              }
                                                    });
                                             }
                                      } );





                              }
                         }
                     },

                      {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr6').datagrid('getSelected');
                                                       var  file1=row.file1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr6').datagrid('getSelected');
                                                       var  file1=row.file2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                       //window.open(url);
                                                          if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr6').datagrid('getSelected');
                                                       var  file1=row.file3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },

                   ]

                   });

           "
           >
            เรียกดูข้อมูล1</a>
        <div id="dia_fr6"   class="easyui-dialog"  data-options=" closed:true, buttons:[ {  text:'ปิด (Close)' ,handler:function(){ $('#dia_fr6').dialog('close');  }, iconCls:'icon-remove' } ] "  title="5. Bone graft surgery "  style="width:600px;height: 400px;"  >
            <div class="easyui-datagrid"  style="width:580px;height: 390px;"   id="dg_fr6"


                 ></div>
        </div>

    </div>


            <form id="fr6"  method="post" enctype="multipart/form-data">
            <table>


                <tr>
                      <input class="easyui-textbox"  id="id_history_patient_fr6"   name="id_history_patient_fr6"  style="width:30px;height: 30px;"  readonly="true"  />
                      <input class="easyui-textbox"  id="y_fr6"   name="y_fr6"  style="width:50px;height: 30px;"  readonly="true"  />
                     <input class="easyui-textbox"  id="id_bonegraft"   name="id_bonegraft"  style="width:50px;height: 30px;"  readonly="true"  />


                    <td>
                          ชื่อ - นามสกุล :
                    </td>
                    <td>

                        <input class="easyui-textbox"  id="name_lastname_fr6"  name="name_lastname_fr6"  style="width:150px;height: 30px;" readonly="true"  />


                        <input class="easyui-textbox"   id="result_analysis_fr6"   name="result_analysis_fr6"  multiline=true   style="width:200px;height: 40px;" readonly="true"   />

                    </td>
                </tr>





                <tr>
                    <td> ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td><input name="doctor_fr6" id="doctor_fr6" class="easyui-textbox" ></input></td>
                </tr>





                <tr>
                    <td>วัน/เดือน/ปี ที่่ทำการรักษา :</td>
                    <td>

                        <input class="easyui-datetimebox"  id="date_fr6"  name="date_fr6" ></input>

                           <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "  id="cal1_fr6"    >คำนวณอายุ</a>

                        <label>อายุ</label>
                        <input class="easyui-textbox"  readonly="true"  style="width: 50px;height: 40px;"   id="age1_fr6"   />
                        <label>ปี</label>

                    </td>
                </tr>

                    <tr>
                    <td>บริเวณที่ทำ :</td>
                    <td>

                        <input class="easyui-textbox"  id="join_fr6" name="join_fr6" ></input>
                    </td>
                </tr>


                  <tr>
                    <td>เทคนิคที่ใช้ :</td>
                    <td>

                        <input class="easyui-textbox"  id="technic" name="technic" ></input>
                    </td>
                </tr>


                 <tr>
                    <td>Complication :</td>
                    <td>


                        <input type="radio"  id="complication_fr6_y"  name="complication_fr6"  value="1" />มี
                        <input class="easyui-textbox"  id="other_complication_fr6_y" name="other_complication_fr6_y"  style="width: 100;height: 30px;"  multiple=true    />
                        <input type="radio"  id="complication_fr6_n"  name="complication_fr6"  value="2" />ไม่มี



                    </td>
                </tr>


                    <tr>
                    <td>
        <label>
           รูปถ่าย,x-ray ก่อนการรักษา (ฺBefore) :
            </label>
                    </td>
                    <td>
                        <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่าย,x-ray ก่อนการรักษา '   "  style="width:250px;height: 40px;"   id="fileupload1_fr6" name="fileupload1_fr6"  />
                    </td>
            </tr>


                <tr>
                    <td>
        <label>
           รูปถ่าย,x-ray ระหว่างการรักษา (ฺDuring) :
            </label>
                    </td>
                    <td>
           <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่าย,x-ray ระหว่างการรักษา '   "  style="width:250px;height: 40px;"   id="fileupload2_fr6" name="fileupload2_fr6"   />
                    </td>
            </tr>



            <tr>
                <td>
               <label>
           รูปถ่าย,x-ray หลังการรักษา (ฺAfter) :
           </label>
                </td>
                <td>
                         <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่าย,x-ray หลังการรักษา '   "  style="width:250px;height: 40px;"   id="fileupload3_fr6" name="fileupload3_fr6"   />
                </td>
            </tr>

                 <tr>
                <td>
               <label>
           Op note :
           </label>
                </td>
                <td>
                         <input class="easyui-filebox" data-options=" prompt:'  เลือกรูป Op note '   "  style="width:250px;height: 40px;"   id="opnote" name="opnote"   />
                </td>
            </tr>



                     <tr>
                    <td>
                         <label>
                         Dental Casts :
                        </label>

                    </td>
                    <td>

                        <input  type="radio"  id="dentalcast1_fr6"  name="dentalcast_fr6" value="1"> Yes  <input  type="radio"   id="dentalcast2_fr6"  name="dentalcast_fr6" value="2"> No

                    </td>

                </tr>



                <!--
                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>

                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                -->







<!--
 <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>

  <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>
 -->

                <tr>
                    <td colspan="2" align="center">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'"  style="width: 120px;height: 40px;"
                           onclick="
                              $('#fr6').form('submit',{
                                  url:'<?=base_url()?>index.php/welcome/inst_fr6',
                                  success: function(data)
                                  {
                                         //alert(data);
                                         if( data == 1 )
                                         {
                                            //   $('#dia_fr6').dialog('open');
                                               $('#dg_fr6').datagrid('reload');
                                               $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ');
                                         }
                                         else{
                                               $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                                         }
                                  }
                              })
                           "

                           >Save/Update</a>
                        <a href="javascript:void(0)" onclick=" $('#dia_treat15').window('close');  "  class="easyui-linkbutton" data-options="iconCls:'icon-cancel'" style="width: 100px;height: 40px;">Close</a>
                    </td>

                </tr>

            </table>
        </form>

     <!--------------------- end ----------------------------------------->
        </div>
        <div title="Record 2"  style="padding: 3px;">
     <!--------------------- begin -------------------------------------->

             <div class="easyui-panel" style="padding: 3px;">
        <a href="javascript:void(0)"  class="easyui-linkbutton"   style="width: 130px;height: 40px;"  iconCls="icon-man"
           onclick="
              // alert('t');

                    $('#dia_fr6_2').dialog('open');
                    var id =   $('#id_history_patient_fr6').textbox('getValue');



                  //  alert(id);
                   $('#dg_fr6_2').datagrid({
                        //url:'<?=base_url()?>index.php/welcome/json_fr6/' + id  ,
                         url:'<?=base_url()?>index.php/welcome/json_fr6_2/' + id  ,
                   singleSelect:true,
                   rownumbers:true,
                   columns:[[
                     //  { field:'firstname', title:'ชื่อ', align:'center'  },
                      // {  field:'lastname', title:'นามสกุล', align:'center' },
                       { field:'doctor',  title:'แพทย์ผู้ทำการรักษา', align:'center' },
                       { field:'date1', title:'วัน/เดือน/ปี ที่่ทำการรักษา', align:'center' },
                        { title:'เทคนิคที่ใช้ :',  field:'technic',  },
                        {  title:'Dental Casts  ',  field:'dentalcast'  },
                   ]],
                   toolbar:[
                   { text:'เรียกดูข้อมูล/แก้ไข' ,iconCls:'icon-man' ,handler:function()
                        {
                               var   row= $('#dg_fr6_2').datagrid('getSelected');
                               var  id=row.id_bonegraft;
                              // alert(id);
                               $('#id_bonegraft_2').textbox('setValue',id);
                               if( row )
                               {
                                     var  url='<?=base_url()?>index.php/welcome/edit_json6';
                                     $.post(url,{ id:id },function(data)
                                       {
                                           //alert(data);
                                            $.each(data,function(i,k)
                                              {

                                                    //--------------------------------------------------------
                                                         $('#doctor_fr6_2').textbox('setValue',k.doctor);
                                                         $('#date_fr6_2').datetimebox('setValue',k.date1);
                                                         $('#technic_2').textbox('setValue',k.technic);

                                                         var  dentalcast= k.dentalcast;

                                                         if(  dentalcast == 1 )
                                                         {
                                                                $('#dentalcast1_fr6_2').attr('checked',true);
                                                         }
                                                          else    if(  dentalcast == 2 )
                                                         {
                                                                $('#dentalcast2_fr6_2').attr('checked',true);
                                                         }



                                                         //dentalcast1_fr6

                                                         /*
                                                          $('#date2_fr4').datetimebox('setValue',k.end_date);
                                                          var  goslon=k.goslon;
                                                          //alert(goslon);
                                                           $('#goslon').combobox('setValue',goslon);
                                                           var 	incisor=k.incisor;

                                                           var   incisor=2;
                                                           // alert(incisor);
                                                           //incisor1
                                                                 if(  incisor == 1 )
                                                                 {
                                                                     $('#incisor1').attr('checked',true);
                                                                 }
                                                                 else if(   incisor == 2 )
                                                                 {
                                                                      $('#incisor2').attr('checked',true);
                                                                 }
                                                                  else if(   incisor  == 3)
                                                                 {
                                                                      $('#incisor3').attr('checked',true);
                                                                 }
                                                                  else if(  incisor  == 4)
                                                                 {
                                                                       $('#incisor4').attr('checked',true);
                                                                 }

                                                                 var  skeletal=k.skeleta;
                                                                 //alert( skeletal );
                                                                 //  skeletal1
                                                                 if(  skeletal == 1  )
                                                                 {
                                                                     $('#skeletal1').attr('checked',true);
                                                                 }
                                                                 else if( skeletal == 2 )
                                                                 {
                                                                     $('#skeletal2').attr('checked',true);
                                                                 }
                                                                 else if( skeletal == 3 )
                                                                 {
                                                                     $('#skeletal3').attr('checked',true);
                                                                 }

                                                               var  dentalcast=k.dentalcast;
                                                              // alert(dentalcast);
                                                               if(  dentalcast == 1 )
                                                               {
                                                                     $('#dental_cast_yes').attr('checked',true);
                                                               }
                                                              else  if(  dentalcast == 2 )
                                                               {
                                                                     $('#dental_cast_no').attr('checked',true);
                                                               }
                                                            */

                                                    //--------------------------------------------------------
                                              });
                                       },'json');
                               }



                        }
                    },
                   { text:'Reload',iconCls:'icon-reload',handler:function(){  $('#dg_fr6_2').datagrid('reload');  }  } ,
                   {  text:'Delete',iconCls:'icon-remove',handler:function()
                         {
                              var  rows=$('#dg_fr6_2').datagrid('getSelected');
                              if( rows )
                              {

                                     var  id=rows.id_bonegraft;
                                      //alert(id);
                                      $.messager.confirm('สถานะการลบข้อมูล',' คุณต้องการลบข้อมูลหรือไม่ ', function(r){
                                           if( r )
                                             {
                                                   //alert('t');
                                                   //alert(id);
                                                    var  url='<?=base_url()?>index.php/welcome/del_fr6/'   +  id;
                                                    $.post(url,function(data){
                                                            // alert(data);
                                                              if( data == 1 )
                                                              {
                                                                     $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลสำเร็จ');
                                                                     $('#dg_fr6_2').datagrid('reload');
                                                              }
                                                              else if( data == 0 )
                                                              {
                                                                     $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลล้มเหลว');
                                                              }
                                                    });
                                             }
                                      } );





                              }
                         }
                     },

                      {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr6_2').datagrid('getSelected');
                                                       var  file1=row.file1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr6_2').datagrid('getSelected');
                                                       var  file1=row.file2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                       //window.open(url);
                                                          if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr6_2').datagrid('getSelected');
                                                       var  file1=row.file3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },

                   ]

                   });

           "
           >
            เรียกดูข้อมูล2</a>
        <div id="dia_fr6_2"   class="easyui-dialog"  data-options=" closed:true, buttons:[ {  text:'ปิด (Close)' ,handler:function(){ $('#dia_fr6_2').dialog('close');  }, iconCls:'icon-remove' } ] "  title="5. Bone graft surgery "  style="width:600px;height: 400px;"  >
            <div class="easyui-datagrid"  style="width:580px;height: 390px;"   id="dg_fr6_2"


                 ></div>
        </div>

    </div>


            <form id="fr6_2"  method="post" enctype="multipart/form-data">
            <table>


                <tr>
                      <input class="easyui-textbox"  id="id_history_patient_fr6_2"   name="id_history_patient_fr6_2"  style="width:30px;height: 30px;"  readonly="true"  />
                      <input class="easyui-textbox"  id="y_fr6_2"   name="y_fr6_2"  style="width:50px;height: 30px;"  readonly="true"  />
                     <input class="easyui-textbox"  id="id_bonegraft_2"   name="id_bonegraft_2"  style="width:50px;height: 30px;"  readonly="true"  />


                    <td>
                          ชื่อ - นามสกุล :
                    </td>
                    <td>

                        <input class="easyui-textbox"  id="name_lastname_fr6_2"  name="name_lastname_fr6_2"  style="width:150px;height: 30px;" readonly="true"  />

                          <input class="easyui-textbox"   id="result_analysis_fr6_2"   name="result_analysis_fr6_2"  multiline=true   style="width:200px;height: 40px;" readonly="true"   />
                    </td>
                </tr>


                <tr>
                    <td> ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td><input name="doctor_fr6_2" id="doctor_fr6_2" class="easyui-textbox" ></input></td>
                </tr>





                <tr>
                    <td>วัน/เดือน/ปี ที่่ทำการรักษา :</td>
                    <td>

                        <input class="easyui-datetimebox"  id="date_fr6_2"  name="date_fr6_2" ></input>

                           <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "  id="cal1_fr6_2"    >คำนวณอายุ</a>

                        <label>อายุ</label>
                        <input class="easyui-textbox"  readonly="true"  style="width: 50px;height: 40px;"   id="age1_fr6_2"   />
                        <label>ปี</label>

                    </td>
                </tr>



                <tr>
                    <td>บริเวณที่ทำ :</td>
                    <td>

                        <input class="easyui-textbox"  id="join_fr6_2" name="join_fr6_2" ></input>
                    </td>
                </tr>



                  <tr>
                    <td>เทคนิคที่ใช้ :</td>
                    <td>

                        <input class="easyui-textbox"  id="technic_fr6_2" name="technicfr6_2" ></input>
                    </td>
                </tr>


                 <tr>
                    <td>Complication :</td>
                    <td>

                       <input type="radio"  id="complication_fr6_2_y"  name="complication_fr6_2"  value="1" />มี
                        <input class="easyui-textbox"  id="other_complication_fr6_2_y" name="other_complication_fr6_2_y"  style="width: 100;height: 30px;"  multiple=true    />
                        <input type="radio"  id="complication_fr6_2_n"  name="complication_fr6_2"  value="2" />ไม่มี


                    </td>
                </tr>


                    <tr>
                    <td>
        <label>
           รูปถ่าย,x-ray ก่อนการรักษา (ฺBefore) :
            </label>
                    </td>
                    <td>
                        <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่าย,x-ray ก่อนการรักษา '   "  style="width:250px;height: 40px;"   id="fileupload1_fr6_2" name="fileupload1_fr6_2"  />
                    </td>
            </tr>


                <tr>
                    <td>
        <label>
           รูปถ่าย,x-ray ระหว่างการรักษา (ฺDuring) :
            </label>
                    </td>
                    <td>
           <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่าย,x-ray ระหว่างการรักษา '   "  style="width:250px;height: 40px;"   id="fileupload2_fr6_2" name="fileupload2_fr6_2"   />
                    </td>
            </tr>



            <tr>
                <td>
               <label>
           รูปถ่าย,x-ray หลังการรักษา (ฺAfter) :
           </label>
                </td>
                <td>
                         <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่าย,x-ray หลังการรักษา '   "  style="width:250px;height: 40px;"   id="fileupload3_fr6_2" name="fileupload3_fr6_2"   />
                </td>
            </tr>

                 <tr>
                <td>
               <label>
           Op note :
           </label>
                </td>
                <td>
                         <input class="easyui-filebox" data-options=" prompt:'  เลือกรูป Op note '   "  style="width:250px;height: 40px;"   id="opnote_2" name="opnote_2"   />
                </td>
            </tr>



                     <tr>
                    <td>
                         <label>
                         Dental Casts :
                        </label>

                    </td>
                    <td>

                        <input  type="radio"  id="dentalcast1_fr6_2"  name="dentalcast_fr6_2" value="1"> Yes  <input  type="radio"   id="dentalcast2_fr6_2"  name="dentalcast_fr6_2" value="2"> No

                    </td>

                </tr>



                <!--
                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>

                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                -->







<!--
 <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>

  <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>
 -->

                <tr>
                    <td colspan="2" align="center">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'"  style="width: 120px;height: 40px;"
                           onclick="
                              $('#fr6_2').form('submit',{
                                  url:'<?=base_url()?>index.php/welcome/inst_fr6_2',
                                  success: function(data)
                                  {
                                        // alert(data);

                                         if( data == 1 )
                                         {
                                              // $('#dia_fr6_2').dialog('open');
                                               $('#dg_fr6_2').datagrid('reload');
                                               $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ');
                                         }
                                         else{
                                               $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                                         }

                                  }
                              })
                           "

                           >Save/Update</a>
                        <a href="javascript:void(0)" onclick=" $('#dia_treat15').window('close');  "  class="easyui-linkbutton" data-options="iconCls:'icon-cancel'" style="width: 100px;height: 40px;">Close</a>
                    </td>

                </tr>

            </table>
        </form>

     <!--------------------- end ----------------------------------------->
        </div>
         <div title="Record 3"  style="padding: 3px;">
        <!--------------------- begin -------------------------------------->

             <div class="easyui-panel" style="padding: 3px;">
        <a href="javascript:void(0)"  class="easyui-linkbutton"   style="width: 130px;height: 40px;"  iconCls="icon-man"
           onclick="
              // alert('t');

                    $('#dia_fr6_3').dialog('open');
                    var id =   $('#id_history_patient_fr6').textbox('getValue');
                  //  alert(id);
                   $('#dg_fr6_3').datagrid({
                       // url:'<?=base_url()?>index.php/welcome/json_fr6/' + id  ,
                          url:'<?=base_url()?>index.php/welcome/json_fr6_3/' + id  ,

                   singleSelect:true,
                   rownumbers:true,
                   columns:[[
                     //  { field:'firstname', title:'ชื่อ', align:'center'  },
                    //   {  field:'lastname', title:'นามสกุล', align:'center' },
                       { field:'doctor',  title:'แพทย์ผู้ทำการรักษา', align:'center' },
                       { field:'date1', title:'วัน/เดือน/ปี ที่่ทำการรักษา', align:'center' },
                        { title:'เทคนิคที่ใช้ :',  field:'technic',  },
                        {  title:'Dental Casts  ',  field:'dentalcast'  },
                   ]],
                   toolbar:[
                   { text:'เรียกดูข้อมูล/แก้ไข' ,iconCls:'icon-man' ,handler:function()
                        {
                               var   row= $('#dg_fr6_3').datagrid('getSelected');
                               var  id=row.id_bonegraft;
                              // alert(id);
                               $('#id_bonegraft_3').textbox('setValue',id);
                               if( row )
                               {
                                     var  url='<?=base_url()?>index.php/welcome/edit_json6';
                                     $.post(url,{ id:id },function(data)
                                       {
                                           //alert(data);
                                            $.each(data,function(i,k)
                                              {

                                                    //--------------------------------------------------------
                                                         $('#doctor_fr6_3').textbox('setValue',k.doctor);
                                                         $('#date_fr6_3').datetimebox('setValue',k.date1);
                                                         $('#technic_3').textbox('setValue',k.technic);

                                                         var  dentalcast= k.dentalcast;

                                                         if(  dentalcast == 1 )
                                                         {
                                                                $('#dentalcast1_fr6_3').attr('checked',true);
                                                         }
                                                          else    if(  dentalcast == 2 )
                                                         {
                                                                $('#dentalcast2_fr6_3').attr('checked',true);
                                                         }



                                                         //dentalcast1_fr6

                                                         /*
                                                          $('#date2_fr4').datetimebox('setValue',k.end_date);
                                                          var  goslon=k.goslon;
                                                          //alert(goslon);
                                                           $('#goslon').combobox('setValue',goslon);
                                                           var 	incisor=k.incisor;

                                                           var   incisor=2;
                                                           // alert(incisor);
                                                           //incisor1
                                                                 if(  incisor == 1 )
                                                                 {
                                                                     $('#incisor1').attr('checked',true);
                                                                 }
                                                                 else if(   incisor == 2 )
                                                                 {
                                                                      $('#incisor2').attr('checked',true);
                                                                 }
                                                                  else if(   incisor  == 3)
                                                                 {
                                                                      $('#incisor3').attr('checked',true);
                                                                 }
                                                                  else if(  incisor  == 4)
                                                                 {
                                                                       $('#incisor4').attr('checked',true);
                                                                 }

                                                                 var  skeletal=k.skeleta;
                                                                 //alert( skeletal );
                                                                 //  skeletal1
                                                                 if(  skeletal == 1  )
                                                                 {
                                                                     $('#skeletal1').attr('checked',true);
                                                                 }
                                                                 else if( skeletal == 2 )
                                                                 {
                                                                     $('#skeletal2').attr('checked',true);
                                                                 }
                                                                 else if( skeletal == 3 )
                                                                 {
                                                                     $('#skeletal3').attr('checked',true);
                                                                 }

                                                               var  dentalcast=k.dentalcast;
                                                              // alert(dentalcast);
                                                               if(  dentalcast == 1 )
                                                               {
                                                                     $('#dental_cast_yes').attr('checked',true);
                                                               }
                                                              else  if(  dentalcast == 2 )
                                                               {
                                                                     $('#dental_cast_no').attr('checked',true);
                                                               }
                                                            */

                                                    //--------------------------------------------------------
                                              });
                                       },'json');
                               }



                        }
                    },
                   { text:'Reload',iconCls:'icon-reload',handler:function(){  $('#dg_fr6_3').datagrid('reload');  }  } ,
                   {  text:'Delete',iconCls:'icon-remove',handler:function()
                         {
                              var  rows=$('#dg_fr6_3').datagrid('getSelected');
                              if( rows )
                              {

                                     var  id=rows.id_bonegraft;
                                      //alert(id);
                                      $.messager.confirm('สถานะการลบข้อมูล',' คุณต้องการลบข้อมูลหรือไม่ ', function(r){
                                           if( r )
                                             {
                                                   //alert('t');
                                                   //alert(id);
                                                    var  url='<?=base_url()?>index.php/welcome/del_fr6/'   +  id;
                                                    $.post(url,function(data){
                                                            // alert(data);
                                                              if( data == 1 )
                                                              {
                                                                     $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลสำเร็จ');
                                                                     $('#dg_fr6_3').datagrid('reload');
                                                              }
                                                              else if( data == 0 )
                                                              {
                                                                     $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลล้มเหลว');
                                                              }
                                                    });
                                             }
                                      } );





                              }
                         }
                     },

                      {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr6_3').datagrid('getSelected');
                                                       var  file1=row.file1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr6_3').datagrid('getSelected');
                                                       var  file1=row.file2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                       //window.open(url);
                                                          if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr6_3').datagrid('getSelected');
                                                       var  file1=row.file3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },

                   ]

                   });

           "
           >





            เรียกดูข้อมูล3</a>
        <div id="dia_fr6_3"   class="easyui-dialog"  data-options=" closed:true, buttons:[ {  text:'ปิด (Close)' ,handler:function(){ $('#dia_fr6_3').dialog('close');  }, iconCls:'icon-remove' } ] "  title="5. Bone graft surgery "  style="width:600px;height: 400px;"  >
            <div class="easyui-datagrid"  style="width:580px;height: 390px;"   id="dg_fr6_3"


                 ></div>
        </div>

    </div>


            <form id="fr6_3"  method="post" enctype="multipart/form-data">
            <table>


                <tr>
                      <input class="easyui-textbox"  id="id_history_patient_fr6_3"   name="id_history_patient_fr6_3"  style="width:30px;height: 30px;"  readonly="true"  />
                      <input class="easyui-textbox"  id="y_fr6_3"   name="y_fr6_3"  style="width:50px;height: 30px;"  readonly="true"  />
                     <input class="easyui-textbox"  id="id_bonegraft_3"   name="id_bonegraft_3"  style="width:50px;height: 30px;"  readonly="true"  />


                    <td>
                          ชื่อ - นามสกุล :
                    </td>
                    <td>

                        <input class="easyui-textbox"  id="name_lastname_fr6_3"  name="name_lastname_fr6_3"  style="width:150px;height: 30px;" readonly="true"  />
                        <input class="easyui-textbox"   id="result_analysis_fr6_3"   name="result_analysis_fr6_3"  multiline=true   style="width:200px;height: 40px;" readonly="true"   />


                    </td>
                </tr>


                <tr>
                    <td> ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td><input name="doctor_fr6_3" id="doctor_fr6_3" class="easyui-textbox" ></input></td>
                </tr>





                <tr>
                    <td>วัน/เดือน/ปี ที่่ทำการรักษา :</td>
                    <td>

                        <input class="easyui-datetimebox"  id="date_fr6_3"  name="date_fr6_3" ></input>

                           <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "  id="cal1_fr6_3"    >คำนวณอายุ</a>

                        <label>อายุ</label>
                        <input class="easyui-textbox"  readonly="true"  style="width: 50px;height: 40px;"   id="age1_fr6_3"   />
                        <label>ปี</label>

                    </td>
                </tr>

                 <tr>
                    <td>บริเวณที่ทำ :</td>
                    <td>

                        <input class="easyui-textbox"  id="join_fr6_3" name="join_fr6_3" ></input>
                    </td>
                </tr>


                  <tr>
                    <td>เทคนิคที่ใช้ :</td>
                    <td>

                        <input class="easyui-textbox"  id="technic_3" name="technic_3" ></input>
                    </td>
                </tr>


                 <tr>
                    <td>Complication :</td>
                    <td>

                      <input type="radio"  id="complication_fr6_3_y"  name="complication_fr6_3"  value="1" />มี
                        <input class="easyui-textbox"  id="other_complication_fr6_3_y" name="other_complication_fr6_3_y"  style="width: 100;height: 30px;"  multiple=true    />
                        <input type="radio"  id="complication_fr6_3_n"  name="complication_fr6_3"  value="2" />ไม่มี




                    </td>
                </tr>


                    <tr>
                    <td>
        <label>
           รูปถ่าย,x-ray ก่อนการรักษา (ฺBefore) :
            </label>
                    </td>
                    <td>
                        <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่าย,x-ray ก่อนการรักษา '   "  style="width:250px;height: 40px;"   id="fileupload1_fr6_3" name="fileupload1_fr6_3"  />
                    </td>
            </tr>


                <tr>
                    <td>
        <label>
           รูปถ่าย,x-ray ระหว่างการรักษา (ฺDuring) :
            </label>
                    </td>
                    <td>
           <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่าย,x-ray ระหว่างการรักษา '   "  style="width:250px;height: 40px;"   id="fileupload2_fr6_3" name="fileupload2_fr6_3"   />
                    </td>
            </tr>



            <tr>
                <td>
               <label>
           รูปถ่าย,x-ray หลังการรักษา (ฺAfter) :
           </label>
                </td>
                <td>
                         <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่าย,x-ray หลังการรักษา '   "  style="width:250px;height: 40px;"   id="fileupload3_fr6_3" name="fileupload3_fr6_3"   />
                </td>
            </tr>

                 <tr>
                <td>
               <label>
           Op note :
           </label>
                </td>
                <td>
                         <input class="easyui-filebox" data-options=" prompt:'  เลือกรูป Op note '   "  style="width:250px;height: 40px;"   id="opnote" name="opnote_3"   />
                </td>
            </tr>



                     <tr>
                    <td>
                         <label>
                         Dental Casts :
                        </label>

                    </td>
                    <td>

                        <input  type="radio"  id="dentalcast1_fr6_3"  name="dentalcast_fr6_3" value="1"> Yes  <input  type="radio"   id="dentalcast2_fr6_3"  name="dentalcast_fr6_3" value="2"> No

                    </td>

                </tr>



                <!--
                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>

                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                -->







<!--
 <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>

  <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>
 -->

                <tr>
                    <td colspan="2" align="center">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'"  style="width: 120px;height: 40px;"
                           onclick="
                              $('#fr6_3').form('submit',{
                                  url:'<?=base_url()?>index.php/welcome/inst_fr6_3',
                                  success: function(data)
                                  {
                                         //alert(data);
                                         if( data == 1 )
                                         {
                                            //   $('#dia_fr6_3').dialog('open');
                                               $('#dg_fr6_3').datagrid('reload');
                                               $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ');
                                         }
                                         else{
                                               $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                                         }
                                  }
                              })
                           "

                           >Save/Update</a>
                        <a href="javascript:void(0)" onclick=" $('#dia_treat15').window('close');  "  class="easyui-linkbutton" data-options="iconCls:'icon-cancel'" style="width: 100px;height: 40px;">Close</a>
                    </td>

                </tr>

            </table>
        </form>

     <!--------------------- end ----------------------------------------->
        </div>
    </div>
</div>




<div id="dia_treat16" class="easyui-window" title=" Orthodonic treatment in permanent teeth " data-options="modal:true,closed:true" style="width:500px;height:300px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>


            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>





                <tr>
                    <td>วัน/เดือน/ปี ที่่ทำการรักษา :</td>
                    <td>

                        <input class="easyui-datebox"></input>
                    </td>
                </tr>




                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>

                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                 <tr>
                    <td>ชนิดของเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                  <tr>
                    <td>วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>


 <tr>
     <td>
         รูปถ่าย,x-ray ก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>

  <tr>
     <td>
         รูปถ่าย,x-ray ก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>




                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>

                </tr>

            </table>
        </form>


</div>


<div id="dia_treat17" class="easyui-window" title=" Distraction osteogenesis " data-options="modal:true,closed:true" style="width:500px;height:300px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>


            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                <tr>
                    <td>วัน/เดือน/ปี ที่่ทำการรักษา :</td>
                    <td>

                        <input class="easyui-datebox"></input>
                    </td>
                </tr>

                <tr>
                    <td>
                        เครื่องมือที่ใช้ :
                    </td>
                    <td>
                        <input class="easyui-combobox"></input>

                    </td>

                </tr>

                <tr>
                    <td>
                        วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา
                    </td>
                    <td>
                        <input  class="easyui-datebox"></input>

                    </td>
                </tr>


                <!--
                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>

                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                 <tr>
                    <td>ชนิดของเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                  <tr>
                    <td>วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>
                -->


 <tr>
     <td>
         รูปถ่าย,x-ray ก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>

  <tr>
     <td>
         รูปถ่าย,x-ray ก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>



                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>

                </tr>

            </table>
        </form>


</div>



<div id="dia_treat18" class="easyui-window" title=" ใส่ฟันเทิยมหรือรักษาทันตกรรมอื่นที่จำเป็น  " data-options="modal:true,closed:true" style="width:500px;height:300px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>


            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                <tr>
                    <td>วัน/เดือน/ปี ที่่ทำการรักษา :</td>
                    <td>

                        <input class="easyui-datebox"></input>
                    </td>
                </tr>

                <tr>
                    <td>
                        เครื่องมือที่ใช้ :
                    </td>
                    <td>
                        <input class="easyui-combobox"></input>

                    </td>

                </tr>

                <tr>
                    <td>
                        วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา
                    </td>
                    <td>
                        <input  class="easyui-datebox"></input>

                    </td>
                </tr>


                <!--
                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>

                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                 <tr>
                    <td>ชนิดของเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                  <tr>
                    <td>วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>
                -->


 <tr>
     <td>
         รูปถ่าย,x-ray ก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>

  <tr>
     <td>
         รูปถ่าย,x-ray ก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>



                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>

                </tr>

            </table>
        </form>


</div>



<div id="dia_treat19" class="easyui-window" title=" Speech therapy  " data-options="modal:true,closed:true" style="width:500px;height:200px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>


            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> ผู้ที่ให้คำแนะนำ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                <tr>
                    <td>วัน/เดือน/ปี ที่่ทำการรักษา :</td>
                    <td>

                        <input class="easyui-datebox"></input>
                    </td>
                </tr>

                <!--
                <tr>
                    <td>
                        เครื่องมือที่ใช้ :
                    </td>
                    <td>
                        <input class="easyui-combobox"></input>

                    </td>

                </tr>

                <tr>
                    <td>
                        วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา
                    </td>
                    <td>
                        <input  class="easyui-datebox"></input>

                    </td>
                </tr>
               -->

                <!--
                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>

                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                 <tr>
                    <td>ชนิดของเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>


                  <tr>
                    <td>วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>
                -->

<!--
 <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>

  <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr>
-->


                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>

                </tr>

            </table>
        </form>


</div>




<div id="dia_treat4B" class="easyui-window" title=" 4. Interceptive orthodontic treatment  " data-options="modal:true,closed:true" style="width:600px;height:500px;padding:5px;">

    <!--
    <div style="margin:0px 0 0px 0;"></div>
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>แพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>

                        <input class="easyui-datebox"></input>
                    </td>
                </tr>

                <tr>
                    <td>เทคนิคการผ่าตัด :</td>

                    <td>


                        <input class="easyui-textbox" style="width:100%;height:32px">

                    </td>
                </tr>

                <tr>
                    <td>รุปถ่าย (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>

                     <tr>
                    <td>รุปถ่าย (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">

                    </td>
                </tr>




                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>

                </tr>

            </table>
        </form>
    -->




    <form id="fr4"     method="post" enctype="multipart/form-data">


    <div class="easyui-panel"  style="padding: 5px;"  >
        <a href="javascript:void(0)"  class="easyui-linkbutton"  iconCls="icon-man"
           onclick="
                       $('#dia_fr4').dialog('open');
                       var id=$('#id_history_patient_fr4').textbox('getValue');


                      $('#dg_fr4').datagrid({

                          url:'<?=base_url()?>index.php/welcome/json_fr4/'  + id  ,
                     rownumbers:true,
                     singleSelect:true,
                     columns:[[
                       //  { field:'firstname',title:'ชื่อ' , align:'center' },
                      //   { field:'lastname',title:'นามสกุล' , align:'center' },
                         { field:'doctor',   title:'ทันตแพทย์ผู้ทำการรักษา',  align:'center' } ,
                         { field:'begin_date',   title:'วัน/เดือน/เริ่มทำการรักษา',  align:'center' } ,
                         { field:'end_date',   title:'สิ้นสุดการรักษา',  align:'center' } ,
                         { field:'goslon',   title:'Classification of GOSLON',  align:'center' } ,
                         { field:'incisor',   title:'Incisor classification of malocclusion',  align:'center' } ,
                         { field:'skeleta',   title:'Skeletal classification of malocclusion',  align:'center' } ,
                         { field:'dentalcast',title:'Dental Casts',align:'center' },
                         { field:'procedure_detail',title:'Procedure',align:'center' },
                         //procedure_detail
                     ]]
                     ,
                     toolbar:[
                       { text:'ดูขั้อมูล/แก้ไขข้อมูล' , iconCls:'icon-man' , handler :function()
                            {
                                    //alert('t');
                                     var row=$('#dg_fr4').datagrid('getSelected');
                                     if( row )
                                     {
                                          var  id=row.id_interceptive;

                                           $('#id_interceptive').textbox('setValue',id);

                                         // alert(id);
                                          //$.post();
                                          //http://127.0.0.1/dental/index.php/welcome/edit_json4
                                          var  url='<?=base_url()?>index.php/welcome/edit_json4';
                                          $.post(url,{id:id},function(data)
                                            {
                                                 // alert(data);
                                                   $.each(data,function(v,k){
                                                         //alert(k.doctor);
                                                         $('#doctor_fr4').textbox('setValue',k.doctor);


                                                         //$('#date_fr4').datetimebox('setValue',k.begin_date);
                                                          var begin_date=k.begin_date;
                                                                    if(    begin_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=begin_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date_fr4').textbox('setValue',conv_1);
                                                                    }


                                                         // $('#date2_fr4').datetimebox('setValue',k.end_date);
                                                             var end_date=k.end_date;
                                                             if(    end_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=end_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date2_fr4').textbox('setValue',conv_1);
                                                                    }






                                                          var  goslon=k.goslon;
                                                          //alert(goslon);
                                                           $('#goslon').combobox('setValue',goslon);
                                                           var 	incisor=k.incisor;

                                                           var   incisor=2;
                                                           // alert(incisor);
                                                           //incisor1
                                                                 if(  incisor == 1 )
                                                                 {
                                                                     $('#incisor1').attr('checked',true);
                                                                 }
                                                                 else if(   incisor == 2 )
                                                                 {
                                                                      $('#incisor2').attr('checked',true);
                                                                 }
                                                                  else if(   incisor  == 3)
                                                                 {
                                                                      $('#incisor3').attr('checked',true);
                                                                 }
                                                                  else if(  incisor  == 4)
                                                                 {
                                                                       $('#incisor4').attr('checked',true);
                                                                 }

                                                                 var  skeletal=k.skeleta;
                                                                 //alert( skeletal );
                                                                 //  skeletal1
                                                                 if(  skeletal == 1  )
                                                                 {
                                                                     $('#skeletal1').attr('checked',true);
                                                                 }
                                                                 else if( skeletal == 2 )
                                                                 {
                                                                     $('#skeletal2').attr('checked',true);
                                                                 }
                                                                 else if( skeletal == 3 )
                                                                 {
                                                                     $('#skeletal3').attr('checked',true);
                                                                 }

                                                               var  dentalcast=k.dentalcast;
                                                              // alert(dentalcast);
                                                               if(  dentalcast == 1 )
                                                               {
                                                                     $('#dental_cast_yes').attr('checked',true);
                                                               }
                                                              else  if(  dentalcast == 2 )
                                                               {
                                                                     $('#dental_cast_no').attr('checked',true);
                                                               }



                                                   });
                                            },'json');

                                     }


                            }
                        },

                       { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_fr4').datagrid('reload');  } },
                       {  text:'Delete',iconCls:'icon-remove', handler:function()
                               {
                                     var row=$('#dg_fr4').datagrid('getSelected');
                                     if( row )
                                     {

                                           var  id=row.id_interceptive;
                                           //alert( id );
                                           $.messager.confirm('Delete Data','คุณต้องการลบข้อมูล',function(r)
                                               {
                                                    if(r)
                                                      {
                                                             var  url='<?=base_url()?>index.php/welcome/del_fr4/' + id ;
                                                             $.post(url,function(data)
                                                               {
                                                                      //alert(data);
                                                                      if( data == 1 )
                                                                      {
                                                                           $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลสำเร็จ');
                                                                           $('#dg_fr4').datagrid('reload');

                                                                      }
                                                                      else if( data==0)
                                                                      {
                                                                          $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลผิดพลาด');
                                                                      }
                                                               });

                                                      }
                                               });
                                     }
                                }
                       },

                        {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr4').datagrid('getSelected');
                                                       var  file1=row.filename1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                       //window.open(url);
                                                        if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr4').datagrid('getSelected');
                                                       var  file1=row.filename2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                          if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr4').datagrid('getSelected');
                                                       var  file1=row.filename3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                          if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },
                     ] ,



                      });


           "
           style="width: 100px;height: 40px;"    >
            แสดงข้อมูล
        </a>


        <div class="easyui-dialog"  id="dia_fr4"  data-options="closed:true,
             resizable:true,
             buttons:[
                {  text:'ปิด (Close)' ,iconCls:'icon-cancel',handler:function(){  $('#dia_fr4').dialog('close');  }  }
             ]
             "

             title=" แสดงข้อมูล Interceptive orthodontic treatment "  style="width:600px;height: 200px;"   >
            <div  class="easyui-datagrid"  id="dg_fr4"       style="width:590px;height: 380px;" >   </div>

        </div>

    </div>

    <div style="padding:10px 5px;" >
        <input class="easyui-textbox"  id="id_history_patient_fr4"   name="id_history_patient_fr4"  style="width:30px;height: 30px;"  readonly="true"  />
        <input class="easyui-textbox"  id="y_fr4"   name="y_fr4"  style="width:50px;height: 30px;"  readonly="true"  />
        <input class="easyui-textbox"  id="id_interceptive"   name="id_interceptive"  style="width:50px;height: 30px;"  readonly="true"  />

        <label>

            ชื่อ - นามสกุล :

                      <!--  <input class="easyui-textbox"  id="id_history_patient_fr4"   name="id_history_patient_fr4"  style="width:30px;height: 30px;"  readonly="true"  /> -->
                        <input class="easyui-textbox"  id="name_lastname_fr4"  name="name_lastname_fr4"  style="width:200px;height: 30px;" readonly="true"  />


        </label>
    </div>


          <div style="padding:10px 5px;" >
              <label>
                  ทันตแพทย์ผู้ทำการรักษา :  <input class="easyui-textbox"  id="doctor_fr4"  name="doctor_fr4"   style="width:200px;height: 40px;"    />
              </label>
          </div>
    <div style="padding: 10px 5px;">

        <label>
            วัน/เดือน/ปี ที่เริ่มทำการรักษา :  <input class="easyui-datetimebox"  id="date_fr4"  name="date_fr4"  style="width:150px;height: 40px;"   />

                <a href="javascript:void(0)"  class="easyui-linkbutton"  data-options="  iconCls:'icon-man' "  id="cal1_fr4"  style="width:100px;height: 30px;"  >คำนวณอายุ</a>

            <label>อายุ </label>
            <input class="easyui-textbox"   style="width:50px;height: 30px;"   readonly="true"  id="age1_fr4"  name="age1_fr4"   />
            <label>ปี</label>

        </label>


    </div>

        <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่สิ้นสุดการรักษา :  <input class="easyui-datetimebox"  id="date2_fr4" name="date2_fr4"  style="width:150px;height: 40px;"   />

            <a href="javascript:void(0)"  class="easyui-linkbutton"  data-options="  iconCls:'icon-man' "   id="cal2_fr4"  style="width:100px;height: 30px;"  >คำนวณอายุ</a>

            <label>อายุ </label>
            <input class="easyui-textbox"   style="width:50px;height: 30px;" readonly="true"   id="age2_fr4"  name="age2_fr4" />
         <label>ปี</label>

        </label>
    </div>


       <div style="padding: 10px 5px;">
              Classification of GOSLON  :

              <select class="easyui-combobox"  id="goslon"  name="goslon"  style="width:200px;height: 40px;"   >
                       <option > เลือก Classification of GOSLON </option>
                       <option value="1">Group 1</option>
                        <option value="2">Group 2</option>
                        <option value="3">Group 3</option>
                        <option value="4">Group 4</option>
                        <option value="5">Group 5</option>
                </select>
    </div>

      <div style="padding: 10px 5px;">
                    Incisor classification of malocclusion :
                    <input type="radio"     name="incisor"   id="incisor1"  value="1" />  I
                    <input type="radio"   name="incisor" id="incisor2" value="2" />  II div 1
                    <input type="radio"   name="incisor" id="incisor3"  value="3" />  II div 2
                    <input type="radio"  name="incisor" id="incisor4" value="4"  />  III
    </div>

          <div style="padding: 10px 5px;">
                    Skeletal  classification of malocclusion :
                    <input type="radio" name="skeletal"   id="skeletal1"  value="1"  />  I
                    <input type="radio"  name="skeletal"  id="skeletal2"  value="2"/>  II
                    <input type="radio"  name="skeletal"  id="skeletal3" value="3"  />  III


    </div>

<div style="padding: 10px 5px;">
  Procedure :  <input class="easyui-textbox"  id="procedure_detail"  name="procedure_detail"   style="width:250px;height:30px;"   />
</div>


    <!--
   <div style="padding: 10px 5px;">
       <label>
                         Procedure :

                        <input type="checkbox"  />  1.Strapping
                        <input type="checkbox"  />  2.Nasal Molding
                        <input type="checkbox"  />  3.Alveolar  Molding
                        <input type="checkbox"  /> 4. Simple Obturator
                        <br>
                        <input type="checkbox"  />  อื่นๆ
                        <input class="easyui-textbox"   data-options=" mutilne:true, "  style="width:300px;height: 50px"    />
       </label>
   </div>
    -->


    <div style="padding: 10px 5px;">
        <label>
            รูปถ่าย,x-ray (Before) :
            <input class="easyui-filebox"   id="fileupload1_fr4"  name="fileupload1_fr4"    data-options=" prompt:' เลือกไฟล์ ' "  style="width:200px;height: 30px;"   />
        </label>
    </div>


       <div style="padding: 10px 5px;">
        <label>
            รูปถ่าย,x-ray ระหว่างการรักษา (During) :
            <input class="easyui-filebox"   id="fileupload2_fr4"    name="fileupload2_fr4"    data-options=" prompt:' เลือกไฟล์ ' "  style="width:200px;height: 30px;"   />
        </label>
    </div>

        <div style="padding: 10px 5px;">
        <label>
            รูปถ่าย,x-ray หลังการรักษา (After) :
            <input class="easyui-filebox"     id="fileupload3_fr4"     name="fileupload3_fr4"     data-options=" prompt:' เลือกไฟล์ ' "  style="width:200px;height: 30px;"   />
        </label>
    </div>


    <div style="padding: 10px 5px;">
         <label>
             Dental Casts :
          </label>
             <input  type="radio"  name="dentalcast"   id="dental_cast_yes" value="1" /> Yes
             <input  type="radio"  name="dentalcast"  id="dental_cast_no" value="2" /> No

    </div>


    <div style="padding: 5px 120px;">

        <a href="javascript:void(0)" class="easyui-linkbutton"  data-options=" iconCls:'icon-save'  "  style="width:120px;height: 40px;"  onclick="
                $('#fr4').form('submit',{
                    url:'<?=base_url()?>index.php/welcome/insert_fr4',
                    success:function(data)
                     {
                          //  alert(data);


                            if( data == 1 )
                            {

                              //  $('#dia_fr4').dialog('open');
                                $('#dg_fr4').datagrid('reload');
                                $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ');

                            }
                            else
                            {
                                $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                            }


                     }
                });

           "   >Save/Update</a>
        <a href="javascript:void(0)" class="easyui-linkbutton"  data-options=" iconCls:'icon-cancel' , onClick:function(){  $('#dia_treat4B').window('close');  } "     style="width:90px;height: 40px;"     >Close</a>
    </div>

</div>

 </form>

<div id="dia_treat9B" class="easyui-window" title=" 9. Orthognathic surgery " data-options="modal:true,closed:true" style="width:700px;height:250px;padding:5px;">

    <div style="padding: 10px 5px;">
        <label>
            แพทย์ผู้ทำการรักษา :  <input class="easyui-combobox"  style="width: 200px;height: 40px;"   />
        </label>
    </div>



        <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่เริ่มทำการรักษา  :  <input class="easyui-datebox"   style="width: 200px;height: 40px;"  />
        </label>
    </div>

            <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่สิ้นสุดการรักษา  :  <input class="easyui-datebox"   style="width: 200px;height: 40px;"  />
        </label>
    </div>

       <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ก่อนการรักษา : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่าย,x-ray หลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

       <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ระหว่างการรักษา (During) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่าย,x-ray หลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>


       <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray หลังการรักษา : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่าย,x-ray หลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>



    <div style="padding: 10px 5px;">
        <label>
            <?=nbs(30)?>
            Diagnosis :

            <input class="easyui-textbox"   style="width:300px;height: 30px;"  />


        </label>
    </div>

    <div style="padding: 10px 5px;">
              Classification of Goslom  : <input class="easyui-textbox"   style="width:200px;height: 40px;"  />
    </div>

      <div style="padding: 10px 5px;">
                    Incisor classification : <input class="easyui-textbox"   style="width:200px;height: 40px;"  />
    </div>






    <div  style="padding: 10px 100px;">
        <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 90px;height: 40px;"  data-options=" iconCls:'icon-save' " onclick="





           " >Save/Update</a>
           <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 90px;height: 40px;" data-options=" iconCls:'icon-cancel'  "  onClick="  $('#dia_treat1').window('close');  "  >Close</a>
    </div>


</div>



<div id="dia11"  title="10. Other dental procedure  " style="width:800px;height: 600px;padding: 10px;" class="easyui-dialog"     data-options="

     closed:true,
     buttons:[

     {  text:'Close', iconCls:'icon-cancel',handler:function(){  $('#dia11').dialog('close');  } }
     ]
     ">


    <div class="easyui-tabs" >

     <div title="Endontic treatment" style="padding:10px">

         <div class="easyui-panel"  style="padding: 5px;" >
             <a href="javascript:void(0)" iconCls="icon-print"  class="easyui-linkbutton"  onclick="
                $('#dia_fr11_1').dialog('open');
                $('#dg_fr11_1').datagrid({
                                      singleSelect:true,
                  rownumbers:true,

                  url:'<?=base_url()?>index.php/welcome/json_tr11_1/'  +   $('#id_history_patient_fr11_2').textbox('getValue') ,

                  columns:[[
                  { title:'Tooth',  field:'tooth', align:'center'  },
                  { title:'ทันตแพทย์ผู้ทำการรักษา',  field:'dental', align:'center'  },
                  { title:'วัน/เดือน/ปี ที่ทำ', field:'begin_date',align:'center'  },
                  { title:'เครื่องมือที่ใช้', field:'tool',align:'center'  },


                  ]]
                  ,
                  toolbar:[
                    {  text:'View/Update', iconCls:'icon-edit', handler:function()
                          {
                                  var  row=$('#dg_fr11_1').datagrid('getSelected');
                                  var  url='<?=base_url()?>index.php/welcome/edit_json_tr11_1';
                                  var  id=row.id_dentalprocedure;
                                  $('#id_dentalprocedure').textbox('setValue',id);
                                  if( row && id > 0)
                                  {
                                      //id_dentalprocedure
                                         $.post(url,{ id:id },function(data)
                                         {
                                                //alert(data);
                                                $.each(data,function(i,k){

                                                       $('#dental_11_1').textbox('setValue',k.dental);
                                                       $('#tooth_fr11_1').textbox('setValue',k.tooth);

                                                                 //  $('#date_fr11_1').datetimebox('setValue',k.begin_date);
                                                                   var begin_date=k.begin_date;
                                                                    if(    begin_date.length > 0  )    //2016-02-10  //ธนาภรณ์  กลายกลาง
                                                                    {
                                                                            var ex1=begin_date.split('-');
                                                                            var conv_1= ex1[2] + '/'  +  ex1[1] + '/' +  ex1[0];
                                                                            //alert(conv_1);
                                                                            $('#date_fr11_1').textbox('setValue',conv_1);
                                                                    }




                                                       $('#tool_tr11_1').textbox('setValue',k.tool);


                                                });
                                         },'json');
                                  }

                          }
                   },
                    { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_fr11_1').datagrid('reload');  }  },
                    { text:'Delete', iconCls:'icon-remove', handler:function()
                         {
                             var  row=$('#dg_fr11_1').datagrid('getSelected');
                             if(row)
                             {
                                  var  id=row.id_dentalprocedure;
                                 // alert(id);

                                 //http://127.0.0.1/dental/index.php/welcome/del_fr11_1/4
                                 var   url='<?=base_url()?>index.php/welcome/del_fr11_1/' + id;
                                 //alert(url);
                                 $.messager.confirm('ลบข้อมูล','คุณต้องการลบข้อมูล',function(r)
                                   {
                                       if(r)
                                       {
                                             $.post(url,function()
                                             {
                                                    $('#dg_fr11_1').datagrid('reload');
                                             });
                                       }
                                   });

                             }
                         }
                    },

                     {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr11_1').datagrid('getSelected');
                                                       var  file1=row.fileupload1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                     //  window.open(url);
                                                        if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr11_1').datagrid('getSelected');
                                                       var  file1=row.fileupload2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr11_1').datagrid('getSelected');
                                                       var  file1=row.fileupload3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                    //   window.open(url);
                                                       if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },

                  ]

                });

                "  style="width: 100px;height: 40px;"  >ดูข้อมูล</a>
         </div>
         <div class="easyui-dialog"  id="dia_fr11_1"  title="Endontic treartment"  style="width:600px;height: 400px;"
              data-options=" closed:true,buttons:[ { text:'ปิด (Close)',iconCls:'icon-cancel', handler:function(){ $('#dia_fr11_1').dialog('close'); }  } ]  "  >
             <div class="easyui-datagrid"  id="dg_fr11_1"    ></div>
         </div>

<!-------------------- begin ---------------------->
 <form id="fr11_1"  method="post" enctype="multipart/form-data">

     <div style="padding: 10px 5px"  >

          <input class="easyui-textbox"  id="id_history_patient_fr11_1"   name="id_history_patient_fr11_1"  style="width:30px;height: 30px;"  readonly="true"  />
          <input class="easyui-textbox"  id="y_fr11_1"   name="y_fr11_1"  style="width:50px;height: 30px;"  readonly="true"  />
           <input class="easyui-textbox"  id="id_dentalprocedure"   name="id_dentalprocedure"  style="width:50px;height: 30px;"  readonly="true"  />


                <label>
                    ชื่อ - นามสกุล :
                        <input class="easyui-textbox"  id="name_lastname_fr11_1"  name="name_lastname_fr11_1"  style="width:200px;height: 30px;" readonly="true"  />

                </label>


     </div>

  <div style="padding: 10px 5px"  >


        <label>
            Tooth : <input class="easyui-textbox"  id="tooth_fr11_1"  name="tooth_fr11_1"  data-options=" prompt:'   Tooth  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div>


    <div style="padding: 10px 5px"  >


        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox"  id="dental_11_1"  name="dental_11_1"  data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div>
     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datetimebox"  id="date_fr11_1"  name="date_fr11_1"  style="widht:200px;height: 30px;"  />



            <a href="javascript:void(0)"  id="cal1_fr11_1"  name="cal1_fr11_1"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>


            <label>อายุ </label>
            <input class="easyui-textbox"  id="age1_fr11_1" name="age1_fr11_1" style="width: 50px;height: 40px;"    />
              <label>ปี </label>

        </label>
    </div>

        <div style="padding: 10px 5px"  >
        <label>
            เครื่องมือที่ใช้  : <input class="easyui-textbox"  id="tool_tr11_1" name="tool_tr11_1"  prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
        </label>
    </div>


     <div style="padding: 10px 5px;">
        <label>
            รูปถ่าย,x-ray ก่อนการรักษา (Before ) : <input class="easyui-filebox"  id="fileupload1_fr11_1"  name="fileupload1_fr11_1"  data-options=" prompt:'  เลือกรูปถ่าย,x-ray ก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

         <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ระหว่างการรักษา ( During ) : <input class="easyui-filebox"   id="fileupload2_fr11_1"  name="fileupload2_fr11_1"  data-options=" prompt:'  เลือกรูป,x-ray ระหว่างการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

             <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray หลังการรักษา ( After ) : <input class="easyui-filebox"    id="fileupload3_fr11_1"  name="fileupload3_fr11_1"    data-options=" prompt:'  เลือกรูป,x-ray ถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

<div style="padding: 10px 5px;">
    <label>
        <?=nbs(100)?>
        <a href="javascript:void(0)"  class="easyui-linkbutton"   style="width: 120px;height: 40px;"
           onclick="
              $('#fr11_1').form('submit',{
                  url:'<?=base_url()?>index.php/welcome/insert_fr11_1',
                 success:function(data)
                      {


                          //alert(data);
                          if( data == 1 )
                          {
                              //  $('#dia_fr11_1').dialog('open');
                                $('#dg_fr11_1').datagrid('reload');
                                $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ');
                          }
                          else
                          {
                                $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                          }


                      }
              });

           "
           iconCls="icon-save"  >Save/Update</a>
    </label>
</div>
 </form>
      <!-------------------- begin ---------------------->



    </div>




     <div title="Prosthodontic treament" style="padding:10px">

         <div class="easyui-panel"  style="padding:5px"  >
             <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-print"  style="width:100px;height: 40px;"  onclick="
                    $('#dia_fr11_2').dialog('open');
                    $('#dg_fr11_2').datagrid('reload');
                     $('#dg_fr11_2').datagrid({   url:'<?=base_url()?>index.php/welcome/json_tr11_2/' +   $('#id_history_patient_fr11_2').textbox('getValue')   });
                "  >ดูข้อมูล</a>

         </div>
         <div class="easyui-dialog"  closed="true"  id="dia_fr11_2"  title="Prosthodontic treament"  data-options="
                buttons:[ { text:'ปิด (Close)', iconCls:'icon-cancel', handler:function(){  $('#dia_fr11_2').dialog('close');  } }  ]
              "  style="width: 600px;height: 500px;" >
             <div  class="easyui-datagrid"  id="dg_fr11_2" data-options="
                   url:'<?=base_url()?>index.php/welcome/json_tr11_2/' +   $('#id_history_patient_fr11_2').textbox('getValue')   ,
                   singleSelect:true,
                   rownumbers:true,
                   columns:[[
                      { field:'dental',title:'ทันตแพทย์ผู้ทำการรักษา',align:'center',  },
                      { field:'begin_date',title:'วัน/เดือน/ปี ที่ทำ',align:'center',  },
                      { field:'appliance',title:'Type of Appliance',align:'center',  },
                      { field:'appliance',title:'Type of Appliance ระบุ',align:'center',  },
                     { field:'otherappliance',title:'Dental Casts',align:'center',  },

                   ]],
                   toolbar:[
                    { text:'View/Update', iconCls:'icon-man',  handler:function()
                      {
                               var  row=$('#dg_fr11_2').datagrid('getSelected');
                                 //ปณิตา 	คำอ้อ
                                var  id=row.id_prosthodontic;
                                $('#id_prosthodontic').textbox('setValue',id);
                                   if(  row  &&   id > 0 )
                                   {
                                          var  url='<?=base_url()?>index.php/welcome/edit_json_tr11_2';
                                          $.post(url,{ id:id },function(data)
                                             {
                                                   //alert(data);
                                                     $.each(data,function(i,k){
                                                              //alert( k.dental );
                                                               $('#dental_fr11_2').textbox('setValue',k.dental);
                                                              $('#date_fr11_2').datetimebox('setValue',k.begin_date);

                                                              $('#appliance_11_2').combobox('setValue',k.appliance);

                                                              $('#otherappliance_11_2').textbox('setValue',k.otherappliance);

                                                              var  dentalcast=k.dentalcast;


                                                              if( dentalcast == 1 )
                                                              {
                                                                   $('#dentalcast1_11_2').attr('checked',true);
                                                              }
                                                              else  if( dentalcast == 2 )
                                                              {
                                                                   $('#dentalcast2_11_2').attr('checked',true);
                                                              }



                                                     });
                                             },'json' );
                                   }

                      }
                    },
                   { text:'Reload',iconCls:'icon-reload',handler:function(){ $('#dg_fr11_2').datagrid('reload');  } },
                   { text:'Delete',iconCls:'icon-cancel',handler:function()
                        {
                                var  row=$('#dg_fr11_2').datagrid('getSelected');
                                if(row)
                                {
                                    var  id=row.id_prosthodontic;
                                       $.messager.confirm('คุณต้องการลบข้อมูล','ต้องการลบข้อมูลหรือไม่',function(r)
                                          {
                                                 var  url='<?=base_url()?>index.php/welcome/del_fr11_2/'  +  id ;
                                                 if(r)
                                                 {
                                                     $.post(url,function()
                                                         {
                                                               $('#dg_fr11_2').datagrid('reload');

                                                         });
                                                 }
                                          });
                                }
                        }
                   },
                    {  text:'Before',  iconCls:'icon-large-picture', handler:function()
                                                {
                                                       var  row=$('#dg_fr11_2').datagrid('getSelected');
                                                       var  file1=row.file1;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                     //  window.open(url);
                                                        if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                                }
                                          },
                                     {  text:'During',   iconCls:'icon-large-picture', handler:function()
                                              {
                                                       var  row=$('#dg_fr11_2').datagrid('getSelected');
                                                       var  file1=row.file2;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                      // window.open(url);
                                                         if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                               }
                                      },
                                     {  text:'After',   iconCls:'icon-large-picture', handler:function()
                                        {
                                                       var  row=$('#dg_fr11_2').datagrid('getSelected');
                                                       var  file1=row.file3;
                                                       var  url='<?=base_url()?>upload/' + file1;
                                                    //   window.open(url);
                                                       if( file1.length > 0 )
                                                         {
                                                            window.open(url);
                                                         }
                                        }
                                     },
                   ]
                   " style="width: 600px;height: 500px;"    >

             </div>
         </div>

<!-------------------- begin ---------------------->
<form id="fr11_2"  method="post" enctype="multipart/form-data">
     <div style="padding: 10px 5px"  >

           <input class="easyui-textbox"  id="id_history_patient_fr11_2"   name="id_history_patient_fr11_2"  style="width:30px;height: 30px;"  readonly="true"  />
           <input class="easyui-textbox"  id="y_fr11_2"   name="y_fr11_2"  style="width:50px;height: 30px;"  readonly="true"  />
           <input class="easyui-textbox"  id="id_prosthodontic"   name="id_prosthodontic"  style="width:50px;height: 30px;"  readonly="true"  />



                <label>
                    ชื่อ - นามสกุล :
                        <input class="easyui-textbox"  id="name_lastname_fr11_2"  name="name_lastname_fr11_2"  style="width:200px;height: 30px;" readonly="true"  />

                </label>


     </div>


    <div style="padding: 10px 5px"  >

        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox"  name="dental_fr11_2"  data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div>
     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datetimebox" id="date_fr11_2"  name="date_fr11_2"   style="widht:200px;height: 30px;"  />


            <a href="javascript:void(0)"  class="easyui-linkbutton"  id="cal1_fr11_2"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>


            <label>อายุ</label>
            <input class="easyui-textbox"  id="age1_fr11_2"  style="width: 50px;height: 40px;"    />
           <label>ปี</label>

        </label>
    </div>

        <div style="padding: 10px 5px"  >
        <label>
            Type of Appliance  :
         </label>
                     <!--
                     <input class="easyui-textbox"  prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
                     -->

                     <select   class="easyui-combobox"  id="appliance_11_2" name="appliance_11_2"  style="width: 200px;height: 40px;"
                              onchange="
                                  //alert('t');
                                    if( $('#appliance_11_2').val() == 7   )
                                    {
                                        //alert('t');
                                        $('#otherappliance_11_2').textbox('readonly',false);
                                         $('#otherappliance_11_2').textbox('setValue','ระบุ');
                                    }
                                    else
                                    {
                                          $('#otherappliance_11_2').textbox('readonly',true);
                                         $('#otherappliance_11_2').textbox('setValue','');
                                    }
                              "
                               >
                          <option > เลือก Type of Appliance </option>
                         <option value="1">1.TP</option>
                           <option  value="2">2.Crown</option>
                            <option  value="3">3.Bridge</option>
                              <option value="4">4.Partial denture</option>
                                <option value="5">5.Implant</option>
                                   <option value="6">6.Speech Appliance</option>
                                     <option value="7">7.Other</option>
                     </select>


                     <input class="easyui-textbox"    id="otherappliance_11_2"  name="otherappliance_11_2"  style="width:300px;height: 40px;"  />


    </div>


     <div style="padding: 10px 5px;">
        <label>
            รูปถ่าย,x-ray ก่อนการรักษา (Before ) : <input class="easyui-filebox"  name="fileupload1_fr11_2"  data-options=" prompt:'  เลือกรูปถ่าย,x-ray ก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

         <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray ระหว่างการรักษา (During ) : <input class="easyui-filebox"   name="fileupload2_fr11_2"  data-options=" prompt:'  เลือกรูป,x-ray ระหว่างการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

             <div style="padding: 10px 5px;">
        <label>
           รูปถ่าย,x-ray หลังการรักษา (After ) : <input class="easyui-filebox"   name="fileupload3_fr11_2"   data-options=" prompt:'  เลือกรูปถ่าย,x-ray หลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>

  <div style="padding: 10px 5px;">
        <label>
            Dental Casts :
            </label>
            <input  type="radio"  name="dentalcast_11_2"  id="dentalcast1_11_2"   value="1" > Yes  <input  type="radio"  name="dentalcast_11_2"  id="dentalcast2_11_2"   value="2" > No

    </div>

    <div style="padding: 10px 5px;">
        <label>
            <?=nbs(100)?>
            <a href="javascript:void(0)"   class="easyui-linkbutton"  style="width: 120px;height: 40px;"  iconCls="icon-save"  onclick="
                        //alert('t');
                        $('#fr11_2').form('submit',{
                            url:'<?=base_url()?>index.php/welcome/insert_fr11_2',
                            success:function(data)
                               {
                                    // alert(data);
                                     if( data == 1 )
                                     {
                                    //  $('#dia_fr11_2').dialog('open');
                                      $('#dg_fr11_2').datagrid('reload');
                                            $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ');
                                      }
                                      else{

                                           $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                                      }
                               }
                        });

               " >Save/Update </a>

        </label>
    </div>

</form>
      <!-------------------- begin ---------------------->
    </div>


        <!--
     <div title="Gingivectomy" style="padding:10px">
       2 test
    </div>

            <div title="Torectomy" style="padding:10px">
       2 test
    </div>

              <div title="Oronasal fistula closure" style="padding:10px">
       2 test
    </div>

            <div title="อื่นๆ " style="padding:10px">
       2 test
    </div>
        -->


        </div>

</div>
