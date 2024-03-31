<h1>Edit Your Comment</h1>
<div class="col-sm-9">
    <form class="formgroup" enctype="multipart/form-data"  method="POST" action="http://localhost/football/public/UpdateComment/{{$comment->id}}">
        {{ @csrf_field() }}

        <label>comment:</label><br>
        <input type="textarea" name="comment" value="{{$comment->comment}}"><br><br>

        <label>Insert Photo:</label><br>
        <input type="file" name="image" value="{{$comment->image}}"><br><br>
            
        <input type="submit" value="Edit comment">
    </form>        
</div>