@extends('layout.layout')
@section('content')
    <div class="col-sm-8">
        <h1>{{$users}}</h1>
        <img style="height:200px; width: 200px;" class="img-circle" src="http://localhost/football/public/photos/{{$photo}}" alt=""><br>
        <a href="http://localhost/football/public/EditUser/{{$id}}"><input style="margin-left: 25px; float: left; margin-top: 20px;font-weight: bold;" class="btn btn-success btn-lg" type="button" value="Edit Your Info"></a>
        <br><hr><br><br><br>
        @foreach($posts ?? '' as $post)
            <h4 style="font-weight: bold;">{{$post->user_name}}</h4>
            <img style="height:80px; width: 80px;" class="img-circle" src="http://localhost/football/public/photos/{{$post->user_photo}}" alt=""><br>
            <h5>{{$post->created_at->diffForHumans()}}</h5>
            <h4>{{$post->post}}</h4>
            <img height="300px" src="http://localhost/football/public/PostsImages/{{$post->image}}" alt="">
            @if ( $post->user_id == $id )
                <div style="margin-top: 3px;">
                    <a style="color:#5bc0de;" href="http://localhost/football/public/EditPost/{{$post->id}}">Edit Post</a>
                    <a style="color:#d9534f; margin-left: 20px;" href="http://localhost/football/public/DeletePost/{{$post->id}}">Delete Post</a>
                </div> 
            @endif
            <!--------------------- comments ------------------------------------> 
            <hr><button class="btn-primary EditDeleteButton" onclick="commentFunction({{$post->id}})">Comments</button><br><br>
            <div id="commentDIV{{$post->id}}" style="display:none;">
                @foreach( $post['comments'] ?? '' as $comment)
                    <img style="border-radius: 20px;height: 45px;width: 45px;" src="http://localhost/football/public/photos/{{$comment->user_photo}}" alt="">
                    <h5 style="display:inline;font-weight: bold;">{{$comment->user_name}}</h5>
                    <h6 style="margin-top: 2px;">{{$comment->created_at->diffForHumans()}}</h6>
                    <div style="word-wrap: break-word; ">
                    <p>{{$comment->comment}}</p>
                    </div>
                    <img height="fit-content" src="http://localhost/football/public/PostsImages/{{$comment->image}}" alt=""><br>
                    @if ( $comment->user_id == $id )
                        <div style="margin-top: -25px;">
                            <a style="color:#5bc0de" href="http://localhost/football/public/EditComment/{{$comment->id}}">Edit Comment</a>
                            <a style="color:#d9534f; margin-left: 20px;" href="http://localhost/football/public/DeleteComment/{{$comment->id}}">Delete Comment</a>
                        </div> 
                    @endif
                    <!--------------------- replies ------------------------------------>
                    <button class="btn-primary EditDeleteButton" onclick="replyFunction({{$comment->id}})">Replies</button><br><br>
                    <div id="replyDIV{{$comment->id}}" style="display:none;">
                        @foreach( $comment['replies'] ?? '' as $reply)
                            <img style="border-radius: 20px;height: 30px;width:30px;" src="http://localhost/football/public/photos/{{$reply->user_photo}}" alt="">
                            <h6 style="display:inline;font-weight: bold;">{{$reply->user_name}}</h5>
                            <h6 style="margin-top: 2px;">{{$reply->created_at->diffForHumans()}}</h6>
                            <div style="word-wrap: break-word; ">
                                <h5>{{$reply->reply}}</h5>
                            </div>
                            @if ( $reply->user_id == $id )
                                <a style="color:#5bc0de" href="http://localhost/football/public/EditReply/{{$reply->id}}">Edit Reply</a>
                                <a style="color:#d9534f; margin-left: 20px;" href="http://localhost/football/public/DeleteReply/{{$reply->id}}">Delete Reply</a><br><br><br>
                            @endif
                        @endforeach 
                    </div>
                @endforeach        
            </div><hr><br><hr>      
        @endforeach
    </div>    
    <script>
        function commentFunction(key)
        {
            var x = document.getElementById("commentDIV"+key);
            if (x.style.display === "none") 
            {
                x.style.display = "block";
            } 
            else 
            {
                x.style.display = "none";
            }
        }
        function replyFunction(id)
        {
            var x = document.getElementById("replyDIV"+id);
            if (x.style.display === "none") 
            {
                x.style.display = "block";
            } 
            else 
            {
                x.style.display = "none";
            }
        }
    </script>  
@stop 