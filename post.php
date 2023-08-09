<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])){

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){

      if($post['id'] == $postId){
        $currentPost = $post; 
      }        
    }  
  }

?>
  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?=$currentPost['title'] ?></h1>
      <p id="post-description"><?=$currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?=$BASE_URL?>/img/<?=$currentPost['img'] ?>" alt="<?=$currentPost['title'] ?>">
      </div>
      <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore reprehenderit deleniti alias, accusantium vero officiis deserunt pariatur neque harum provident. Tenetur cumque non commodi veniam facilis quisquam saepe, ab eaque!
      Cum optio dolorem quod ipsum ad ratione eius. Magnam explicabo pariatur praesentium molestias unde facere soluta. Maiores eaque quas modi, vel, assumenda nemo placeat illo nesciunt repudiandae aliquid sunt inventore!
      Dolores tenetur quis nisi vel laudantium dignissimos ipsa? Quaerat nesciunt quasi ex quo dolorem debitis praesentium consequuntur possimus placeat in, pariatur at porro sequi nam maxime natus vel laborum minus.
      Illum non consequuntur quis voluptatem recusandae fugiat facilis maxime ipsa hic nostrum rerum voluptas libero, odio placeat mollitia, similique reiciendis. Voluptas ullam ea earum repellendus voluptatem molestiae nesciunt harum delectus!
      Nostrum, molestiae impedit in odio, minus eius, veniam deserunt nihil adipisci facilis ad dolorem. Aut tempore consectetur libero, temporibus nam eaque praesentium repellendus dolorum ut natus? Ratione, debitis! Expedita, assumenda?</p>    
      <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore reprehenderit deleniti alias, accusantium vero officiis deserunt pariatur neque harum provident. Tenetur cumque non commodi veniam facilis quisquam saepe, ab eaque!
      Cum optio dolorem quod ipsum ad ratione eius. Magnam explicabo pariatur praesentium molestias unde facere soluta. Maiores eaque quas modi, vel, assumenda nemo placeat illo nesciunt repudiandae aliquid sunt inventore!
      Dolores tenetur quis nisi vel laudantium dignissimos ipsa? Quaerat nesciunt quasi ex quo dolorem debitis praesentium consequuntur possimus placeat in, pariatur at porro sequi nam maxime natus vel laborum minus.
      Illum non consequuntur quis voluptatem recusandae fugiat facilis maxime ipsa hic nostrum rerum voluptas libero, odio placeat mollitia, similique reiciendis. Voluptas ullam ea earum repellendus voluptatem molestiae nesciunt harum delectus!
      Nostrum, molestiae impedit in odio, minus eius, veniam deserunt nihil adipisci facilis ad dolorem. Aut tempore consectetur libero, temporibus nam eaque praesentium repellendus dolorum ut natus? Ratione, debitis! Expedita, assumenda?</p>
    </div>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tags-list">
      <?php foreach($currentPost['tags'] as $tag): ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>  
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach($categories as $category): ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
  </main>
  
<?php
  include_once("templates/footer.php")
?>