<?php

declare(strict_types=1);

namespace BaliGamerz899\task;

use BaliGamerz899\Main;
use pocketmine\item\Item;
use pocketmine\scheduler\Task;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;

class EffectTask extends Task{
    
    public function onRun(int $tick) : void{
        foreach(Main::getInstance()->getServer()->getOnlinePlayers() as $players){
            $inv = $players->getArmorInventory();
            $helmet = $inv->getChestplate();
            $m = $players->getInventory();
            if ($helmet->getCustomName() == "§aFrequent§eFlyer\nFlyDenganElytra\n§oTerbangBebas\n§oPluginByBaliGamerz\n§oNomer:8373837" && $helmet->getEnchantment(503)){
            switch($helmet->getId()){
                case 444:
                    $players->addEffect(new EffectInstance(Effect::getEffect(Effect::HEALTH_BOOST), 220, 2, false));
                    if($helmet->getId() === Item::ELYTRA){
                    	$players->setAllowFlight(true);
                    }else{
                 $players->setAllowFlight(false);
                 return;
                 }
                 }
           }
   }
 }
 }
