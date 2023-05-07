$(document).ready(function() {
    $.ajax({
        url: '{{ route("post.add-view", ["id" => $post->id]) }}',
        type: 'GET',
        success: function(response) {
            $('#post-views').text(response.views);
        }
    });
});