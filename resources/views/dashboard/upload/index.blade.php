<table>
	<thead>
		<th>Device</th>
		<th>Location</th>
		<th>Image</th>
		<th>Time</th>
	</thead>
	<tbody>
		@forelse($uploads as $upload)
		<tr>
			<td>{{ $upload->firebase_id }}</td>
			<td>{{ $upload->latitude }}, {{ $upload->longitude }}</td>
			<td><img src = "{{ Storage::url($upload->image_path) }}" style="width: 100px;height: 100px;" /></td>
			<td>{{ $upload->created_at }}</td>
		</tr>
		@empty
		@endforelse
	</tbody>
</table>