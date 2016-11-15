    <!DOCTYPE html>
    <html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?=$title?></title>
        
       
        <?=$this->load->view("import_")?>
    
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
            
        </script>
        
        <script type="text/javascript">
            function openpt(title) //ฟอร์มบันทึก ประวัติผู้ป่วย
            {
                $(function()
                {
                      //alert('t');
                      $("#dia1").dialog({
                         // title:"เพิ่มข้อมูลประวัติของผู้ป่วย",
                          title: title ,
                          width:700,
                          height:700,
                          closed:false,
                          cache:false,
                          href: '',
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
                 $('#diag1').window('open');
            });
        }
        function  showpopup2() //สำหรับแสดง dialog2  ที่เพิ่มมาใหม่
        {
            $(function(){
                 $('#diag2').window('open');
            });
        }
        </script>
        


    </head>
    <body>

       
  <div style="margin:10px 0;"></div>
  <div class="easyui-panel" title="<?=$title?>" style="width:1300px;padding:30px 70px 50px 70px">
            

            
   <!-- Begin Frame--->             
  <div style="padding:20px;background:#fafafa;width:1200px;border:1px solid #ccc">
        

	
	<div style="margin:10px 0;"></div>
	<div class="easyui-tabs" style="width:1200px;height:700px">
		<div title="<?=$title_fr1?>" style="padding:10px">
			
              
                   <!--
                    ค้นหาจากโดย : <?php echo nbs(2); ?> 
                         
                         <select class="easyui-combogrid" style="width:250px" data-options="
            panelWidth: 500,
            idField: 'itemid',
            textField: 'productname',
            url: '<?=base_url()?>json/datagrid_data1.json',
            method: 'get',
            columns: [[
                {field:'itemid',title:'Item ID',width:80},
                {field:'productname',title:'Product',width:120},
                {field:'listprice',title:'List Price',width:80,align:'right'},
                {field:'unitcost',title:'Unit Cost',width:80,align:'right'},
                {field:'attr1',title:'Attribute',width:200},
                {field:'status',title:'Status',width:60,align:'center'}
            ]],
            fitColumns: true
        ">
                         </select>
                   -->
                 
                   
                   <a href="#"  onclick="$('#dia_search').window('open');"  class="easyui-linkbutton" data-options="iconCls:'icon-large-picture',size:'large' " style="width:100px"> ค้นหา </a>
                   
                   
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
                   <?=$this->load->view("treatment/1")?> <!--   Diagnose of neural abnormalities   -->
                   
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
        
                         <div title="ประวัติผู้ป่วย" style="padding:10px">
                             <table class="easyui-datagrid" title="แสดงประวัติผู้ป่วย" style="width:950px;height:250px"
            data-options="singleSelect:true,collapsible:true,url:'<?=base_url()?>datagrid_data1.json',method:'get'">
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
                 <th data-options="field:'treatment',width:100,align:'center'">Treatment </th>
                 <th data-options="field:'diagnosis',width:100,align:'center'">Diagnosis </th>
                     
                
                  
                
            </tr>
        </thead>
    </table>
                             
              <div class="easyui-panel">
                    <div class="easyui-pagination" data-options="total:114"></div>
              </div>
                             
                             
                             
    <div style="padding:20px 0;">
        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-add'" onclick="openpt('เพิ่มประวัติผุ้ป่วย')">เพิ่มประวัติผุ้ป่วย</a>
        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-print'" onclick="openpt('เรียกดูประวัติผุ้ป่วย')">เรียกประวัติผุ้ป่วย</a>

        
        
    </div>
                             

    <div id="dia1" class="easyui-window" title="" data-options="modal:true,closed:true,iconCls:'icon-help'" style="width:500px;height:200px;padding:10px;">             
    <div style="margin:10px 0 10px 0;"></div>
    <div class="easyui-tabs" style="width:600px;height:600px">
        <div title="ประวัติผู้ป่วยเบื้องต้น" style="padding:10px">
         
            
            <form id="ff" method="post">
            <table cellpadding="5">
               
                 <tr>
                    <td>HN   :</td>
                    <td><input class="easyui-textbox" type="text" name="name" data-options="required:true" style="max-width: 100px  "></input></td>
                </tr>
                <tr>
                    <td>ชื่อ :</td>
                    <td><input class="easyui-textbox" type="text" name="name" data-options="required:true"></input></td>
                </tr>
                
                <tr>
                    <td>รูปถ่าย :</td>
                    <td><input name="file" class="f1 easyui-filebox"></input></td>
                </tr>
                
                 <tr>
                    <td>วัน/เดือน/ปี เกิด :</td>
                    <td><input class="easyui-datetimebox" required style="width:200px"></td>
                </tr>
                
                <tr>
                    <td>ที่อยู่ :</td>
                    <td><input class="easyui-textbox" type="text" name="name" data-options="required:true"></input></td>
                </tr>
                
                <tr>
                    <td>
                       สัญชาติ :
                    </td>
                    <td>
                       <input class="easyui-textbox" type="text" name="name" data-options="required:true"></input>            
                    
                    </td>

                </tr>
                
                <tr>
                    <td>
                       เชื้อชาติ :
                    </td>
                    <td>
                       <input class="easyui-textbox" type="text" name="name" data-options="required:true"></input>            
                    
                    </td>

                </tr>
                
                
                 <tr>
                    <td>ศาสนา :</td>
                    <td><input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input></td>
                </tr>
                
                
               <tr>
                    <td>บิดา :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    
         
                    </td>
                    
                    <td>
                            <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                   
                </tr>
                

                <tr>
                    <td>อาชีพ :</td>
                    <td><input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input></td>
                </tr>
                
                
                <tr>
                    <td>วัน/เดือน/ปี เกิด :</td>
                    <td><input class="easyui-datetimebox" required style="width:200px"></td>
                </tr> 
                
                
                 <tr>
                    <td>โรคประจำตัว :</td>
                    <td><input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input></td>
                </tr>
                
                
                
                <tr>
                    <td>มารดา :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    
         
                    </td>
                    
                    <td>
                            <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                   
                </tr>
                

                <tr>
                    <td>อาชีพ :</td>
                    <td><input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input></td>
                </tr>
                
                
                <tr>
                    <td>วัน/เดือน/ปี เกิด :</td>
                    <td><input class="easyui-datetimebox" required style="width:200px"></td>
                </tr> 
                
                
                 <tr>
                    <td>โรคประจำตัว :</td>
                    <td><input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input></td>
                </tr>
                
                
            
                
                  <tr>
                    <td>สวัสดิการการรักษา :</td>
                    <td>
                        <select class="easyui-combobox" name="language">                        
                            <option value="1">ประกันสังคม</option>
                            <option value="2">บัตรทอง</option>  
                           
                        </select>    
                    </td>
                </tr>
                
                
                
             <tr>        
            <td>
               เคยได้รับการรักษามาก่อน : 
            </td>
            <td>
              <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" /> ไม่เคย 
              <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true" /> เคย    
               ระบุ <input class="easyui-textbox" type="text" name="subject" data-options="required:true"  style="width:100px" /></input> 
              
            </td>          
           </tr>
        
           <tr>
               <td>
                   แพทย์เจ้าของคนไข้ : 
               </td>
               <td>
                   <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
               </td>
           </tr>
                
                
            </table>
       
       
                   
      
            
            
        </div>
        <div title="ประวัติการตั้งครรภ์" style="padding:10px">
          

  
    <div style="margin:20px 0;"></div>
 
    <table cellpadding="5">
        <tr>        
            <td>
                ยาที่ใช้ในระยะครรภ์ 3 เดือน ยาสตรีปรับประจำเดือน ไม่รวมวิตามิน : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ใช่ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่
            </td>
        </tr>
       
          <tr>        
            <td>
                สูบบุหรี่ในระยะครรภ์ 3 เดือนแรก : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ใช่ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่  
               <?=nbs(3)?>  <input class="easyui-textbox" type="text" name="subject" data-options="required:true"  style="width:50px"></input> มวลต่อวัน
            </td>
        </tr>
        
                  <tr>        
            <td>
                ดื่มเครื่องดื่มแอลกอฮอล์ในระยะตั้งครรภ์ 3 เดือนแรก : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ใช่ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่  
               <?=nbs(3)?>  <input class="easyui-textbox" type="text" name="subject" data-options="required:true"  style="width:50px"></input> ขวดต่อวัน
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
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
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
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                </tr>
                
                 <tr>
                    <td>
                        อื่นๆ :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                </tr>
                
            </table>
        </div>
        
        
           <div title="ประวัติครอบครัว" data-options="iconCls:'icon-save',closable:false" style="padding:10px">
                <table cellpadding="5">
               
                <tr>
                    <td>บิดามารดาเกี่ยวพันทางสายเลือดเป็นปากแหว่งเพดานโหว่ : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ใช่ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่</td>                   
                                    
                </tr>  
                
                <tr>
                    <td>ญาติที่เกี่ยวพันทางสายเลือดเป็นปากแหว่งเพดานโหว่ : </td>
                    <td> <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> มี <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่มี</td>  </td>
                </tr>
                
                <tr>
                     <td>ระดับพัฒนาการบิดา : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ปกติ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่ปกติ</td>  
                </tr>
                
                <tr>
                     <td></td>
                    <td><input type="submit" value="Submit"></input></td>
                   
                </tr>
                
            </table>
        </div>
        
     
        
        </form>
    </div>
    
 
   

        
        
                   
        
    </div>
  

                   
      </div>
                      
    
       <!--      
       <div title="Treatment (แผนการรักษา) " style="padding:10px">             
                     <?=$this->load->view("menu_treatment/menu_treatment")?>
                  
       </div>

                      
       <div title="Diagnosis " style="padding:10px">             
               <table class="easyui-datagrid" title="แสดงประวัติผู้ป่วย" style="width:950px;height:250px"
            data-options="singleSelect:true,collapsible:true,url:'<?=base_url()?>datagrid_data1.json',method:'get'">
           <thead>
                   <tr>
                <th data-options="field:'itemid',width:80">ลำดับที่</th>
                <th data-options="field:'productid',width:100">ชื่อ-นามสกุล</th>
                <th data-options="field:'listprice',width:100,align:'right'">เลขบัตรประชาชน</th>
                <th data-options="field:'unitcost',width:100,align:'right'">วัน/เดือน/ปี เกิด</th>
                <th data-options="field:'attr1',width:250">ที่อยู่</th>
                <th data-options="field:'status',width:60,align:'center'">DN</th>
                 <th data-options="field:'status',width:60,align:'center'">Other No.</th>
                 <th data-options="field:'status',width:60,align:'center'">CN series.</th>
                 
                
                  </tr>
            </thead>
              </table>
           
            <div style="margin:10px 0;"></div>
           
             <a href="#"   onclick="dia1()"   class="easyui-linkbutton" data-options="iconCls:'icon-large-clipart',size:'large',iconAlign:'top'">เพิ่มข้อมูล Diagnosis</a>
            <?=$this->load->view("fr_diagnosis")?>
                  
       </div>              
           -->           
                      
                      
                      
                   </div>
                   <!--  tab all program -->
                          

	</div>
            
            
            
                
	</div>




    

     

</div>
  <!-- End Frame--->            

            
            
  
                

              
                
                
            
            
              
              

    
    
        
   
    
       
    
    
    
        
 </div>
     
      
  
  
  
  


  
  
  
  
    </body>
    </html>
