<table class="table">
    <thead>
        <tr>
            <th scope="col">title</th>
            <th scope="col">author</th>
            <th scope="col">posted_at</th>
            <th scope="col">comments_count</th>
            <th scope="col">likes_count</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @each('posts/_show', $posts, 'post', 'posts/_empty')
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>
