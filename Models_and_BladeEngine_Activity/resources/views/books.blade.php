
<div class="container" >
    <table class="table-auto">
        <thead>
            <tr scope="col" class="">
                <th>ID</th>
                <th>ISBN</th>
                <th>TITLE</th>
                <th>AUTHOR</th>
                <th> DESCRIPTION</th>
                <th>DATE PUBLISHED</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-pink-200">
            @foreach($books as $book)
                <tr class="px-6 py-4 whitespace-nowrap">
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
