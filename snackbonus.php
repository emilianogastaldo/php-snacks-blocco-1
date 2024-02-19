<?php
/*
# Bonus
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un nuovo paragrafo.
Buon lavoro a tutti! 
*/ 

// Creo il paragrafo:
$lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam delectus repellat nihil sed possimus nisi doloribus iure dicta. Ex, sed qui! Et delectus in, odit non aliquam harum quos rerum.
Architecto dolorum doloribus consequuntur labore quia veniam, quam recusandae, molestias deserunt numquam porro tenetur similique, ipsum soluta aspernatur. Blanditiis, numquam quo? Voluptatibus placeat laudantium, eveniet tempora aliquid dolore officiis reprehenderit.
Dolore possimus provident rerum, vel perspiciatis dolorum deserunt quidem ipsum impedit sit nesciunt illum tenetur autem vero, repellat voluptatem culpa labore odio libero inventore dolores. Perspiciatis quaerat soluta dolores recusandae.
Odio, ad necessitatibus sed aspernatur eaque fuga autem velit, veniam alias eos nam eum sit aliquid soluta eius itaque. Natus soluta fugit aliquid repudiandae! Omnis accusantium minima laboriosam eos expedita?
Officia cum nam explicabo labore dolorem quisquam nisi rerum. Ducimus, qui consequuntur quo eum est ullam excepturi accusamus quasi. Accusamus quas deleniti error nisi totam in quos rerum amet dicta.
Dolore est ipsa et a dolorem accusantium! Dolore in saepe et quidem temporibus nulla molestiae vero qui? Iste, incidunt enim laudantium eligendi impedit praesentium possimus repellat aliquam quam ea magnam!
Consequatur, corporis eligendi vitae similique voluptatum nostrum ullam aliquid asperiores quis aspernatur dolorem ipsum? Corporis ipsum tempora, id temporibus nesciunt quia vero officia dolorem soluta quis maxime repellendus eligendi nobis?
Suscipit tenetur vel culpa, consequatur, atque commodi quo adipisci, facilis ullam fugit fugiat vero possimus accusamus rem. Iste nam, explicabo expedita eum dolorum, nihil iure, illum animi deleniti distinctio perspiciatis.
Dolores non quos sapiente incidunt, ipsum, delectus impedit excepturi obcaecati esse officia, sequi magnam beatae. Minima quibusdam, reiciendis tempore dolor qui consectetur omnis enim est dolores culpa voluptatem corporis nulla?
Cumque necessitatibus obcaecati voluptatum quia, asperiores magnam, voluptatibus fugiat sequi aut dolorum laudantium repellendus totam eaque officia nulla cum, consequatur vero ab. Quos laboriosam repellendus omnis quam, quibusdam quas consectetur?';

$lorem_exploded = explode('.' , $lorem);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h2>SNACK BONUS</h2>
        <div>
            <?php foreach($lorem_exploded as $paragraph) :?>
                <p><?= $paragraph ?></p>
            <?php endforeach?>
        </div>
        <a href="http://localhost/php-snacks-blocco-1/">Torna indietro</a>
    </section>
</body>
</html>