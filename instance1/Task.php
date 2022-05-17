<?php

declare(strict_types=1);

class Task {
  private string $name;
  private int    $priority;
  private int    $progress;

  public function __construct(string $name, int $priority = 1, int $progress = 0) {
    $this->name     = $name;
    $this->priority = $priority;
    $this->progress = $progress;
  }

  // プロパティに値を格納するメソッド
  public function isCompleted(): bool {
    return $this->progress >= 100;
  }
  public function setName(string $string): void {
    $this->name = $string;
  }
  public function setPriority(string $string): void {
    $this->priority = $string;
  }
  public function setProgress(int $int): void {
    $this->progress = $int;
  }

  // プロパティの値を呼び出すメソッド
  public function getName(): string {
    return $this->name;
  }
  public function getPriority(): int {
    return $this->priority;
  }
  public function getProgress(): int {
    return $this->progress;
  }
}
