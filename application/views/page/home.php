  <!-- Main Content -->
    <div class="container">
        <div class="row">   

<table class="table table-hover">
  <thead>
    <tr>
      <th>Username</th>
      <th>Password</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($user as $key => $value): ?>
      <tr>
        <td><?=$value->username?></td>
        <td><?=$value->password?></td>
        <td>Aksi</td>
      </tr>      
    <?php endforeach ?>
  </tbody>
</table>
<!-- ini table profil.php -->
<table class="table table-hover">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
     {profil}
       <tr>
        <td>{nama}</td>
        <td>{alamat}</td>
        <td>Aksi</td>
      </tr>    
     {/profil}  
  </tbody>
</table>

    </div>
  </div>
 <!--<?php print_r($user)?>-->
  <!-- Main Content -->
        <!-- <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Man must explore, and this is exploration at its greatest
              </h2>
              <h3 class="post-subtitle">
                Problems look mighty small from 150 miles up
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 24, 2017</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
              </h2>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 18, 2017</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Science has not yet mastered prophecy
              </h2>
              <h3 class="post-subtitle">
                We predict too much for the next year and yet far too little for the next ten.
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on August 24, 2017</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Failure is not an option
              </h2>
              <h3 class="post-subtitle">
                Many say exploration is part of our destiny, but it’s actually our duty to future generations.
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on July 8, 2017</p>
          </div>
          <hr>
          <!-- Pager -->
         <!-- <div class="clearfix">
            <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
          </div>
    </div>
    <hr>-->