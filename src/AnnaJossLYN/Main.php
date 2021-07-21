<?php

namespace AnnaJossLYN;

use AnnaJossLYN\Events\PlayerListener;
use pocketmine\plugin\PluginBase;


class Main extends PluginBase
{
    public function onEnable(): void
    {
        $this->saveResource('config.yml');
        $this->getServer()->getPluginManager()->registerEvents(new PlayerListener($this), $this);
    }
}
