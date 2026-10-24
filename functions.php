<?php
require_once('connection.php');

// function createData($post)
// {
//   createTodoData($post['content']);
// }

function getTodoList()
{
  return getAllRecords();
}

function getSelectedTodo($id)
{
  return getTodoTextById($id);
}

// ページのパスで条件分岐をし、処理を振り分ける
function savePostedData($post)
{
  $path = getRefererPath();

  switch ($path) {
    case '/new.php':
      createTodoData($post['content']);
      break;
    case '/edit.php':
      updateTodoData($post);
      break;
    case '/index.php':
      deleteTodoData($post['id']);
      break;
    default:
      break;
  }
}

// リクエスト元のURLを文字列で取得しそのパスを返す
function getRefererPath()
{
  $urlArray = parse_url($_SERVER['HTTP_REFERER']);
  return $urlArray['path'];
}
