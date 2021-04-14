<?php
  $i=1;
  foreach($list as $row)
  {
 ?>
<div class='list_dataview'>
    <tr>
        <td><?php echo $i?></td>
        <!-- <td>< ?php echo $row->talukid?></td> -->
        <td><?php echo $row->talukcode?></td>
        <td class="tfont"><?php echo $row->talukname?></td>
        <td><?php echo $row->etalukname?></td>
        <td class="tfont"><?php echo $row->districtname?></td>
        <!-- <td>< ?php echo $row->stateid?></td>
              <td>< ?php echo $row->countryid?></td> -->
        <!-- <td>< ?php echo $row->active?></td> -->
        <td style="text-align:center"><a id="<?php echo $row->id?>"
                class="modal_taluk updateRecord ml-1 btn-ext-small btn btn-sm btn-primary"><i
                    class="fas fa-edit"></i></a>
            <a style="padding-left:10px" class="deleteRecord  ml-1 btn-ext-small btn btn-sm btn-danger"
                data-id="<?php echo $row->id?>"><i class="fas fa-times"></i></a>
        </td>
    </tr>
</div>
<?php
  $i++;
  }
  ?>