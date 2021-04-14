<?php
  $i=1;
  foreach($list as $row)
  {
 ?>
<div class='list_sattamandramview'>
    <tr>
        <td><?php echo $i?></td>
        <!-- <td>< ?php echo $row->sattamandramid?></td> -->
        <td><?php echo $row->sattamandramcode?></td>
        <td class="tfont"><?php echo $row->sattamandramname?></td>
        <td><?php echo $row->esattamandramname?></td>
        <td style="text-align:center"><a id="<?php echo $row->id?>"
                class="modal_sattamandram updateRecord ml-1 btn-ext-small btn btn-sm btn-primary"><i
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