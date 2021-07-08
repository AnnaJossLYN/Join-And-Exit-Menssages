<?php

namespace AnnaJossLYN;

use pocketmine\plugin\PluginBase as PB;
use pocketmine\event\Listener as L;
use pocketmine\utils\Config;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class Main extends PB implements L {
	
	public function onEnable(){
            $config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
            $this->saveResource("config.yml");
            $this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
                $name->getName();     
                $msg = $this->getConfig()->get("JoinMessage");
		$event->setJoinMessage(str_replace([{name}], [$name], $msg)));

	}
	
	public function onExit(PlayerQuitEvent $event){
		$player = $event->getPlayer();
                $name->getName();
                $msg = $this->getConfig()->get("ExitMessage");
		$event->setQuitMessage(str_replace([{name}], [$name], $msg)));
	}
	
}
