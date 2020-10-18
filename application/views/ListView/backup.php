<?php if (count($records)): ?>
<?php $count = $this->uri->segment(3); ?>
<?php foreach($records as $key=> $record): ?>
<tbody>
<tr>
<th scope="row"><?php echo $count++ + 1 ?></th>
<td><?php echo $record->title ?></td>
<td> <?php
$string = strip_tags($record->content);
if (strlen($string) > 10) {

// truncate string
$stringCut = substr($string, 0, 200);
$endPoint = strrpos($stringCut, ' ');
//if the string doesn't contain any space then it will cut without word basis.
$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
// $string .= '... <a href="/this/story">Read More</a>';
}
echo $string ."...";
?></td>
<td><?php if (($record->image)) { ?>
<img src="<?php echo base_url("/uploads/".$record->image); ?>" alt="" width="120" height="70">
<?php } else { ?>

<img src="<?php echo base_url('public/no_photo_icon.jpg'); ?>" alt="" width="100" height="70">
<?php } ?>
</td>
<td><?php echo $record->created_at ?></td>
<td>
<a href="<?php echo base_url('Admin/Edit_Blogs/'.$record->id); ?>">
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">View</button>
</a>

<a href="<?php echo base_url('Admin/deleteBlog/'.$record->id); ?>"><button class="btn btn-primary">Delete</button></a></td>

</tr>

</tbody>
<?php endforeach; ?>
<?php else: ?>
<tr>NO Records Found!</tr>
<?php endif; ?>