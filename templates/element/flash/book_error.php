<?php

if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-danger" onclick="this.classList.add('hidden');">
<?php
// print_r($message);
if (isset($message['name']['_empty'])) {
    echo "<p><b>Name field</b> cannot be empty. " . $message['name']['_empty'] . "</p>";
}
if (isset($message['author']['_empty'])) {
    echo "<p><b>Author field</b> cannot be empty. " . $message['name']['_empty'] . "</p>";
}
if (isset($message['email']['_empty'])) {
    echo "<p><b>Email field</b> cannot be empty. " . $message['name']['_empty'] . "</p>";
}
if (isset($message['name']['length'])) {
    echo "<p>" . $message['name']['length'] . "</p>";
}
if (isset($message['email']['validFormat'])) {
    echo "<p>" . $message['email']['validFormat'] . "</p>";
}
if (isset($message['email']['unique_email'])) {
    echo "<p>" . $message['email']['unique_email'] . "</p>";
} else {
    echo $message;
}

?>
</div>
