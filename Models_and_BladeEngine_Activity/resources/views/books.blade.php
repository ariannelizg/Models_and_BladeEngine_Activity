@include('partials.header')
<style>
    table{
        table-layout: auto;
        border: 3px solid;
        --tw-text-opacity: 1; color: black;
        font-family: ui-serif, Georgia, Cambria, "Times New Roman", Times, serif;
    }
    tr{
        border: 3px solid;
    }
    th{
        border: 3px solid;
        padding: 5px;
        text-align: center;
    }
    td{
        border: 3px solid;
        padding: 5px;
        text-align: center;
    }
</style>
<div class="container mx-auto" >
    <table class="table">
        <thead>
            <tr class="titles">
                <th>ID</th>
                <th>ISBN</th>
                <th>TITLE</th>
                <th>AUTHOR</th>
                <th>DESCRIPTION</th>
                <th>DATE PUBLISHED</th>
            </tr>
        </thead>
        <tbody class="contents">
            @foreach($books as $book)
                <tr class="tablecontent">
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
@include('partials.footer')
