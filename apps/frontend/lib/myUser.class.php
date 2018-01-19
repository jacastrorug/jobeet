<?php

class myUser extends sfBasicSecurityUser
{
    public function getJobHistory()
    {
        $ids = $this->getAttribute('job_history', array());

        return JobeetJobPeer::retrieveByPKs($ids);
    }

    public function addJobToHistory(JobeetJob $job)
    {
        $ids = $this->getAttribute('job_history', array());

        if (!in_array($job->getId(), $ids)) {
            array_unshift($ids, $job->getId());

            $this->setAttribute('job_history', array_slice($ids, 0, 3));
        }
    }
}
