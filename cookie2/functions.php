
<?php
/**
 * エスケープ文字列を返却します
 *
 * @param string $value
 * @return string
 */
function escape(string $value): string {
  return htmlspecialchars($value, ENT_HTML5 | ENT_QUOTES, 'utf-8');
}
