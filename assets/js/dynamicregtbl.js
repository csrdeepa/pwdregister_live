  $(document).ready(function(){
      var count = 1;
      $('#add').click(function(){
        var rowCount = $('#crud_table tr:last').index() + 1;
        count = rowCount + 1;
        var html_code = "<tr id='row"+count+"'>";
      
        html_code += '<td class="tblfsno" style="text-align: center;">'+count+'</td>';
        html_code += '<td class="tblfname"><input type="text" class="faname tfont" placeholder="bgah;" style="width:100%" /></td>';
        html_code += '<td class="tblfgender"><select class="fagender tfont"  style="width:auto" > <option value="fafemale">bgz;</option><option value="famale">Mz;</option><option value="faother">kw;wit</option> </select></td>';
        html_code += '<td class="tblfage"><input type="text" class="faage tfont" placeholder="taJ" style="width:100px" /></td>';
        html_code += '<td  class="tblfrelationship"><select class="farelationship tfont"  style="width:100%" > <option value="famother">mk;kh</option><option value="fafather">mg;gh</option><option value="fawife">fzth;</option><option value="fahusband">kidtp</option><option value="fabrother">rnfhjuh;</option><option value="fasister">rnfhjup</option><option value="fagrandpa">jhj;jh</option><option value="fagrandma">ghl;o</option><option value="fagardian">ghJfhtyh;</option> </select></td>';
        html_code += '<td  class="tblfbusiness"><input type="text"   class="fabusiness tfont" placeholder="bjhHpy;" style="width:100%" /></td>';
        html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";       
        html_code += "</tr>";  
        $('#crud_table').append(html_code);
      });
      
      $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        if (delete_row != "row1"){
          $('#' + delete_row).remove();
        }else{
          $('.faname').attr("value", "");
          $('.fagender').val("fafemale");
          $('.faage').attr("value", "");
          $('.farelationship').val("famother");
          $('.fabusiness').attr("value", "");
       }
      });
     });


