<?php
  $i=1;
  foreach($list as $row)
  {
 ?>
<div class='list_nadalumandramview'>
    <tr>
        <td><?php echo $i?></td>
        <!-- <td>< ?php echo $row->nadalumandramid?></td> -->
        <td><?php echo $row->nadalumandramcode?></td>
        <td class="tfont"><?php echo $row->nadalumandramname?></td>
        <td><?php echo $row->enadalumandramname?></td>
        <td style="text-align:center"><a id="<?php echo $row->id?>"
                class="modal_nadalumandram updateRecord ml-1 btn-ext-small btn btn-sm btn-primary"><i
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