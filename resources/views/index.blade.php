<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/css/style.css" >
</head>

<body>
  <div class="container">
    <div class="card">
      <h1 class="title">Todo List</h1>
      <div class="todo">
        <form action="/todos/create" method="post">
          @csrf
          <input type="text" class="input-add" name="content">
          <input class="button-add" type="submit" value="追加">
        </form>
      </div>

      <table class="Todo">
        <tr>
          <th>作成日</th>
          <th>タスク名</th>            
          <th>更新</th>            
          <th>削除</th>
        </tr>

        @foreach ($todos as $todo)
        
          <tr>

             <td>{{$todo->created_at}}</td>  
              <form action="/todos/create" method="post">        
                @csrf
               <input type="hidden" name="" value="">

               <td><input type="text" class="" value="{{$todo->content}}" name="text"></td>

                <td>
                  <input type="submit"value="更新">
                </td>
              </form>

              <td>
                <form action="/todos/create" method="post">
                   @csrf
                  <input type="submit" value="消去">
                </form>
              </td>
              
          </tr>
             @endforeach

      </table>
    </div>
  </div>
</body>

</html>