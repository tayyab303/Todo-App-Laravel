<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <style>
      .complete {
        text-decoration: line-through;
      }
    </style>
  </head>
  <body>
      <div class="d-flex align-items-center justify-content-center flex-column w-100 mt-5">
          <h3>Todo App</h3>
          @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
          @endif
          @if (count($errors) > 0)
            <div class = "alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          <form action="/todo" method="post">
              <div class="d-flex align-items-center mb-3">
                  <div class="form-group mr-3 mb-0">
                      @csrf
                      <input
                        name="task"
                        type="text"
                        class="form-control"
                        id="formGroupExampleInput"
                        placeholder="Enter a task here"
                        />
                   </div>
                   <button type="submit" class="btn btn-primary">Task Todo</button>
              </div>
          </form>
          <div class="table-wrapper">
              <table class="table table-hover table-bordered">
                  <thead>
                      <tr>
                          <th>No.</th>
                          <th>Todo item</th>
                          <th>status</th>
                          <th>Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr class="table-light">
                          <td>1</td>
                          <td class="complete">Go to school @ 12 pm</td>
                          <td>In progress</td>
                          <td>
                              <button class="btn btn-danger">Delete</button>
                              <button class="btn btn-success">Finished</button>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </body>
</html>
