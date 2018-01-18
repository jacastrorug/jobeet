<?php
/**
 * Created by PhpStorm.
 * User: jacastrorug
 * Date: 18/01/2018
 * Time: 3:16 PM
 */
?>
<table class="jobs">
  <?php foreach ($jobs as $i => $job): ?>
    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
      <td class="location">
        <?php echo $job->getLocation() ?>
      </td>
      <td class="position">
        <?php echo link_to($job->getPosition(), 'job_show_user', $job) ?>
      </td>
      <td class="company">
        <?php echo $job->getCompany() ?>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

