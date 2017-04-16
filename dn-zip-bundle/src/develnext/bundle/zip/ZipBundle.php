<?php
namespace develnext\bundle\zip;

use ide\bundle\AbstractBundle;
use ide\bundle\AbstractJarBundle;
use ide\project\Project;

class ZipBundle extends AbstractJarBundle
{
    public function onAdd(Project $project, AbstractBundle $owner = null)
    {
        parent::onAdd($project, $owner);
    }

    public function onRemove(Project $project, AbstractBundle $owner = null)
    {
        parent::onRemove($project, $owner);
    }
}