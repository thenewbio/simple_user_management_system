<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                       <center> <h2 class="text-4xl font-bold mb-4"> LIST OF USERS</h2>
                    </div>
                    <div class="card-body">
                   <center> <a href="/CreateUser" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Create User</a></center>

                    <br/>
                        <br/>
                        </center>   
                        <div class="table-responsive">
                            <table class="table" style="width:100%">
                                <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>PHONE NUMBER</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>

                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->Name }}</td>
                                        <td>{{ $user->Email }}</td>
                                        <td>{{ $user->Phone }}</td>
                                        <td>
                                        
                                            <a href="{{ url($user->id . '/edit') }}" title="Edit Student"><button class="ml-4 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/' . $user->id) }}" style="display:inline">
                                            {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type = "submit" class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>