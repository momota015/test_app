<?php
require_once('connection.php');

// function createData($post)
// {
//   createTodoData($post['content']);
// }

function e($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function getTodoList()
{
    return getAllRecords();
}

function getSelectedTodo($id)
{
    return getTodoTextById($id); 
}

function savePostedData($post) // 送信元のページ
{
    $path = getRefererPath();
    switch ($path) {
        case '/new.php':
            createTodoData($post['content']);
            break;
        case '/edit.php':
            updateTodoData($post);
            break;
        case '/index.php': // 追記
            deleteTodoData($post['id']); // 追記
            break; // 追記
        default:
            break;
    }
}


function getRefererPath()
{
    $urlArray = parse_url($_SERVER['HTTP_REFERER']);
    return $urlArray['path'];
}
