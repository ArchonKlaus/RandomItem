<?php
namespace LDX\RandomItem;
use pocketmine\scheduler\Task;
use pocketmine\Server;
class Gift extends Task {
  public function __construct($plugin) {
    $this->plugin = $plugin;
    $this->start = false;
  }
  public function onRun($ticks) {
    if($this->start) {
      $this->plugin->giveAll();
    } else {
      $this->start = true;
    }
  }
}
?>
