<script type="text/javascript">

      function tr9()
      {
          
          $(function(){
                 //alert('t');
                 $("#fr9").window('open');
          });
          
      }
        
</script>



<div id="fr9" class="easyui-window" title="<?=$tr9?>" data-options="modal:true,closed:true" style="width:700px;height:500px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
    <div class="easyui-tabs" >
        
        
          <div title="แบบฟอร์มบันทึกข้อมูล" style="padding:10px" data-options="iconCls:'icon-save'">
            
           <!-- <ul class="easyui-tree" data-options="url:'<?=base_url()?>json/tree_data1.json',method:'get',animate:true"></ul> -->
            
                    <form id="fr_tr1" action="<?=base_url()?>index.php/welcome/insert_fr" method="post" enctype="multipart/form-data">
            <table>
                
                <tr>
                    <td>แพทย์ผู้ทำการรักษา :</td>
                    <td>
                          <select class="easyui-combobox" name="state" style="width:100px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                            </select>  
                    </td>
                </tr>
                
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำการรักษา :</td>
                    <td><input class="easyui-datebox"></input></td>
                </tr>
                
           
                <!--
                <tr>
                    <td>รูปถ่าย MRI :</td>
                    <td><input name="file" class="f1 easyui-filebox" style="width:200px;" ></input></td>
                </tr>
                
                <tr>
                    <td>รูปถ่าย CT scan :</td>
                    <td><input name="file" class="f1 easyui-filebox" style="width:200px;" ></input></td>
                </tr>
                -->
                
                <tr>
                    <td>วิธีการทดสอบ :</td>
                    <td>                       
                        <input type="checkbox" name="lang" value="1"><span>Otoacoustic emission</span>                    
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>   
                        <input type="checkbox" name="lang" value="2"><span>Acoustic immittance audiometry</span>
                    </td>
                </tr>
                
                 <tr>
                    <td></td>
                    <td>   
                        <input type="checkbox" name="lang" value="3"><span>Auditory brainstem evoked response</span>
                    </td>
                </tr>
                
                 <tr>
                    <td></td>
                    <td>   
                        <input type="checkbox" name="lang" value="4"><span>Behavioral observation audiometry (BOA)</span>
                    </td>
                </tr>
                
                 <tr>
                    <td></td>
                    <td>   
                        <input type="checkbox" name="lang" value="5"><span>Visual reinforcement audiometry (VRA)</span>
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>   
                        <input type="checkbox" name="lang" value="6"><span>Conventional play audiometry (CPA) </span>
                    </td>
                </tr>
                
           
                
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูล"></input></td>
                </tr>
                
                
            </table>
                   </form>
            
            
        </div>
        
        <div title="ข้อมูลทั้งหมด" style="padding:0px" >
       
            
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
            
                    
        </div>
        
        
      
        

        
        
        
        
    </div>
    
 </div>

