<?php
public function getExtensionList($userID)
{
    return $this->loadExtension('xuanxuan')->getExtensionList($userID);
}

public function editUser($user = null)
{
    return $this->loadExtension('xuanxuan')->editUser($user);
}

public function getServer($backend = 'xxb')
{
    return $this->loadExtension('xuanxuan')->getServer($backend);
}
