<?php

namespace AnnaJossLYN\Events;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\Plugin;
use pocketmine\utils\Config;

class PlayerListener implements Listener
{
    /** @var Plugin  */
    public $plugin;

    /** @var Config */
    public $config;
    
    public function __construct(Plugin $plugin)
    {
        $this->plugin = $plugin;
        $this->config = $plugin->getConfig();
    }

    public function onJoin(PlayerJoinEvent $event)
    {
        $player = $event->getPlayer();
        $event->setJoinMessage(str_replace('{player}', $player->getName(), $this->config->get('message_join')));
    }

    public function onExit(PlayerQuitEvent $event)
    {
        $player = $event->getPlayer();
        $event->setQuitMessage(str_replace('{player}', $player->getName(), $this->config->get('message_quit')));
    }
}