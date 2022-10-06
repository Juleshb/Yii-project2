<?php
use yii\helpers\html;
/** @var yii\web\View $this */

$this->title = 'blog';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Blogs</h1>
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
      <th scope="col">Content</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <th scope="row">Active</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>
        <span><?= html::a('view') ?></span>
        <span><?= html::a('update') ?></span>
        <span><?= html::a('delete') ?></span>
      </td>
    </tr>
    
  </tbody>
</table>

<?php print_r($posts); ?>
    </div>
</div>
