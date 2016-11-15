<script type="text/javascript">

      function tr2()
      {
          
          $(function(){
                 //alert('t');
                 $("#fr2").window('open');
          });
          
      }
        
</script>



<div id="fr2" class="easyui-window" title="<?=$tr2?>" data-options="modal:true,closed:true" style="width:700px;height:500px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
    <div class="easyui-tabs" >
        
        
        
        <div title="แบบฟอร์มบันทึกข้อมูล" style="padding:10px" data-options="iconCls:'icon-save'">
            
           <!-- <ul class="easyui-tree" data-options="url:'<?=base_url()?>json/tree_data1.json',method:'get',animate:true"></ul> -->
            
                    <form id="fr_tr1" action="<?=base_url()?>index.php/welcome/insert_fr" method="post" enctype="multipart/form-data">
            <table>
               
                
                <tr>
                    <td>ผู้ตรวจ :</td>
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
                
                

                
                
                <tr>
                    <td>รูปถ่าย :</td>
                    <td><input name="file" class="f1 easyui-filebox" style="width:200px;" ></input></td>
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

