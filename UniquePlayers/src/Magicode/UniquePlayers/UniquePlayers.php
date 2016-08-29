<?php

namespace Magicode\UniquePlayers;

use pocketmine\plugin\PluginBase;

class NoMoreLag extends PluginBase{
    public function onEnable() {
       $this->getLogger()->info("UniquePlayers Enabling.....");
    }
        
    public function onDisable(){
        $this->getlogger()->info("UniquePlayers Disabling.....");
}



}
