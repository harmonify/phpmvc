<?php
class Flasher {
/**
 *
 * @param bool $success true|false
 * @param mixed $message action taken
 * @param mixed $type alert type
 * @return alert You have $success $message
 */
  public static function setFlash($success, $message, $type)
  {
    if ($success === true) $condition = "successfully";
    else $condition = "failed to";

    $_SESSION['flash'] = [
      'condition' => $condition,
      'message' => $message,
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
