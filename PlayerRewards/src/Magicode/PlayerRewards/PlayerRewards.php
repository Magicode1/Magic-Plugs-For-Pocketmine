<?php
namespace Magicode\PlayerRewards;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\OfflinePlayer;

class PlayerRewards extends PluginBase implements Listener{
    
    public function enEnable(){
        $this->getLogger()->info("PlayerRewards loading.....");
        $this->saveDefaultConfig();
        $this->reloadConfig();
    }
        
        public function playerReward(PlayerJoinEvent $player){
            
        $player = $receiver
        $ptime = $player->getFirstPlayed();
        $cfg = $this->getConfig();
        if ($ptime >= $cfg->get("minimum-time-to-have-played-for-reward") {
        $receiver->getInventory()->addItem(264);
        }else{}
        
    public function onDisable(){
        $this->getlogger()->info("PlayerRewards Disabling.....");
    }
    
  }
