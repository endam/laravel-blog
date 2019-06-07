<tr>
  <td>{{ $post->title }}</td>
  <td><small v-pre class="text-muted">{{ link_to_route('users.show', $post->author->fullname, $post->author) }}</small></td>
  <td>{{ humanize_date($post->posted_at) }}</td>
  <td>{{ $post->comments_count }}</td>
  <td>{{ $post->likes_count }}</td>
  <td>{{ link_to_route('posts.show', 'detail', $post) }}</td>
</tr>
