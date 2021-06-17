<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <style>
/* リセットCSS */
    html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
/* リセットCSS終わり */


table {
	border-collapse: collapse;
	border-spacing: 0;
}

body {
    height:100vh;
    
    background-color:#6633CC;
    display:flex;
    align-items:center;
}

.content {
    width:70%;
    margin:100px auto;
    background:#fff;
    border-radius:5px;
}

.content-tilte {
    margin:20px 10px 10px;
    font-size:25px;
    font-weight:bold;
}

.content-title_button {
    margin-left:80px;
    color:#FF77FF;
    background:#fff;
    border:2px solid #FF77FF;
    padding:5px 15px;
    border-radius:5px;

}


.content-title_form {
    width:70%;
    height:30px;
    margin:10px 20px;
    border-radius:5px;
    border:solid 1px #ddd;
    
}

table {
    width:90%;
    text-align::center;
    padding-right:30px;
    margin:auto;
}

tr {
    text-align:center;
    margin:20px 30px;
    height:50px;
}

th {
    font-weight:bold;
}

/* タスク表示、更新、削除部分 */

.content-update_form {
    width:90%;
    border-radius:5px;
    border:solid 1px #ddd;
    padding:5px 0 ;
}

.update_button {
    color:#FF8856;
    background:#fff;
    border:2px solid #FF8856;
    padding:5px 15px;
    border-radius:5px
    
}

.delete_button {
    color:#AEFFBD;
    background:#fff;
    border:2px solid #AEFFBD;
    padding:5px 15px;
    border-radius:5px
}


    
    
    
    </style>
</head>
<body>
    <div class="content">
        
        <h1 class="content-tilte">Todo List</h1>
        <form action="/todo/create" method="POST">
            @csrf
            <input type="text" name ="content" class="content-title_form">
            <button class="content-title_button">追加</button>
            
        </form>
        <table>
            <tr>
                <th><h2>作成日</h2></th>
                <th>タスク名</th>
                <th>更新</th>
                <th>削除</th>
            </tr>
            @foreach($items as $item)
            <tr>
                <td>{{$item->created_at}}</td>
                <form action="/todo/update" method="POST" >
                @csrf
                <input type="hidden" name="id" value="{{$item->id}}">
                <td><input type="text" name="content" value="{{$item->content}}"  class="content-update_form"></td>
                <td><button class="update_button">更新</button></td>
                </form>
                <td><a href="/todo/delete/{{$item->id}}" class="delete_button">削除</a></td>
            </tr>
            @endforeach
        </table>
    
    </div>
</body>
</html>