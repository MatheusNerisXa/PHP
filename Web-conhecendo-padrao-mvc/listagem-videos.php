<?php

$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");
$videosList = $pdo->query('SELECT * FROM videos;')->fetchAll(PDO::FETCH_ASSOC);
?>

<?php require_once 'inicio-html.php'; ?>
<ul class="videos__container" alt="videos alura">
        <?php foreach ($videosList as $video): ?>
                <?php if(str_starts_with($video['url'], 'http')): ?>
        <li class="videos__item">
            <iframe width="100%" height="72%" src="<?php echo $video['url'] ?>"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="descricao-video">
                <h3><?php echo $video['title'] ?></h3>
            </div><br>
                <div class="acoes-video">
                    <a href="/editar-video?id=<?=$video['id']?>">Editar</a>
                    <a href="/remover-video?id=<?=$video['id'];?>">Excluir</a>
                </div>
            </div>
        </li>
        <?php endif; ?>
        <?php endforeach; ?>
    </ul>
<?php require_once 'fim-html.php'; ?>