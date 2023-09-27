<?php
function updateSessionFields(SESSION_KEYS $key, array $fields): void
{
    FlushSessionByKey($key);
    $_SESSION[$key->value]['fields'] = $fields;

}

function FlushSessionByKey(SESSION_KEYS $key)
{
    unset($_SESSION[$key->value]);

}

function formSessionDate(SESSION_KEYS $key): array
{
    $fields = $_SESSION[$key->value]['fields'] ?? [];
    $errors = $_SESSION[$key->value]['errors'] ?? [];

    if (!empty($_SESSION[$key->value])){
        unset($_SESSION[$key->value]);
    }
    return compact('fields','errors');
}