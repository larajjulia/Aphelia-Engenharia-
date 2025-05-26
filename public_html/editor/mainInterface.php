<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Nova Postagem</title>

    <link rel="stylesheet" href="../src/styles/styles.css">
    <link rel="stylesheet" href="../serviços/ppe.html">
    <link rel="stylesheet" href="../serviços/ppema.html">
    <link rel="stylesheet" href="../serviços/sfo.html">
    <link rel="stylesheet" href="../serviços/lpe.html">
    <link rel="stylesheet" href="../serviços/pe.html">
    <link rel="stylesheet" href="../serviços/ce.html">
    <link rel="stylesheet" href="../src/styles/editor.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

  <h1>Nova Postagem</h1>
  
  <form id="postForm" name="postar" method="POST" target="_self">
    <label for="title">Título</label>
    <input type="text" id="title" name="title" required>

    <label for="tags">Tags (separadas por vírgula)</label>
    <input type="text" id="tags" name="tags">

    <label for="coverImage">Imagem de Capa</label>
    <input type="file" id="coverImage" name="coverImage" accept="image/*">

    <label for="illustrativeImage">Imagem Ilustrativa</label>
    <input type="file" id="illustrativeImage" name="illustrativeImage" accept="image/*">

    <label for="content">Texto da Postagem</label>
    <textarea id="content" name="content" rows="10" required></textarea>

    <button type="submit">Publicar</button>
  </form>

</body>
</html>