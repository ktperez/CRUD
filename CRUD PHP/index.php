<?php
include 'db.php';
include 'templates/header.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<h1 class="mb-4 text-center">Gestión de Usuarios</h1>
<a href="add_user.php" class="btn btn-primary mb-4">Agregar Usuario</a>
<table class="table table-hover table-bordered">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
                <a href="update_user.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                <a href="delete_user.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php
include 'templates/footer.php';
$conn->close();
?>
