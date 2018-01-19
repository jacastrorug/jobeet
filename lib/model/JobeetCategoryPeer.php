<?php

class JobeetCategoryPeer extends BaseJobeetCategoryPeer
{
  static public function getWithJobs()
  {
    $criteria = new Criteria();
    $criteria->addJoin(self::ID, JobeetJobPeer::CATEGORY_ID);
    $criteria->add(JobeetJobPeer::EXPIRES_AT, time(), Criteria::GREATER_THAN);
    $criteria->add(JobeetJobPeer::IS_ACTIVATED, true);
    $criteria->setDistinct();

    return self::doSelect($criteria);
  }
}
