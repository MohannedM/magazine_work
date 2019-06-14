@extends('layouts.admin')

@section('content')
 

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header clearfix">
              <div class="float-right">
                <h4>المقلات الاحدث</h4>
              </div>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>العنوان</th>
                  <th>القسم</th>
                  <th>التاريخ</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Post One</td>
                  <td>Web Development</td>
                  <td>May 10 2018</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Post Two</td>
                  <td>Tech Gadgets</td>
                  <td>May 11 2018</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Post Three</td>
                  <td>Web Development</td>
                  <td>May 13 2018</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Post Four</td>
                  <td>Business</td>
                  <td>May 15 2018</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Post Five</td>
                  <td>Web Development</td>
                  <td>May 17 2018</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Post Six</td>
                  <td>Health & Wellness</td>
                  <td>May 20 2018</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>عدد المجلات</h3>
              <h5>
                <i class="fas fa-pencil-alt"></i> {{$channels->count()}}
              </h4>
              <a href="posts.html" class="btn btn-outline-light btn-sm">عرض</a>
            </div>
          </div>

          <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>عدد الاصدرات</h3>
              <h5>
                <i class="fas fa-folder"></i> {{$magazines->count()}}
              </h4>
              <a href="categories.html" class="btn btn-outline-light btn-sm">عرض</a>
            </div>
          </div>

          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>عدد الكتاب</h3>
              <h5>
                <i class="fas fa-users"></i> {{$users->count()}}
              </h4>
              <a href="users.html" class="btn btn-outline-light btn-sm">عرض</a>
            </div>
          </div>

          <div class="card text-center bg-info text-white mb-3">
            <div class="card-body">
              <h3>عدد المقلات</h3>
              <h5>
                <i class="fas fa-users"></i> {{$users->count()}}
              </h4>
              <a href="users.html" class="btn btn-outline-light btn-sm">عرض</a>
            </div>
          </div>

            <div class="card text-center bg-danger text-white mb-3">
              <div class="card-body">
                <h3>عدد التعليقات</h3>
                <h5>
                  <i class="fas fa-users"></i> {{$users->count()}}
                </h4>
                <a href="users.html" class="btn btn-outline-light btn-sm">عرض</a>
              </div>
            </div>

            
            <div class="card text-center bg-secondary text-white mb-3">
              <div class="card-body">
                <h3>عدد الردود</h3>
                <h5>
                  <i class="fas fa-users"></i> {{$users->count()}}
                </h4>
                <a href="users.html" class="btn btn-outline-light btn-sm">عرض</a>
              </div>
            </div>


        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">
            Copyright &copy;
            <span id="year"></span>
            Blogen
          </p>
        </div>
      </div>
    </div>
  </footer>


  <!-- MODALS -->

  <!-- ADD POST MODAL -->
  <div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Add Post</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="category">Category</label>
              <select class="form-control">
                <option value="">Web Development</option>
                <option value="">Tech Gadgets</option>
                <option value="">Business</option>
                <option value="">Health & Wellness</option>
              </select>
            </div>
            <div class="form-group">
              <label for="image">Upload Image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="image">
                <label for="image" class="custom-file-label">Choose File</label>
              </div>
              <small class="form-text text-muted">Max Size 3mb</small>
            </div>
            <div class="form-group">
              <label for="body">Body</label>
              <textarea name="editor1" class="form-control"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ADD CATEGORY MODAL -->
  <div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Add Category</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ADD USER MODAL -->
  <div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title">Add User</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="password2">Confirm Password</label>
              <input type="password" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-warning" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>



@endsection
