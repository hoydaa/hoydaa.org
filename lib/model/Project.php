<?php

class Project extends BaseProject
{
    public function getDevelopers($c = null)
    {
        $developers = array();

        foreach ($this->getProjectDevelopers() as $project_developer)
        {
            $developers[] = $project_developer->getDeveloper();
        }

        return $developers;
    }

    public function __toString()
    {
        return $this->getName();
    }
}