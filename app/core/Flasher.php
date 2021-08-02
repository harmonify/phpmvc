<?php
class Flasher {
/**
 *
 * @param mixed $message action taken
 * @param mixed $condition adjective
 * @param mixed $type alert type
 * @return alert You have $condition $message
 */
  public static function setFlash($message, $condition, $type)
  {
    $_SESSION['flash'] = [
      'message' => $message,
      'condition' => $condition,
      'type' => $type
    ];
  }

  public static function flash()
  {
    if (isset($_SESSION['flash'])) {
      echo "<div class=\"alert alert-{$_SESSION['flash']['type']} alert-dismissible fade show\" role=\"alert\">
              You have <strong>{$_SESSION['flash']['condition']}</strong> {$_SESSION['flash']['message']}
              <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>";
      unset($_SESSION['flash']);
    }
  }
}
