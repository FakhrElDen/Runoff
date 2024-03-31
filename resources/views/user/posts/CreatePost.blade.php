<h1>Create Posts</h1>
<div class="col-sm-9">
    <form class="formgroup" enctype="multipart/form-data" method="POST" action="http://localhost/football/public/StorePost"> 
        {{ @csrf_field() }}
        <input type="hidden" name="user_id" value="{{$id}}">
        <input type="hidden" name="user_name" value="{{$users}}">
        <input type="hidden" name="user_photo" value="{{$photo}}">    
        <label>Post:</label><br>
        <input type="textarea" name="post" require><br><br>

        <label>Insert Photo:</label><br>
        <input type="file" name="image"><br><br>
            
        <input type="submit" value="Create Post">
    </form>
</div>