<?php use_helper('Date') ?>

<h2>News</h2>
<?php if ($newss): ?>
<table>
    <?php foreach ($newss as $news): ?>
    <tr>
        <td><?php echo link_to($news->getSubject(), 'project_news/show?id='.$news->getId()) ?></td>
        <td><?php echo format_date ($news->getCreatedAt()) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
<p>There is no news for this project at the moment.</p>
<?php endif; ?>