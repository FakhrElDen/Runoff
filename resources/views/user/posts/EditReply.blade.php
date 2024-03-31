<h1>Edit Your Reply</h1>
<div class="col-sm-9">
    <form class="formgroup" enctype="multipart/form-data"  method="POST" action="http://localhost/football/public/UpdateReply/{{$reply->id}}">
        {{ @csrf_field() }}

        <label>Reply:</label><br>
        <input type="textarea" name="reply" value="{{$reply->reply}}"><br>
            
        <input type="submit" value="Edit Reply">
    </form>        
</div>