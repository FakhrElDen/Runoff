<h1>Edit Posts</h1>
<div class="col-sm-9">
    <form class="formgroup" enctype="multipart/form-data"  method="post" action="http://localhost/football/public/UpdatePost/{{$post->id}}">
        {{ @csrf_field() }}

        <label>Post:</label><br>
        <input type="textarea" name="post" value="{{$post->post}}"><br><br>

        <label>Insert Photo:</label><br>
        <input type="file" name="image" value="{{$post->image}}"><br><br>
            
        <input type="submit" value="Edit Post">
    </form>        
</div>