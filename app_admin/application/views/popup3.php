<script type="text/javascript">
   function  dialog3(win)
   {
        //$.messager.alert('Info','','info');
       // $("#dia_treat1").window('open');
        $(win).window('open');
        
        
   }
   
</script>


<div id="diag3" class="easyui-dialog" title=" รายละเอียดแผนการรักษา " 
     data-options="
     modal:true,
     closed:true,
     buttons:[ { text:'ปิด (Close)', iconCls:'icon-cancel', handler:function(){  $('#diag3').dialog('close'); }   } ]
     " 
     style="width:400px;height:550px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
    
    
    
        <div class="easyui-layout" data-options="fit:true">
            <div data-options="region:'east',split:true"  style="width:10px">
                
                
                <!--
                <div style="padding: 5px">
                    <input class="easyui-textbox"  style="width:30px;height: 40px;"  id="id_main"  readonly="true"  />
                </div>
                -->
                
                
                <!--  1. Pre-surgical orthopedics therapy (PSOT)   -->
                <!--
                <div class="easyui-datagrid"    iconCls="icon-large-picture"   title=" 1. Pre-surgical orthopedics therapy (PSOT) "  id="dg_view_fr1"
                     data-options="
                        url:'<?=base_url()?>index.php/welcome/showjson_fr1/' + $('#id_main').textbox('getValue')  ,
                        singleSelect:true,
                        rownumbers:true,
                        toolbar:[ { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_view_fr1').datagrid('reload');  }  }  ] ,
                        columns:[[
                           { field:'begin_date' , title: ' วัน-เดือน-ปี  ' , align:'center'  ,   width:90  },
                           { field:'firstname', title:'ชื่อ', align:'center'   ,width:100 },
                           { field:'lastname',title:'นามสกุล',align:'center' ,width:100  },
                        ]]                     
                     "
                     style="width: 400px;height: 200px;padding: 5px;"    >
                </div>
                -->
            
                
                     <!--    	4. Interceptive orthodontic treatment    -->
                     <!--
                <div class="easyui-datagrid"    iconCls="icon-large-picture"   title=" 4. Interceptive orthodontic treatment  "  id="dg_view_fr4"
                     data-options="
                        url:'<?=base_url()?>index.php/welcome/showjson_fr4/' + $('#id_main').textbox('getValue')   ,
                        singleSelect:true,
                        rownumbers:true,
                        toolbar:[ { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_view_fr4').datagrid('reload');  }  }  ] ,
                        columns:[[
                           { field:'begin_date' , title: ' วัน-เดือน-ปี  ' , align:'center'  ,   width:90  },
                           { field:'firstname', title:'ชื่อ', align:'center'   ,width:100 },
                           { field:'lastname',title:'นามสกุล',align:'center' ,width:100  },
                        ]]                     
                     "
                     style="width: 400px;height: 200px;padding: 5px;"    >
                </div>
                    -->
                
                <!--  6. Bone graft surgery     -->
                <!--
                <div class="easyui-datagrid"    iconCls="icon-large-picture"   title="  6. Bone graft surgery  "  id="dg_view_fr6"
                     data-options="
                        url:'<?=base_url()?>index.php/welcome/showjson_fr6/'  + $('#id_main').textbox('getValue')    ,
                        singleSelect:true,
                        rownumbers:true,
                        toolbar:[ { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_view_fr6').datagrid('reload');  }  }  ] ,
                        columns:[[
                           { field:'begin_date' , title: ' วัน-เดือน-ปี  ' , align:'center'  ,   width:90  },
                           { field:'firstname', title:'ชื่อ', align:'center'   ,width:100 },
                           { field:'lastname',title:'นามสกุล',align:'center' ,width:100  },
                        ]]                     
                     "
                     style="width: 400px;height: 200px;padding: 5px;"    >
                </div>
                 -->
                 
                               
                                   <!--  7. Growth modification      -->
                  <!--                 
                <div class="easyui-datagrid"    iconCls="icon-large-picture"   title=" 7. Growth modification   "  id="dg_view_fr7"
                     data-options="
                        url:'<?=base_url()?>index.php/welcome/showjson_fr7/'  + $('#id_main').textbox('getValue')   ,
                        singleSelect:true,
                        rownumbers:true,
                        toolbar:[ { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_view_fr7').datagrid('reload');  }  }  ] ,
                        columns:[[
                           { field:'begin_date' , title: ' วัน-เดือน-ปี  ' , align:'center'  ,   width:90  },
                           { field:'firstname', title:'ชื่อ', align:'center'   ,width:100 },
                           { field:'lastname',title:'นามสกุล',align:'center' ,width:100  },
                        ]]                     
                     "
                     style="width: 400px;height: 200px;padding: 5px;"    >
                </div>
                 -->
                 
                <!--   	8. Corrective Orthodontic Treatment      -->
                <!--
                <div class="easyui-datagrid"    iconCls="icon-large-picture"   title="  8. Corrective Orthodontic Treatment    "  id="dg_view_fr8"
                     data-options="
                        url:'<?=base_url()?>index.php/welcome/showjson_fr8/'  + $('#id_main').textbox('getValue')  ,
                        singleSelect:true,
                        rownumbers:true,
                        toolbar:[ { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_view_fr8').datagrid('reload');  }  }  ] ,
                        columns:[[
                           { field:'begin_date' , title: ' วัน-เดือน-ปี  ' , align:'center'  ,   width:90  },
                           { field:'firstname', title:'ชื่อ', align:'center'   ,width:100 },
                           { field:'lastname',title:'นามสกุล',align:'center' ,width:100  },
                        ]]                     
                     "
                     style="width: 400px;height: 200px;padding: 5px;"    >
                </div>
                 -->
                 
                 
                <!--   9. Orthognathic surgery    1    -->
                <!--
                <div class="easyui-datagrid"    iconCls="icon-large-picture"   title="  9.Orthognathic surgery(Main)   "  id="dg_view_fr9_1"
                     data-options="
                        url:'<?=base_url()?>index.php/welcome/showjson_fr9/'  + $('#id_main').textbox('getValue')   ,
                        singleSelect:true,
                        rownumbers:true,
                        toolbar:[ { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_view_fr9_1').datagrid('reload');  }  }  ] ,
                        columns:[[
                           { field:'begin_date' , title: ' วัน-เดือน-ปี  ' , align:'center'  ,   width:90  },
                           { field:'firstname', title:'ชื่อ', align:'center'   ,width:100 },
                           { field:'lastname',title:'นามสกุล',align:'center' ,width:100  },
                        ]]                     
                     "
                     style="width: 400px;height: 200px;padding: 5px;"    >
                </div>
                  -->
                  
                  
                <!--   9. Distraction  -->
                <!--
                <div class="easyui-datagrid"    iconCls="icon-large-picture"   title="  9. Distraction    "  id="dg_view_fr9_2"
                     data-options="
                        url:'<?=base_url()?>index.php/welcome/showjson_fr9_2/'   + $('#id_main').textbox('getValue')   ,
                        singleSelect:true,
                        rownumbers:true,
                        toolbar:[ { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_view_fr9_2').datagrid('reload');  }  }  ] ,
                        columns:[[
                           { field:'begin_date' , title: ' วัน-เดือน-ปี  ' , align:'center'  ,   width:90  },
                           { field:'firstname', title:'ชื่อ', align:'center'   ,width:100 },
                           { field:'lastname',title:'นามสกุล',align:'center' ,width:100  },
                        ]]                     
                     "
                     style="width: 400px;height: 200px;padding: 5px;"    >
                </div>
                  -->
                  
              <!---------------10. Other surgery    1 ----------------->
              <!--
                <div class="easyui-datagrid"    iconCls="icon-large-picture"   title="  10.Vestibuloplasty   "  id="dg_view_fr10_1"
                     data-options="
                        url:'<?=base_url()?>index.php/welcome/showjson_fr10_1/'   +  $('#id_main').textbox('getValue')   ,
                        singleSelect:true,
                        rownumbers:true,
                        toolbar:[ { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_view_fr10_1').datagrid('reload');  }  }  ] ,
                        columns:[[
                           { field:'begin_date' , title: ' วัน-เดือน-ปี  ' , align:'center'  ,   width:90  },
                           { field:'firstname', title:'ชื่อ', align:'center'   ,width:100 },
                           { field:'lastname',title:'นามสกุล',align:'center' ,width:100  },
                        ]]                     
                     "
                     style="width: 400px;height: 200px;padding: 5px;"    >
                </div>
                -->
                  
                  
                 
            </div>
            
            <div data-options="region:'center'" style="padding:5px;">
                  
                     
                     
                <table cellpadding="5">
                                     
                                     
                <tr>
                    <td> 

                     <a href="javaScript:void(0)" onclick="dialog3('#dia_treat3')" class="easyui-linkbutton" data-options="iconCls:'icon-large-picture'  "  id="ck_fr1" ></a>

                    </td>
                    <td>1. Pre-surgical orthopedics therapy (PSOT)  </td>
                </tr>
                
                <tr>
                    <td> 
                        <!--<input type="checkbox" onchange="dialog3()" name="vehicle" value="Bike">--> 
                
                        <a href="javaScript:void(0)" onclick="dialog3('#dia_treat2_mo')" class="easyui-linkbutton" data-options="iconCls:'icon-large-picture'  "   id="ck_fr2"  ></a>
                        
                        
                    </td>
                  <!--  <td>2. การผ่าตัดซ่อมแซมริมฝีปาก จมูก และพื้ันจมูก  </td> -->
                    <td>2. Lip nasal and nasal floor repair </td>
                </tr>
                
                  <tr>
                    <td> 
                        <!--<input type="checkbox" onchange="dialog3()" name="vehicle" value="Bike">--> 
                        <!--
                        <input type="checkbox"  id="ck_fr3"   readonly="true"  />
                        -->
                        <a href="javaScript:void(0)" onclick="dialog3('#dia_treat7')" class="easyui-linkbutton" data-options="iconCls:'icon-large-picture'  "   id="ck_fr3" ></a>
                          
                      
                    </td>
                    <!-- <td>3. การผ่าตัดแก้ไขเพดานอ่อน  </td> -->
                    <td>3. Palate repair  </td>
                </tr>
                
                 <tr>
                    <td> 
                        <!--<input type="checkbox" onchange="dialog3()" name="vehicle" value="Bike">--> 
                        <!--
                           <input type="checkbox"  id="ck_fr4"   readonly="true"  />
                           -->
                           
                        <a href="javaScript:void(0)" onclick="dialog3('#dia_treat4B')" class="easyui-linkbutton" data-options="iconCls:'icon-large-picture'  "   id="ck_fr4" ></a>
                        
                    
                    </td>
                    <!-- <td>4. การผ่าตัดแก้ไขเพดานแข็ง  </td> -->
                    <td>4. Interceptive orthodontic treatment  </td>
                </tr>
                
                 
                <!--
                <tr>
                    <td> 
                       
                        <a href="javaScript:void(0)" onclick="dialog3('#dia_treat1')" class="easyui-linkbutton" data-options="iconCls:'icon-large-picture'  " ></a>
                    </td>
                
                    <td>5. Orthodonic preparation for bone graft surgery </td>
                </tr>
                -->
                
                
                            <tr>
                    <td> 
                        <!--<input type="checkbox" onchange="dialog3()" name="vehicle" value="Bike">--> 
                        <!--
                        <input type="checkbox"  id="ck_fr5"   readonly="true" />
                        -->
                        
                        <a href="javaScript:void(0)" onclick="dialog3('#dia_treat15')" class="easyui-linkbutton" data-options="iconCls:'icon-large-picture'  "  id="ck_fr5"></a>
                       
                     
                    </td>
                   <!-- <td>6. ผ่าตัดแก้ไขภาวะแหว่งของกระดูกสันเหงือกด้วยวิธีปลูกกระดูก  </td> -->
                    <!--<td>5. Bone graft surgery  </td> -->
                      <td>5. Alveolar bone graft  </td>
                </tr>
                
                
                 <tr>
                    <td> 
                        <!--<input type="checkbox" onchange="dialog3()" name="vehicle" value="Bike">--> 
                       <!--
                           <input type="checkbox"  id="ck_fr6"   readonly="true"  />
                          -->
                          
                        <a href="javaScript:void(0)" onclick="dialog3('#dia_treat12_7')" class="easyui-linkbutton" data-options="iconCls:'icon-large-picture'  "   id="ck_fr6" ></a>
                        
                     
                    </td>
                   <!-- <td>7. การรักษาทางทันตกรรมจัดฟัน  </td> -->
                    <td>6. Growth modification  </td>
                </tr>
                
                
                      <tr>
                    <td> 
                        <!--<input type="checkbox" onchange="dialog3()" name="vehicle" value="Bike">--> 
                    <!--
                                <input type="checkbox"  id="ck_fr7"   readonly="true"  />
                        -->
                        
                        <a href="javaScript:void(0)" onclick="dialog3('#dia_treat12')" class="easyui-linkbutton" data-options="iconCls:'icon-large-picture'  "  id="ck_fr7"></a>
                    
            
                    </td>
                   <!-- <td>7. การรักษาทางทันตกรรมจัดฟัน  </td> -->
                    <td>7.  Corrective Orthodontic Treatment  </td>
                </tr>
                
                
                 <tr>
                    <td> 
                        <!--<input type="checkbox" onchange="dialog3()" name="vehicle" value="Bike">--> 
                       <!--
                         <input type="checkbox"  id="ck_fr8"    readonly="true" />
                         -->
                         
                        <a href="javaScript:void(0)" onclick="dialog3('#dia9')" class="easyui-linkbutton" data-options="iconCls:'icon-large-picture'  "  id="ck_fr8"></a>
                        
                       
                    </td>
                   <!--  <td>8. ทันตกรรมหัตถการทำฟันปลอมชั่วคราวในกรณีที่จำเป็น  </td> -->
                     <td>8. Orthognathic surgery  </td>
                </tr>
                
                
                 <tr>
                    <td> 
                        <!--<input type="checkbox" onchange="dialog3()" name="vehicle" value="Bike">--> 
                       <!--
                           <input type="checkbox"  id="ck_fr9"   readonly="true"  />
                         -->
                         
                        <a href="javaScript:void(0)" onclick="dialog3('#dia10')" class="easyui-linkbutton" data-options="iconCls:'icon-large-picture'  "  id="ck_fr9"></a>
                       
                       
                    
                    
                    </td>
                   <!-- <td>9. แก้ไขความผิดปกติของการสบฟันและขากรรไกรด้วยวิธีศัลยกรรมขากรรไกร  </td> -->
                    <td>9. Other surgery  </td>
                </tr>
                
                
                
                  <tr>
                    <td> 
                        <!--<input type="checkbox" onchange="dialog3()" name="vehicle" value="Bike">--> 
                       <!--
                         <input type="checkbox"  id="ck_fr10"  readonly="true"  />
                         -->
                         
                        <a href="javaScript:void(0)" onclick="dialog3('#dia11')" class="easyui-linkbutton" data-options="iconCls:'icon-large-picture'  "  id="ck_fr10"></a>
                       
                      
                    </td>
                   <!-- <td>9. แก้ไขความผิดปกติของการสบฟันและขากรรไกรด้วยวิธีศัลยกรรมขากรรไกร  </td> -->
                    <td>10. Other dental procedure  </td>
                </tr>
                
                

                
            </table>
                     
                     
                     
                     
            </div>
            
            <!--
            <div data-options="region:'south',border:false" style="text-align:right;padding:5px 0 0;">
                <a class="easyui-linkbutton" data-options="iconCls:'icon-ok'" href="javascript:void(0)" onclick="javascript:alert('ok')" style="width:80px">Ok</a>
                <a class="easyui-linkbutton" data-options="iconCls:'icon-cancel'" href="javascript:void(0)" onclick="javascript:alert('cancel')" style="width:80px">Cancel</a>
            </div>
            -->
            
        </div>
       
    
</div>    
