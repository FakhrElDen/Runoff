@extends('layout.layout')
@section('content')
    <h1>Football is Opinions Say Yours</h1>
    <div class="col-sm-8">
        <form class="formgroup" enctype="multipart/form-data" method="POST" action="http://localhost/football/public/StorePost"> 
            {{ @csrf_field() }}
            <fieldset>
                <input type="hidden" name="user_id" value="{{$id}}">
                <input type="hidden" name="user_name" value="{{$users}}">
                <input type="hidden" name="user_photo" value="{{$photo}}">    
                
                <textarea class="form-control" placeholder="Write Your Post ..."  name="post" rows="5" required></textarea><br>
                <div class="row" style="margin-top: -5px; margin-left: 80px;">
                    <label for="file-input">
                        <img style="width:30px; cursor:pointer;" src="http://localhost/football/public/NewsImages/upload-photo-icon.jpg"/>
                    </label>
                    <input style=" display: none;" name="image" id="file-input" type="file">
                    <input style="font-weight: bold;width: 500px;border-radius: 30px;" class="btn btn-success" type="submit" value="Create Post">
                </div>
            </fieldset>
        </form>
        <hr><br><hr>
        @foreach($posts ?? '' as $post)
            <h3>{{$post->user_name}}</h3>
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
            <form class="formgroup" enctype="multipart/form-data" method="POST" action="http://localhost/football/public/StoreComment"> 
                {{ @csrf_field() }}
                <br><textarea style="border-radius: 25px; padding: 0px 120px;" placeholder="Write Your Comment"  name="comment" rows="2" required></textarea>
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <div class="row" style="margin-left: 0px;">
                    <label style=" display: none;" for="file-input">
                        <img style="width:25px; cursor:pointer;" src="http://localhost/football/public/NewsImages/upload-photo-icon.jpg"/>
                    </label>
                    <input style=" display: none;" name="image" id="file-input" type="file">
                    <input style="font-weight: bold; width: 400px; border-radius: 30px; margin-left: 10px;" class="btn btn-success btn-block" type="submit" value="Comment">
                </div>
            </form><hr>
            <button class="btn-primary EditDeleteButton" onclick="commentFunction({{$post->id}})">Comments</button><br><br>
            
            <div id="commentDIV{{$post->id}}">
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
                        <form class="formgroup" enctype="multipart/form-data" method="POST" action="http://localhost/football/public/StoreReply"> 
                            {{ @csrf_field() }}
                            <textarea style="border-radius: 25px; padding: 0px 100px;" placeholder="Write Your Reply"  name="reply" rows="2" required></textarea><br>
                            <input style="font-weight: bold; width: 350px; border-radius: 30px;margin-left: 15px;" class="btn btn-success" type="submit" value="Reply">
                            <input type="hidden" name="comment_id" value="{{$comment->id}}">
                        </form><br>
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
            </div>
            <hr><br><hr>   
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